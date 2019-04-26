<html>
<head>

</head>
<body>
<div id="wrapper">

    @extends('layout.side-bar')
    <div class="container">
        <div class="row col-md-10 col-md-offset-1 custyle student-list">
            <div class="topnav">
                <h2>Total cost list</h2>
                <form method="post" action="">
                    @csrf
                    {{--<div class="search-container">--}}
                    {{--<form action="/action_page.php">--}}
                    {{--<input type="text" placeholder="Search.." name="search">--}}
                    {{--<button type="submit"><i class="fa fa-search"></i></button>--}}
                    {{--</form>--}}
                    {{--</div>--}}
                    <div class="form-group col-md-3">
                        <label>Start Date</label>
                        <input type="date" class="form-control" value="{{$start_date}}" placeholder="Start Date" name="start_date">
                    </div>
                    <div class="form-group col-md-3">
                        <label>End Date</label>
                        <input type="date" class="form-control" value="{{$end_date}}" placeholder="End Date" name="end_date">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="submit" class="btn-success" style="margin-top: 21%;" value="Search">
                    </div>
                </form>
            </div>

            <table class="table table-striped custab">
                <thead>
{{--                <a href="{{route('add.teacher')}}" class="btn btn-primary btn-xs pull-right"><b>+</b> Add Teacher</a>--}}
                <tr>
                    <th>Cost Reason</th>
                    <th>Amount</th>
                    <th>Date </th>
                    {{--<th>Mobile number</th>--}}
                    {{--<th class="text-center">Action</th>--}}
                </tr>
                </thead>
                @foreach($costs as $cost)
                    <tr>
                        <td>{{$cost['cost_reason']}}</td>
                        <td>{{$cost['amount']}}</td>
                        <td>{{$cost['date']}}</td>
                        {{--<td></td>--}}
                        {{--<td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="{{route('teacher.delete', $teacher->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Delete</a> <a class='btn btn-success btn-xs' href="{{route('teacher.details', $teacher->id)}}"><span class="glyphicon glyphicon-user"></span> Details</a></td>--}}
                    </tr>
                    @endforeach




            </table>
            <?php echo $costs->render(); ?>
        </div>
    </div>

</div>
</body>
</html>