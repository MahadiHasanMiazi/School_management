<html>
<head>

</head>
<body>
<h2>jkfdhsdkjfhkh</h2>
<div id="wrapper">

    
    <div class="container">
        <div class="row col-md-10 col-md-offset-1 custyle student-list">
            <div class="topnav">
                <h2>Students Fees</h2>
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
                    <th>Roll Number</th>
                    <th>Name</th>
                    <th>Class </th>
                    <th>Section </th>
                    <th>Month of Fees </th>
                    <th>Year </th>
                    <th>Amount </th>
                    
                    
                </tr>
                </thead>
                    <?php $__currentLoopData = $fees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($fee->roll_no); ?></td>
                        <td><?php echo e($fee->name); ?></td>
                        <td><?php echo e($fee->class); ?></td>
                        <td><?php echo e($fee->section); ?></td>
                        <td><?php echo e($fee->month_of_fees); ?></td>
                        <td><?php echo e($fee->year); ?></td>
                        <td><?php echo e($fee->amount); ?></td>
                        
                        
                    </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





            </table>

        </div>
    </div>

</div>
</body>
</html>
<?php echo $__env->make('layout.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>