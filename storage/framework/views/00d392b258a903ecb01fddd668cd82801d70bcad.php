<html>
<head>

</head>
<body>
<h2>jkfdhsdkjfhkh</h2>
<div id="wrapper">

    
    <div class="container" style="margin-top: -5%;">
        <div class="row col-md-10 col-md-offset-1 custyle student-list">
            <div class="topnav">
                <div class="row">
                    <div style="background-color: #47A447; margin-top: -1%;">
                        <h2 style="text-align: center; color: white;">Students Fees</h2>
                    </div>
                    <div class="col-md-offset-10">
                        <button class="btn btn-info" onclick="HTMLtoPDF()">Download PDF</button>
                    </div>

                </div>
                
                
                
                
                
                
                
                <div class="row">
                    <div >

                        <form method="post" action="" style="margin-top: -3%;">
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
                                <input type="submit" class="btn btn-success" style="margin-top: 21%;" value="Search">
                            </div>
                        </form>
                    </div>

                    <form>
                        <?php echo csrf_field(); ?>
                        <div class="col-md-3" style="margin-top: 1%;">
                            <input type="hidden" value="<?php echo e($class); ?>" id="className" name="className">

                            <select class="form-control" name="selectClass" style="margin-top: 5%;" id="selectClass"  onchange="javascript:handleSelect(this)">
                                <option>Select Section</option>
                                <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($section->name); ?>"><?php echo e($section->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                        </div>
                    </form>
                </div>


            </div>
            <div id="HTMLtoPDF" style="margin-top: -3%;">
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
                    <tbody>
                    <?php $__currentLoopData = $fees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($fee->roll_number); ?></td>
                            <td><?php echo e($fee->name); ?></td>
                            <td><?php echo e($fee->class); ?></td>
                            <td><?php echo e($fee->section); ?></td>
                            <td><?php echo e($fee->month_of_fees); ?></td>
                            <td><?php echo e($fee->year); ?></td>
                            <td><?php echo e($fee->amount); ?></td>

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

        $.ajax({
            type:'GET',
            url: 'fees/list/search',
            data: {
                value: value,

            },
            success: function(result){
                console.log(result)
                var costs = '';
                // result.forEach(function (cost) {
                //     costs += " <tr>\n" +
                //         "                        <td>"+cost.cost_reason+"</td>\n" +
                //         "                        <td>"+cost.amount+"</td>\n" +
                //         "                        <td>"+cost.date+"</td>\n" +
                //         "                    </tr>";
                //
                // });
                // $("#show_costs").html(costs);

            }


        });

    }

    function handleSelect(elm)
    {
        var className = $("#className").val();
        console.log(className);
        console.log(elm.value);
        window.location = '/student/fees/list/'+className + '/' + elm.value;
    }
</script>
</body>
</html>
<?php echo $__env->make('layout.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>