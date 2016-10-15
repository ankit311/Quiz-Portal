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
        <script src="<?php echo base_url('js/jquery-1.11.2.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/bootstrap.min.js');?>" type="text/javascript"></script>
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
    <body style="background-color: #e8e8e8;">
        <table class="table">
        <?php
            $i=1;
                echo "<thead>";
                echo "<tr>";
                echo "<th>S No.</th>";
                echo "<th>Subject Id</th>";
                echo "<th>Question</th>";
                echo "<th>Option 1</th>";
                echo "<th>Option 2</th>";
                echo "<th>Option 3</th>";
                echo "<th>Option 4</th>";
                echo "<th>Answer</th>";
                echo "<th>Delete</th>";
                echo "<tr>";
                echo "</thead";
                echo "<tbody>";
                foreach($quesquery as $q){
                    echo "<tr>";
                    echo "<td>".$i++."</td>";
                    echo "<td>".$q->sub_id."</td>";
                    echo "<td>".$q->ques."</td>";
                    echo "<td>".$q->opt1."</td>";
                    echo "<td>".$q->opt2."</td>";
                    echo "<td>".$q->opt3."</td>";
                    echo "<td>".$q->opt4."</td>";
                    echo "<td>".$q->ans."</td>";
                    echo "<td><a href='".base_url()."quiz_controller/deleteques/".$q->ques_id."/".$q->sub_id."' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Delete</a></td>";
                    echo "<tr>";
                }
                echo "</tbody>";
        ?>
        </table>
        <script src="<?php echo base_url('js/jquery-1.11.2.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/bootstrap.min.js');?>" type="text/javascript"></script>
    </body>
</html>
