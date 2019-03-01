
    

    
    
        
            
                
                    
                
                
                    
                        
                        
                        
                        
                        
                        

                    

                
                

                
            
        
    


<body>

<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="<?php echo e(asset('css/login.css')); ?>" rel="stylesheet" type="text/css">

    <!------ Include the above in your HEAD tag ---------->
</head>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <h2>Login</h2>
            
        </div>

        <!-- Login Form -->
        <form method="post" action="#" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username" required>
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password" required>
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>



    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</div>
</body>
</html>