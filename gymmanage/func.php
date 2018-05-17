<?php
require_once('C:/wamp64/www/gymmanage/config.php');
date_default_timezone_set("Asia/Kolkata");
#session_start();
$v=array();
class func
{
	public function __construct()
    {

		$conn=new Config();

		$this->db=$conn->connection();
	}
	public function Login($user,$passw)
	{
		$lo=$this->db->query("SELECT * FROM Admin WHERE uname='$user' and pass='$passw'");
		return True;
	}
	public function insert_member($name,$address,$contact,$fitness,$scheme)
	{
		$res1 = $this->db->query("INSERT INTO members(name,address,phoneno) VALUES('$name','$address','$contact');");
		$sql1=$this->db->query("SELECT * FROM members WHERE name='$name'");
		$v=$sql1->fetch_assoc();

		$id=$v['mid'];
		if($scheme=="GOLD")
		{
			$sql2 = $this->db->query("INSERT INTO memdetails(meid,phyfit,enrolldate,expdate,scheme) VALUES ($id,'$fitness',CURDATE(),ADDDATE(CURDATE() , INTERVAL 3 MONTH),'$scheme');");
			return True;
		}
		if($scheme=="SILVER")
		{
			$sql2 = $this->db->query("INSERT INTO memdetails(meid,phyfit,enrolldate,expdate,scheme) VALUES ($id,'$fitness',CURDATE(),ADDDATE(CURDATE() , INTERVAL 1 MONTH),'$scheme');");
			return True;
		}
		if($scheme=="PLATINUM")
		{
			$sql2 = $this->db->query("INSERT INTO memdetails(meid,phyfit,enrolldate,expdate,scheme) VALUES ($id,'$fitness',CURDATE(),ADDDATE(CURDATE() , INTERVAL 1 YEAR),'$scheme');");
			return True;
		}
		if($scheme=="DIAMOND")
		{
			$sql2 = $this->db->query("INSERT INTO memdetails(meid,phyfit,enrolldate,expdate,scheme) VALUES ($id,'$fitness',CURDATE(),ADDDATE(CURDATE() , INTERVAL 6 MONTH),'$scheme');");
			return True;
		}
	
		
	}
	public function insert_equipment($ename,$type,$vendor,$warranty)
	{
		$res2 = $this->db->query("INSERT INTO equipment(ename) VALUES('$ename');");
		$sql3=$this->db->query("SELECT * FROM equipment WHERE ename='$ename'");
		$v1=$sql3->fetch_assoc();
		$id2=$v1['eq_id'];
		$sql4 = $this->db->query("INSERT INTO equidetails(ins_id,type,vendor,datepurchased,warranty) VALUES ($id2,'$type','$vendor',CURDATE(),'$warranty');");
			return TRUE;
	}
	public function remove_member($ename)
	{
		#$res3= $this->db->query("SELECT * FROM members WHERE name='$ename';");
		#$r=$res3->fetch_assoc();
		#$ir=$r['mid'];
		$res4=$this->db->query("DELETE FROM members WHERE name='$ename';");
		#$res5=$this->db->query("DELETE FROM memdetails WHERE meid=$ir;");
		return TRUE;
	}

