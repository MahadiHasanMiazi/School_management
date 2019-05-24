<div id="wrapper">
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-sm-6 ">

                <div class="body-area col-md-10 col-md-offset-4">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="">
                        <?php echo csrf_field(); ?>
                        <div class="header-top">
                            <h2>Change Password</h2>
                        </div>
                        <div class="form-group">
                            <label>Old Password <span style="color: red">* <?php echo e($message); ?></span></label>
                            <input type="text" name="old-pass" id=" old-pass" class="form-control" placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="text" name="new-pass" id=" new-pass" class="form-control" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="text" name="con-pass" id="con-pass" class="form-control" placeholder="Confirm Password" required>
                        </div>

                        <div class="form-group">

                            <input type="submit"  class="btn btn-success form-control" value="Change Password">
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>

    </div>

</div>
<?php echo $__env->make('layout.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>