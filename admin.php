  <!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>管理员登录</title>
  <meta name="description" content="登录界面">
  <meta name="keywords" content="登录界面">
  <link href="" rel="stylesheet">
  <style>
    body,p,div,ul,li,h1,h2,h3,h4,h5,h6{
      margin:0;
      padding: 0;
    }
    body{
      background: #E9E9E9; 
    }
    #login{
      width: 400px;
      height: 350px;
      background: #FFF;
      margin:100px auto;
      position: relative;
      background-color: rgba(152, 242, 242, 0.23);
    }
    #login h1{
      text-align:center;
      position:absolute;
      left:130px;
      font-size:21px;
    }
    #login form p{
      text-align: center;
    }
    #user{
      background:url(images/user.png) rgba(0,0,0,.1) no-repeat;
      width: 200px;
      height: 30px;
      border:solid #ccc 1px;
      border-radius: 3px;
      padding-left: 32px;
      margin-top: 50px;
      margin-bottom: 30px;
    }
    #pwd{
      background: url(images/pwd.png) rgba(0,0,0,.1) no-repeat;
      width: 200px;
      height: 30px;
      border:solid #ccc 1px;
      border-radius: 3px;
      padding-left: 32px;
      margin-bottom: 30px;
    }
    #submit{
      width: 232px;
      height: 30px;
      background: rgba(0,0,0,.1);
      border:solid #ccc 1px;
      border-radius: 3px;
    }
    #submit:hover{
      cursor: pointer;
      background:#D8D8D8;
    }
    .top{
        margin-left: 30px;
        margin-top: 30px;
   }
    #sf{
    width: 232px;
    height: 30px;
    border:solid #ccc 1px;
    border-radius: 3px;
    padding-left: 32px;
    margin-bottom: 30px;
    background-color: rgba(0,0,0,.1);
  }
  </style>
  </head>
  <body style="background: url(images/login-bg-autumn.jpg) no-repeat;background-size: cover; ">
  <div class="top"><a href="shenzhen/index.html"><img src="images/login-logo.png" ></a></div>
  <div id="login"> 
    <form action="Chkadmin.php" method="post">
      <p><h1>管理员登录</h1></p> 
      <p><input type="text" name="username" id="user" placeholder="用户名"></p>
      <p><input type="password" name="userpwd" id="pwd" placeholder="密码"></p>
      <p><select name="role" placeholder="身份" id="sf">
        <option value="admin">管理员</option>
      </p>
      <p><input type="submit" id="submit" value="登录"></p><br><br>
      <p>教师和学生请点击<a href="login.php">这里登陆</a></p>
    </form>
  </div>
  </body>
  </html>