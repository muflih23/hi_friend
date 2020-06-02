<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
    <link rel="stylesheet" href="/css/tipstrick.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
        <div class="logo">
            <!--<a href="../PPL/template.html">--><img src="/img/Logo_HiFriend.png"></a>
        </div>

        <div class="topNavbar">
            <ul><b>
                <li class="menu"><a href="/guide">Guide</a></li>
                <li class="menu"><a href="/mounts">Mount In Indonesia</a></li>
                <li class="menu"><a href=" ">Tips & Trick</a></li>
                <li class="menu"><a href=" ">Critical Action</a></li>
                <li class="menu"><a href="/">Store</a></li>
                <li class="login" id="button-login"><a href="#">Login</a></li>
                <li class="signup" id="button"><a href="/register">Sign Up</a></li>
            </b></ul>
        </div>

        <!-- part Log in -->
        <div class="popup-login">
            <div class="popup-content-login">
                <img src="/img/close.png" alt="Close" class="close-login" id="close-login">
                <h2> Start Your Adventure</h2>
                <form action="{{ route('masuk') }}" method="post">
                    {{ csrf_field() }}
                    <input type="email" placeholder="Email" name="login_email" required="required">
                    <input type="password" placeholder="Password" name="login_password" required="required">
                    <input type="submit" value="Log In">
                    <p><a href="#"> Forgot your password? </a></p>
                    <p>Don't have an account?<a id="button" href="/register"> Sign Up </a></p>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="box">
            <div class="icon">
                <img src="/img/tent.jpg" class="fa">
                <div class="content">
                    <h3>Prepare your equipment before go hiking</h3>
                    <p>First of all, you need prepare some equipment before you go hiking, to go to hiking you need 
                        prepare :<br>
                        1. <br>
                        2. <br>
                        3. <br>
                        4. <a href=" ">Show more...</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="icon">
                <img src="/img/tent.jpg" class="fa">
                <div class="content">
                    <h3>Prepare your equipment before go hiking</h3>
                    <p>First of all, you need prepare some equipment before you go hiking, to go to hiking you need 
                        prepare :<br>
                        1. <br>
                        2. <br>
                        3. <br>
                        4. <a href=" ">Show more...</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="icon">
                <img src="/img/tent.jpg" class="fa">
                <div class="content">
                    <h3>Prepare your equipment before go hiking</h3>
                    <p>First of all, you need prepare some equipment before you go hiking, to go to hiking you need 
                        prepare :<br>
                        1. <br>
                        2. <br>
                        3. <br>
                        4. <a href=" ">Show more...</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("button-login").addEventListener("click", function(){
            document.querySelector(".popup-login").style.display = "flex";
        })

        document.getElementById("close-login").addEventListener("click", function(){
            document.querySelector(".popup-login").style.display = "none";
        })
    </script>
</body>
</html>