<!doctype html>  
<html>  
<head>  
    <meta charset="utf-8">  
    <title>Processing系统处理中...</title>  
</head>  
<body>  
    <?php   
        session_start();//start session
        $username=$_REQUEST["mailnum"];// store the username
        $password=$_REQUEST["password"];//get the password
		$behave='login';
  
        $con=mysql_connect("localhost","sixbox","sixboxsixbox");  
        if (!$con) {  
            die('connection failed'.$mysql_error());  
        }  
        mysql_select_db("xdm447914479_db",$con);//select the db
        $dbmailnum=null;  
        $dbpassword=null;  
        $result=mysql_query("select * from 6boxesuser where username ='{$username}' and isdelete =0 ");//determine use is valid or not
		 
        while ($row=mysql_fetch_array($result)) {//search in the database
            $dbmailnum=$row["username"];  
            $dbpassword=$row["password"];  
		
			
			}  
		        
        if (is_null($dbmailnum)) {//If mail does not exsit, then return the following info
    ?>  
    <script type="text/javascript">  
        alert("Account banned or not exist.(╥﹏╥)o");  
        window.location.href="../login-1.html";  
    </script>  
    <?php   
        }  
        else {  
            if ($dbpassword!=$password){//If password wrong, return the following info
    ?>  
    <script type="text/javascript">  
        alert("Wrong password or e-mail.");  
        window.location.href="../login-1.html";  
    </script>  
    <?php   
            }  
            else {  
                $_SESSION["username"]=$username;  
				
				
				$ip=$_SERVER['REMOTE_ADDR'];
                $_SESSION["code"]=mt_rand(0, 100000);//welcome.php  
				setcookie("username",$username,time()+60*60*24*30);
				mysql_query("insert into 6boxeslog (username,method,behave,ip) values('{$username}','{$method}','{$behave}','{$ip}')") or die("Connection failed".mysql_error()) ;  
    ?>  
    <script type="text/javascript">  
        window.location.href="../vocab.html";  
    </script>  
    <?php   
            }  
        }  
    mysql_close($con);//connection closed
    ?>  
</body>  
</html>  
