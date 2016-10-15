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
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-12">
                    <br><br>
        <form role="form" method="post" action='<?php echo base_url();?>quiz_controller/add_ques'>
            <select name="subject" class="btn btn-info" required>
                <option>Select Subject</option>
                <?php
                foreach ($subjects as $s){
                    echo "<option value='$s->id'>".$s->subject."</option>";
                }
                    ?>
                </select>
            <br><br>
            <div class="form-group form-horizontal">
                <label for="usr">Question:</label>
                <input type="text" class="form-control" id="usr" name="ques" required>
            </div>
            <div class="form-inline">
            <div class="form-group">
                <label for="usr">Option 1:</label>
                <input type="text" class="form-control" id="usr" name="opt1" required>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="form-group">
                <label for="usr">Option 2:</label>
                <input type="text" class="form-control" id="usr" name="opt2" required>
            </div>
            </div><br><br>
            <div class="form-inline">
            <div class="form-group">
                <label for="usr">Option 3:</label>
                <input type="text" class="form-control" id="usr" name="opt3" required>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="form-group">
                <label for="usr">Option 4:</label>
                <input type="text" class="form-control" id="usr" name="opt4" required>
            </div>
            </div><br><br>
            <div class="form-group form-inline">
                <label for="usr">Correct Answer:</label>
                <input type="text" class="form-control" id="usr" name="corrans" required>
            </div><br><br>
            <center><button type="submit" class="btn btn-success quessub">Submit</button></center>
            <br><br>
    
  </form>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url('js/bootstrap.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/jquery-1.11.2.min.js');?>" type="text/javascript"></script>
    </body>
</html>
