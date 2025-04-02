<?php
    require_once __DIR__ . "/../modules/database/database.php";

    $db = new Database();
    
    if(isset($_POST['submit'])){
        $data = $db->read('users', ["username" => $_POST['username']]);
        if(count($data) > 0){
            if(password_verify($_POST['password'], $data[0]['password'])){
                header("Location: main.php");
            }else{
                echo "<script>alert('نام کاربری یا پسورد نا معتبر است')</script>";
            }
        }else{
            echo "<script>alert('کاربر یافت نشد')</script>";
        }
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../statics/css/bootstrap.min.css">
    <link rel="stylesheet" href="../statics/css/style.css">
</head>
<body>
    <form method="post">
        <div class="container h-100 d-flex justify-content-center align-items-center">
            <div class="login-box border border-2 p-3 rounded-3 shadow">
                <div class="container">
                    <div class="container text-center">
                        <img src="../statics/img/user.jpg" width="100px">
                    </div>
                    <div class="container mt-3">
                        <h3>پرتال مدیریت انجمن ها</h3>
                    </div>
                </div>
                <div class="container d-flex flex-column justify-content-center align-items-center">
                    <div class="container mt-3">
                        <div class="container">
                            <span>نام کاربری : </span>
                        </div>
                        <div class="container text-center mt-2">
                            <input type="text" name="username" class="form-control">
                        </div>
                    </div>

                    <div class="container mt-4">
                        <div class="container">
                            <span>رمز عبور : </span>
                        </div>
                        <div class="container text-center mt-2">
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>

                    <div class="container mt-3 p-3 text-center">
                        <input type="submit" class="btn btn-primary form-control" name="submit" value="ورود">
                    </div>
                </div>
            </div>
        </div>
    </form>
    


    <script src="statics/js/bootstrap.bundle.min.js"></script>  
</body>
</html>