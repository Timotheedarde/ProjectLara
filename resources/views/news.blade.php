@extends('/ui/layout')

<link href="{{ URL::asset('css/news.css') }}" rel="stylesheet">


<!-- Page Header -->
<header class="masthead" style="background-image: url('img/news-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>Follows my news</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->

<div class="container">
    <div class="row">

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

    </div>
</div>

<hr>

