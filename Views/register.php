<?php
    include './Common/headfile.php';
    // print_r($_POST);
?>
    <div class="main d-flex justify-content-center">
            <div class="login-from-div align-self-center">
                    <div class="logo-img text-center">
                        <img src="../Assets/images/oxfordtrans.jpg" alt="">
                    </div> 
                    <div class="login-text">
                        <p class="text-center fs-5 fw-medium pt-2">
                            Signup Your Account
                        </p>
                    </div>
                    <div class="login-from">
                        <form action="../models/usermodel.php?action=user_create" method="post">
                                <div class="mb-3">
                                    <label for="username" class="form-label">User Name</label>
                                    <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp">
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="useremail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="useremail" name="useremail" aria-describedby="emailHelp">
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="userpass" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="userpass" name="userpass">
                                </div>
                                <button type="submit" name="userregister" value="registration" class="btn btn-primary w-100 rounded-4 fw-bold">Sign up</button>
                                <label for="" class="text-dark">
                                            Already have an account? 
                                            <a href="" class="text-dark">Sign in</a>
                                </label>
                        </form>
                    </div>  
            </div>
    </div>
<?php
    include './Common/footer.php'; 
?>
   

   