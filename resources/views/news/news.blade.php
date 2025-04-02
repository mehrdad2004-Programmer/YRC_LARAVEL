<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نمایش خبر</title>

    <link rel="stylesheet" href={{ asset("statics/css/index.css") }}>
    <link rel="stylesheet" href={{ asset("statics/css/news.css") }}>

    <!--CDN must be replaced with local files-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!--========NAVBAR========-->

    <!--========NEWS INFO BOX========-->
    <div class="container d-lg-flex mt-3">
        <!--====IMAGE BOX====-->
        <div class="">
            <img src={{ asset("statics/contents/news/news_sample.jpg") }} class="news-img image-responsive">
        </div>

        <!--====TITLE BOX====-->
        <div class="container title-box">
            <div class="container">
                <h3>یک خبر نمایشی در مورد انجمن ها</h3>
            </div>

            <div class="container mt-2">
                <span>تاریخ : </span>
                <span>1403/07/14 - 12:00:26</span>
            </div>

            <div class="container mt-2">
                <span>انجمن : </span>
                <span>کامپیوتر</span>
            </div>

            <div class="container mt-2">
                <span>شماره خبر : </span>
                <span>123456</span>
            </div>

            <div class="container mt-3 summary p-1 rounded-1">
                <div class="container">
                    <span>خلاصه خبر : </span>
                </div>
                <div class="container mt-2">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae odit cum sint recusandae tempora magni nisi pariatur repellat adipisci, consectetur eius quisquam modi id excepturi deleniti, itaque deserunt nam ex.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--====NEWS DESCRIPTION====-->
    <div class="container mt-3 text-right dir-rtl text-justified">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus dolor expedita voluptatum assumenda provident ducimus impedit laboriosam, voluptates quas nihil porro dignissimos deleniti error magnam minus consectetur tenetur delectus voluptatem.
        Adipisci, dicta libero. Natus, debitis mollitia deserunt odit harum dolorem voluptate vel, quidem reprehenderit consequatur odio recusandae repudiandae tenetur voluptas. Itaque ut eligendi, dolore quod dolores similique reiciendis explicabo ex.
        Fugiat cum ex aliquid expedita dolorem veniam optio sint dolor saepe ipsum alias eveniet minima, odit incidunt quae natus soluta quas et aspernatur, numquam vero perspiciatis recusandae? Quis, est vero?
        Repellendus consequatur sequi, itaque impedit nam tenetur cum tempora repellat et nemo eligendi aliquid, a, ipsum rem voluptatum sit laborum. Eos sapiente autem officia porro fugit similique repudiandae eum reiciendis?
        Provident, ullam repudiandae modi recusandae quam officia totam fuga nulla, nostrum excepturi qui harum. Incidunt, mollitia, commodi deserunt at ratione nihil tempora dolores ea error tempore molestias ut aliquid eos.
    </div>

    <!--========FOOTER PART========-->


    <!--CDN must be replaced with local files-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>