
<?php
 session_start();


 $mailnum=$_COOKIE["mailnum"];
        $username=$_COOKIE["username"];
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>01 Studio</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <link href="css/loading.css" rel="stylesheet" type="text/css" />
    <script src="../jquery.min.js"></script>
    <style>

      

        #mask {
            position: absolute;
            top: 0px;
            filter: alpha(opacity=60);
            background-color: #777;
            z-index: 0;
            left: 0px;
            opacity: 0.2;
        }

        #loading {
            background-color: rgba(255,255,255,1);
            height: 100%;
            width: 100%;
            position: fixed;
            z-index: 1;
            margin-top: 0px;
            top: 0px;
        }

        #loading-center {
            width: 100%;
            height: 100%;
            position: relative;
        }

        #loading-center-absolute {
            position: absolute;
            left: 50%;
            top: 50%;
            height: 100px;
            width: 100px;
            margin-top: -50px;
            margin-left: -50px;
        }

        .object {
            width: 25px;
            height: 25px;
            background-color: rgba(255,255,255,0);
            margin-right: auto;
            margin-left: auto;
            border: 4px solid rgba(239,74,74,1);
            left: 37px;
            top: 37px;
            position: absolute;
        }

        #first_object {
            -webkit-animation: first_object 1s infinite;
            animation: first_object 1s infinite;
            -webkit-animation-delay: 0.5s;
            animation-delay: 0.5s;
        }

        #second_object {
            -webkit-animation: second_object 1s infinite;
            animation: second_object 1s infinite;
        }

        #third_object {
            -webkit-animation: third_object 1s infinite;
            animation: third_object 1s infinite;
            -webkit-animation-delay: 0.5s;
            animation-delay: 0.5s;
        }

        #forth_object {
            -webkit-animation: forth_object 1s infinite;
            animation: forth_object 1s infinite;
        }

        @-webkit-keyframes first_object {
            0% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }

            50% {
                -ms-transform: translate(150%,150%) scale(2,2);
                -webkit-transform: translate(150%,150%) scale(2,2);
                transform: translate(150%,150%) scale(2,2);
            }

            100% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }
        }

        @keyframes first_object {
            0% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }

            50% {
                -ms-transform: translate(150%,150%) scale(2,2);
                -webkit-transform: translate(150%,150%) scale(2,2);
                transform: translate(150%,150%) scale(2,2);
            }

            100% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }
        }

        @-webkit-keyframes second_object {
            0% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }

            50% {
                -ms-transform: translate(-150%,150%) scale(2,2);
                -webkit-transform: translate(-150%,150%) scale(2,2);
                transform: translate(-150%,150%) scale(2,2);
            }

            100% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }
        }

        @keyframes second_object {
            0% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }

            50% {
                -ms-transform: translate(-150%,150%) scale(2,2);
                -webkit-transform: translate(-150%,150%) scale(2,2);
                transform: translate(-150%,150%) scale(2,2);
            }

            100% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }
        }

        @-webkit-keyframes third_object {
            0% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }

            50% {
                -ms-transform: translate(-150%,-150%) scale(2,2);
                -webkit-transform: translate(-150%,-150%) scale(2,2);
                transform: translate(-150%,-150%) scale(2,2);
            }

            100% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }
        }

        @keyframes third_object {
            0% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }

            50% {
                -ms-transform: translate(-150%,-150%) scale(2,2);
                -webkit-transform: translate(-150%,-150%) scale(2,2);
                transform: translate(-150%,-150%) scale(2,2);
            }

            100% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }
        }

        @-webkit-keyframes forth_object {
            0% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }

            50% {
                -ms-transform: translate(150%,-150%) scale(2,2);
                -webkit-transform: translate(150%,-150%) scale(2,2);
                transform: translate(150%,-150%) scale(2,2);
            }

            100% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }
        }

        @keyframes forth_object {
            0% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }

            50% {
                -ms-transform: translate(150%,-150%) scale(2,2);
                -webkit-transform: translate(150%,-150%) scale(2,2);
                transform: translate(150%,-150%) scale(2,2);
            }

            100% {
                -ms-transform: translate(1,1) scale(1,1);
                -webkit-transform: translate(1,1) scale(1,1);
                transform: translate(1,1) scale(1,1);
            }
        }
    </style>
</head>
<body onload="load()" class="templatemo-bg-gray">
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="first_object"></div>
                <div class="object" id="second_object"></div>
                <div class="object" id="third_object"></div>
                <div class="object" id="forth_object"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function load() {
            var loading = document.getElementById('loading');
            //设置透明度改变的过渡时间为0.3秒
            var a = setTimeout("loading.style.transition='opacity 0.3s'", 0)
            //0.5秒后加载动画开始变为透明
            var b = setTimeout("loading.style.opacity=0", 500)
            //当透明度为0的时候，隐藏掉它
            var c = setTimeout("loading.style.display='none'", 800)
        }


        function showMask() {
            $("#mask").css({ "height": "100%", "width": "100%" });
            $("#mask").show();
            $("#alert").show();

        }

        function hideMask() {
            $("#mask").hide();
            $("#alert").hide();
        }

    </script>



    <div class="container">
        <div class="col-md-12">
            <h1 class="margin-bottom-15">√注册成功！</h1>
            <form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="http://baidu.com" method="post">
                <div class="form-group">
                    <div class="col-xs-12">
                       

				 <div class="form-group">
                    <div class="col-md-12">
                        <label for="mailnum" class="control-label fa-label"><i class="fa fa-envelope fa-medium"> 邮箱</i></label>
                        <input type="text" class="form-control" name="fromerengname" placeholder="系统自动获取" readonly value="<?php echo "$mailnum";
                ?>" autocomplete="off">
				<br><br>
                    </div>
					 <div class="col-md-12">
                        <label for="mailnum" class="control-label fa-label"><i class="fa fa-user fa-medium"> 学号</i></label>
                        <input type="text" class="form-control" name="fromerengname" placeholder="系统自动获取" readonly value="<?php echo "$username";
                ?>" autocomplete="off">
				<br><br>
                    </div>

				



            

                
               
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="control-wrapper">
                            <a href="index.php" onclick="showMask();" class="btn btn-success"><span style="color:white;">转去查词 <i class="fa fa-arrow-circle-o-right"></i></span></a>

                            <div id="alert" style="display:none; text-align:center; "><span class="ld ld-ring ld-spin" style="font-size:300%;"></span></div>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="form-group">
                    <div class="col-md-12">
                        <label style="font-size:150%;"><i class="fa fa-asterisk"></i>请务必牢记你的学号，它是你用来登录的用户名 </label>

                    </div>
                </div>
            </form>
        
        </div>
    </div>
    <div id="mask"></div>

</body>
</html>