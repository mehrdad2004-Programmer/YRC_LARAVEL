<?php
    require_once __DIR__ . "/../modules/database/database.php";

    $db = new Database();

    $data = $db->read('registration', ["course_code" => $_GET['code']]);

    $coursename = $db->read("courses", ["code" => $_GET['code']])[0];

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
            <h4>لیست شرکت کنندگان</h4>
            <span class="fw-bold d-block mt-3"><?php echo $coursename['title'] . " - " . $coursename['teacher'];?></span>
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
                <th scope="col">نام و نام خانوادگی</th>
                <th scope="col">نام پدر</th>
                <th scope="col">شماره ملی</th>
                <th scope="col">شماره تماس</th>
                <th scope="col">رشته تحصیلی</th>
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
                <td>".$item['fullname']."</td>
                <td>".$item['faname']."</td>
                <td>".$item['st_id_no']."</td>
                <td>".$item['phone']."</td>
                <td>".$item['field']."</td>
                <td>
                    <a href='delete.php?mode=student&id_no=".$item['st_id_no']."' class='btn btn-danger'>حذف</a>
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