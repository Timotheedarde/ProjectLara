@extends('/ui/layout')

<!-- Page Header -->
<header class="masthead">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Les Commentaires</h1>
                    <span class="subheading">Gestion/Administration</span>

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
            <a href="{{ route('comment.create') }}" class="btn btn-primary mb-3">Ajouter</a>
        </div>

        <table class="table table-striped mt-3">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Créé le</th>
                <th scope="col">Signaler O/N</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)
                <tr>
                    <th>{{ $comment->id }}</th>
                    <td>
                        {{ $comment->created_at }}<br/>
                        <small class="text-xs">{{ $comment->updated_at }}</small>
                    </td>
                    <td>{{ $comment->content }}</td>
                    <td>
                        <a href="{{ route('comment.edit', $comment->id) }}" class="btn btn-sm btn-primary">Editer</a>
                        @if($comment->deleted_at)
                            <form class="form-comment-force-delete" method="post" action="{{ route('comment.force-destroy', $comment->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark btn-sm">Supprimer définitivement</button>
                                @if($comment->deleted_at)
                                    <br>
                                    <small class="text-xs .text-danger">Mise en corbeille : {{ $comment->deleted_at }}</small>
                                @endif
                            </form>
                            <form class="d-inline" method="post" action="{{ route('comment.restore', $comment->id) }}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success btn-sm">Restaurer</button>
                            </form>
                        @else
                            <form class="d-inline form-comment-delete" method="post" action="{{ route('comment.destroy', $comment->id) }}">
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
                $('.form-comment-force-delete').on('submit', function(event) {
                    if (!confirm('Êtes vous certain ? Action définitive.')) {
                        event.preventDefault();
                    }
                })
            }
        )
    </script>
@endsection

