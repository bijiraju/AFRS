<?php require 'connection.php'; ?>
<?php require 'header.php'; ?>


<?php 
   session_start(); 
   $DEPARTURE=$_SESSION['departure'];
   $ARRIVAL=$_SESSION['arrival'];

                
                        $sql = 'SELECT * FROM airport WHERE ID=:id';
                        $statement = $connection->prepare($sql);
                        $statement->execute([':id' => $DEPARTURE]);
                        $depart_name = $statement->fetch(PDO::FETCH_OBJ);
                        $sql = 'SELECT * FROM airport WHERE ID=:id';
                        $statement = $connection->prepare($sql);
                        $statement->execute([':id' => $ARRIVAL]);
                        $arrival_name = $statement->fetch(PDO::FETCH_OBJ);
                        
                        $sql='SELECT * FROM route WHERE DEPARTURE_AIRPORT_ID=:id'; 
                        $statement=$connection->prepare($sql); 
                        $statement->execute([':id' => $DEPARTURE]);
                        $Route=$statement->fetch(PDO::FETCH_OBJ);?>

                        
                        


<div
    class="container-fluid m-0 p1 min-vh-100 row justify-content-center py-5"
>
    <div class=" col-12 col-lg-10  rounded-3 col-sm-10 p2  text-white">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid p-0">
                <h4>Purple Fly.com</h4>
             
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
                                href="index.php"
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
           
                    
            

    <div class="container col-12 col-lg-10  my-5  ">
   <a href="homepage.php
   "> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg></a>
        <div class="row justify-content-center my-1">
            <div class="col-12 col-lg-9 border justify-content-center row py-2  bg-success bg-opacity-50 border-dark rounded-2 ">
                

                <div class="row mb-4 ">
                    <div class="col-5 col-sm-5">
                        <!--  place From   -->
                        <h5>From</h5>
                        <p class="mb-1 text-grey "><?php echo $depart_name->AIRPORT_NAME ?></p>
                      <p>
                        <?php echo $depart_name->ABBR ?>
                      </p>  
                    </div>

                    <div class="col-2 text-center col-sm-2">
                        <i class="fa-solid fa-plane"></i>
                    </div>

                    <div class="col-5 col-sm-5">
                        <!--  place From   -->
                        <h5>To</h5>
                        <p class="mb-1 text-grey"><?php echo $arrival_name->AIRPORT_NAME ?></p>
                        <p class="text-grey"><?php echo $arrival_name->ABBR ?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-7 mb-1">
                        <p class="text-grey mb-1"><strong>Depart</strong></p>
                        <p class="mb-0">DATE&nbsp;-&nbsp;<?php echo  $Route->DEPARTURE_DATE ?></p>
                        
                        <p class="mb-0">TIME&nbsp;-&nbsp;<?php echo  $Route->DEPARTURE_TIME ?></p>
                    </div>

                    <div class="col-12 col-sm-5 mb-1">
                        <p class="text-grey mb-1"><strong>Arrival</strong></p>
                        <p class="mb-0">
                        </p>
                        <p class="mb-0">DATE &nbsp;-&nbsp;<?php echo  $Route->ARRIVAL_DATE ?></p>
                        <p class="mb-0">TIME &nbsp;-&nbsp;<?php echo  $Route->ARRIVAL_TIME ?></p>
                    </div>
                </div>
            </div>
            <!--  -->

            <div class="col-12 col-lg-9 my-2 border bg-success bg-opacity-50 border-dark rounded-2  py-2">
               

                <h4 class="text-center"><strong>Traveller Details</strong></h4>
                <div class="row">
                    <div class="col-6">
                        <p class="text-grey"><strong>Passengers</strong></p>
                        <input type="text" class="form-control" placeholder="Name">  
                    </div>
    <div class="col-6">


        <div class="dropdown">
                        <p>Type</p>
            <button class="col-12 btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Seat Type
            </button>
            <ul class="dropdown-menu col-12">
            <li><a class="dropdown-item" href="#">ECONOMY</a></li>
            <li><a class="dropdown-item " href="#">BUSSINESS</a></li>
    
        </ul>
        </div>
                        

                       
    </div>
                    
                </div>
                
            </div>
            <a href="price.php
            " class="btn btn-success col-4 my-2 ">Confirm</a>  
        </div>
        <!-- Journey Details end -->
       
       

       
    </div>
    </div>
</div>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>
