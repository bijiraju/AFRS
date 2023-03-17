<?php require 'connection.php'; ?>
<?php require 'header.php'; ?>
  
<?php 

if(isset($_POST['airport_name'])&&($_POST['abbr'])&&($_POST['state_name'])){
  
        $state_name=$_POST['state_name'];
        $airport_name=$_POST['airport_name'];
        $abbr=$_POST['abbr'];
        // echo  $state_name;
        $sql='SELECT * FROM airport WHERE AIRPORT_NAME = :airport_name';
        $stmt = $connection->prepare($sql);
        $stmt->execute(['airport_name'=>$airport_name]);
        $check_airport= $stmt->fetch(PDO::FETCH_OBJ);

        $sql='SELECT * FROM airport WHERE ABBR = :abbr';
        $stmt = $connection->prepare($sql);
        $stmt->execute(['abbr'=>$abbr]);
        $check_abbr= $stmt->fetch(PDO::FETCH_OBJ);
        if(  $check_airport ) {
            session_start();
              $_SESSION['status'] = "Airport already exist !";
              $_SESSION['status_code'] = "error";
              $_SESSION['message'] = "oops..";
              $_SESSION['page'] = "adminhome.php";
          }
          else if( $check_abbr){
            $_SESSION['status'] = "Abbreviation already exist !";
              $_SESSION['status_code'] = "error";
              $_SESSION['message'] = "oops..";
              $_SESSION['page'] = "adminhome.php";
          }
           else {
            $sql='INSERT INTO airport(AIRPORT_NAME,STATE_ID,ABBR,CREATED_BY,UPDATED_BY,CREATED_AT,UPDATED_AT)VALUES(:airport_name,:state_id,:abbr,"admin","admin",now(),now())';
            $statement=$connection->prepare($sql);
            if($statement->execute([':airport_name'=>$airport_name,':state_id'=>$state_name,':abbr'=>$abbr]))
            {   
              $_SESSION['status'] = "Successfully Inserted.";
              $_SESSION['status_code'] = "success";
              $_SESSION['message'] = "success";
              $_SESSION['page'] = "adminhome.php";
            }
    }
    }
    // Display states
    $sql="SELECT STATE_NAME,ID FROM state"; 
    $statement=$connection->prepare($sql); 
    $statement->execute();
    $states=$statement->fetchAll(PDO::FETCH_OBJ);  
// delete table
if(isset($_POST['btn_delete'])){
    
    $airport_name=$_POST['airport_name'];
    $sql='DELETE FROM airport WHERE AIRPORT_NAME=:airport_name';
    $statement = $connection -> prepare($sql);
    $statement->execute([':airport_name'=>$airport_name]);
    if( $statement)
            {
              
                $_SESSION['status'] = "Successfully Deleted";
                $_SESSION['status_code'] = "success";
                $_SESSION['message'] = "Deleted.";
                $_SESSION['page'] = "adminhome.php";
                
            }
}
?>
<!-- code for airline -->

<!-- code for flights -->

<div
    class="container-fluid m-0 p1 min-vh-100 row justify-content-center align-items-center"
>
    <div class="col-12 container rounded-3 col-md-11 p2 px-5 mx-5 text-white">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light mb-5">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">
                    <div class="col-2">
                        <div class="col-6 d-flex">
                            <h4>Purple Fly.com</h4>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a
                                class="nav-link active text-white"
                                aria-current="page"
                                href="#"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#"
                                >About</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link active text-white"
                                href="logout.php"
                                >Login/Signup</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 my-4">
                    <div class="mb-5">
                        <h1 class="">WELCOME ADMIN</h1>
                    </div>
                    <div class="col-12 row">
                        <div class="col-12 col-md-6">
              
                            <form
                                action=""
                                method="post"
                            >
                                <div class="dropdown my-2">
                                

                                    <button
                                        class="btn col-12 btn-success dropdown-toggle"
                                        type="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        ADD/DELETE AIRPORT
                                    </button>
                                    <ul class="dropdown-menu p-5">
                                        <li>
                                            <input
                                                class="border border-2 border-grey my-1 dropdown-item form-control"
                                                name="airport_name"
                                                placeholder="Airport Name"
                                            />
                                        </li>
                                        <li>
                                            <input
                                                class="border border-2 border-grey my-1 dropdown-item form-control"
                                                name="abbr"
                                                placeholder="Abbr"
                                            />
                                        </li>

                                        <li>
                                            <select
                                                class="col-12 form-control"
                                                name="state_name"
                                                id="state_name"
                                            >
                                                <option>States</option>
                                                <?php foreach ($states as $state): ?>
                                                <option
                                                    value="<?= $state->ID; ?>"
                                                >
                                                    <?= $state->STATE_NAME;?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </li>

                                        <li>
                                            <button
                                                name="submit"
                                                class="btn btn-success"
                                            >
                                                Add
                                            </button>
                                            <button
                                                name="btn_delete"
                                                class="btn btn-danger"
                                            >
                                                Delete
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-md-6">
                        
