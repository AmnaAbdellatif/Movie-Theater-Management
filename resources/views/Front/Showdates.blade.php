@extends("layouts.app")


@section('header')
    <title>Avant-toi-dispo</title>
@endsection
@section('content')
    <table class=" table  table-sm">
        <caption>
            <h4 style="color: #bb7b29">Available dates for: Before you</h4>  </br>
            </br>
        </caption>


        <thead class="table-info">
        <tr>

            <th class="table-danger">Date</th>
            <th>Time</th>
            <th>salle</th>
            <th>Book a ticket</th>
        </tr>

        <tbody>
        @foreach($dateprojection   as $dateprojection)
            <tr>
                <td >   {{ $dateprojection->date }}    </td>
                <td>   {{ $dateprojection->time }}    </td>
                <td>   {{ $dateprojection->salle }}    </td>
                <td> <a href="/reservation" class="movie-link">Book</a></td>
                <form method="post" class="delete_form" action="{{ url('/reservation')}}">
                    {{csrf_field()}}
{{--                    <input class="btn btn-default" type="submit" value="Book" >--}}

                </form>




            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
