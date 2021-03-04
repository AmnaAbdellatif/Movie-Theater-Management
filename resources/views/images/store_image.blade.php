<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Image into Mysql Database in Laravel 6</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <br />
    <h3 align="center">Insert Image into Mysql Database in Laravel 6</h3>
    <br />
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <br />

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">User Form</h3>
        </div>
        <div class="panel-body">
            <br />
            <form method="post" action="{{ url('store_image/insert_image') }}"  enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <div class="row">
                        <label class="col-md-4" align="right">Select Image</label>
                        <div class="col-md-8">
                            <input type="file" name="image" />
                        </div>
                    </div>
                </div>
                <div class="form-group" align="center">
                    <br />
                    <br />
                    <input type="submit" name="store_image" class="btn btn-primary" value="Save" />
                </div>
            </form>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">User Data</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th width="30%">Image</th>
                    </tr>
                    @foreach($data as $row)
                        <tr>
                            <td>
                                <img src="store_image/fetch_image/{{ $row->id }}"  class="img-thumbnail" width="75" />
                            </td>
                        </tr>
                    @endforeach
                </table>
                {!! $data->links() !!}
            </div>
        </div>
    </div>
</div>
</body>
</html>
