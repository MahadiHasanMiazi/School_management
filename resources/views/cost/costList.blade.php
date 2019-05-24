<html>
<head>

</head>
<body>
<div id="wrapper">

    @extends('layout.side-bar')
    <div class="container">
        <div class="row col-md-10 col-md-offset-1 custyle student-list">
            <div class="topnav">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Total cost list</h2>
                    </div >
                    <div class=" col-md-2 col-md-offset-6">
                        <button class="btn btn-info" onclick="HTMLtoPDF()">Download PDF</button>
                    </div>
                </div>
                <div class="search-container">
                <form>
                    @csrf
                    <input type="text" placeholder="Search.." onkeyup="searchByAnything()" name="search" id="search">
                    {{--<button type="submit"><i class="fa fa-search"></i></button>--}}
                </form>
                </div>
                <form method="post" action="">
                    @csrf
                    <div class="form-group col-md-3" style="margin-top: -2%; margin-bottom: 0px;">
                        <label>Start Date</label>
                        <input type="date" class="form-control" value="{{$start_date}}" placeholder="Start Date" name="start_date">
                    </div>
                    <div class="form-group col-md-3" style="margin-top: -2%; margin-bottom: 0px;">
                        <label>End Date</label>
                        <input type="date" class="form-control" value="{{$end_date}}" placeholder="End Date" name="end_date">
                    </div>
                    <div class="form-group col-md-2" style="margin-top: -2%; margin-bottom: 0px;">
                        <input type="submit" class="btn btn-success" style="margin-top: 21%;" value="Search">
                    </div>
                </form>
            </div>
            <div id="HTMLtoPDF">
            <table class="table table-striped custab" id="HTMLtoPDF">
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
                <tbody id="show_costs">
                @foreach($costs as $cost)
                    <tr>
                        <td>{{$cost->cost_reason}}</td>
                        <td>{{$cost['amount']}}</td>
                        <td>{{$cost['date']}}</td>
                    </tr>
                        {{--<td></td>--}}
                        {{--<td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="{{route('teacher.delete', $teacher->id)}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Delete</a> <a class='btn btn-success btn-xs' href="{{route('teacher.details', $teacher->id)}}"><span class="glyphicon glyphicon-user"></span> Details</a></td>--}}

                    @endforeach
                </tbody>

            </table>
            </div>



        </div>
    </div>

</div>

{{--<script src="{{asset('js/htmlToPdf/jquery-2.1.3.js')}}"></script>--}}
{{--<script src="{{asset('js/htmlToPdf/jspdf.js')}}"></script>--}}
{{--<script src="{{asset('js/htmlToPdf/pdfFromHTML.js')}}"></script>--}}
<script>

    function searchByAnything() {
        var value = $("#search").val();

        $.ajax({
            type:'GET',
            url:"http://127.0.0.1:8000/cost/search",
            data: {
                value: value
            },
            success: function(result){
                var costs = '';
                result.forEach(function (cost) {
                    costs += " <tr>\n" +
                        "                        <td>"+cost.cost_reason+"</td>\n" +
                        "                        <td>"+cost.amount+"</td>\n" +
                        "                        <td>"+cost.date+"</td>\n" +
                        "                    </tr>";
                    
                });
                $("#show_costs").html(costs);

            }


        });

    }
</script>
</body>
</html>