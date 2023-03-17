
<?php
    require 'connection.php';
    require 'header.php';
    ?>
   <?php 
     $sql='SELECT ID,AIRPORT_NAME FROM airport ';
     $statement=$connection->prepare($sql);
     $statement->execute();
     $flights=$statement->fetchAll(PDO::FETCH_OBJ);

   ?>
    
   <div class="container ">
    <form action="search.php" method="POST">
        <div class="row my-5">
            <div class="col-sm-3">
            <select class="form-select" name="DEPARTURE">
				<option value disabled selected>FROM:</option>
                <?php foreach($flights as $flight):?>
				<option value="<?= $flight->ID; ?>" required><?= $flight->AIRPORT_NAME;?></option>		
                <?php endforeach;?>		
             </select>
            </div>
            <div class="col-sm-3">
            <select class="form-select" name="ARRIVAL">
				<option value disabled selected>TO:</option>
                <?php foreach($flights as $flight):?>
				<option value="<?= $flight->ID; ?>" required><?= $flight->AIRPORT_NAME;?></option>		
                <?php endforeach;?>		
             </select>
            </div>
            <div class="col-sm-4">
                <input type="date" name="DATE"  class="form-control">
            </div>
            <div class="col-sm-2">
                 <input type="submit" name="submit" value="search" class="btn btn-info">
            </div>
        </div>
    </form>
    
   </div>
    <?php  require 'footer.php'; ?>