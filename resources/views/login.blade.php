{{--<html>--}}
    {{--<head>--}}

    {{--</head>--}}
    {{--<body>--}}
        {{--<div>--}}
            {{--<div>--}}
                {{--<div>--}}
                    {{--<h2>Login</h2>--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<form method="post" action="#" enctype="multipart/form-data">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--Username--}}
                        {{--<input type="email" name="username" placeholder="Email" required><br>--}}
                        {{--Password--}}
                        {{--<input type="text" name="password" placeholder="Password" required><br>--}}
                        {{--<button type="submit">Login</button>--}}

                    {{--</form>--}}

                {{--</div>--}}
                {{--<div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</body>--}}
{{--</html>--}}

<body>

<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css">

    <!------ Include the above in your HEAD tag ---------->
</head>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <h2>Login</h2>
            {{--<img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />--}}
        </div>

        <!-- Login Form -->
        <form method="post" action="#" enctype="multipart/form-data">
            {{ csrf_field() }}
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