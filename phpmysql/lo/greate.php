<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>註冊頁面</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="greate-style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">


    <!-- <script>
        $(document).ready(function(){
            let a = prompt("請輸入你的大名", "")
            alert("Hello , Dear. " + a + " , welcome to my World !!! ");
            });
    </script> -->
    <style>
        *{
            box-sizing: border-box;
        }
        html,body,h1,h2,h3,h4,h5,h6,img,ul,li,a,div,span{
            margin: 0;
            padding: 0;
            border: 0;
        }
        body{
            background-color: rgba(241, 241, 241, 0.473);
        }
        a{
        text-decoration: none;
        color: black;
        }
        a:hover{
            color: rgb(0, 0, 255);
        }
        li{
            list-style: none;
        }
        img{
            width: 100%;
            vertical-align: top;
        }
        .btn{
            display: inline-block;
            padding: 8px 115px;
            background-color: rgb(138, 175, 255);
            color: #fff;
            border-radius: 7px;
            border: 2px solid rgb(138, 175, 255);
        }
        .btn:hover{
            background-color: #fff;
            color: rgb(138, 175, 255);
        }
        .clearfix::after{
            content: "";
            display: block;
            clear: both;
            width: 1500px;
            height: auto;
        }
    
    </style>
</head>

<body>

    <nav class="full-width ">
        <div class="fixed-width clearfix">
            <div class="logo">
                <a href="kai.html"><img src="logo.png" alt=""></a>
            </div>
            <div class="search">
                <ul>
                    <li><a href="login.php" target="_blank">登入</a></li>
                    <li><a href="greate.php">註冊</a></li>
                </ul>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="kai.html" target="_blank">首頁</a></li>
                    <li><a href="Blog.html" target="_blank">網誌</a></li>
                    <li><a href="album.html" target="_blank">相簿</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="full-width" id="no1">
        <div class="fixed-width clearfix">
            <form action="process.php" method="post">
                <div class="col-12">
                    <!-- <h1 class="h1">LOGIN</h1> -->
                    <a href="kai.html"><img src="logo.png" alt=""></a>
                    <p class="toptitle">註冊即可查看朋友的相片和影片。</p> <br>
                    <a href="https://myaccount.google.com/" class="RR" target="_blank">
                        <i class="fab fa-google-plus-square fa-1x"></i>使用Google登入
                    </a>
                    <p>————————或————————</p>
                    <div class="z1"><input type="text" name="user" id="zz" placeholder="全名" size="35" style="height: 35px; background-color: rgba(241, 241, 241, 0.473)"></div>
                    <div class="z2"><input type="password" name="pw" id="zz" placeholder="密碼" size="35" style="height: 35px; background-color: rgba(241, 241, 241, 0.473)"></div>
                    <div class="z2"><input type="text" name="phone" id="zz" placeholder="手機號碼" size="35" style="height: 35px; background-color: rgba(241, 241, 241, 0.473)"></div>
                    <div class="z3"><input type="text" name="email" id="zz" placeholder="電子郵件" size="35" style="height: 35px; background-color: rgba(241, 241, 241, 0.473)"></div>
                    <input type="submit" class="btn" value="註冊">
                </form>
                    <p class="bottomtitle">註冊即表示你同意我們的 服務條款 、 資料政策 和 Cookie 政策 。</p>
                </div>
        </div>
    </div>
    <div class="full-width" id="no2">
        <div class="fixed-width clearfix">
            <div class="col-12">
                <h4>已經有帳號嗎? <a href="login.php" target="_blank">登入</a></h4>
            </div>
        </div>
    </div>
    </form>
    <div class="full-width" id="no3">
        <div class="fixed-width clearfix">
            <div class="col-12">
                <p>下載應用</p>
            </div>
            <div>
                <div class="col-4 soft">
                    <a href="#"><i class="fab fa-apple-pay fa-3x"></i></a>
                </div>
                <div class="col-4 soft">
                    <a href="#"><i class="fab fa-google-plus-square fa-3x"></i></a>
                </div>
                <div class="col-4 soft">
                    <a href="#"><i class="fab fa-microsoft fa-3x"></i></a>
                </div>
            </div>
        </div>
    </div>
    <footer class="full-width" id="no4">
        <div class="fixed-width clearfix">
            <div class="us col-12">
                <ul>
                    <a href="#">關於我們</a>
                    <a href="#">支援</a>
                    <a href="#">工作機會</a>
                    <a href="#">隱私</a>
                    <a href="#">語言</a>
                    <a href="#">主題標籤</a>
                    <a href="#">服務條款</a>
                    <a href="#">資料政策</a>
                    <a href="#">使用條款</a>
                    <a href="#">Cookie政策</a>
                    <p>BY &copy; 2018 ZK</p>
                </ul>
            </div>
        </div>
        </div>
    </footer>

    <!-- <div>User Name</div>
    <div><input type="text" name="user" id="ID" placeholder="請輸入帳號"/></div>
    <div id="box1">帳號不正確或為空白</div><br><br>
    <div>Password</div>
    <div><input type="text" name="password" id="password" placeholder="請輸入密碼"/></div>
    <div id="box2">密碼不正確或為空白</div>
    <input type="submit" value="送出">
    <input type="reset" value="清除">
	<script>
			document.getElementById('box1').style.display = "none";
			document.getElementById('box2').style.display = "none";	
			$("#ID").click(function () {
				document.getElementById('box1').style.display = "";
				document.getElementById('box1').style.color = "red";
			});
			$("#ID").blur(function () {	
				document.getElementById('box1').style.display = "none";
				document.getElementById('box1').style.color = "red";	
			});	
			$("#password").click(function () {	
				document.getElementById('box2').style.display = "";
				document.getElementById('box2').style.color = "red";	
			});	
			$("#password").blur(function () {	
				document.getElementById('box2').style.display = "none";
				document.getElementById('box2').style.color = "red";	
			});	
		</script> -->

</body>

</html>