
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
            th,tr, td{
                background-color: lavender;
                color: black;
            }
            #sno{
                width: 40px;
                background-color: white;
            }
            #q{
                background-color: #272525;
                color: white;
                font-size: 18px;
                padding: 10px;
            }
            #hidden{
                background-color: white;
            }
        </style>
    <body>
        <form id="myform" action="<?php echo base_url();?>quiz_controller/matchans" method="post">
            <table class="table">
        <?php
            $i=1;
                echo "<tbody>";
                foreach($quesquery as $q){
                    echo "<tr>";
                    echo "<th id='sno'>".$i++."</th>";
                    echo "<th id='q' colspan='2'>".$q->ques." ?</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td id='hidden' rowspan='2'>"."<input type='text' name='quesid".$i."' value='$q->ques_id' hidden readonly>"."</td>";
                    echo "<td>"."<input type='radio' name='ans".$i."' value='1'>"." ".$q->opt1."</td>";
                    echo "<td>"."<input type='radio' name='ans".$i."' value='2'>"." ".$q->opt2."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>"."<input type='radio' name='ans".$i."' value='3'>"." ".$q->opt3."</td>";
                    echo "<td>"."<input type='radio' name='ans".$i."' value='4'>"." ".$q->opt4."</td>";
                    echo "</tr>";
                    
                }
                echo "</tbody>";
                $data = array( 
                    'sub_id' => $q->sub_id
                );
                $this->session->set_userdata($data);
        ?>
                <tr>
                    <td colspan="3" style="background-color:#e8e8e8;"><br><br><center><input type="submit" value="submit" class="btn btn-success quessub"></center></td>
                </tr>
        </table>
        </form>
        <script src="<?php echo base_url('js/jquery-1.11.2.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/bootstrap.min.js');?>" type="text/javascript"></script>
    </body>
</html>
