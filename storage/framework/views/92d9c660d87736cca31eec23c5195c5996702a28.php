<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="<?php echo e(asset('css/student-list.css')); ?>" rel="stylesheet" type="text/css">

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
            <a href="<?php echo e(route('add.student')); ?>" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new student</a>
            <button class="btn btn-info" onclick="HTMLtoPDF()">Download PDF</button>
            <div id="HTMLtoPDF">
            <table class="table table-striped custab">
                <thead>

                <tr>
                    <th>Roll</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Address</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($student->roll_no); ?></td>
                    <td><?php echo e($student->name); ?></td>
                    <td><?php echo e($student->class_name); ?></td>
                    <td><?php echo e($student->address); ?></td>
                    <td class="text-center"><a class='btn btn-info btn-xs' href="<?php echo e(route('student.edit', $student->id)); ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="<?php echo e(route('student.delete', $student->id)); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Delete</a> <a class='btn btn-success btn-xs' href="<?php echo e(route('student.show', $student->id)); ?>"><span class="glyphicon glyphicon-user"></span> Details</a></td>
                </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>
            </div>

        </div>
    </div>
    </div>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    
    </body>
</html>




<?php echo $__env->make('layout.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>