<?php require 'common.php'; ?>
<p><h1>Available Cars To Rent</h1></p>

<center>

<p>
  <img src="images\5.jpeg"  alt="5">
  <img src="images\6.jfif"  alt="6">
  <img src="images\7.jfif"  alt="7">
  <img src="images\8.jfif"  alt="8">
</p>

<div class="panel panel-primary">
    <div class="panel-heading"><h3>Inventory Update</h3></div>
    <div class="panel-body">
      <form method="POST" action="adduser.php" name="addentry">
      <div class="form-group">

              <label for="u_name">Vehicle Model</label>
              <input type="text" class="form-control" id="u_name" required="required" name="u_name" placeholder="Enter the Manufacturer/Chasis number/Car type.">
          </div>

<div class="form-group">

        <label for="name">Vehicle Number</label>
        <input type="text" class="form-control" id="name" required="required" name="name" placeholder="Enter the vehicle RTO authorized number.">
    </div>
    <div class="form-group">

            <label for="mobile">Seating Capacity</label>
            <input type="tel" class="form-control" id="mobile" required="required" name="mobile"  placeholder="Enter the number of passengers the vehicle can carry.">
        </div>
    <div class="form-group">

            <label for="dob">Rent Per Day</label>
            <input type="date" class="form-control" id="dob" required="required" name="dob"  placeholder="Enter the rate per day of vehicle in INR.">
        </div>


    </div>
  </div>
