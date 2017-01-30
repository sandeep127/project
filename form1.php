<html>
  <div class="modal fade" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h1>SIGN UP</h1></center>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="Save.php">
          <div class="form-group">
            <input type="email" class="form-control required" name="mail" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control required" name="pass" placeholder="Password">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="fname" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" name="roll" placeholder="Roll No.">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" name="contact" placeholder="Contact">
          </div>
          <div class="modal-footer">
            <div class="col-md-8">
              <input type="text" id="secure" placeholder="Enter The Captcha">
              <input type="text" id="secure1" style="text-align:center; border:none;
              font-weight:bold; font-family:Modern"/>
              <br />
              <br />
            </div>
            <center>
              <button onClick="validate()" class="btn btn-primary">Create Account</button>
              <button type="reset" class="btn btn-primary">Reset</button>
            </center>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</html>