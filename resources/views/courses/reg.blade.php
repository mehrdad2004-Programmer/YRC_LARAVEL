<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href={{ asset("statics/css/index.css") }} rel="stylesheet">
    <link href={{ asset("statics/css/course.css") }} rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src={{ asset("statics/img/IMG_20250110_152026_232.png") }} class="logo-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">ورود / ثبت نام</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown link
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <div>
            <img src={{ asset("statics/img/wave.svg") }}>
        </div>
    </div>
    @if($statuscode === 201)
        <div class="alert container mt-3 alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            عملیات با موقیت انجام شد . 
            <span>کد رهگیری : </span> <span><b><u>{{ $tr_code }}</u></b></span>
        </div>
    @elseif($statuscode == 400)
        <div class="alert container mt-3 alert-danger alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            خطا در عملیات، مجدد تلاش کنید
        </div>
    @elseif($statuscode == 500)
        <div class="alert container mt-3 alert-danger alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                خطا در پردازش سرور، منتظر بررسی کارشناسان
        </div>
    @endif
    <div class="container">
        <div class="container">
            دانشجوی گرامی، لطفا جهت ادامه فرایند، فرم ذیل را تکمیل نمایید
        </div>
        <div class="container">
            لازم به ذکر است، جهت پرداخت هزینه دوره، <span><u><b class="text-danger">از طریق ربات ذیل با استفاده از پیام رسان بله</b></u></span>، اقدام به پرداخت نمایید.
        </div>
        <div class="container">
            فقط کافیست پس از تکمیل فرم، <span><u><b class="text-danger">کد رهگیری صادر شده توسط سیستم</b></u></span> را یادداشت کرده و سپس با استفاده از آن کد در ربات باشگاه پژوهشگران جوان در پیام رسان بله ، اقدام به پرداخت هزینه نمایید.
        </div>
    </div>
    <div class="container text-center mt-4">
        <div class="container titr-bar p-1 rounded-2">
            <span class="fw-bold text-light">مشخصات دوره</span>
        </div>
        <table class="table table-bordered mt-3 text-center">
            <thead>
              <tr>
                <th scope="col">عنوان دوره</th>
                <th scope="col">مدت زمان (ساعت)</th>
                <th scope="col">مدرس</th>
                <th scope="col">تاریخ برگزاری</th>
                <th scope="col">قیمت (ریال)</th>
              </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item['title'] }}</td>
                        <td>{{ $item['duration'] }}</td>
                        <td>{{ $item['teacher'] }}</td>
                        <td>{{ $item['start_date'] }}</td>
                        <td>{{ $item['amount'] }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>


    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="container mt-3 titr-bar p-1 rounded-2">
            <span class="fw-bold text-light">فرم ثبت نام</span>
        </div>
        <form method="POST" action={{ url("courses/registration/2345234") }} class="formbox mt-3">
            {{ csrf_field() }}
            <div class="container">
                <div>
                    <label>نام :</label>
                </div>
                <div>
                    <input type="text" name="fname" class="form-control" required>
                </div>
            </div>

            <div class="container mt-3">
                <div>
                    <label>نام خانوادگی :</label>
                </div>
                <div>
                    <input type="text" name="lname" class="form-control" required>
                </div>
            </div>

            <div class="container mt-3">
                <div>
                    <label>شماره ملی :</label>
                </div>
                <div>
                    <input type="text" name="id_no" class="form-control" required>
                </div>
            </div>

            <div class="container mt-3">
                <div>
                    <label>شماره دانشجویی :</label>
                </div>
                <div>
                    <input type="text" name="st_no" class="form-control" required>
                </div>
            </div>

            <div class="container mt-3">
                <div>
                    <label>شماره همراه :</label>
                </div>
                <div>
                    <input type="text" name="phone_no" class="form-control" required>
                </div>
            </div>

            <div class="container mt-3">
                <div>
                    <input type="submit" name="submit" class="btn btn-primary form-control text-center" value="ثبت نام">
                </div>
            </div>
        </form>
    </div>

    <!--========FOOTER PART========-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>