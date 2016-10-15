<?php
//ini_set("display_errors",1);
require_once 'excel_reader2.php';
require_once 'db.php';

$data = new Spreadsheet_Excel_Reader("studentdata.xls");

//echo "Total Sheets in this xls file: ".count($data->sheets)."<br /><br />";

$html="<table border='1'>";
for($i=0;$i<count($data->sheets);$i++) // Loop to get all sheets in a file.
{	
	if(count($data->sheets[$i]['cells'])>0) // checking sheet not empty
	{
		//echo "Sheet $i:<br /><br />Total rows in sheet $i  ".count($data->sheets[$i]['cells'])."<br />";
		for($j=1;$j<=count($data->sheets[$i]['cells']);$j++) // loop used to get each row of the sheet
		{ 
			$html.="<tr>";
			for($k=1;$k<=count($data->sheets[$i]['cells'][$j]);$k++) // This loop is created to get data in a table format.
			{
				$html.="<td>";
				$html.=$data->sheets[$i]['cells'][$j][$k];
				$html.="</td>";
			}
			$data->sheets[$i]['cells'][$j][1];
			$collegeid = mysqli_real_escape_string($connection,$data->sheets[$i]['cells'][$j][1]);
			$fname = mysqli_real_escape_string($connection,$data->sheets[$i]['cells'][$j][2]);
			$lname = mysqli_real_escape_string($connection,$data->sheets[$i]['cells'][$j][3]);
			$branch = mysqli_real_escape_string($connection,$data->sheets[$i]['cells'][$j][4]);
                        $section = mysqli_real_escape_string($connection,$data->sheets[$i]['cells'][$j][5]);
                        $year = mysqli_real_escape_string($connection,$data->sheets[$i]['cells'][$j][6]);
                        $email = mysqli_real_escape_string($connection,$data->sheets[$i]['cells'][$j][7]);
                        $mobile = mysqli_real_escape_string($connection,$data->sheets[$i]['cells'][$j][8]);
                        $password = bin2hex(openssl_random_pseudo_bytes(4));
			$query = "insert into student_detail(college_id,fname,lname,branch,section,year,email,mobile,password) values('".$collegeid."','".$fname."','".$lname."','".$branch."','".$section."','".$year."','".$email."','".$mobile."','".$password."')";
			
			mysqli_query($connection,$query);
			$html.="</tr>";
		}
	}
	
}

$html.="</table>";
//echo $html;
echo "<br/><br/><center><div style='background-color:skyblue;color:white;font-size:25px;'>
  <strong>Success!</strong> Data Inserted Successfully.</div>
</center>";