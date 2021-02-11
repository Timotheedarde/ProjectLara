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
        <form method="post" action="{{ route('comment.store') }}" enctype="multipart/form-data" class="col my-3 border p-4">
            @csrf
            <div class="form-group">
                <label for="form_author">Auteur</label>
                <input value="{{ old('author') }}" name="author"
                       type="text" id="form_author"
                       class="form-control @error('author') is-invalid @enderror" />
                @error('author')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="form_content">Contenu</label>
                <input value="{{ old('content') }}" name="content"
                       type="text" id="form_content"
                       class="form-control @error('content') is-invalid @enderror" />
                @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a class="btn btn-secondary" href="{{ route('comment.index') }}">Annuler</a>
        </form>
    </div>
</div>
