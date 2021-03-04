@extends('Back.layout')
@section('css')

@endsection

@section('main')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Movie</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <form method="post" action="{{ route('addFilm') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Title</label>
                        <div class="col-md-6">
                            <input type="text"  name="name"   class="form-control">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Duree</label>
                        <div class="col-md-6"
                        >
                            <input type="text"  name="duree"   class="form-control">

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Realisateur</label>
                        <div class="col-md-6">
                            <input type="text"  name="realisateur"   class="form-control">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-3">Categorie</label>
                        <div class="col-md-6">
                            <input type="text"  name="categorie"   class="form-control">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="input-group">
{{--                    <div class="row">--}}
                    <div class="custom-file">
{{--                        <label class="col-md-3">Image</label>--}}
                        <input type="file"  name="image"   class="custom-file-input">
                        <label class="custom-file-label">choose file</label>

                        </div>
                        <div class="clearfix"></div>
                    </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>

    </section>
@endsection



