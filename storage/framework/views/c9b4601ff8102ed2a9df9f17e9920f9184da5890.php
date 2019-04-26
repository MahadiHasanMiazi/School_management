<html>
<head>

</head>
<body>
<div id="wrapper">

    
    <div class="container">
        <div class="row col-md-10 col-md-offset-1 custyle student-list">
            <div class="topnav">
                <h2>Total cost list</h2>
                <form method="post" action="">
                    <?php echo csrf_field(); ?>
                    
                    
                    
                    
                    
                    
                    <div class="form-group col-md-3">
                        <label>Start Date</label>
                        <input type="date" class="form-control" value="<?php echo e($start_date); ?>" placeholder="Start Date" name="start_date">
                    </div>
                    <div class="form-group col-md-3">
                        <label>End Date</label>
                        <input type="date" class="form-control" value="<?php echo e($end_date); ?>" placeholder="End Date" name="end_date">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="submit" class="btn-success" style="margin-top: 21%;" value="Search">
                    </div>
                </form>
            </div>

            <table class="table table-striped custab">
                <thead>

                <tr>
                    <th>Cost Reason</th>
                    <th>Amount</th>
                    <th>Date </th>
                    
                    
                </tr>
                </thead>
                <?php $__currentLoopData = $costs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($cost['cost_reason']); ?></td>
                        <td><?php echo e($cost['amount']); ?></td>
                        <td><?php echo e($cost['date']); ?></td>
                        
                        
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




            </table>
            <?php echo $costs->render(); ?>
        </div>
    </div>

</div>
</body>
</html>
<?php echo $__env->make('layout.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>