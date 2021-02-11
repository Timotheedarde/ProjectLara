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
        <form method="post" action="{{ route('category.update', $category->id) }}" class=" col my-3 border p-4">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="form_label">Label</label>
                <input value="{{ old('label', $category->label) }}" name="label"
                       type="text" step="1" min="0" id="form_label"
                       class="form-control @error('label') is-invalid @enderror" />
                @error('label')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
            <a class="btn btn-secondary" href="{{ route('category.index') }}">Annuler</a>
        </form>
    </div>
</div>


