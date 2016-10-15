<?php $this->load->view('header') ?>
<div class="container" style="min-height: 450px; width: 90%; margin-right: 110px;">
            <div class="row">
                <br><br>
                <div class="col-md-3 col-md-offset-1 temp">
                    <center><div class="img-thumbnail"><img src="<?php echo base_url('img/admin.png'); ?>" alt="admin" width="125" height="125"></div>
                        <h4>Admin's</h4>
                        <a href="<?php echo base_url();?>quiz_controller/userloginview"><button type="button" class="btn btn-primary">Login</button></a>
                    </center>
                </div>
                <div class="col-md-3 col-md-offset-1 temp">
                    <center><div class="img-thumbnail"><img src="<?php echo base_url('img/professors.png');?>" alt="faculty" width="125" height="125"></div>
                        <h4>Professor's</h4>
                        <a href="<?php echo base_url();?>quiz_controller/userloginview"><button type="button" class="btn btn-primary">Login</button></a>
                    </center>
                </div>
                <div class="col-md-3 col-md-offset-1 temp">
                    <center><div class="img-thumbnail"><img src="<?php echo base_url('img/student.png'); ?>" alt="student" width="125" height="125"></div>
                        <h4>Student's</h4>
                        <a href="<?php echo base_url();?>quiz_controller/studentloginview"><button type="button" class="btn btn-primary">Login</button></a>
                    </center>
                </div>
            </div>
        </div>
<?php $this->load->view('footer');
