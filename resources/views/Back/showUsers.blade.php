@extends('Back.layout')
@section('css')

@endsection


@section('main')

<table class="table table-info " style="position:center" border="2">
    <tr>
        <th > Name</th>
        <th> Mail</th>
        <th> Actions  </th>
    </tr>

    @foreach($Users   as $User)
        <tr>
            <td>   {{ $User->name }}    </td>
            <td>   {{ $User->email }}    </td>
            <td>
{{--           <td> <a href="{{action('UsersController@edit', $User['id'])}}" class="btn btn-warning">Edit</a></td>--}}
{{--            <form method="post" class="delete_form" action="{{ url('/deleteUser', ['id' => $User->id])}}">--}}
                {{csrf_field()}}
                <a href="{{ url('/deleteUser', ['id' => $User->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>

                <a href="{{url('/editUser', ['id' => $User->id])}}" class="btn btn-warning">Edit</a>
{{--                <input class="btn btn-default" type="submit" value="Delete" >--}}
                {{--<form method="post" action="{{ url('/deleteUser', ['id' => $User->id]) }}">
--}}{{--                    <input class="btn btn-default" type="submit" value="Edit" >--}}{{--
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input class="btn btn-default" type="submit" value="Delete" >--}}

                </form>


        </tr>
    @endforeach

</table>
<div class="col-sm-6">
    <label class="m-0 text-dark text-lg">Add Users</label>
    <form method="GET" action="{{ route('addUser') }}">
        @csrf
        <button style="margin:5px"  type="submit" class="btn btn-primary btn-sm" >
            {{ __('add User') }}
        </button>
    </form>
</div>
</div>
@endsection
@section('script')
<script>
    $('.delete-user').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>
@endsection
