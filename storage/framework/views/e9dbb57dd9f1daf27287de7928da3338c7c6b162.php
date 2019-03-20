<div id="wrapper">

<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row" id="main" >
            <div class="col-sm-12 col-md-12 well" id="content">
                <h1>Welcome Admin!</h1>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
</div>
<?php echo $__env->make('layout.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>