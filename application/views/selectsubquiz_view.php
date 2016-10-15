
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
        
        <script>
        function showQues(str) {
            console.log(str);
            if (str==="") {
                document.getElementById("txtHint").innerHTML="";
                return;
            } 
            data = {
                sub_id: str
            };
            $.ajax({
               url:window.location.protocol + "//" + window.location.hostname + "/quiz/quiz_controller/quizques",
               data: data,
               type: "post",
               success: function(res){
                   $('#txtHint').html(res);
               }
            });

        }
</script>
    <body style="background-color: #e8e8e8;">
        
    <br><center>
        <form>
            <select name="subject" style="font-size:18px;" id="subject" class="btn btn-info" onchange="showQues(this.value)">
            <option>Select Subject</option>
        <?php
            foreach ($subjects as $s){
                    echo "<option value='$s->id'>".$s->subject."</option>";
                }
        ?>
        </select>
        </form></center>
        <br>
       <div  id="txtHint" class="">
           <div class="alert alert-info col-md-6 col-md-offset-3">
            <strong>Info!</strong> Question will be listed below according to selection of subject.
           </div>
       </div>
        <script src="<?php echo base_url('js/jquery-1.11.2.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/bootstrap.min.js');?>" type="text/javascript"></script>
        
    </body>
</html>