	public function update_scheme($name,$schemenew)
	{
		
		$sql0=$this->db->query("SELECT * FROM members WHERE name='$name'");
		$vr=$sql0->fetch_assoc();

		$idr=$vr['mid'];
		$ss=$this->db->query("SELECT * FROM memdetails WHERE meid=$idr");
		$s=$ss->fetch_assoc();
		$old=$s['scheme'];

		if($schemenew=="GOLD")
		{
		$sql5 = $this->db->query("UPDATE memdetails SET scheme='$schemenew',expdate=ADDDATE(CURDATE() , INTERVAL 3 MONTH) WHERE meid=$idr;");
			return $old;
		}
		if($schemenew=="SILVER")
		{
			$sql5 = $this->db->query("UPDATE memdetails SET scheme='$schemenew',expdate=ADDDATE(CURDATE() , INTERVAL 1 MONTH) WHERE meid=$idr;");
			return $old;
		}
		if($schemenew=="PLATINUM")
		{
			$sql5 = $this->db->query("UPDATE memdetails SET scheme='$schemenew',expdate=ADDDATE(CURDATE() , INTERVAL 1 YEAR) WHERE meid=$idr;");
			return $old;
		}
		if($schemenew=="DIAMOND")
		{
			$sql5 = $this->db->query("UPDATE memdetails SET scheme='$schemenew',expdate=ADDDATE(CURDATE() , INTERVAL 6 MONTH) WHERE meid=$idr;");
			return $old;
		}
	
		
	}
	/*public function Emopl()
	{
		$e=$this->db->query("SELECT * from Branch;");
		$a = array();
		while ($f=$e->fetch_assoc())
		{
			array_push($a, $f);
		}
		foreach($a as $id){
			echo $id['brid'];
			echo ":";
			echo "<br>";
			$w=$id['brid'];
			$f1=$this->db->query("SELECT * from Branchep where brpid=$w;");
			$a1=array();
			while ($fn=$f1->fetch_assoc())
			{
			array_push($a1, $fn);
			}
			foreach ($a1 as $key) {
				# code...
				$w1=$key['epid'];
				$f2=$this->db->query("SELECT * from employee where empid=$w1;");
				$h=$f2->fetch_assoc();
				echo $h['name'];
				echo "<br>";
			}
			echo "<br><br>";

		}
	}*/
	public function Emopl()
	{
		$e=$this->db->query("SELECT distinct Branchep.brpid,employee.name from employee,Branchep where employee.empid=Branchep.epid and empid in (SELECT epid from Branchep,Branch where brpid in (SELECT distinct brid from Branch)) ;");
		$a=array();
		//$data=$e->fetch_assoc();
		//echo $data['name'];
		while($data=$e->fetch_assoc())
		{
			array_push($a, $data);
		}
		return $a;
		/*$i=0;
		foreach ($a as $key) {
			# code...
			if($i==0)
			{
				echo $key['brpid'];
				echo ":";
				echo "<br>";
				$u1=$key['brpid'];
			}
			if($u1!=$key['brpid'])
			{
				echo $key['brpid'];
				echo ":";
				echo "<br>";
				$u1=$key['brpid'];
			}
			
			echo $key['name'];
			echo "<br>";
			$i=$i+1;
		}*/

	}
	public function empdata()
	{
		$u2=$this->db->query("SELECT * from employee INNER JOIN works ON employee.empid=works.emplid;");
		$z = array();
		while ($fu=$u2->fetch_assoc())
		{
			array_push($z, $fu);
		}
		return $z;
		
	}
	public function equidata()
	{
		$u3=$this->db->query("SELECT * from equipment LEFT JOIN equidetails ON equipment.eq_id=equidetails.ins_id;");
		$z1 = array();
		while ($fa=$u3->fetch_assoc())
		{
			array_push($z1, $fa);
		}
		
		return $z1;
	}
	public function membdata()
	{
		$u4=$this->db->query("SELECT * from members INNER JOIN memdetails ON members.mid=memdetails.meid;");
		$zy = array();
		while ($fw=$u4->fetch_assoc())
		{
			array_push($zy, $fw);
		}
		return $zy;
	}
	public function SCHL()
	{
		$ew=$this->db->query("SELECT distinct Branchequip.brqid,Branch.brid,equipment.ename from equipment,Branch,Branchequip where equipment.eq_id=Branchequip.eqid and Branch.brid=Branchequip.brqid and eqid in (SELECT eqid from Branchequip where brqid in (SELECT distinct brid from Branch)) ;");
		$aw=array();
		//$data=$e->fetch_assoc();
		//echo $data['name'];
		while($data=$ew->fetch_assoc())
		{
			array_push($aw, $data);
		}
		return $aw;
		

	}
	public function schemeque($scheme)
	{
		$q=$this->db->query("SELECT members.name from members where mid in (SELECT distinct meid from memdetails where scheme='$scheme') ;");
		$at=array();
		while($da=$q->fetch_assoc())
		{
			array_push($at, $da);
		}
		return $at;
		/*foreach ($at as $key) {
			# code...
			
			echo $key['name'];
			echo "<br>";
			
		}*/
	}
	public function insert_employee($name,$age)
	{
		$res1 = $this->db->query("INSERT INTO employee(name,age) VALUES('$name','$age');");
		return True;
	}
	
}
$gym = new func();
?>