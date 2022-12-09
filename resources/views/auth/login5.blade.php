<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" media="screen" href="{{ asset('js/particles.js-master/demo/css/style.css') }} ">
    <script src="{{ asset('js/vendor.js') }}"></script>
 
</head>
<body>
    <main>
        
       

        
        <div id="particles-js"> </div>
            
        <div class="box">
                
                <div class="inner-box">
                    
                    <div class="forms-wrap">
                        <!-- form sign-in -->
                        <form action="index.html" autocomplete="off" class="sign-in-form login-txt" >
                        <div class="logo">
                            <img src="img/iconplus.png" alt="multimedia">
                            <h4>multimedia</h4>
                        </div>
    
                        <div class="heading">
                            <h2>Welcome Back</h2>
                            <h6>Not registre yet</h6>
                            <a href="#" class="toggle">Sign up</a>
                        </div>
    
                        
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" class="input-field" autocomplete="off" required/>
                                <label>Name</label>
                            </div>
    
                            <div class="input-wrap">
                                <input type="password" minlength="4" class="input-field" autocomplete="off" required/>
                                <label for="pass">Password</label>
                            </div>
    
                            <input type="submit" value="Sign In" class="sign-btn" />
    
                            <!-- <p class="text">
                                Forgotten your password or you login datails?
                                <a href="#">Get Help</a> signing in
                            </p> -->
    
                        </div>
                      </form>
    
                        <!-- form sign-up -->
                      <form action="index.html" autocomplete="off" class="sign-up-form">
                        <div class="logo">
                            <img src="img/image7.png" alt="multimedia">
                            <h3>multimedia</h3>
                        </div>
    
                        <div class="heading">
                            <h2>Get Started</h2>
                            <h6>Already have an account?</h6>
                            <a href="#" class="toggle">Sign in</a>
                        </div>
    
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" class="input-field" autocomplete="off" required/>
                                <label>Name</label>
                            </div>
    
                            <div class="input-wrap">
                                <input type="password" minlength="4" class="input-field" autocomplete="off" required/>
                                <label for="pass">Password</label>
                            </div>
    
                            <div class="input-wrap">
                                <input type="email" class="input-field" autocomplete="off" required/>
                                <label>Email</label>
                            </div>
    
                            <input type="submit" value="Sign Up" class="sign-btn" />
    
                            <!-- <p class="text">
                             By signing up, I agree to the 
                             <a href="#">Terms of Service</a> and 
                             <a href="#">Privacy Policy</a>
                            </p> -->
    
                        </div>
                      </form>
                    </div>
    
                    <div class="carousel">
                        <div class="images-wrapper">
                            <img src="img/image1.png" class="image img-1 show" alt="">
                            <img src="img/image2.png" class="image img-2" alt="">
                            <img src="img/image3.png" class="image img-3" alt="">
                        </div>
    
                        <div class="text-slider">
                            <div class="text-wrap">
                                <div class="text-group">
                                    <h2>Create Your Creativity</h2>
                                    <h2>Imagination</h2>
                                    <h2>The Vision</h2>
                                </div>
                            </div>
    
                            <div class="bullets">
                                <span class="active" data-value="1"></span>
                                <span data-value="2"></span>
                                <span data-value="3"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

       
       



   
            
       
        
    {{-- <script src="js/app2.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/particleap.js"></script> --}}

    <script src="{{ asset('js/app2.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/particles.js-master/particles.js') }}"></script>
    <script src="{{ asset('js/particles.js-master/demo/js/app.js') }}"></script>
    
        
            
    </main>
</body>
</html>