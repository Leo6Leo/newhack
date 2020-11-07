<!doctype html>  
<html>  
<head>  
    <meta charset="utf-8">  
    <title>Processing...</title>  
</head>  
<body>  
    <?php   
        session_start();

		if (isset ( $_COOKIE ["username"] )) {//判断code存不存在，如果不存在，说明异常登录
		?>
		<script type="text/javascript">  

    window.location.href="vocab.html";  
</script>  
<?php
}else{
?>
<script type="text/javascript">   
    window.location.href="mobile";  
</script>  
<?php

}
?>

  
       
