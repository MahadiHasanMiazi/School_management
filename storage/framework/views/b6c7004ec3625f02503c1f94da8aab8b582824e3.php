<html>
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo e(asset('css/add-student.css')); ?>" rel="stylesheet" type="text/css">


</head>
<body>
<div id="wrapper">
    
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add Student Information</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="row">
                                        <label class="col-md-offset-1">Roll No: <?php echo e($student->roll_no); ?></label>


                                    </div>
                                    
                                        
                                    
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" value="<?php echo e($student->name); ?>" required class="form-control input-sm" placeholder="Student Name">
                                    </div>
                                </div>
                            </div>

                            
                            
                            
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="className" id="className" value="<?php echo e($student->class_name); ?>" required class="form-control input-sm" placeholder="Class">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="date" name="dob" id="dob" value="<?php echo e($student->DOB); ?>" required class="form-control input-sm" placeholder="Date of Birth">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="father_name" id="father_name" value="<?php echo e($student->Father_name); ?>" required class="form-control input-sm" placeholder="Father's Name">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="mother_name" id="mother_name" value="<?php echo e($student->mother_name); ?>" required class="form-control input-sm" placeholder="Mother's Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input-sm" placeholder="Address" name="address" required><?php echo e($student->address); ?></textarea>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-md-offset-3">
                                    <div class="form-group">
                                        <input type="number" name="mobile" id="mobile" value="<?php echo e($student->mobile); ?>" class="form-control input-sm" placeholder="Mobile Number">
                                    </div>
                                </div>
                                
                                    
                                        
                                        
                                    
                                
                            </div>

                            <input type="submit" value="Register" class="btn btn-info btn-block">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

</body>
</html>

<?php echo $__env->make('layout.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>