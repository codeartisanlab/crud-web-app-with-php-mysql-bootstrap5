<?php
	$conn=mysqli_connect('localhost','root','','php_crud_db');


	if(!$conn){
		echo mysqli_connect_error();
	}


	// Testing Function

	function _p($data){
		echo '<pre>';
		print_r($data);
		echo '</pre>';
	}
	

	//  Add Data To Database

	function add_data($conn,$data){
		$name=$data['name'];
		$class=$data['class'];
		$rollno=$data['rollno'];
		$phone=$data['phone'];
		$email=$data['email'];

		$query="INSERT INTO students(name,class,rollno,phone,email) VALUES('$name','$class','$rollno','$phone','$email')";

		$result=mysqli_query($conn,$query);
		if(mysqli_affected_rows($conn)>0){
			$msg='Data has been inserted';
		}else{
			$msg=mysqli_error($conn);
		}return $msg;
	}

	function fetch_all($conn){

		$res=array();
		$query="SELECT * FROM students ORDER BY id ASC";
		$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result)>0){
			$res['bool']=true;
			$res['alldata']=mysqli_fetch_all($result);

		}else{
			$res['bool']=false;
		}return $res;
	}


	function fetch_single($conn,$id){

		$res=array();
		$query="SELECT * FROM students WHERE id='$id' ";
		$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result)>0){
			$res['bool']=true;
			$res['alldata']=mysqli_fetch_assoc($result);

		}else{
			$res['bool']=false;
		}return $res;
	}


	function edit_data($conn,$data,$id){
		$name=$data['name'];
		$class=$data['class'];
		$rollno=$data['rollno'];
		$phone=$data['phone'];
		$email=$data['email'];

		$query="UPDATE students SET name='$name',class='$class',rollno='$rollno',phone='$phone',email='$email' WHERE id='$id' ";

		$result=mysqli_query($conn,$query);
		if(mysqli_affected_rows($conn)>0){
			$msg='Data has been Updated';
		}else{
			$msg=mysqli_error($conn);
		}return $msg;
	}


	function delete_data($conn,$id){
		$query="DELETE FROM students WHERE id='$id'";
		$result=mysqli_query($conn,$query);
		if(mysqli_affected_rows($conn)>0){
			$msg='Data Has Been Deleted';

		}else{
			mysqli_error($conn);
		}return $msg;
	}

	
?>