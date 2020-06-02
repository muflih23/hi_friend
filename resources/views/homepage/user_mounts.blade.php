<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
    <link rel="stylesheet" href="/css/u_mounts.css">
</head>
<body>
    <nav>
        <div class="logo">
            <!--<a href="../PPL/template.html">--><img src="/img/Logo_HiFriend.png"></a>
        </div>
        <div class="userInfo">
            <h1>Hai, {{Session::get('name')}}. Apa Kabar?<h1>
        </div>

        <div class="topNavbar">
            <ul><b>
                <li class="menu"><a href="/u_guide">Guide</a></li>
                <li class="menu"><a href=" ">Mount In Indonesia</a></li>
                <li class="menu"><a href="/u_tipsandtricks">Tips & Trick</a></li>
                <li class="menu"><a href=" ">Critical Action</a></li>
                <li class="menu"><a href="/u_store">Store</a></li>
                <li class="signup" id="button"><a href="/logout">Log Out</a></li>
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

    <div class="search">
        <input type="text" name="box" placeholder="Find your destination">
        <a href="/img/mount_search.html"><img src="/img/search.png"></a>
    </div>

    <div class="container">
        <div class="box">
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSMVkqzlffwSBmTKgQmCNwRJGCwqHZwBdJKszqGDDJKMKHJGlVGJzlMNwhdvbktnqqVRVpFC"><img src="/img/gunung_1.jpg" class="gambar"></a>
            <h3>Gunung Bromo</h3>
            <h5>Probolinggo, East Java, Indonesia</h5>
            <p>Rating (4,5)</p>
            </h3>
        </div>

        <div class="box1">
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSMVkqzlffwSBmTKgQmCNwRJGCwqHZwBdJKszqGDDJKMKHJGlVGJzlMNwhdvbktnqqVRVpFC"><img src="/img/gunung_2.jpg" class="gambar"></a>
            <h3>Gunung Bromo</h3>
            <h5>Probolinggo, East Java, Indonesia</h5>
            <p>Rating (4,5)</p>
            </h3>
        </div>

        <div class="box2">
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSMVkqzlffwSBmTKgQmCNwRJGCwqHZwBdJKszqGDDJKMKHJGlVGJzlMNwhdvbktnqqVRVpFC"><img src="/img/gunung_3.jpg" class="gambar"></a>
            <h3>Gunung Bromo</h3>
            <h5>Probolinggo, East Java, Indonesia</h5>
            <p>Rating (4,5)</p>
            </h3>
        </div>
    </div>

    <script>
        document.getElementById("button-login").addEventListener("click", function() {
            document.querySelector(".popup-login").style.display = "flex";
        })

        document.getElementById("close-login").addEventListener("click", function() {
            document.querySelector(".popup-login").style.display = "none";
        })
    </script>
</body>

</html>