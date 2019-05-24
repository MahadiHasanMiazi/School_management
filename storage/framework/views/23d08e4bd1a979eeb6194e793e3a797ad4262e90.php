<html>
<head>

</head>

<body>
<div id="wrapper">
    
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-6 col-md-8 col-sm-offset-2 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Update admin information</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="#" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name" id="first_name" value="<?php echo e($admin->first_name); ?>" class="form-control input-sm" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="last_name" id="last_name" value="<?php echo e($admin->last_name); ?>" class="form-control input-sm" placeholder="Last Name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" value="<?php echo e($admin->email); ?>" id="email" class="form-control input-sm" placeholder="Email Address" required>
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
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>
<?php echo $__env->make("layout.side-bar", \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>