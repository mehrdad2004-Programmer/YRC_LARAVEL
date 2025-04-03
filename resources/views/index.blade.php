<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>باشگاه پژوهشگران و نخبگان جوان</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href={{ asset("statics/css/index.css") }} rel="stylesheet">
</head>

<body>
    <div class="container">
        <!--========HEADER COMPONENT========-->
        <x-header></x-header>
    </div>


    <div class="container mt-3 border border-1 p-2 shadow rounded rounded-3">
        <!--========NEWS COMPONENT========-->
        <div class="container p-2 border border-1 rounded-3 titr-bar">
            <span class="text-light">آخرین اخبار باشگاه</span>
        </div>
        <div class="container d-lg-flex mt-3">
            <div class="container">
                <img src="statics/img/news.jpg" class="last-news">
                <div class="container mt-3">
                    <span><a href="#"><b>breaking news supported ....</b></a></span>
                </div>
            </div>

            <div class="container">
                <div class="container d-flex">
                    <div>
                        <img src="statics/img/news.jpg" class="recent-news">
                    </div>
                    <div class="p-2">
                        <div>
                            <span><b>title of the news</b></span>
                        </div>
                        <div>
                            <span>descripton of the news</span>
                        </div>
                    </div>
                </div>
                <div class="container d-flex mt-3">
                    <div>
                        <img src="statics/img/news.jpg" class="recent-news">
                    </div>
                    <div class="p-2">
                        <div>
                            <span><b>title of the news</b></span>
                        </div>
                        <div>
                            <span>descripton of the news</span>
                        </div>
                    </div>
                </div>
                <div class="container d-flex mt-3">
                    <div>
                        <img src="statics/img/news.jpg" class="recent-news">
                    </div>
                    <div class="p-2">
                        <div>
                            <span><b>title of the news</b></span>
                        </div>
                        <div>
                            <span>descripton of the news</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="height: 50px; width: 50px;"></div>

    <div class="container border border-1 p-2 rounded-3 mt-3">
        <!--========COURSES COMPONENT========-->
        @php
        $courseData = [
        ['title' => 'Laravel Basics', 'poster' => 'laravel.png'],
        ['title' => 'Advanced PHP', 'poster' => 'php.png']
        ];

        $statuscode = 200;
        @endphp
        <div>
            <div class="container p-2 border border-1 rounded-3 titr-bar">
                <span class="text-light">دروه های اخیر</span>
            </div>
            <div class="container d-flex flex-row-reverse mt-3">
                <div class="img-part">
                    <img src="statics/img/Course app-amico.png" class="img-fluid">
                    <div class="container text-center mt-4">
                        <span><b>دوره های اخیر</b></span>
                    </div>
                </div>

                <div class="container rounded-3 d-flex flex-row-reverse overflow-x-scroll">
                    @if($course_statuscode === 200 && is_object($course_data))
                    @foreach($course_data as $item)
                        <x-courses :source="$item['poster']" :title="$item['title']" :code="$item['course_code']"></x-courses>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div style="height: 50px; width: 50px;"></div>

    <div class="container border border-1 p-2 rounded-3 mt-3">
        <!--========COMMUNITIES COMPONENT========-->
        <div class="container p-2 border border-1 rounded-3 titr-bar">
            <span class="text-light">انجمن ها</span>
        </div>
        <div class="container d-flex flex-row-reverse mt-3">
            <div class="img-part">
                <img src="statics/img/Course app-amico.png" class="img-fluid">
                <div class="container text-center mt-4">
                    <span><b>انجمن های علمی</b></span>
                </div>
            </div>

            <div class="container rounded-3 d-flex flex-row-reverse overflow-x-scroll">
                @if($community_statuscode === 200 && !is_string($community_data))
                @foreach($community_data as $item)
                    <x-communities :source="$item['poster']" :title="$item['title']" :code="$item['course_code']"></x-courses>
                @endforeach

                @elseif($community_statuscode === 404)
                <div class="container w-100 d-flex jsutify-content-center align-items-center text-center">
                    <div class="fw-bold text-secondary text-center">{{ $community_data }}</div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div style="height: 50px; width: 50px;"></div>

    <div class="container border border-1 p-2 rounded-3">
        <!--========EVENTS COMPONENT========-->
        <div class="container p-2 border border-1 rounded-3 titr-bar">
            <span class="text-light">رویداد ها</span>
        </div>
        <div class="container d-flex flex-row-reverse mt-3 overflow-hidden">
            <div id="carouselExampleCaptions" class="container carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="statics/img/AA1vPOjC.jfif" class="d-block w-100 img-fluid c-img" alt="...">
                        <div class="carousel-caption">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="statics/img/news.jpg" class="d-block w-100 c-img" alt="...">
                        <div class="carousel-caption">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div>
        <x-footer></x-footer>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>