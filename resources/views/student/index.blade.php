<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{asset('css/student-list.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body>
    <div id="wrapper">

    @extends('layout.side-bar')
    <div class="container">
        <div class="row col-md-10 col-md-offset-1 custyle student-list">
            <div class="topnav">
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>

            </div>
            <a href="{{route('add.student')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new student</a>
            <button class="btn btn-info" onclick="HTMLtoPDF()">Download PDF</button>
            <div id="HTMLtoPDF">
            <table class="table table-striped custab">
                <thead>

                <tr>
                    <th>Roll</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Address</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                @foreach($students as $student)
                <tr>
                    <td>{{$student->roll_no}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->class_name}}</td>
                    <td>{{$student->address}}</td>
                    <td class="text-center"><a class='btn btn-info btn-xs' href="{{route('student.edit', $student->id)}}"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="{{route('student.delete', $student->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Delete</a> <a class='btn btn-success btn-xs' href="{{route('student.show', $student->id)}}"><span class="glyphicon glyphicon-user"></span> Details</a></td>
                </tr>
                    @endforeach

            </table>
            </div>

        </div>
    </div>
    </div>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    {{--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}
    </body>
</html>



