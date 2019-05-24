<div id="wrapper">
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-3 body" style="margin-top: 5%;">
                <div class="well well-sm">
                    <div class="row">
                        
                        
                        
                        <div class="col-sm-6 col-md-8">
                            <h4 style="text-align: center"><b><?php echo e($student->name); ?></b></h4><br>
                            <div class="col-md-12">
                                <label class="col-md-4">Roll number</label>
                                <label class="col-md-1">:</label>
                                <p class="col-md-6"><?php echo e($student->roll_no); ?></p>

                            </div>
                            <div class="col-md-12">
                                <label class="col-md-4">Class</label>
                                <label class="col-md-1">:</label>
                                <p class="col-md-6"><?php echo e($student->class_name); ?></p>

                            </div>
                            <div class="col-md-12">
                                <label class="col-md-4">Father's Name</label>
                                <label class="col-md-1">:</label>
                                <p class="col-md-6"><?php echo e($student->Father_name); ?></p>

                            </div>
                            <div class="col-md-12">
                                <label class="col-md-4">Mother' Name</label>
                                <label class="col-md-1">:</label>
                                <p class="col-md-6"><?php echo e($student->mother_name); ?></p>

                            </div>
                            <div class="col-md-12">
                                <label class="col-md-4">Date of Birth</label>
                                <label class="col-md-1">:</label>
                                <p class="col-md-6"><?php echo e($student->DOB); ?></p>

                            </div>
                            <div class="col-md-12">
                                <label class="col-md-4">Address</label>
                                <label class="col-md-1">:</label>
                                <p class="col-md-6"><?php echo e($student->address); ?></p>

                            </div>
                            <div class="col-md-12">
                                <label class="col-md-4">Mobile</label>
                                <label class="col-md-1">:</label>
                                <p class="col-md-6"><?php echo e($student->mobile); ?></p>

                            </div>
                            <div class="col-md-12">
                                <label class="col-md-4">Admission Date</label>
                                <label class="col-md-1">:</label>
                                <p class="col-md-6"><?php echo e($student->admission_date); ?></p>

                            </div>




                            <!-- Split button -->

                        </div>
                        
                            
                                
                            
                            
                                

                                

                                
                            
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    
        
        
            
            
            
        
        

    

<?php echo $__env->make('layout.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>