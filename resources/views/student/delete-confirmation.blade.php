<div id="wrapper">
    @extends('layout.side-bar')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-3 body" style="margin-top: 5%;">
                <div class="well well-sm">
                    <div class="row">
                        {{--<div class="col-sm-6 col-md-4">--}}
                        {{--<img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />--}}
                        {{--</div>--}}
                        <div class="col-sm-6 col-md-8">
                            <h2 style="color: red"> Are you sure, you want to delete this student ?</h2>
                            <h4 style="text-align: center"><b>{{$student->name}}</b></h4><br>
                            <div class="col-md-12">
                                <label class="col-md-4">Roll number</label>
                                <label class="col-md-1">:</label>
                                <p class="col-md-6">{{$student->roll_no}}</p>

                            </div>
                            <div class="col-md-12">
                                <label class="col-md-4">Class</label>
                                <label class="col-md-1">:</label>
                                <p class="col-md-6">{{$student->class_name}}</p>

                            </div>
                            <div class="col-md-12">
                                <label class="col-md-4">Father's Name</label>
                                <label class="col-md-1">:</label>
                                <p class="col-md-6">{{$student->Father_name}}</p>

                            </div>
                            <div class="col-md-12">
                                <label class="col-md-4">Mother' Name</label>
                                <label class="col-md-1">:</label>
                                <p class="col-md-6">{{$student->mother_name}}</p>

                            </div>
                            <div class="col-md-12">
                                <label class="col-md-4">Date of Birth</label>
                                <label class="col-md-1">:</label>
                                <p class="col-md-6">{{$student->DOB}}</p>

                            </div>
                            <div class="col-md-12">
                                <label class="col-md-4">Address</label>
                                <label class="col-md-1">:</label>
                                <p class="col-md-6">{{$student->address}}</p>

                            </div>
                            <div class="col-md-12">
                                <label class="col-md-4">Mobile</label>
                                <label class="col-md-1">:</label>
                                <p class="col-md-6">{{$student->mobile}}</p>

                            </div>
                            <div class="col-md-12">
                                <label class="col-md-4">Admission Date</label>
                                <label class="col-md-1">:</label>
                                <p class="col-md-6">{{$student->admission_date}}</p>

                            </div>

                            <div class="col-md-12 col-md-offset-3">
                               <a href="{{route('student.confirm.delete',$student->id)}}" class=" btn btn-danger">Confirm Delete</a>
                            </div>




                            <!-- Split button -->

                        </div>
                        {{--<div style="margin-top: 15%;">--}}
                        {{--<div class="col-md-4">--}}
                        {{--<button class="btn-success" id="addSalaryFormButton" onclick="giveSalary()">Give salary</button>--}}
                        {{--</div>--}}
                        {{--<form method="post">--}}
                        {{--@csrf--}}

                        {{--<div id="salaryForm" class="col-md-4">--}}

                        {{--</div>--}}
                        {{--</form>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<script>--}}
{{--function giveSalary(id) {--}}
{{--console.log(id);--}}
{{--var addSalary = " <div id=\"salaryForm\">\n" +--}}
{{--"                            <input type=\"number\" placeholder=\"Amount of Salary\" required name=\"salary\" class=\"form-control\">\n" +--}}
{{--"                            <input type=\"submit\" value=\"Submit\" class=\"btn-success\">\n" +--}}
{{--"                        </div>";--}}
{{--$('#salaryForm').append(addSalary);--}}
{{--$('#addSalaryFormButton').hide();--}}

{{--}--}}
{{--</script>--}}