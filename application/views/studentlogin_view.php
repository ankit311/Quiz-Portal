<?php $this->load->view('header');?>
<div class="container" style="height: 450px;">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <center><br><br>
     <fieldset>
      <legend>Student Login</legend>
    <form class="form-horizontal" role="form" action='<?php echo base_url();?>quiz_controller/studentloginprocess' method="post">
        <div style=" background-color:  #D0D0D0; border: 2px solid #8c8c8c; border-radius: 20px;">
            <br><br><br>
        <div class="form-group">
        <label for="collegeid" class="col-lg-4 control-label">College Id</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="college_id" id="college_id" placeholder="Enter College Id" required>
        </div>
     </div> <br>
      <div class="form-group">
        <label for="Password" class="col-lg-4 control-label">Password</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password." required>
        </div>
      </div><br><br>
      <div class="form-group">
        <div class="col-md-12">
          <button type="submit" class="btn btn-success quessub">Login</button> 
        </div>
      </div>
      <br><br>
        </div>
    </form>
      <?php if(! is_null($msg)){ echo '<div class="alert alert-warning">'.$msg.'</div>';}?>
   </fieldset>
            </center>
        </div>
  </div>
        </div>
<?php $this->load->view('footer');?>