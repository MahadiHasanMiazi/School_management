<div id="wrapper">
    
    <div class="container">
        <div class="total-accounts col-md-10 col-md-offset-2">
            <div class="under-body">
                <button class="btn btn-info col-md-offset-10" onclick="HTMLtoPDF()">Download Pdf</button>
                <form method="post" action="">
                    <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label>Start Date</label>
                        <input type="date" class="form-control" value="<?php echo e($start_date); ?>" placeholder="Start Date" name="start_date">
                    </div>
                    <div class="form-group col-md-3">
                        <label>End Date</label>
                        <input type="date" class="form-control" value="<?php echo e($end_date); ?>" placeholder="End Date" name="end_date">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="submit" class="btn-success" style="margin-top: 30%;" value="Search">
                    </div>
                </div>
                </form>
                <div id="HTMLtoPDF">
                    <div class="row ">
                        <h1 class="col-md-6">Total Fees: </h1>
                        <h1 class="col-md-3"><?php echo e($fees); ?></h1>
                    </div><br>

                    <div class="row ">
                        <h1 class="col-md-6">Total Cost: </h1>
                        <h1 class="col-md-3"><?php echo e($cost); ?></h1>
                    </div><hr>
                    <div class="row ">
                        <h1 class="col-md-6">Total Profit: </h1>
                        <h1 class="col-md-3"><?php echo e($sum); ?></h1>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<?php echo $__env->make('layout.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>