<?php

    if(isset($_POST['AIRLINE_NAME']))
    {
       
        
        $airline_name=$_POST['AIRLINE_NAME'];
        $sql='SELECT * FROM airline WHERE AIRLINE_NAME=:AIRLINE_NAME';
        $statement=$connection->prepare($sql);
        $statement->execute(['AIRLINE_NAME' =>$airline_name]);
        $airline_data= $statement->fetch(PDO :: FETCH_OBJ);
        if($airline_data){
            $_SESSION['status'] = "Airline already exist";
            $_SESSION['status_code'] = "error";
            $_SESSION['message'] = "Oops."; 
            $_SESSION['page'] = "adminhome.php";   
                }     
        else{ 
            $sql='INSERT INTO airline(AIRLINE_NAME,CREATED_BY,UPDATED_BY,CREATED_AT,UPDATED_AT)VALUES(:AIRLINE_NAME,"admin","admin",now(),now())';
                $statement=$connection->prepare($sql);
                if($statement->execute([':AIRLINE_NAME'=>$airline_name])){    
                                   $_SESSION['status'] = "success";
                                   $_SESSION['status_code'] = "success";
                                   $_SESSION['message'] = "Data added successfully!";
                                   $_SESSION['page'] = "adminhome.php";

                 }
            }
    }
    if(isset($_POST['delete'])){
        $airline_name=$_POST['AIRLINE_NAME'];
        $sql='DELETE FROM airline WHERE AIRLINE_NAME=:AIRLINE_NAME';
        $statement=$connection->prepare($sql);
        if($statement->execute([':AIRLINE_NAME'=>$airline_name])){   
                   $_SESSION['status'] = "success";
                   $_SESSION['status_code'] = "success";
                   $_SESSION['message'] = "Data deleted successfully!";
                   $_SESSION['page'] = "adminhome.php";
        }
    }
