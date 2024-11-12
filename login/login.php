<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>後台首頁</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../login/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</head>

<body style="background-color: #f7f1f1;">
    <div class="system_name">
        <span style="font-size: 26px;"><b>客服機器人後台登入</b></span>
      </div>
    <div class="signupFrm">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form" name="log" id="login" >
          <div class="text1">
              登入
          </div>
          
          <div class="inputContainer">
            <input name="account" type="text" class="input" placeholder="a" autocomplete="off" required/>
            <label for="" class="label">帳號</label>
          </div>
  
          <div class="inputContainer">
            <input name="password"  minlength="2"  type="password" class="input" placeholder="a" autocomplete="off" required/>
            <label for="" class="label">密碼</label>
          </div>

          <input type="submit" class="submitBtn" id="submitButton" value="登入">
        </form>
    </div>

    <?php
        $real_account = "admin";
        $real_password = "itri8974523";
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $account = $_POST['account'];
            $password = $_POST['password'];

            if($real_account == $account && $real_password == $password)
            {
                $url = "../homepage/homepage.html";
                echo "<script type='text/javascript'>";
                echo "window.location.href='$url'";
                echo "</script>"; 
            }
            else if($real_account != $account || $real_password != $password)
            {
              echo "<script>alert('帳號或密碼輸入錯誤')</script>" ;
            }
        }
    ?>

</body>

</html>