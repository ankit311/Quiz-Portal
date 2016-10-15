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
        <style>
            input[type=text]{
                text-transform: uppercase;
            }
        </style>
    </head>
    <body style="background-color: #e8e8e8;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <br><br><center>
        <form role="form" method="post" action='<?php echo base_url();?>quiz_controller/add_sub'>
            <div class="form-inline">
            <div class="form-group">
                <label for="usr">Subject Id:</label>
                <input type="text" class="form-control" id="subid" name="subid" required>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="form-group">
                <label for="usr">Subject Name:</label>
                <input type="text" class="form-control" id="subname" name="subname" required>
            </div>
            </div>
            <br><br>
            <center><button type="submit" class="btn btn-success quessub">Submit</button></center>
            <br><br>
    
        </form></center>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url('js/bootstrap.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/jquery-1.11.2.min.js');?>" type="text/javascript"></script>
        <?php
        // put your code here
        ?>
    </body>
</html>
