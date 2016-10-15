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
        <script src="<?php echo base_url('js/jquery-1.11.2.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/bootstrap.min.js');?>" type="text/javascript"></script>
        <style>
            th, td {
                padding: 15px;
                text-align: left;
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
                echo "<th>College Id</th>";
                echo "<th>Name</th>";
                echo "<th>Branch</th>";
                echo "<th>Section</th>";
                echo "<th>Year</th>";
                echo "<th>Email Id</th>";
                echo "<th>Mobile No.</th>";
                echo "<th>Password</th>";
                echo "</tr>";
                echo "</thead";
                echo "<tbody>";
                foreach($records as $r){
                    echo "<tr>";
                    echo "<td>".$i++."</td>";
                    echo "<td>".$r->college_id."</td>";
                    echo "<td>".$r->fname." ".$r->lname."</td>";
                    echo "<td>".$r->branch."</td>";
                    echo "<td>".$r->section."</td>";
                    echo "<td>".$r->year."</td>";
                    echo "<td>".$r->email."</td>";
                    echo "<td>".$r->mobile."</td>";
                    echo "<td>".$r->password."</td>";
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
