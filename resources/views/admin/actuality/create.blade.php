@extends('ui/layout')


<!-- Page Header -->
<header class="masthead">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Les Actualités</h1>
                    <span class="subheading">Ajouter une nouvelle actualité</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <form method="post" action="{{ route('actuality.store') }}" enctype="multipart/form-data" class="col my-3 border p-4">
            @csrf
            <div class="form-group">
                <label for="form_title">Titre</label>
                <input value="{{ old('title') }}" name="title"
                       type="text" id="form_title"
                       class="form-control @error('title') is-invalid @enderror" />
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="form_content">Contenu</label>
                <div class="input-group">
                    <textarea name="content"
                              type="text" id="form_content"
                              class="form-control @error('content') is-invalid @enderror">{{ old('content') }}
                    </textarea>
                </div>
{{--
                <input value="{{ old('content') }}" name="content"
                       type="text" id="form_content"
                       class="form-control @error('content') is-invalid @enderror" />
--}}
                @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="form_picture_url">Photo</label>
                <input value="{{ old('picture_url') }}" name="picture_url"
                       type="text" id="form_picture_url"
                       class="form-control @error('picture_url') is-invalid @enderror" />
                @error('picture_url')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="form_link_url">Lien SRC Externe</label>
                <input value="{{ old('link_url') }}" name="link_url"
                       type="text" id="form_link_url"
                       class="form-control @error('link_url') is-invalid @enderror" />
                @error('link_url')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a class="btn btn-secondary" href="{{ route('actuality.index') }}">Annuler</a>
        </form>
    </div>
</div>
