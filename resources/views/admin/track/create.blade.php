@extends('ui/layout')


<!-- Page Header -->
<header class="masthead">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Les Categories</h1>
                    <span class="subheading">Ajouter une nouvelle catégorie</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <form method="post" action="{{ route('track.store') }}" enctype="multipart/form-data" class="col my-3 border p-4">
            @csrf
            <div class="form-group">
                <label for="form_title">Titre</label>
                <input value="{{ old('title') }}" name="title"
                       type="text" id="form_title"
                       class="form-control @error('title') is-invalid @enderror" />
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="form_track_url">URL de l'uploadtrack_url</label>
                <input value="{{ old('track_url') }}" name="track_url"
                       type="text" id="form_track_url"
                       class="form-control @error('track_url') is-invalid @enderror" />
                @error('track_url')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a class="btn btn-secondary" href="{{ route('track.index') }}">Annuler</a>
        </form>
    </div>
</div>
