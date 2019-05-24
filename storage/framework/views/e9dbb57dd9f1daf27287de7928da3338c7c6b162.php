<div id="wrapper">

<div id="page-wrapper">
    <div class="container-fluid">
        <?php if(session()->has('message.level')): ?>
            <div class="alert alert-<?php echo e(session('message.level')); ?>">
                <?php echo session('message.content'); ?>

            </div>
        <?php endif; ?>
        <!-- Page Heading -->
        <div class="row" id="main" >
            <div class="col-sm-12 col-md-12 well" id="content">
                <h1>Welcome Admin!</h1>
                <h2>Zaman Model Academy</h2>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
</div>
<?php echo $__env->make('layout.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>