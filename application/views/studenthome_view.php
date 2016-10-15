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
            .welcome{
                color: white;
                background-color:  #46b8da;
                text-align: center;
                font-size: 70px;
                padding: 20px;
            }
        </style>
    </head>
    <body style="background-color: #e8e8e8;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="welcome">WELCOME HOME</p><br><br><br><br><br>
                    <center><a href="<?php echo base_url();?>quiz_controller/selectsubquizview"><button type="submit" class="btn btn-success quessub">START</button></a></center>
                </div>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
