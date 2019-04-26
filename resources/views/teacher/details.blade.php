{{--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>--}}
{{--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}
<!------ Include the above in your HEAD tag ---------->
<div id="wrapper">
    @extends('layout.side-bar')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-3" style="margin-top: 5%;">
            <div class="well well-sm">
                <div class="row">
                    {{--<div class="col-sm-6 col-md-4">--}}
                        {{--<img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />--}}
                    {{--</div>--}}
                    <div class="col-sm-6 col-md-8">
                        <h4 style="text-align: center">{{$teacher->name}}</h4><br>
                        <div class="col-md-12">
                            <label class="col-md-3">Subject</label>
                            <label class="col-md-1">:</label>
                            <p class="col-md-6">{{$teacher->subject}}</p>

                        </div>
                        <div class="col-md-12">
                            <label class="col-md-3">Mobile</label>
                            <label class="col-md-1">:</label>
                            <p class="col-md-6">{{$teacher->mobile}}</p>

                        </div>
                        <div class="col-md-12">
                            <label class="col-md-3">NID</label>
                            <label class="col-md-1">:</label>
                            <p class="col-md-6">{{$teacher->nid}}</p>

                        </div>
                        <div class="col-md-12">
                            <label class="col-md-3">Date of Birth</label>
                            <label class="col-md-1">:</label>
                            <p class="col-md-6">{{$teacher->dob}}</p>

                        </div>
                        <div class="col-md-12">
                            <label class="col-md-3">Salary</label>
                            <label class="col-md-1">:</label>
                            <p class="col-md-6">{{$teacher->salary}}</p>

                        </div>
                        <div class="col-md-12">
                            <label class="col-md-3">Gender</label>
                            <label class="col-md-1">:</label>
                            <p class="col-md-6">{{$teacher->gender}}</p>

                        </div>




                        <!-- Split button -->

                    </div>
                   <div style="margin-top: 15%;">
                       <div class="col-md-4">
                           <button class="btn-success" id="addSalaryFormButton" onclick="giveSalary({{$teacher->id}})">Give salary</button>
                       </div>
                       <form method="post">
                           @csrf

                           <div id="salaryForm" class="col-md-4">

                           </div>
                       </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function giveSalary(id) {
        console.log(id);
        var addSalary = " <div id=\"salaryForm\">\n" +
            "                            <input type=\"number\" placeholder=\"Amount of Salary\" required name=\"salary\" class=\"form-control\">\n" +
            "                            <input type=\"submit\" value=\"Submit\" class=\"btn-success\">\n" +
            "                        </div>";
        $('#salaryForm').append(addSalary);
        $('#addSalaryFormButton').hide();

    }
</script>