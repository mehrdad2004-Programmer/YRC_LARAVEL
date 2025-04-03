<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دوره ها</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href= {{ asset("statics/css/index.css") }} rel="stylesheet">
    <link href={{ asset("statics/css/course.css") }} rel="stylesheet">
</head>
<body>
    <div class="container">
    <!--========HEADER COMPONENT========-->
        <x-header></x-header>
    </div>


    <div class="container">
        <div>
            <img src={{ asset("statics/img/wave.svg") }}>
        </div>
        <div class="container d-flex flex-row-reverse">
            <div class="">

                <div class="container text-left">
                    <img src={{ asset("statics/img/Course app-bro.png") }} class="img-fluid course-main-img">
                </div>
            </div>

            <div class="container text-center title-container rounded rounded-3 p-3">
                <div class="container text-center mt-4">
                    <span class="fw-bold">دوره آموزشی پایتون مقدماتی تا پیشرفته</span>
                </div>
                <div class="container text-center mt-4">
                    <span class="fw-bold">مدرس : مهرداد کلاته عربی</span>
                </div>
                <div class="container text-center mt-4">
                    <a href="#tozihat" class="btn btn-outline-primary">مشاهده جزئیات</a>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="container">
                <span class="fw-bold" id="tozihat">توضیحات اجمالی دوره</span>
            </div>
            <div class="container mt-3">
                <div class="container">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat vel sed laudantium veniam sunt fugit eius ut reiciendis dolores, nihil explicabo unde ipsam, itaque, exercitationem aliquam libero quas suscipit cupiditate.
                        Quaerat, voluptatum non, doloremque doloribus distinctio fuga culpa debitis earum dolores quas incidunt in eaque sit quis. Ratione voluptas doloribus rem, excepturi, fugiat ullam distinctio voluptatem doloremque dignissimos dicta at?
                        Deleniti numquam sed ratione cum assumenda laudantium sint nam accusantium vitae sequi in minus dicta, fugit, totam optio repellendus quaerat placeat eum cumque delectus temporibus, repellat aut! Culpa, ratione a!
                    </p>
                </div>
            </div>

            <div class="container">
                <span class="fw-bold">مباحث دوره</span>
            </div>
            <div class="container">
                <div class="container">
                    <ul>
                        <li>a text about course</li>
                        <li>a text about course</li>
                        <li>a text about course</li>
                        <li>a text about course</li>
                        <li>a text about course</li>
                        <li>a text about course</li>
                        <li>a text about course</li>
                        <li>a text about course</li>
                        <li>a text about course</li>
                        <li>a text about course</li>
                        <li>a text about course</li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <span class="fw-bold">درباره مدرس</span>
            </div>

            <div class="container mt-3">
                <div class="container d-lg-flex border border-1 rounded-3 p-3">
                    <div>
                        <img src={{ asset("statics/img/OIP.jfif") }} class="teacher">
                    </div>

                    <div class="container">
                        <div class="container">
                            <span>مهرداد کلاته عربی</span>
                        </div>
                        <div class="container">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi amet aperiam ex velit, modi cum culpa, iure sed similique nulla libero, omnis reprehenderit porro fuga delectus. Ex quasi voluptate eos!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <a href="#" class="btn btn-outline-primary d-block w-100 text-center">شرکت در دوره</a>
    </div>

    <br>
    <br>
    <br>
    <br>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>