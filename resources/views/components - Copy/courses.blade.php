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
            @if($community_statuscode === 200 && !is_string($community_data))
            @foreach($community_data as $item)
            <div class="course-box border border-1 rounded-3 p-2">
                <div>
                    <img src={{ asset("statics/contents/courses/" . $item['poster']) }} . class="course-banner">
                </div>

                <div>
                    <div class="text-center mt-3">
                        <span><b>{{ $item['title'] }}</b></span>
                    </div>
                    <div class="container text-center mt-4">
                        <a href="#" class="btn btn-primary">more</a>
                    </div>
                </div>
            </div>

            <div style="height: 30px;width: 30px;"></div>
            @endforeach

            @elseif($community_statuscode === 404)
            <div class="container w-100 d-flex jsutify-content-center align-items-center text-center">
                <div class="fw-bold text-secondary text-center">{{ $community_data }}</div>
            </div>
            @endif
        </div>
    </div>
</div>