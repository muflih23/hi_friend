<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
    <link href="/css/welcomepage.css" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="logo">
            <img src="/img/Logo_HiFriend.png"></img>
        </div>
        @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
            @endif
        <div class="topNavbar">
            <ul><b>
                <li class="menu"><a href="/guide">Guide</a></li>
                <li class="menu"><a href="/mounts">Mount In Indonesia</a></li>
                <li class="menu"><a href="/tipsandtricks">Tips & Trick</a></li>
                <li class="menu"><a href=" ">Critical Action</a></li>
                <li class="menu"><a href="/">Store</a></li>
                <li class="login" id="button-login"><a href="#">Login</a></li>
                <li class="signup" id="button"><a href="/register">Sign Up</a></li>
            </b></ul>
        </div>
        
        <!-- part Sign in-->
        <div class="popup">
            <div class="popup-content">
                <img src="/img/close.png" alt="Close" class="close" id="close">
               <h2> Start Your Adventure</h2>
               <form action=" " method="post">
                    {{ csrf_field() }}
                   <input type="text" placeholder="First Name" name="nama_depan" required="required">
                   <input type="text" placeholder="Last Name" name="nama_belakang" required="required">
                   <input type="email" placeholder="Email" name="email_pengguna" required="required">
                   <!--<input type="text" placeholder="Username" name="username_baru" required="required">-->
                   <input type="password" placeholder="Password" name="password_baru" required="required">
                   <input type="submit" value="Sign Up">
                   <p>Already have an account?<a id="button-login" href="/masuk"> Log In </a></p>
               </form>
            </div>
        </div>
    </nav>

    <!-- part Log in -->
    <div class="popup-login">
        <div class="popup-content-login">
            <img src="/img/close.png" alt="Close" class="close-login" id="close">
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


<script>
    const button_login = document.querySelectorAll('#button-login');
    const button_signup = document.querySelectorAll('#button');
    const button_close = document.querySelectorAll('#close');
    let check = document.querySelector(".popup-login").style.display == "flex";
    
    for(let button of button_login){
        button.addEventListener("click", function(){
            if(check){
                document.querySelector(".popup-login").style.display = "flex";    
            }else{
                document.querySelector(".popup").style.display = "none";
                document.querySelector(".popup-login").style.display = "flex";
            }            
        })
    }

    for(let button of button_signup){
        button.addEventListener("click", function(){
            if(!check){
                document.querySelector(".popup").style.display = "flex";
                document.querySelector(".popup-login").style.display = "none";
            }else{
                document.querySelector(".popup").style.display = "flex";
            }
        }); 
    }

    for(let button of button_close){
        button.addEventListener("click", function(){
            if(!check){
                document.querySelector(".popup").style.display = "none";
            }
            if(!check){
                document.querySelector(".popup-login").style.display = "none";
            }
        });
    }
</script>
</body>
</html>