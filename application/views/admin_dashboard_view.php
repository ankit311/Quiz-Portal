<?php $this->load->view('header');?>
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url();?>quiz_controller/loadhome_view" target="iframe_output">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Result <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>quiz_controller/result_view" target="iframe_output">Quiz 1</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Question <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li>
                  <a href="<?php echo base_url();?>quiz_controller/viewques_view" target="iframe_output">VIEW</a>
              </li>
              <li>
                  <a href="<?php echo base_url();?>quiz_controller/addquesexceltodb" target="iframe_output">UPLOAD</a>
              </li>
              <li>
                  <a href="<?php echo base_url();?>quiz_controller/addques_view" target="iframe_output">ADD</a>
              </li>
              <li>
                  <a href="<?php echo base_url();?>quiz_controller/delpre_view" target="iframe_output">DELETE</a>
              </li>
            </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Subject <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li>
                  <a href="<?php echo base_url();?>quiz_controller/viewsub_view" target="iframe_output">VIEW</a>
              </li>
              <li>
                  <a href="<?php echo base_url();?>quiz_controller/addsub_view" target="iframe_output">ADD</a>
              </li>
              <li>
                  <a href="<?php echo base_url();?>quiz_controller/deletesub_view" target="iframe_output">DELETE</a>
              </li>
            </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Student Data <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li>
                  <a href="<?php echo base_url();?>quiz_controller/viewstudata_view" target="iframe_output">VIEW</a>
              </li>
              <li>
                  <a href="<?php echo base_url();?>quiz_controller/addstudata_view" target="iframe_output">UPLOAD</a>
              </li>
              <li>
                  <a href="<?php echo base_url();?>quiz_controller/addstudatamanually_view" target="iframe_output">ADD</a>
              </li>
              <li>
                  <a href="<?php echo base_url();?>quiz_controller/delstudata_view" target="iframe_output">DELETE</a>
              </li>
            </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Password <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li>
                  <a href="<?php echo base_url();?>quiz_controller/reset_view" target="iframe_output">Reset</a>
              </li>
            </ul>
        </li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $this->session->userdata('position');?></a></li>
        <li><a href="<?php echo base_url();?>quiz_controller/do_logout_user"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="<?php echo base_url();?>quiz_controller/loadhome_view" name="iframe_output"></iframe>
            </div></div>
    </div>
</div>
<?php $this->load->view('footer');