﻿<!doctype html>  
<html>  
<head>  
<meta charset="utf-8">  
    <title>Processing...</title>  
</head>  
<body>  
    <?php   
        session_start();  
		$mailnum=$_REQUEST["mailnum"];
		$phonenum=$_REQUEST["phonenum"];
		$engname=$_REQUEST["engname"];  
		$bornyear=$_REQUEST["bornyear"];  
		$job=$_REQUEST["job"];
		$plan=$_REQUEST["plan"];  
        $password=$_REQUEST["password"];  
		$method="APP";
	
		$ip=$_SERVER['REMOTE_ADDR'];

		$behave="Sign up for IIILL";
  
        $con=mysql_connect("localhost","sixbox","sixboxsixbox");  
        mysql_query("set names 'utf8'");

        if (!$con) {  
            die('Fail to connct database'.$mysql_error());  
        }  
        mysql_select_db("xdm447914479_db",$con);  
        $dbmailnum=null;  
        $dbpassword=null;  
        $result=mysql_query("select * from 6boxesuser where mailnum ='{$mailnum}'");  
        while ($row=mysql_fetch_array($result)) {  
            $dbmailnum=$row["mailnum"];  //判定后台是否有重复邮箱
        }  
        if(!is_null($dbmailnum)){  
    ?>  
    <script type="text/javascript">  
        alert("The identification has an account, please try log in directly or find your student number back.");  
        window.location.href="mobile";  
    </script>   
    <?php   
        }  else{
		mysql_query("set names 'utf8'");
        mysql_query("insert into 6boxesuser (job,phonenum,mailnum,plan,englishname,bornyear,password) values('{$job}','{$phonenum}','{$mailnum}','{$plan}','{$engname}','{$bornyear}','{$password}')") or die("Wrong connection".mysql_error()) ;  
        mysql_query("insert into 6boxeslog (word,username,behave,ip) values('{$mailnum}','{$engname}','{$behave}','{$ip}')") or die("Fail to save in the background".mysql_error()) ;  




		$result2=mysql_query("select * from 6boxesuser where mailnum ='{$mailnum}'");  
        while ($row2=mysql_fetch_array($result2)) {  
            $username=$row2["username"];  //判定后台是否有重复邮箱
        }  

	setcookie("username",$username,time()+60*60*24*30);
	setcookie("mailnum",$mailnum,time()+60*60*24*30);

		mysql_close($con);  
	
		
    ?>
    <script type="text/javascript">  
        window.location.href="success.php";  
    </script>  
      <?php
      }
	  ?>
              
          
          
</body>  
</html>  
