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
                                Forgot Password
                            </p>
                       </div>
                       <div class="login-from">
                            <form>
                                    <div class="mb-3 text-center">
                                        <label for="useremail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="useremail" aria-describedby="useremailHelp">
                                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 rounded-4 fw-bold">Submit</button>
                                    <div class="text-end my-3">
                                        <label for="" class="text-dark">
                                                    Already have an account? 
                                                    <a href="" class="text-dark">Sign in</a>
                                        </label>
                                    </div>
                            </form>
                       </div>  
                </div>
        </div>
<?php
    include './Common/footer.php';
?>
   

   