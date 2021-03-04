@extends('Back.layout')
@section('css')

@endsection

@section('main')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Update User's Information</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <form method="get" action="{{ route('updateUser',['id' => $user->id])}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Name</label>
                        <div class="col-md-6">
                            <input type="text"  name="name" value="{{$user-> name}}"   class="form-control">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">email</label>
                        <div class="col-md-6"
                        >
                            <input type="text"  name="email"  value="{{$user-> email}}"  class="form-control">

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Save">

                </div>

            </form>
        </div>

    </section>

@endsection
