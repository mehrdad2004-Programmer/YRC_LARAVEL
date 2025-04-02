<?php
    require_once __DIR__ . "/../modules/database/database.php";

    $db = new Database();

    $data = $db->read('courses');

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
    <div class="container mt-3">
        <div class="container text-center">
            <h3>مشاهده دوره ها</h3>
        </div>

        <!-- <div class="container d-flex justify-content-center mt-4">
            <div class="container text-center">
                <select name="anjoman" class="form-control">
                    <option>کامپیوتر</option>
                </select>
            </div>

            <div class="container d-flex justify-content-center">
                <select name="course" class="form-control">
                    <option>پایتون مقدماتی</option>
                </select>
            </div>

            <div class="">
                <input type="submit" name="search" value="جستجو" class="btn btn-primary">
            </div>
        </div> -->
    </div>


    <div class="container table-responsive text-center mt-4">
        <table class="table text-center">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">عنوان</th>
                <th scope="col">مدرس</th>
                <th scope="col">وضعیت</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 0;
                    foreach($data as $item){
                        $i++;
                        echo "                <tr>
                <th>$i</th>
                <td>".$item['title']."</td>
                <td>".$item['teacher']."</td>
                <td>
                    <a href='course_list.php?code=".$item['code']."'  class='btn btn-primary'>مشاهده لیست</a>
                    <a href='delete.php?mode=course&code=".$item['code']."' class='btn btn-danger'>حذف</a>
                </td>
                </tr>";
                    }

                ?>
            </tbody>
        </table>
    </div>

    <script src="statics/js/bootstrap.bundle.min.js"></script>  
</body>
</html>