?>
                            <form action="" method="post">
                                <div class="dropdown mt-2">
                                    <button
                                        class="btn col-12 btn-success dropdown-toggle"
                                        type="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        ADD/DELETE AIRLINES
                                    </button>
                                    <ul class="dropdown-menu p-5">
                                        <li>
                                            <input
                                                name="AIRLINE_NAME"
                                                class="col-12 border border-2 border-grey my-1 dropdown-item form-control"
                                                placeholder="Airline Name"
                                            />
                                        </li>
                                        <li>
                                            <button
                                                type="submit"
                                                name="submit"
                                                class="btn btn-success"
                                            >
                                                Add
                                            </button>
                                            <button
                                                type="submit"
                                                name="delete"
                                                class="btn btn-danger"
                                            >
                                                Delete
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        
                        <div class="col-12 col-md-6">



                        <?php 

    if(isset($_POST['FLIGHT_NAME'])&&($_POST['AIRLINE_NAME'])&&($_POST['TOTAL_SEAT'])){
        $FLIGHT_NAME=$_POST['FLIGHT_NAME'];
        $AIRLINE_NAME=$_POST['AIRLINE_NAME'];
        $TOTAL_SEAT=$_POST['TOTAL_SEAT'];
        $sql='SELECT * FROM flight WHERE FLIGHT_NAME=:FLIGHT_NAME';
        $statement=$connection->prepare($sql);
        $statement->execute(['FLIGHT_NAME'=>$FLIGHT_NAME]);
        $check_flight=$statement->fetch(PDO::FETCH_OBJ);
        if($check_flight){
              $_SESSION['status'] = "Oops...";
              $_SESSION['status_code'] = "error";
              $_SESSION['message'] = "Flight already exist !";
              $_SESSION['page'] = "adminhome.php";
    }
    else{
        $sql='INSERT INTO flight(FLIGHT_NAME,AIRLINE_ID,TOTAL_SEAT,CREATED_BY,UPDATED_BY,CREATED_AT,UPDATED_AT)VALUES(:FLIGHT_NAME,:AIRLINE_ID,:TOTAL_SEAT,"admin","admin",now(),now())';
        $statement=$connection->prepare($sql);
        if($statement->execute([':FLIGHT_NAME'=>$FLIGHT_NAME,'AIRLINE_ID'=>$AIRLINE_NAME,'TOTAL_SEAT'=>$TOTAL_SEAT])){
              $_SESSION['status'] = "success";
              $_SESSION['status_code'] = "success";
              $_SESSION['message'] = "Data added successfully!";
              $_SESSION['page'] = "adminhome.php";
        
         }
    }
}
    $sql='SELECT AIRLINE_NAME,ID FROM airline';
    $statement=$connection->prepare($sql);
    $statement->execute();
     $flights=$statement->fetchAll(PDO::FETCH_OBJ);
    if(isset($_POST['delete2'])){
        $FLIGHT_NAME=$_POST['FLIGHT_NAME'];
        $sql='DELETE FROM flight WHERE FLIGHT_NAME=:FLIGHT_NAME';
        $statement=$connection->prepare($sql);
        if($statement->execute([':FLIGHT_NAME'=>$FLIGHT_NAME])){
          
            $_SESSION['status'] = "success";
              $_SESSION['status_code'] = "success";
              $_SESSION['message'] = "Data deleted successfully!";
              $_SESSION['page'] = "adminhome.php";
        }     
    }
?>
                            <form action="" method="post">
                                <div class="dropdown mt-2">
                                    <button
                                        class="btn col-12 btn-success dropdown-toggle"
                                        type="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        ADD/DELETE FLIGHTS
                                    </button>
                                    <ul class="dropdown-menu p-5">
                                        <li>
                                            <input
                                                name="FLIGHT_NAME"
                                                class="col-12 border border-2  border-grey my-1 dropdown-item form-control"
                                                placeholder="Flight Name"
                                            />
                                        </li>
                                        <li>
                                            <input
                                                class="col-12 border border-2 border-grey my-1 dropdown-item form-control"  
                                                name="TOTAL_SEAT"
                                                placeholder="TOTAL SEAT"
                                            />
                                        </li>
                                        <li>
                                        <select class="form-select" name="AIRLINE_NAME">
				                            <option value disabled selected>Choose airline:</option>
                                             <?php foreach($flights as $flight):?>
				                               <option value="<?= $flight->ID; ?>" required><?= $flight->AIRLINE_NAME;?></option>		
                                            <?php endforeach;?>		
                                         </select>
                                            
                                        </li>

                                        <li>
                                            <button
                                                type="submit"
                                                name="submit"
                                                class="btn btn-success"
                                            >
                                                Add
                                            </button>
                                            <button
                                                type="submit"
                                                name="delete2"
                                                class="btn btn-danger"
                                            >
                                                Delete
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-lg-6">

<?php
                         

if(isset($_POST['booking'])){
        
    $sql="SELECT * FROM booking"; 
    $statement=$connection->prepare($sql); 
    $statement->execute();
   if($bookings=$statement->fetchAll(PDO::FETCH_OBJ))  {
          
          echo'bookings';
        }  
        else{
            $_SESSION['status'] = "success";
            $_SESSION['status_code'] = "error";
            $_SESSION['message'] = "No bookings!";
            $_SESSION['page'] = "adminhome.php";
        }   
    }?>

                            <form action="" method="post">
                                <button name="booking" class="btn col-12 my-2 btn-success">
                                    SHOW BOOKING DETAIL
                                </button>
                            </form>
                            
                        </div>
                        <div class="col">

                        <form action="view.php" method="post">
                                <button name="view" class="btn col-12 my-2 btn-success">
                                    VIEW
                                </button>
                            </form>
</div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 mb-2">
                    <img
                        src="images/blue.gif"
                        class="img-fluid rounded-5"
                        alt=""
                    />
                </div>
            </div>
        </div>
    </div>
    
</div>
<?php require 'footer.php'; ?>


