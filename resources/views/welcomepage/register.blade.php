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
            <form action=" {{ route('register') }} " method="post">
                    {{csrf_field()}}
                   <input type="text" placeholder="First Name" name="nama_depan" required="required">
                   <input type="text" placeholder="Last Name" name="nama_belakang" required="required">
                   <input type="email" placeholder="Email" name="email_pengguna" required="required">
                   <!--<input type="text" placeholder="Username" name="username_baru" required="required">-->
                   <input type="password" placeholder="Password" name="password_baru" required="required">
                <input type="submit" value="Sign Up">
                <p>Already have an account?<a href="/"> Log In </a></p>
            </form>
        </div>
    </nav>
</body>
</html>