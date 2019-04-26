<html>
<head>
    
    
    

</head>
<body>
<div id="wrapper">

    
    <div class="container">
        <div class="row col-md-10 col-md-offset-1 custyle student-list">
            <div class="topnav">
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <table class="table table-striped custab">
                <thead>
                <a href="<?php echo e(route('add.teacher')); ?>" class="btn btn-primary btn-xs pull-right"><b>+</b> Add Teacher</a>
                <tr>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Date of Birth</th>
                    <th>Mobile number</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($teacher->name); ?></td>
                    <td><?php echo e($teacher->subject); ?></td>
                    <td><?php echo e($teacher->dob); ?></td>
                    <td><?php echo e($teacher->mobile); ?></td>
                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="<?php echo e(route('teacher.delete', $teacher->id)); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Delete</a> <a class='btn btn-success btn-xs' href="<?php echo e(route('teacher.details', $teacher->id)); ?>"><span class="glyphicon glyphicon-user"></span> Details</a></td>
                </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </table>
        </div>
    </div>

</div>




</body>
</html>




<?php echo $__env->make('layout.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>