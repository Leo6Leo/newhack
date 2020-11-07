 <meta charset="UTF-8" />
  <?php   
ini_set("user_agent","Mozilla/4.0 (compatible; MSIE 5.00; Windows 98)");
header("Content-type:text/html;charset=utf-8");
error_reporting(0);
mysql_query('SET NAMES UTF8');
 session_start();  
$doc = new DOMDocument;

// We don't want to bother with white spaces
$doc->preserveWhiteSpace = false;

// Most HTML Developers are chimps and produce invalid markup...
$doc->strictErrorChecking = false;
$doc->recover = true;
$wordname = $_REQUEST["wordname"];
$username = $_COOKIE["username"];
$behave ='Find your Word';
$ip=$_SERVER['REMOTE_ADDR'];
$method='Webpage Version';

$doc->loadHTMLFile('http://www.youdao.com/w/eng/'.$wordname );

$xpath = new DOMXPath($doc);

$query = "//*[@id='phrsListTab']/div/ul/li";

$entries = $xpath->query($query);
$haha = $entries->item(0)->textContent;
if($haha == "" || $wordname ==""){
	$haha = "The word doesn't exist, please check the word and come back later.";//输入的单词不存在，请检查后重试吧
	$_SESSION["haha"]=$haha;
	$_SESSION["wordname"]=$wordname;
	?>
	 <script language="javascript" type="text/javascript">
window.location.href="resultvocab.php";
</script>

	<?php
	}else{



	

		 $con=mysql_connect("localhost","sixbox","sixboxsixbox");  
        mysql_query("set names 'utf8'");

        if (!$con) {  
            die('Fail to connect the database'.$mysql_error());  //数据库连接失败
        }  
        mysql_select_db("xdm447914479_db",$con);  
			mysql_query("set names 'utf8'");

	$result=mysql_query("select * from 6boxesvocab where word ='{$wordname}' ");  
        while ($row=mysql_fetch_array($result)) {  
            $dbwordname=$row["word"];  //判定后台是否有重复邮箱

        }  
		if(isset($dbwordname)){
		mysql_query("update 6boxesvocab set checking=checking+1 where word ='{$wordname}'");
		}else{
mysql_query("insert into 6boxesvocab(word,def) values('{$wordname}','{$haha}')") or die("Fail to save in the background1".mysql_error()) ; //后台记录存入失败1

		}//判定大词库①



		$result2=mysql_query("select * from 6boxespersonal where word ='{$wordname}'and username ='{$username}' ");  
        while ($row2=mysql_fetch_array($result2)) {  
            $dbwordname2=$row2["word"];  //判定后台是否有重复邮箱

        }  
		if(isset($dbwordname2)){
		mysql_query("update 6boxespersonal set checking=checking+1 where word ='{$wordname}' and username='{$username}'");
		}else{
		mysql_query("insert into 6boxespersonal(word,def,username) values('{$wordname}','{$haha}','{$username}')") or die("Fail to save in the background2".mysql_error()) ; //后台记录存入失败2
		

		}

		mysql_query("update 6boxesuser set checking=checking+1 where username='{$username}'");

			  mysql_query("insert into 6boxeslog (word,def,username,behave,ip,method) values('{$wordname}','{$haha}','{$username}','{$behave}','{$ip}','{$method}')") or die("后台记录存入失败3".mysql_error()) ; 

		
		
	$_SESSION["haha"]=$haha;
	$_SESSION["wordname"]=$wordname;


	
	?>

 <script language="javascript" type="text/javascript">
window.location.href="resultvocab.php";
</script>

<?php
}
?>

