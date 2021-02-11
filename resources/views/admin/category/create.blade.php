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
        <form method="post" action="{{ route('category.store') }}" enctype="multipart/form-data" class="col my-3 border p-4">
            @csrf
            <div class="form-group">
                <label for="form_name">Nom</label>
                <input value="{{ old('label') }}" name="label"
                       type="text" id="form_name"
                       class="form-control @error('label') is-invalid @enderror" />
                @error('label')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a class="btn btn-secondary" href="{{ route('category.index') }}">Annuler</a>
        </form>
    </div>
</div>
