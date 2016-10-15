<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/custom.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('font-awesome-4.6.3/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
        <script src="<?php echo base_url('js/bootstrap.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/jquery-1.11.2.min.js');?>" type="text/javascript"></script>
    </head>
    <body style="background-color: #e8e8e8;">
        <div class="container" >
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <h3 style="text-decoration: underline; font-weight: 500;">Student Detail</h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
        <form role="form" method="post" action='<?php echo base_url();?>quiz_controller/add_stu_man'>
            <div class="form-horizontal">
                <div class="form-group">
                <label for="usr">College Id </label>
                <input type="text" class="form-control" id="usr" name="coll_id" required>
                </div>
                 <div class="form-group">
                <label for="usr">First Name </label>
                <input type="text" class="form-control" id="usr" name="fname" required>
                </div>
                 <div class="form-group">
                <label for="usr">Last Name </label>
                <input type="text" class="form-control" id="usr" name="lname" required>
                </div>
                 <div class="form-group">
                <label for="usr">Branch </label>
                <input type="text" class="form-control" id="usr" name="branch" required>
                </div>
                 <div class="form-group">
                <label for="usr">Section </label>
                <input type="text" class="form-control" id="usr" name="sec" required>
                </div>
                 <div class="form-group">
                <label for="usr">Year </label>
                <input type="text" class="form-control" id="usr" name="year" required>
                </div>
                 <div class="form-group">
                <label for="usr">Email Id </label>
                <input type="text" class="form-control" id="usr" name="email" required>
                </div>
                 <div class="form-group">
                <label for="usr">Mobile No. </label>
                <input type="text" class="form-control" id="usr" name="mobile" required>
                </div>
                 <div class="form-group">
                <label for="usr">Password </label>
                <input type="text" class="form-control" id="usr" name="password" required>
                </div>
                </div>
        </form>
                </div>
            </div>
            <br><br>
            <div class="row">
            <div class="col-md-5 col-md-offset-4">
            <center><button type="submit" class="btn btn-success quessub">Submit</button></center>
            </div>
            <br><br>
                </div>
            <br><br><br>
            </div>
        <script src="<?php echo base_url('js/bootstrap.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/jquery-1.11.2.min.js');?>" type="text/javascript"></script>
    </body>
</html>
