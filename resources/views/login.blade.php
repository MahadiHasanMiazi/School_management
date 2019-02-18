<html>
    <head>

    </head>
    <body>
        <div>
            <div>
                <div>
                    <h2>Login</h2>
                </div>
                <div>
                    <form method="post" action="#" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        Username
                        <input type="email" name="username" placeholder="Email" required><br>
                        Password
                        <input type="text" name="password" placeholder="Password" required><br>
                        <button type="submit">Login</button>

                    </form>

                </div>
                <div>

                </div>
            </div>
        </div>
    </body>
</html>