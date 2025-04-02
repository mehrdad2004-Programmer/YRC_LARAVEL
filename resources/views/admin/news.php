../<?php 
    // //adding authorization
    // require_once __DIR__ . "/middleware/authorization.php";
    // require_once __DIR__ . "/middleware/sanitize.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../statics/css/bootstrap.min.css">
    <link rel="stylesheet" href="../statics/css/style.css">
</head>
<body dir="rtl">
    <?php
    //print_r($_FILES);
        //including header
        //require_once "components/header.php";
    ?>
    <?php
    require_once __DIR__ . "/../modules/database/database.php";
    require_once __DIR__ . "/../modules/course/Course.php";
    require_once __DIR__ . "/../modules/jdate/jdf.php";
    $course = new Course();
    $db = new Database();


    if($_GET['mode'] == 'edit'){
        $val = $db->read('courses', ["code" => $_GET['code']]);
    }

    if(isset($_POST['submit'])){
        if(isset($_GET['mode'])){
            switch($_GET['mode']){
                case "create":
                    $res = $db->create("news", [
                        "title" => $_POST['title'],
                        "community" => $_POST['community'],
                        "poster" => $_FILES['poster']['name'],
                        "text" => $_POST['description'],
                        "date" => jdate("Y/m/d"),
                        "code" => $course->unique_code(),
                    ]);
                    if(move_uploaded_file($_FILES['poster']['tmp_name'], "statics/news_poster/" . basename($_FILES['poster']['name']))){
                        if($res){
                            echo "<div class='alert container mt-3 alert-success alert-dismissible fade show' role='alert'>
                            خبر با موفقیت ایجاد شد
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                        }else{
                            echo "<div class='alert container mt-3 alert-danger alert-dismissible fade show' role='alert'>
                            خطا در تشکیل خبر، مجدد تلاش کنید
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                        }
                    }

                    break;
                case "edit":
                    $res = $db->update('articles', [
                        "title" => $_POST['title'],
                        "author" => $_POST['author'],
                        "community" => $_POST['community'],
                        "poster" => $_FILES['poster']['name'],
                        "text" => $_POST['description'],
                        "date" => jdate("Y/m/d"),
                    ], ["code" => $_GET['code']]);
                    if($res){
                        echo "updated";
                    }else{
                        echo "not updated";
                    }
            }
        }
    }
    ?>
    <div class="container text-center mt-3 p-2">
        <h2>
            افزودن خبر
        </h2>
    </div>
    <form method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="container">
                <div class="container mt-3">
                    <span>
                        عنوان خبر :
                    </span>
                </div>
                <div class="container p-2">
                    <input class="form-control" type="text" name="title" value=<?php echo isset($val['title']) ? $val['title'] : ""; ?>>
                </div>
            </div>
            <div class="container">
                <div class="container mt-3">
                    <span>
                        انجمن : 
                    </span>
                </div>
                <div class="container p-2">
                    <select class="form-control" name="community" id="">
                        <?php
                            $data = $db->read('communities', );
                            foreach($data as $item){
                                echo "<option>".$item['title']."</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="container">
                <div class="container mt-3">
                    <span>
                        متن خبر :
                    </span>
                </div>
                <div class="container p-2">
                    <textarea class="form-control" name="description" id="" cols="30" rows="10" >
                        <?php echo isset($val['description']) ? $val['description'] : ""; ?>
                    </textarea>
                </div>
            </div>
           <div class="container">
                <div class="container mt-3">
                   <span>
                       تصویر :
                  </span>
              </div>
               <div class="container p-2">
                   <input class="form-control" type="file" name="poster" value=<?php echo isset($val['poster']) ? $val['poster'] : ""; ?>>
               </div>
            </div>
            <div class="container text-center mt-3">
                <input class="btn btn-primary" type="submit" value="تایید" name="submit">
            </div>
        </div>
    </form>
    <?php
        //including footer
        //require_once "components/footer.php";
    ?>
    <script src="statics/js/bootstrap.bundle.min.js"></script>
</body>
</html>