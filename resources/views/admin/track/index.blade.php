@extends('/ui/layout')

<!-- Page Header -->
<header class="masthead">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Les Tracks</h1>
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
            <a href="{{ route('track.create') }}" class="btn btn-primary mb-3">Ajouter</a>
        </div>

        <table class="table table-striped mt-3">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Créé le</th>
                <th scope="col">Titre</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tracks as $track)
                <tr>
                    <th>{{ $track->id }}</th>
                    <td>
                        {{ $track->created_at }}<br/>
                        <small class="text-xs">{{ $track->updated_at }}</small>
                    </td>
                    <td>{{ $track->title }}</td>
                    <td>
                        <a href="{{ route('track.edit', $track->id) }}" class="btn btn-sm btn-primary">Editer</a>
                        @if($track->deleted_at)
                            <form class="form-track-force-delete" method="post" action="{{ route('track.force-destroy', $track->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark btn-sm">Supprimer définitivement</button>
                                @if($track->deleted_at)
                                    <br>
                                    <small class="text-xs .text-danger">Mise en corbeille : {{ $track->deleted_at }}</small>
                                @endif
                            </form>
                            <form class="d-inline" method="post" action="{{ route('track.restore', $track->id) }}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success btn-sm">Restaurer</button>
                            </form>
                        @else
                            <form class="d-inline form-track-delete" method="post" action="{{ route('track.destroy', $track->id) }}">
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
                $('.form-track-force-delete').on('submit', function(event) {
                    if (!confirm('Êtes vous certain ? Action définitive.')) {
                        event.preventDefault();
                    }
                })
            }
        )
    </script>
@endsection

