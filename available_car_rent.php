<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Rentals</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images\apple-touch-icon.jpg">
    <link rel="icon" type="image/jpg" sizes="32x32" href="images\favicon.jpg">
    <link rel="icon" type="image/jpg" sizes="16x16" href="images\favicon.jpg">
</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
              <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                    <a href="available_car_rent.php" class="navbar-brand">Car Rentals</a>
                    </div>
                    <p><h1>Available Cars To Rent</h1></p>


                  </div>

  </div>




                    <center>

                    <p>
                      <img src="images\5.jpeg"  alt="5">
                      <img src="images\6.jfif"  alt="6">
                      <img src="images\7.jfif"  alt="7">
                      <img src="images\8.jfif"  alt="8">
                    </p>

                    <div class="panel panel-primary">
                        <div class="panel-heading"><h3>Inventory Update</h3></div>

  <div class="container">
   <div class="row">
     <div class="col-sm-8">
      <?php echo $deleteMsg??''; ?>
      <div class="table-responsive">
        <table class="table table-bordered">
         <thead><tr><th>S.N</th>

           <th>Vehicle Name</th>
           <th>Vehicle Number</th>
           <th>Capacity</th>
           <th>Rent per Day</th>
      </thead>
      <tbody>
    <?php
        if(is_array($fetchData)){
        $sn=1;
        foreach($fetchData as $data){
      ?>
        <tr>
        <td><?php echo $sn; ?></td>
        <td><?php echo $data['vehicle_model']??''; ?></td>
        <td><?php echo $data['vehicle_number']??''; ?></td>
        <td><?php echo $data['seating_capacity']??''; ?></td>
        <td><?php echo $data['rent_per_day']??''; ?></td>
       </tr>
       <?php
        $sn++;}}else{ ?>
        <tr>
          <td colspan="8">
      <?php echo
      $fetchData; ?>
    </td>
      <tr>
      <?php
      }?>
      </tbody>
       </table>
     </div>
  </div>
  </div>
  </div>

              </div>
  </div>
  <footer class="footer">
    <div class="container">
       <center>
          <p>Copyright &copy; Car Rentals. All Rights Reserved  |  Drive Safe</p>
       </center>
    </div>
</footer>
</body>
</html>
