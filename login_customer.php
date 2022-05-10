<?php require 'common.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                  <br><br><br>

                    <div class="panel panel-primary">
                        <div class="panel-heading"><h3>Customer Login</h3></div>
                        <div class="panel-body">
                          <form method="POST" action="validate.php" name="verifyentry">
                          <div class="form-group">

                                  <label for="u_name">User Name</label>
                                  <input type="text" class="form-control" id="u_name" required="required" name="u_name" placeholder="">
                              </div>



                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" pattern=".{6,}" placeholder="" required="required">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block" value="SUBMIT" name="submitbtn">Submit</button><br>

                      </form>
                    </div>
                        <div class="panel-footer">
                        <p>Don't have an account? <a href="register_customer.php"><b>Register</b></a></p>
                        </div>
                    </div> </div>
                </div>
            </div>
        </div>
    </div>
