@extends('/ui/layout')

<link href="{{ URL::asset('css/new.css') }}" rel="stylesheet">


<!-- Page Header -->
<header class="masthead" style="background-image: url('{{$actuality->picture_url}}')">
    <div class="filtre">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>{{$actuality->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Main Content -->
<div class="container">
    <div class="row">

        <div class="col">
            <p>
                {{$actuality->content}}
            </p>
            <div class="btn d-flex justify-content-end">
                <a href="{{$actuality->link_url}}" class="btn btn-primary mb-3">Je veux voir ça !</a>
            </div>
        </div>

    </div>
</div>
