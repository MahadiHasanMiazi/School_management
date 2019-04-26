<html>
<head>
    <link href="<?php echo e(asset('css/cost-profit.css')); ?>" rel="stylesheet" type="text/css">

</head>
<body>
    <div id="wrapper">
        
        <div class="container">
            <div class="total-accounts col-md-10 col-md-offset-1">
                <div>
                    <h1>Total Fees: <?php echo e($costs); ?></h1>
                </div><br>
                <div>
                    <h1>Total Cost</h1>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
<?php echo $__env->make('layout.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>