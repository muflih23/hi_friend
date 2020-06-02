<!DOCTYPE html>
<html>

<head>
    <title>Home page</title>
    <link href="/css/u_store.css" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="logo">
            <a href="/css/template.html"><img src="/img/Logo_HiFriend.png"></a>
        </div>

        <div class="userInfo">
            <h1>Hai, {{Session::get('name')}}. Apa Kabar?
                <h1>
        </div>

        <div class="topNavbar">
            <ul><b>
                <li class="menu"><a href="/u_guide">Guide</a></li>
                <li class="menu"><a href="/u_mount">Mount In Indonesia</a></li>
                <li class="menu"><a href="/u_tipstrick">Tips & Trick</a></li>
                <li class="menu"><a href=" ">Critical Action</a></li>
                <li class="menu"><a href=" ">Store</a></li>
                <li class="signup" id="button"><a href="/logout">Log Out</a></li>
            </b></ul>
        </div>

        <!-- part Log in -->
        <div class="popup-login">
            <div class="popup-content-login">
                <img src="/img/close.png" alt="Close" class="close-login" id="close-login">
                <h2> Start Your Adventure</h2>
                <form>
                    <input type="text" placeholder="Username">
                    <input type="password" placeholder="Password">
                    <input type="submit" value="Log In">
                    <p><a href="#"> Forgot your password? </a></p>
                    <p>Don't have an account?<a href="#"> Sign Up </a></p>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="sidebar">
            <ul>
                <h3>Category</h3>
                <li><a href="/u_tent">Tent</a></li><br>
                <li><a href="/u_sleepb">Sleeping Bag</a></li><br>
                <li><a href="/u_store">Backpacks</a></li><br>
                <li><a href="store_pouch.html">Travel Pouch</a></li><br>
                <li><a href="store_climbing.html">Climbing Safety</a></li><br>
                <li><a href="store_shoes.html">Shoes</a></li><br>
                <li><a href="store_slippers.html">Slippers</a></li><br>
                <li><a href="store_jacket.html">Jacket</a></li><br>
                <li><a href="store_jacket.html">Gloves</a></li><br>
                <li><a href="store_hat.html">Hat/Skull Caps</a></li><br>
                <li><a href="store_survive.html">Survival Kit</a></li><br>
                <li><a href="store_gear.html">Outdoor Gear</a></li><br>
                <li><a href="store_acces.html">Accessories</a></li><br>
            </ul>
        </div>

        <div class="box">
            <a href="#"><img src="/img/bp1.jpg" class="gambar"></a>
            <h4>Aether AG 70 Pack (Men's)</a>
            </h4>
            <h3>Rp 4.650.000
                <p>Rating (4,5)</p>
            </h3>
        </div>

        <div class="box1">
            <a href="#"><img src="/img/bp2.jpg" class="gambar"></a>
            <h4>Aura AG 65 Pack (Women's)</a>
            </h4>
            <h3>Rp 3.999.000
                <p>Rating (3,5)</p>
            </h3>
        </div>

        <div class="box2">
            <a href="#"><img src="/img/bp3.jpg" class="gambar"></a>
            <h4>Women's Redwing 40</a>
            </h4>
            <h3>Rp 950.000
                <p>Rating (4)</p>
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