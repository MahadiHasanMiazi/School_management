<div id="wrapper">
    
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-3 body" style="margin-top: 5%;">
            <div class="well well-sm">
                <div class="row">
                    
                        
                    
                    <div class="col-sm-6 col-md-8">
                        <div style="margin-left: 10%;">
                            <img src="<?php echo e(asset($teacher->image)); ?>" style="width: 120px; height: 120px; border-radius: 50%;">
                        </div>
                        <div>
                            <h2 style="margin-left: 10%;"><?php echo e($teacher->name); ?></h2><br>
                        </div>
                        <div class="col-md-12">
                            <label class="col-md-3">Subject</label>
                            <label class="col-md-1">:</label>
                            <p class="col-md-6"><?php echo e($teacher->subject); ?></p>

                        </div>
                        <div class="col-md-12">
                            <label class="col-md-3">Mobile</label>
                            <label class="col-md-1">:</label>
                            <p class="col-md-6"><?php echo e($teacher->mobile); ?></p>

                        </div>
                        <div class="col-md-12">
                            <label class="col-md-3">NID</label>
                            <label class="col-md-1">:</label>
                            <p class="col-md-6"><?php echo e($teacher->nid); ?></p>

                        </div>
                        <div class="col-md-12">
                            <label class="col-md-3">Date of Birth</label>
                            <label class="col-md-1">:</label>
                            <p class="col-md-6"><?php echo e($teacher->dob); ?></p>

                        </div>
                        <div class="col-md-12">
                            <label class="col-md-3">Salary</label>
                            <label class="col-md-1">:</label>
                            <p class="col-md-6"><?php echo e($teacher->salary); ?></p>

                        </div>
                        <div class="col-md-12">
                            <label class="col-md-3">Gender</label>
                            <label class="col-md-1">:</label>
                            <p class="col-md-6"><?php echo e($teacher->gender); ?></p>

                        </div>




                        <!-- Split button -->

                    </div>
                   <div style="margin-top: 15%;">
                       <div class="col-md-4">
                           <button class="btn-success" id="addSalaryFormButton" onclick="giveSalary(<?php echo e($teacher->id); ?>)">Give salary</button>
                       </div>
                       <form method="post">
                           <?php echo csrf_field(); ?>

                           <div id="salaryForm" class="col-md-4">

                           </div>
                       </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function giveSalary(id) {
        console.log(id);
        var addSalary = " <div id=\"salaryForm\">\n" +
            "                            <input type=\"number\" placeholder=\"Amount of Salary\" required name=\"salary\" class=\"form-control\">\n" +
            "                            <input type=\"submit\" value=\"Submit\" class=\"btn-success\">\n" +
            "                        </div>";
        $('#salaryForm').append(addSalary);
        $('#addSalaryFormButton').hide();

    }
</script>
<?php echo $__env->make('layout.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>