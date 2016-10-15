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
            th, td {
                padding: 15px;
                text-align: left;
                text-transform: uppercase;
            }
            tr:hover {background-color: #ddffdd}
            th {
                background-color: #4CAF50;
                color: white;
            }

        </style>
    </head>
    <body style="background-color: #e8e8e8;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
        <table class="table">
        <?php
            $i=1;
                echo "<thead>";
                echo "<tr>";
                echo "<th>S No.</th>";
                echo "<th>Subject Id</th>";
                echo "<th>Subject Name</th>";
                echo "<th>DELETE</th>";
                echo "</tr>";
                echo "</thead";
                echo "<tbody>";
                foreach($records as $r){
                    echo "<tr>";
                    echo "<td>".$i++."</td>";
                    echo "<td>".$r->id."</td>";
                    echo "<td>".$r->subject."</td>";
                    echo "<td><a href='".base_url()."quiz_controller/deletesub/".$r->id."'class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Delete</a></td>";
                    echo "</tr>";
                }
                echo "</tbody>";
        ?>
        </table>
                </div>
            </div>
        </div>
     <script src="<?php echo base_url('js/bootstrap.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/jquery-1.11.2.min.js');?>" type="text/javascript"></script>
    </body>
</html>
