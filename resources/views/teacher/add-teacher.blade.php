<html>
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{asset('css/add-student.css')}}" rel="stylesheet" type="text/css">


</head>
<body>
<div id="wrapper">
    @extends('layout.side-bar')
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title">Add Teacher Information</h3>
                    </div>
                    <div class="panel-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="teacher_name" id= "teacher_name" required class="form-control input-sm" placeholder="Teacher Name">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" id="subject" required class="form-control input-sm" placeholder="Subject">
                                    </div>
                                </div>
                            </div>

                            {{--<div class="form-group">--}}
                            {{--<input type="date" name="dob" id="dob" required class="form-control input-sm" placeholder="Date of Birth">--}}
                            {{--</div>--}}
                            <div class="row">

                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="date" name="dob" id="dob" required class="form-control input-sm" placeholder="Date of Birth">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="number" name="nid" id="nid" required class="form-control input-sm" placeholder="National Id number">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="number" name="monthly_salary" id="monthly_salary" required class="form-control input-sm" placeholder="Monthly salary">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="number" name="mobile_number" id="mobile_number" required class="form-control input-sm" placeholder="Mobile Number">
                                    </div>
                                </div>
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<textarea class="form-control input-sm" placeholder="Address" name="address" required></textarea>--}}
                            {{--</div>--}}
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        {{--<label>Upload Picture</label>--}}
                                        <input type="file" name="TeacherImage" class="form-control">
                                    </div>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label><input type="radio" name="gender" value="Male" checked>Male</label>
                                        <label><input type="radio" name="gender" value="Female" >Female</label>
                                    </div>
                                </div>

                            </div>

                            <input type="submit" value="Add Teacher" class="btn btn-info btn-block">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>
