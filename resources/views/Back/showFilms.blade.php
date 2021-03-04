@extends('Back.layout')
@section('css')

@endsection

@section('main')


<table class="table table-info  " style="margin:10px" border="2">
<tr>
<th> Name</th>
<th> Duration</th>
<th> Realisateur</th>
<th> Categories</th>
<th> Affiche Film</th>
    <th> Actions</th>
</tr>

@foreach($films ?? ''  as $film)
        <tr>
            <td>   {{ $film->name }}    </td>
            <td>   {{ $film->duree }}    </td>
            <td>   {{ $film->realisateur }}    </td>
            <td>   {{ $film->categorie }}    </td>
            <td>   {{ $film->image }}    </td>


            <td>
                 {{-- <form method="post" action="{{ url('/allFilms', ['id' => $film->id]) }}">
                      {{csrf_field()}}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input class="btn btn-default" type="submit" value="Edit" />
                  </form>--}}
{{--                <form method="post" class="delete_form" action="{{ url('/deleteFilm', ['id' => $film->id])}}">--}}
                    {{csrf_field()}}
                    <a href="{{ url('/deleteFilm', ['id' => $film->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this film?');">Delete</a>
{{--                    <input class="btn btn-default" type="submit" value="Delete" >--}}
                    <a href="{{url('/editFilm', ['id' => $film->id])}}" class="btn btn-warning">Edit</a>
{{--                </form>--}}
                   {{-- <form method="post" action="{{ url('/deleteFilm', ['id' => $film->id]) }}">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input class="btn btn-default" type="submit" value="Delete" />
                    </form>--}}
            </td>

        </tr>
    @endforeach
</table>
<div class="col-sm-6">
    <label class="m-0 text-dark text-lg">Add Movies</label>
    <form method="GET" action="{{ route('addFilm') }}">
        @csrf
        <button style="margin:5px"  type="submit" class="btn btn-primary btn-sm" >
            {{ __('Add Movies') }}
        </button>
    </form>
</div>

{{--<script>
    $('.delete-user').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>--}}

@endsection
