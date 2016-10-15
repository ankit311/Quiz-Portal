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
    </head>
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/custom.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('font-awesome-4.6.3/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
        <script src="<?php echo base_url('js/bootstrap.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/jquery-1.11.2.min.js');?>" type="text/javascript"></script>
    <body style="background-color: #e8e8e8;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center><br><br>
                        <form action="<?php echo base_url();?>quiz_controller/do_upload" method="post" enctype="multipart/form-data">
                        <div class="form-inline">
                        <div class="form-group">
                            <label for="fileupload" class=" control-label">Select File:</label>
                                <input type="file" class="form-control" name="userfile" id="userfile" required>
                        </div>
                            <br><br>
                        <div class="alert alert-warning">
                            <strong>Warning!</strong> File name should be <b>studentdata.xls</b> and only <b>excel</b> sheet should be upload.
                        </div>
                        <br><br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success quessub">Submit</button> 
                        </div>
                        </div>
                    </form>
                    </center>
                </div>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
