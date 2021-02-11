@extends('/ui/layout')

<link href="{{ URL::asset('css/home.css') }}" rel="stylesheet">

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto" >
                <div class="site-heading">
                    <h1>Zartist</h1>
                    <span class="subheading">Welcome to my music library</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">

{{--    <div class="row">
        @foreach($actualities as $actuality)
            <div class="col-md-4">
                <div class="single-blog-item">
                    <div class="blog-thumnail">
                        <a href="{{ URL::to('actuality') }}/{{ $actuality->id }}"><img src="{{ $actuality->picture_url }}" alt="blog-img"></a>
                    </div>
                    <div class="blog-content">
                        <h4><a href="#">{{ $actuality->title }}</a></h4>
                    </div>
                    <span class="blog-date">{{ $actuality->created_at->format('d/m/y')}}</span>
                </div>
            </div>
        @endforeach
    </div>--}}


    <div class="row">
        <div class="col lastTracks-container">
            <h2>Découvrez les derniers titres en date :</h2>
            <br>
            <div class="d-flex justify-content-around align-item-center flex-column flex-md-row">
                @foreach($tracks as $track)
                    <div class="container-audio">
                        <h3>{{ $track->title }}</h3>
                        <audio controls>
                            <source src="{{ $track->track_url }}" type="audio/ogg">
                            <source src="{{ $track->track_url }}" type="audio/mp3">
                            Your browser dose not Support the audio Tag
                        </audio>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
