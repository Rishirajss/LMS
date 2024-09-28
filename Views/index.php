<?php 
    // include '../Classes/Dbconnection.php';
    // $connection = new Dbconnection();
    
     include './Common/headfile.php';
?>
    <div class="main d-flex justify-content-center">
            <div class="login-from-div align-self-center">
                    <div class="logo-img text-center">
                        <img src="../Assets/images/oxfordtrans.jpg" alt="">
                    </div> 
                    <div class="login-text">
                        <p class="text-center fs-5 fw-medium pt-2">
                            Sign in Your Account
                        </p>
                    </div>
                    <div class="login-from">
                        <form action="../models/usermodel.php?action=user_login" method="post">
                                <div class="mb-3">
                                    <label for="useremail" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="loginemail" aria-describedby="emailHelp">
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="userpass" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="loginpass">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember my preference</label>
                                </div>
                                <div class="mb-3 form-check">
                                    <label class="form-check-label" for="">Forgot Password?</label>
                                </div>
                                <button type="submit" name="userlogin" value="loggedin" class="btn btn-primary w-100 rounded-4 fw-bold">Sign In</button>
                                <label for="" class="text-dark">
                                            Don't have an account? 
                                            <a href="" class="text-dark">Sign up</a>
                                </label>
                        </form>
                    </div>  
            </div>
    </div>
<?php 
    include './Common/footer.php';
?>        
   

   