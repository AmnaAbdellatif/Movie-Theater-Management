@extends("layouts.app")


@section('header')
    <title>FormReservation</title>
@endsection
@section('content')
   <form method="get" action="{{ route('updateUser',['id' => $user->id])}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
@endsection
