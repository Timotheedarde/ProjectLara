@extends('/ui/layout')

<!-- Page Header -->
<header class="masthead">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Les Catégories</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">

        @if(session()->has('info'))
            <div class="alert alert-success">
                {{ session('info') }}
            </div>
        @endif
        <div class="col d-flex justify-content-end">
            <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">Ajouter</a>
        </div>

        <table class="table table-striped mt-3">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Créé le</th>
                <th scope="col">Label</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <th>{{ $category->id }}</th>
                    <td>
                        {{ $category->created_at }}<br/>
                        <small class="text-xs">{{ $category->updated_at }}</small>
                    </td>
                    <td>{{ $category->label }}</td>
                    <td>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-primary">Editer</a>
                        @if($category->deleted_at)
                            <form class="form-category-force-delete" method="post" action="{{ route('category.force-destroy', $category->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark btn-sm">Supprimer définitivement</button>
                                @if($category->deleted_at)
                                    <br>
                                    <small class="text-xs .text-danger">Mise en corbeille : {{ $category->deleted_at }}</small>
                                @endif
                            </form>
                            <form class="d-inline" method="post" action="{{ route('category.restore', $category->id) }}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success btn-sm">Restaurer</button>
                            </form>
                        @else
                            <form class="d-inline form-category-delete" method="post" action="{{ route('category.destroy', $category->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>





@section('js')
    @parent
    <script type="text/javascript">
        $(document).ready(
            function() {
                $('.form-category-force-delete').on('submit', function(event) {
                    if (!confirm('Êtes vous certain ? Action définitive.')) {
                        event.preventDefault();
                    }
                })
            }
        )
    </script>
@endsection

