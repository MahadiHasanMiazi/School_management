<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo e(asset('css/homeNavBar.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/student-list.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/total-account.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/adminRegistration.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/details.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/change-password.css')); ?>" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo e(route('home.index')); ?>">
                
                <h2 style="color: #41bbf4;">Zaman Model Academy</h2>
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo e(route('profile.edit')); ?>"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="<?php echo e(route('change.password')); ?>"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo e(route('admin.logout')); ?>"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="<?php echo e(route('add.student')); ?>"><i class="fa fa-fw fa fa-star"></i> Add Student</a>
                </li>
                <li>
                    <a href="<?php echo e(route('students.fees')); ?>"><i class="fa fa-fw fa fa-star"></i> Collect fees</a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class=" fa fas fa-university"></i> Students List <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-1" class="collapse">
                        <li><a href="<?php echo e(route('student', 'child')); ?>"><i class="fa fa-angle-double-right"></i> Child</a></li>
                        <li><a href="<?php echo e(route('student', 'play')); ?>"><i class="fa fa-angle-double-right"></i> Play</a></li>

                        <li><a href="<?php echo e(route('student', 'nursery')); ?>"><i class="fa fa-angle-double-right"></i> Nursery</a></li>
                        <li><a href="<?php echo e(route('student', 'one')); ?>"><i class="fa fa-angle-double-right"></i> Class 1</a></li>
                        <li><a href="<?php echo e(route('student', 'two')); ?>"><i class="fa fa-angle-double-right"></i> Class 2</a></li>
                        <li><a href="<?php echo e(route('student', 'three')); ?>"><i class="fa fa-angle-double-right"></i> Class 3</a></li>
                        <li><a href="<?php echo e(route('student', 'four')); ?>"><i class="fa fa-angle-double-right"></i> Class 4</a></li>
                        <li><a href="<?php echo e(route('student', 'five')); ?>"><i class="fa fa-angle-double-right"></i> Class 5</a></li>
                        <li><a href="<?php echo e(route('student', 'six')); ?>"><i class="fa fa-angle-double-right"></i> Class 6</a></li>
                        <li><a href="<?php echo e(route('student', 'seven')); ?>"><i class="fa fa-angle-double-right"></i> Class 7</a></li>
                        <li><a href="<?php echo e(route('student', 'eight')); ?>"><i class="fa fa-angle-double-right"></i> Class 8</a></li>
                        <li><a href="<?php echo e(route('student', 'nine')); ?>"><i class="fa fa-angle-double-right"></i> Class 9</a></li>
                        <li><a href="<?php echo e(route('student', 'ten')); ?>"><i class="fa fa-angle-double-right"></i> Class 10</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i>  Students fees list <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="<?php echo e(route('fees.list', "child")); ?>"><i class="fa fa-angle-double-right"></i> Child</a></li>
                        <li><a href="<?php echo e(route('fees.list', "play")); ?>"><i class="fa fa-angle-double-right"></i> Play</a></li>
                        <li><a href="<?php echo e(route('fees.list', "nursery")); ?>"><i class="fa fa-angle-double-right"></i> Nursery</a></li>
                        <li><a href="<?php echo e(route('fees.list', "one")); ?>"><i class="fa fa-angle-double-right"></i> Class 1</a></li>
                        <li><a href="<?php echo e(route('fees.list', "two")); ?>"><i class="fa fa-angle-double-right"></i> Class 2</a></li>
                        <li><a href="<?php echo e(route('fees.list', "three")); ?>"><i class="fa fa-angle-double-right"></i> Class 3</a></li>
                        <li><a href="<?php echo e(route('fees.list', "four")); ?>"><i class="fa fa-angle-double-right"></i> Class 4</a></li>
                        <li><a href="<?php echo e(route('fees.list', "five")); ?>"><i class="fa fa-angle-double-right"></i> Class 5</a></li>
                        <li><a href="<?php echo e(route('fees.list', "six")); ?>"><i class="fa fa-angle-double-right"></i> Class 6</a></li>
                        <li><a href="<?php echo e(route('fees.list', "seven")); ?>"><i class="fa fa-angle-double-right"></i> Class 7</a></li>
                        <li><a href="<?php echo e(route('fees.list', "eight")); ?>"><i class="fa fa-angle-double-right"></i> Class 8</a></li>
                        <li><a href="<?php echo e(route('fees.list', "nine")); ?>"><i class="fa fa-angle-double-right"></i> Class 9</a></li>
                        <li><a href="<?php echo e(route('fees.list', "ten")); ?>"><i class="fa fa-angle-double-right"></i> Class 10</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-3"><i class="fa fa-fw fa-star"></i> Office Cost<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-3" class="collapse">
                        <li><a href="<?php echo e(route('office.cost')); ?>"><i class="fa fa-angle-double-right"></i> Add cost </a></li>
                        <li><a href="<?php echo e(route('cost.list')); ?>"><i class="fa fa-angle-double-right"></i> Cost List </a></li>
                        <li><a href="<?php echo e(route('total.account')); ?>"><i class="fa fa-angle-double-right"></i> Total Accounts</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-4"><i class="fa fa-fw fa-star"></i>Teacher<i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-4" class="collapse">
                        <li><a href="<?php echo e(route('teacher.index')); ?>"><i class="fa fa-angle-double-right"></i>Teachers List </a></li>
                        <li><a href="<?php echo e(route('add.teacher')); ?>"><i class="fa fa-angle-double-right"></i> Add Teacher</a></li>

                    </ul>
                </li>
                <li>
                    <a href="<?php echo e(route('admin.registration')); ?>"><i class="fa fa-fw fa-paper-plane-o"></i> Add Admin</a>
                </li>
                
                    
                
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>


    <!-- /#page-wrapper -->
<!-- /#wrapper -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo e(asset('js/htmlToPdf/jquery-2.1.3.js')); ?>"></script>
<script src="<?php echo e(asset('js/htmlToPdf/jspdf.js')); ?>"></script>
<script src="<?php echo e(asset('js/htmlToPdf/pdfFromHTML.js')); ?>"></script>



<script>
    $(function(){
        $('[data-toggle="tooltip"]').tooltip;
        $(".side-nav .collapse").on("hide.bs.collapse", function() {
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
        });
        $('.side-nav .collapse').on("show.bs.collapse", function() {
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");
        });
    })
</script>
</body>
</html>



<!------ Include the above in your HEAD tag ---------->

