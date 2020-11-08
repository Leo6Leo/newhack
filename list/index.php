<!DOCTYPE html>
<html>
	<head>
	<title>Newhack</title>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/twitter-bootstrap/3.4.1/css/bootstrap.min.css"><!--包含图标库-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel="stylesheet" href="bootstrap/css/bootstrap-table.css" />	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="bootstrap/js/bootstrap-table.js"></script>
	<script src="bootstrap/js/bootstrap-table-export.js"></script>
	<script src="bootstrap/js/jquery.base64.js"></script>
	<script src="bootstrap/js/tableExport.js"></script>
		
</head>
<body>
<?php
if (!isset ( $_COOKIE ["username"] )) {//判断code存不存在，如果不存在，说明异常登录
	 
	?>
	<script>
	 window.location.href="../index.php";  
	</script>
	<?php
	}
	?>

    <div id="reportTableDiv" class="span10" style="width:100%; text-align:center">
      
	  <div class="alert alert-success"><h1>My vocab list</h1>
        <h2>My Word List</h2></div>
        <div class="alert alert-warning"><h4>You could choose export .xlsx file，and import it into Quizlet.com, help you learn effectively.</h4>
		 <h4>Please use PC log into to http://cloudsking.com/vocabularytest to export vocabulary</h4>
		 <a href="../vocab.html">Go Back to Navibar</a><br>
        </div>

    </div>
	

	<table class="table table-striped" id="tb_departments">
        
	<?php   
  session_start();//Session start
        $username=$_COOKIE["username"];//get the user name 

		$ip=$_SERVER['REMOTE_ADDR'];
		$behave='list';
         $con=mysql_connect("localhost","sixbox","sixboxsixbox"); //sql connect
		    mysql_query("set names 'utf8'");
        if (!$con) {  
            die('connection faied'.$mysql_error());  
        }  
        mysql_select_db("xdm447914479_db",$con);//链接数据库 
        $result=mysql_query("select * from 6boxespersonal where username='{$username}'");//遍历词语表格
		mysql_query("insert into 6boxeslog (username,behave,ip) values('{$username}','{$behave}','{$ip}')") or die("Connection failed".mysql_error()) ;  

		 
        while ($row=mysql_fetch_array($result)) {//Leeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeo 
            $wordname=$row["word"];  
			$def=$row["def"]; 
			$checking=$row["checking"];
			
			echo "<tr>";
           
            echo "<td>" . $wordname . "</td>";
			echo "<td>" . $def . "</td>";
            echo "<td>" . $checking . "</td>";
            echo "</tr>";
        }  
		       

    mysql_close($con);//close connection
    ?>  
	<script>
	$(function () {

    //1.初始化Table
    var oTable = new TableInit();
    oTable.Init();

    //2.初始化Button的点击事件
    var oButtonInit = new ButtonInit();
    oButtonInit.Init();

});


var TableInit = function () {
    var oTableInit = new Object();
    //初始化Table
    oTableInit.Init = function () {
        $('#tb_departments').bootstrapTable({
            method: 'get',
				cache: false,
				height: 400,
				striped: true,
				pagination: true,
				pageSize: all,
				pageNumber:1,
				pageList: [10, 20, 50, 100, 200, 500,'all'],
				search: true,
				showColumns: true,
				showRefresh: true,
				showExport: true,  
				exportTypes: [ 'excel'],
				clickToSelect: true,

            columns: [{
               
                field: 'wordname',
                title: 'Word',
				sortable:'true'
            }, {
                field: 'def',
                title: 'Chinese Meanning',
				sortable:'true'
            }, {
         

                field: 'checking',
                title: 'Times Searched',
				sortable:'true'
            }, ]
        });
    };
	　
    //得到查询的参数
    oTableInit.queryParams = function (params) {
        var temp = {   //这里的键的名字和控制器的变量名必须一直，这边改动，控制器也需要改成一样的
            limit: params.limit,   //页面大小
            offset: params.offset,  //页码
            departmentname: $("#txt_search_departmentname").val(),
            statu: $("#txt_search_statu").val()

        };
        return temp;
    };
    return oTableInit;
};

$("#tb_departments").bootstrapTable('resetView');
var ButtonInit = function () {
    var oInit = new Object();
    var postdata = {};

    oInit.Init = function () {
        //初始化页面上面的按钮事件
    };

    return oInit;
};
</script>
    <h5 style="text-align:center">2019-2020© Leo</h5>
</body>

</html>
