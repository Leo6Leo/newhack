<!doctype html>  
<html>  
<head>  
<meta charset="GBK">  
</head>  
<body>  
<?php  
session_start ();//将session销毁时调用destroy  
                $_SESSION["mailnum"]='';  
				$_SESSION["englishname"]='';  
				 $_SESSION["grade"]='';  
				 $_SESSION["classnum"]='';  
				  $_SESSION["year"]='';  
				 $_SESSION["id"]='';  
                $_SESSION["code"]='abc';
				unset($_SESSION['code']);
				unset($_SESSION['code1']);
				unset($_SESSION['xuexi']);
				setcookie("username","",time()-60*60*24*30);
				
?>  
<script type="text/javascript">  
    window.location.href="index.php";  
</script>  
</body>  
</html>  