
 <?php require 'common.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
<br><br>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h3> Customer Registration</h3></div>
                        <div class="panel-body">
                          <form method="POST" action="adduser.php" name="addentry">
                          <div class="form-group">

                                  <label for="u_name">User Name</label>
                                  <input type="text" class="form-control" id="u_name" required="required" name="u_name" placeholder="Create Your Unique Username.">
                              </div>

                    <div class="form-group">

                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" required="required" name="name" placeholder="Enter Your Full Name.">
                        </div>
                        <div class="form-group">

                                <label for="mobile">Mobile</label>
                                <input type="tel" class="form-control" id="mobile" required="required" name="mobile"  placeholder="Enter Your Ten Digit Mobile Number.">
                            </div>
                        <div class="form-group">

                                <label for="dob">Birth Date</label>
                                <input type="date" class="form-control" id="dob" required="required" name="dob"  placeholder="Enter Your Date of Birth.">
                            </div>



                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" pattern=".{6,}" placeholder="Create A Strong Password." required="required">
                        </div>
                        <div class="form-group">

                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" required="required" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Your Email To Get Registered With.">
                            </div>

                        <button type="submit" class="btn btn-primary btn-block" value="SUBMIT" name="submitbtn">Submit</button>

                      </form>
                    </div>
                        <div class="panel-footer">
                        <p>Already a Customer? <a href="login_customer.php"><b>LOGIN</b></a>
                        </p><a href="login_agency.php"><b>Agency Login</b></a>
                        </div>

                    </div> </div>
                </div>
            </div>
        </div>
    </div>
