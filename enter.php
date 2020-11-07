<!doctype html>  
<html>  
<head>  
    <meta charset="utf-8">  
    <title>Processing系统处理中...</title>  
</head>  
<body>  
    <?php   
        session_start();//��¼ϵͳ����һ��session����  
        $username=$_REQUEST["mailnum"];//��ȡhtml�е��û�����ͨ��post����  
        $password=$_REQUEST["password"];//��ȡhtml�е����루ͨ��post����  
		$behave='login';
  
        $con=mysql_connect("localhost","sixbox","sixboxsixbox");  
        if (!$con) {  
            die('连接失败'.$mysql_error());  
        }  
        mysql_select_db("xdm447914479_db",$con);//use user_info���ݿ⣻  
        $dbmailnum=null;  
        $dbpassword=null;  
        $result=mysql_query("select * from 6boxesuser where username ='{$username}' and isdelete =0 ");//�����Ӧ�û�������Ϣ��isdelete��ʾ�����ݿ��ѱ�ɾ��������  
		 
        while ($row=mysql_fetch_array($result)) {//whileѭ����$result�еĽ���ҳ���  
            $dbmailnum=$row["username"];  
            $dbpassword=$row["password"];  
		
			
			}  
		        
        if (is_null($dbmailnum)) {//�û��������ݿ��в�����ʱ����index.html����  
    ?>  
    <script type="text/javascript">  
        alert("账号不存在或被限制登录！Account banned or not exist.(╥﹏╥)o");  
        window.location.href="../login-1.html";  
    </script>  
    <?php   
        }  
        else {  
            if ($dbpassword!=$password){//����Ӧ���벻��ʱ����index.html����  
    ?>  
    <script type="text/javascript">  
        alert("账号或密码错误，检查一下吧 Wrong password or e-mail");  
        window.location.href="../login-1.html";  
    </script>  
    <?php   
            }  
            else {  
                $_SESSION["username"]=$username;  
				
				
				$ip=$_SERVER['REMOTE_ADDR'];
                $_SESSION["code"]=mt_rand(0, 100000);//welcome.php  
				setcookie("username",$username,time()+60*60*24*30);
				mysql_query("insert into 6boxeslog (username,method,behave,ip) values('{$username}','{$method}','{$behave}','{$ip}')") or die("链接出错".mysql_error()) ;  
    ?>  
    <script type="text/javascript">  
        window.location.href="../vocab.html";  
    </script>  
    <?php   
            }  
        }  
    mysql_close($con);//关闭连接 
    ?>  
</body>  
</html>  