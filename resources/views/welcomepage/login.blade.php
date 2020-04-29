<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
    <link href="/css/register.css" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="logo">
            <img src="/img/Logo_HiFriend.png"></a>
        </div>

        <div class="signup">
            <form action=" {{ route('masuk') }} " method="post">
                    {{csrf_field()}}
                    <input type="email" placeholder="Email" name="login_email" required="required">
                    <input type="password" placeholder="Password" name="login_password" required="required">
                    <input type="submit" value="Log In">
                    <p><a href="#"> Forgot your password? </a></p>
                    <p>Don't have an account?<a id="button" href="/register"> Sign Up </a></p>
            </form>
        </div>
    </nav>
</body>
</html>