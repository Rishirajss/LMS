<?php
    include './Common/headfile.php';
?>
    
    <div class="main d-flex justify-content-center">
            <div class="login-from-div align-self-center">
                    <div class="logo-img text-center">
                        <img src="../Assets/images/oxfordtrans.jpg" alt="">
                    </div> 
                    <div class="login-text">
                        <p class="text-center fs-5 fw-medium pt-2">
                            Sent OTP on Your Email
                        </p>
                    </div>
                    <div class="login-from">
                        <form>
                                <div class="mb-3 text-center">
                                    <label for="userotp" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="userotp">
                                    <a href="" class="mt-1" style="text-decoration:none">Resend otp</a>
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <button type="submit" class="btn btn-primary w-100 rounded-4 fw-bold">Submit</button>
                                <div class="text-end my-3">
                                    <label for="" class="text-dark">
                                        <a href="" class="text-dark" style="text-decoration:none";>Back to Login Page</a>
                                    </label>
                                </div>
                        </form>
                    </div>  
            </div>
    </div>

<?php 
    include './Common/footer.php';
?>    


   

   