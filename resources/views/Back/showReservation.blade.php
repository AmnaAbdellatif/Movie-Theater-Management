@extends('Back.layout')
@section('css')

@endsection

@section('main')


    <table class="table table-info  " style="margin:10px" border="2">
        <tr>
            <th> Nom film</th>
            <th> Nom Reservation</th>
            <th> Date</th>
            <th> Time</th>
            <th> salle</th>
            <th> QuantitéEt</th>
            <th> QuantitéSc</th>
            <th> Total</th>
            <th> Actions</th>
        </tr>

        @foreach($reservations ?? ''  as $res)
            <tr>
                <td>   {{ $res->name }}    </td>
                <td>   {{ $res->username }}    </td>
                <td>   {{ $res->date }}    </td>
                <td>   {{ $res->time }}    </td>
                <td>   {{ $res->salle }}    </td>
                <td>   {{ $res->quantity }}    </td>
                <td>   {{ $res->quantityS }}    </td>
                <td>   {{ $res->total }}    </td>


                <td>

                    <a  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this film?');">Delete</a>
                    {{--                    <input class="btn btn-default" type="submit" value="Delete" >--}}
                    <a  class="btn btn-warning">Edit</a>
                    {{--                </form>--}}
                    {{-- <form method="post" action="{{ url('/deleteFilm', ['id' => $film->id]) }}">

                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <input class="btn btn-default" type="submit" value="Delete" />
                     </form>--}}
                </td>

            </tr>
        @endforeach
    </table>
  {{--  <div class="col-sm-6">
        <label class="m-0 text-dark text-lg">Add Movies</label>
        <form method="GET" action="{{ route('addFilm') }}">
            @csrf
            <button style="margin:5px"  type="submit" class="btn btn-primary btn-sm" >
                {{ __('Add Movies') }}
            </button>
        </form>
    </div>--}}

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
