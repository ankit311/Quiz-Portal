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
    <body>
        <table class="table">
        <?php
            $i=1;
                echo "<thead>";
                echo "<tr>";
                echo "<th>S No.</th>";
                echo "<th>College Id</th>";
                echo "<th>Name</th>";
                echo "<th>DIT0001</th>";
                echo "<th>DIT0002</th>";
                echo "<th>DIT0003</th>";
                echo "<th>DIT0004</th>";
                echo "<tr>";
                echo "</thead";
                echo "<tbody>";
                foreach($results as $r){
                    echo "<tr>";
                    echo "<td>".$i++."</td>";
                    echo "<td>".$r->college_id."</td>";
                    echo "<td>".$r->fname." ".$r->lname."</td>";
                    echo "<td>".$r->DIT0001."</td>";
                    echo "<td>".$r->DIT0002."</td>";
                    echo "<td>".$r->DIT0003."</td>";
                    echo "<td>".$r->DIT0004."</td>";
                    echo "<tr>";
                }
                echo "</tbody>";
        ?>
        </table>
        <script src="<?php echo base_url('js/jquery-1.11.2.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/bootstrap.min.js');?>" type="text/javascript"></script>
    </body>
</html>
