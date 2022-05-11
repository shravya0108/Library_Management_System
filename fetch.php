<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/74e5afab15.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<?php

include("connection.php");
$output='';
$sql1="select B.bauthor as y,B.btitle as x,C.cname as w,count(distinct B.bid) as cnt from bookdetails B, courses C where B.bkcid=C.cid and B.bavailable=1 and C.cname like '%".$_POST["search"]."%' group by btitle";
$res1=$conn->query($sql1);
if(mysqli_num_rows($res1)>0)
{
    $output.='<h4 align="center">Search Result</h4>';
    $output.='<div class="table-responsive">
                <table class="table table bordered">
                <tr>
                <th>Course Name</th>
                <th>Book Name</th>
                <th>Book Author</th>
                <th>Count</th>
                </tr>';
                while($row=mysqli_fetch_array($res1))
                {
                    $output.='
                    <tr>
                    <td>'.$row['w'].'</td>
                    <td>'.$row['x'].'</td>
                    <td>'.$row['y'].'</td>
                    <td>'.$row['cnt'].'</td>
                    </tr>';
                }
                echo $output;

}
else{
    echo 'Data Not Found';
}
?>