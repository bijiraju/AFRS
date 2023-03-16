
<?php require '../connection.php'; ?>
<?php require '../header.php'; ?>

<?php if (isset($_POST['log'])) {
                        $first_name = $_POST['fname'];
                        $last_name = $_POST['lname'];
                        $email = $_POST['email'];
						$Phone=$_POST['phone'];
                        $password = md5($_POST['password']);
                        $password1 = md5($_POST['password2']);
                        // $pic = $_FILES['pic']['name'];
                        // $temp = $_FILES['pic']['tmp_name'];                      
                        $errors = array();
                        // validation
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            array_push($errors, "Email is not valid");
                        }
                        if (count($errors) > 0) {
                            foreach ($errors as $error) {
                                echo "<div class='alert alert-danger'>$error</div>";
                            }
                        }
                        if ($password != $password1) {
                            session_start();
                            $_SESSION['status'] = "password no matching";
                            $_SESSION['status_code'] = "warning";
                            $_SESSION['message'] = "oops..";
                            $_SESSION['page'] = "register.php";
                        } 						
						else {
                            $sql = 'SELECT * FROM registration WHERE EMAIL=:email';
                            $statement = $connection->prepare($sql);
                            $statement->execute([':email' => $email]);
                            $user = $statement->fetch(PDO::FETCH_OBJ);
                            if ($user) {
                                echo "<div class='alert alert-danger'>user already exits</div>";
                            } 							
							else {

                                $sql = 'INSERT INTO registration(EMAIL,PHONE,PASSWORD,FNAME,LNAME,CREATED_BY,UPDATED_BY)VALUES(:email,:phone,:pass,:fname,:lname,:fname,fname)';
                                $statement = $connection->prepare($sql);
                                if ($statement->execute([':email' => $email, ':phone'=> $Phone, ':fname' => $first_name, ':lname' => $last_name, ':pass' => $password])) {

                                    // $target = "uploads/" . basename($pic);

                                    // $move_pic = move_uploaded_file($temp, $target);

                                    $_SESSION['status'] = "Data recorded successfully";
                                    $_SESSION['status_code'] = "success";
                                    $_SESSION['message'] = "";
                                    $_SESSION['page'] = "login.php";                                  
                                }
                            }
                        }
                    } ?>
		<div class="container-fluid p1 min-vh-100">
			<div class="container col-10 col-md-6 ustify-content-center ">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 mt-5 text-white text-center">
						<h1>Register</h1>
						<form action="" method="post" class="">
							<div class="pb-4 mt-5">
								<input
									type="text"
									placeholder="First name"
									id=""
									class="form-control"
									name="fname"
									required
								/>
							</div>
							<div class="pb-4">
								<input
									type="text"
									placeholder="Last name"
									id=""
									class="form-control"
									name="lname"
									required
								/>
							</div>
							<div class="pb-4">
								<input
									type="email"
									placeholder="Email"
									id=""
									class="form-control"
									name="email"
									required
								/>
							</div>
							<div class="pb-4">
								<input
									type="number"
									placeholder="Phone"
									id=""
									class="form-control"
									name="phone"
									required
								/>
							</div>
							<div class="pb-4">
								<input
									type="password"
									placeholder="Password"
									id=""
									class="form-control"
									name="password"
									required
								/>
							</div>
							<div class="pb-4">
								<input
									type="password"
									placeholder="Confirm-password"
									id=""
									class="form-control"
									name="password2"
									required
								/>
							</div>
							<div class="row">																									
							<div class="pb-4 col-12">
								<input
									type="file"
									placeholder="Photo"
									id=""
									
									class="form-control"
									name="pic"
								/>						
							</div>
							</div>							
							<div class="text-center">
								<button
									type="Submit"
									name="log"
									class="btn btn-success mb-5"
								>
									Submit
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php require '../footer.php'; ?>		
