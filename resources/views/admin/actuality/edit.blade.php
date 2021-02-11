@extends('ui/layout')

<!-- Page Header -->
<header class="masthead">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Les Actualités</h1>
                    <span class="subheading">Édition</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <form method="post" action="{{ route('actuality.update', $actuality->id) }}" class="col my-3 border p-4">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="form_title">Titre</label>
                <input value="{{ old('title', $actuality->title) }}" name="title"
                       type="text" step="1" min="0" id="form_title"
                       class="form-control @error('title') is-invalid @enderror" />
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="form_title">Contenu</label>
                <div class="input-group">
                    <textarea name="content"
                              type="text" step="1" min="0" id="form_title"
                              class="form-control @error('content') is-invalid @enderror" >{{ old('content', $actuality->content) }}
                    </textarea>
                </div>
{{--
                <input value="{{ old('content', $actuality->content) }}" name="content"
                       type="text" step="1" min="0" id="form_title"
                       class="form-control @error('content') is-invalid @enderror" />
--}}
                @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="form_title">Photo</label>
                <input value="{{ old('picture_url', $actuality->picture_url) }}" name="picture_url"
                       type="text" step="1" min="0" id="form_picture_url"
                       class="form-control @error('picture_url') is-invalid @enderror" />
                @error('picture_url')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="form_title">Lien SRC Externe</label>
                <input value="{{ old('link_url', $actuality->link_url) }}" name="link_url"
                       type="text" step="1" min="0" id="form_link_url"
                       class="form-control @error('link_url') is-invalid @enderror" />
                @error('link_url')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
            <a class="btn btn-secondary" href="{{ route('actuality.index') }}">Annuler</a>
        </form>
    </div>
</div>


