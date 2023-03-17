<?php require 'connection.php'; ?>
<?php require 'header.php'; ?>



<?php
     session_start();
     
    if(isset($_POST['submit'])){
        $DEPARTURE= $_POST['DEPARTURE'];
        $ARRIVAL= $_POST['ARRIVAL'];
        $DATE= $_POST['DATE'];
        $sql='SELECT * from `route` WHERE DEPARTURE_AIRPORT_ID=:DEPARTURE AND ARRIVAL_AIRPORT_ID=:ARRIVAL AND DEPARTURE_DATE=:DATE';
        $statement=$connection->prepare($sql);
        $statement->execute([':DEPARTURE'=> $DEPARTURE,':ARRIVAL'=> $ARRIVAL,':DATE'=>$DATE]);
        $flights=$statement->fetchAll(PDO::FETCH_OBJ);
  
    }
    
    ?>



<div class="container-fluid m-0 p-0">
    <!-- nav bar start -->
    <div class="row m-0 p1 py-5">
        <div class="col-12 text-center text-white py-4">
            <div class="row">
                <div class="col-4">
                    <a href="homepage.php" class="border-0 btn">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="30"
                            height="26"
                            fill="currentcolor"
                            class="bi bi-arrow-left-circle-fill"
                            viewBox="0 0 16 16"
                        >
                            <path
                                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"
                            />
                        </svg>
                    </a>
                </div>
                <div class="col-4">
                    <h1><strong>KIV - SFO</strong></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- nav bar end -->
    <!-- .First flight details start -->
    <div class="container col-12 col-lg-9 bg-light mt-2 rounded-4 border">
    <table class="table table-primary table-striped text-center">
        <thead>
            <tr>
            <th>
                 Sl No
                </th>
                <th>
                Name
                </th>
                <th>
                    Departure
                </th>
                <th>
                    Arrival
                </th>
                <th>
                    Date
                </th>
                
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i=1;
             foreach($flights as $flight): ?>
                <tr>
                    <td><?= $i?></td>
                    <?php 
                        $id=$flight->FLIGHT_ID;
                        
                        $sql='SELECT * FROM flight where ID=:id';
                        $statement=$connection->prepare($sql);
                        $statement->execute([':id'=>$id]);
                        $route=$statement->fetch(PDO::FETCH_OBJ);

                        $depart=$flight->DEPARTURE_AIRPORT_ID;
                        $sql='SELECT * FROM airport where ID=:id';
                        $statement=$connection->prepare($sql);
                        $statement->execute([':id'=>$depart]);
                        $depart_name=$statement->fetch(PDO::FETCH_OBJ);

                        $arrival=$flight->ARRIVAL_AIRPORT_ID;
                        $sql='SELECT * FROM airport where ID=:id';
                        $statement=$connection->prepare($sql);
                        $statement->execute([':id'=>$arrival]);
                        $arrival_name=$statement->fetch(PDO::FETCH_OBJ);?>

                        <td><?=$route->FLIGHT_NAME;?></td>
                        <td><?= $depart_name->AIRPORT_NAME; ?></td>
                        <td><?= $arrival_name->AIRPORT_NAME; ?></td>
                        <td><?= $flight->DEPARTURE_DATE; ?></td>
                        <td ><a href="bookingconfirm.php?id=<?php echo $flight->id; ?>" class="btn btn-success" target="_blank">Book</a></td>
                    
                        
                </td>
                </tr>
            <tr>
            
            <?php
            $i=$i+1;
             endforeach ?>
        </tbody>
    </table>
    <!-- .First flight details end -->
</div>
<!-- container-fluid -->
<?php require 'footer.php'; ?>
