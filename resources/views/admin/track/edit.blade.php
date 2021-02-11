@extends('ui/layout')

<!-- Page Header -->
<header class="masthead">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Les Categories</h1>
                    <span class="subheading">Édition</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <form method="post" action="{{ route('track.update', $track->id) }}" class="col my-3 border p-4">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="form_title">Titre</label>
                <input value="{{ old('title', $track->title) }}" name="title"
                       type="text" step="1" min="0" id="form_title"
                       class="form-control @error('title') is-invalid @enderror" />
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="form_track_url">URL de l'upload</label>
                <input value="{{ old('track_url', $track->track_url) }}" name="track_url"
                       type="text" step="1" min="0" id="form_track_url"
                       class="form-control @error('track_url') is-invalid @enderror" />
                @error('track_url')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
            <a class="btn btn-secondary" href="{{ route('track.index') }}">Annuler</a>
        </form>
    </div>
</div>


