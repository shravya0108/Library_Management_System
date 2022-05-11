<?php
include("connection.php");
$out='';
$sql='select * from courses where depid="'.$_POST['dep_id'].'"ORDER BY cname';
$re=mysqli_query($conn,$sql);

 while($roww=mysqli_fetch_assoc($re))
 {
     $out.='<option value="'.$roww["cid"].'">'.$roww["cname"].'</option>';
    
 }
 echo $out;
 ?>