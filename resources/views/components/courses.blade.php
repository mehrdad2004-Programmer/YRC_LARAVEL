<div class="course-box border border-1 rounded-3 p-2">
    <div>
        <img src={{ asset("statics/contents/courses/" . $source) }} class="course-banner">
    </div>

    <div>
        <div class="text-center mt-3">
            <span><b>{{ $title }}</b></span>
        </div>
        <div class="container text-center mt-4">
            <a href={{ "courses/info/" . $code }} class="btn btn-primary">more</a>
        </div>
    </div>
</div>

<div style="height: 30px; width: 30px;"></div>