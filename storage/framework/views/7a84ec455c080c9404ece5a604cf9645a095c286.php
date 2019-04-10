<html>
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo e(asset('css/adminRegistration.css')); ?>" rel="stylesheet" type="text/css">
</head>

<body>
<div class="wrapper">
    
<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-6 col-md-10 col-sm-offset-2 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><b>Students Fees</b></h3>
                </div>
                <div class="panel-body">

                    <form method="post" action="#" enctype="multipart/form-data">
                       <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Class</label>
                                <select class="form-control" name="selectClass" id="selectClass" required>
                                    <option>Select Class</option>
                                    <?php $__currentLoopData = $classNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $className): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($className['id']); ?>"><?php echo e($className['name']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Section</label>
                                <select class="form-control" name="selectSection" id="selectSection" required>
                                    <option>Section</option>
                                    
                                    
                                    
                                        
                                    
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Month of Fees</label>
                                <select class="form-control" name="month" required>
                                    <option>Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Year</label>
                                <input type="number" class="form-control" name="year" placeholder="Year" required >

                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Roll Number</label>
                                <input type="number" class="form-control" name="roll_number" placeholder="Roll Number" required>
                            </div>
                            <div class="col-md-4">
                                <label>Student Name</label>
                                <input type="text" class="form-control" name="student_name" placeholder="Student Name" required>
                            </div>
                            <div class="col-md-4">
                                <label>Amount</label>
                                <input type="number" class="form-control" name="amount_of_fees" placeholder="Amount of Fees" required>
                            </div>

                        </div>

                        <br>
                        <input type="submit" value="Submit" class="btn btn-info btn-block">
                        <label style="color: darkred;"><?php echo e($errorMessage); ?></label>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script>

    $('#selectClass').change(function () {
        var classValue = $(this).val();
        $.ajax({
            type: 'GET',
            url: "http://127.0.0.1:8000/students/class",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data : {
                classValue : classValue

            },
            success: function(result){
                // console.log(result);
                var sectionValues = '';
                result.forEach(function (sectionValue) {

                    sectionValues += "<option value='" + sectionValue.id + "'>" + sectionValue.name + "</option>";
                });
                $('#selectSection').html(sectionValues);

            },
            error: function (error) {
                // console.log(error)
            }


        });
        
    })

</script>
</body>

</html>
<?php echo $__env->make('layout.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>