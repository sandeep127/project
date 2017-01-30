<html>
  <?php
    session_start();
  ?>
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h1>LOG IN </h1>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="validate.php">
          <div class="form-group">
            User name :<input type="text" name="uname" class="form-control" placeholder="Name">
          </div>
          <div class="form-group">
            User Roll No. :<input type="number" name="uroll" class="form-control required email" placeholder="Roll No.">
          </div>
          <div class="form-group">
            Password :<input type="password" name="upass" class="form-control" placeholder="Password">
          </div>
          <div class="modal-footer">
            <center>
              <button class="btn btn-primary">Log In</button>
            </center>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</html>