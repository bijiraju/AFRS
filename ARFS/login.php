<?php require 'header.php'; ?>

<div
    class="container-fluid m-0 p1 row justify-content-center content-center align-items-center min-vh-100"
>
   
        <div class="px-0 col-sm-10 row justify-content-center ">
            <!-- div for plane image -->
            <div class="px-0 col-12 col-lg-6 image-1 img-fluid text-center">
                <img
                    src="images/plane.jpg"
                    class="img-fluid 	 "
                    alt=""
                />
            </div>
            <!-- div for login -->
            <div class=" col-12 col-lg-4 bg-light ">
                <h1 class="my-5 text-center">SIGN IN</h1>
                <form action="">
                    <div class="my-4">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="email"
                            id=""
                            name="email"
                        />
                    </div>
                    <div class="my-4">
                        <input
                            type="password"
                            class="form-control"
                            placeholder="password"
                            id=""
                            name="password"
                        />
                    </div>
                    <div class="text-center">
                        <a
                            href="homepage.php"
                            type="submit"
                            name="login"
                            class="btn btn-success mb-5"
                        >
                            Submit
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-6 text-start">
                            <a href="" class=" text-black "
                                >Forgotten password</a
                            >
                        </div>
                        <div class="col-6 mb-5 text-center">
                            <a href="signup.php" class="text-black">Sign Up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
   
</div>
<!-- container-fluid div closed -->
<?php require 'footer.php'; ?>
