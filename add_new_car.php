<?php require("common.php") ?>
  <br><br>



  <p><h1>Add New Cars In Inventory Here</h1></p>

  <center>

  <p>
    <img src="images\1.jfif"  alt="1">
    <img src="images\2.jfif"  alt="2">
    <img src="images\3.jfif"  alt="3">
    <img src="images\4.jfif"  alt="4">
  </p>

  <div class="panel panel-primary">
      <div class="panel-heading"><h3>Inventory Update</h3></div>
      <div class="panel-body">
        <form method="POST" action="adduser.php" name="addentry">
        <div class="form-group">

                <label for="v_name">Vehicle Model</label>
                <input type="text" class="form-control" id="v_name" required="required" name="v_name" placeholder="Enter the Manufacturer/Chasis number/Car type.">
            </div>

  <div class="form-group">

          <label for="number">Vehicle Number</label>
          <input type="text" class="form-control" id="number" required="required" name="number" placeholder="Enter the vehicle RTO authorized number.">
      </div>
      <div class="form-group">

              <label for="capacity">Seating Capacity</label>
              <input type="number" class="form-control" id="capacity" required="required" name="capacity"  placeholder="Enter the number of passengers the vehicle can carry.">
          </div>
      <div class="form-group">

              <label for="rent">Rent Per Day</label>
              <input type="number" class="form-control" id="rent" required="required" name="rent"  placeholder="Enter the rate per day of vehicle in INR.">
          </div>


      </div>
    </div>
