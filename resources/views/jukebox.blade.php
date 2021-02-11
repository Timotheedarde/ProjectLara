@extends('/ui/layout')

<link href="{{ URL::asset('css/jukebox.css') }}" rel="stylesheet">

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/jukebox-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Jukebox</h1>
                    <span class="subheading">Discovering my soundTracks</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            @foreach($tracks as $track)
                <br>
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
