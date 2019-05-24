<html>
<head>

</head>
<body>
<div id="wrapper">

    
    <div class="container">
        <div class="row col-md-10 col-md-offset-1 custyle student-list">
            <div class="topnav">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Total cost list</h2>
                    </div >
                    <div class=" col-md-2 col-md-offset-6">
                        <button class="btn btn-info" onclick="HTMLtoPDF()">Download PDF</button>
                    </div>
                </div>
                <div class="search-container">
                <form>
                    <?php echo csrf_field(); ?>
                    <input type="text" placeholder="Search.." onkeyup="searchByAnything()" name="search" id="search">
                    
                </form>
                </div>
                <form method="post" action="">
                    <?php echo csrf_field(); ?>
                    <div class="form-group col-md-3" style="margin-top: -2%; margin-bottom: 0px;">
                        <label>Start Date</label>
                        <input type="date" class="form-control" value="<?php echo e($start_date); ?>" placeholder="Start Date" name="start_date">
                    </div>
                    <div class="form-group col-md-3" style="margin-top: -2%; margin-bottom: 0px;">
                        <label>End Date</label>
                        <input type="date" class="form-control" value="<?php echo e($end_date); ?>" placeholder="End Date" name="end_date">
                    </div>
                    <div class="form-group col-md-2" style="margin-top: -2%; margin-bottom: 0px;">
                        <input type="submit" class="btn btn-success" style="margin-top: 21%;" value="Search">
                    </div>
                </form>
            </div>
            <div id="HTMLtoPDF">
            <table class="table table-striped custab" id="HTMLtoPDF">
                <thead>

                <tr>
                    <th>Cost Reason</th>
                    <th>Amount</th>
                    <th>Date </th>
                    
                    
                </tr>
                </thead>
                <tbody id="show_costs">
                <?php $__currentLoopData = $costs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($cost->cost_reason); ?></td>
                        <td><?php echo e($cost['amount']); ?></td>
                        <td><?php echo e($cost['date']); ?></td>
                    </tr>
                        
                        

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
            </div>



        </div>
    </div>

</div>




<script>

    function searchByAnything() {
        var value = $("#search").val();
        // console.log(value);

        $.ajax({
            type:'GET',
            url:"http://127.0.0.1:8000/cost/search",
            data: {
                value: value
            },
            success: function(result){
                console.log(result);
                var costs = '';
                result.forEach(function (cost) {
                    costs += " <tr>\n" +
                        "                        <td>"+cost.cost_reason+"</td>\n" +
                        "                        <td>"+cost.amount+"</td>\n" +
                        "                        <td>"+cost.date+"</td>\n" +
                        "                    </tr>";
                    
                });
                $("#show_costs").html(costs);

            }


        });

    }
</script>
</body>
</html>
<?php echo $__env->make('layout.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>