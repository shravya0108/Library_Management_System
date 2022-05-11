<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="addbook1.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lato:wght@300&family=Nunito:ital,wght@0,200;1,300&family=Open+Sans:ital,wght@0,800;1,300;1,400&family=Spinnaker&family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/74e5afab15.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 
    <title>Add Book</title>
</head>
<body>
    <h1 class="heading">Add Book</h1>
    
    <div class="form">
    <form action="" method="post" >
        <label for="BOOK NAME"><span class="itxt">BOOK NAME:  </span></label>
        <input  class="iput" type="text" name="bname" required><br><br>

        <label for="BID"><span class="itxt">BOOK ID: </span> </label>
        <input class="iput" type="text" name="bid"  required><br><br>

        <label for="AUTHOR"><span class="itxt">AUTHOR:</span></label>
        <input class="iput" type="text" name="author" required><br><br>


        <label for="DEPARTMENT"><span class="itxt">DEPARTMENT:</span></label>
        <select class="iput" id="dep" name="dep" required>
            <option value="" >Select Department</option>
            <?php echo load_dep();?>

</select>
        
        <br><br>
        <label for="COURSE"><span class="itxt" name="course">COURSE:</span></label>
        <select class="iput" id="course" name="course" required>
            <option value="">Select Course</option>

            
</select><br><br>

        <label for="PUBLISH YEAR"><span class="itxt">PUBLISH YEAR:</span></label>
        <input class="iput" type="text" name="pyear" required><br><br>

        <input type="submit" class="ibutton " value="Add" name="submit"></input>

        <div id="showres"></div>
        

    </form>
    <a href="adminpage.php"><button class="ibutton" >Back</button></a>
    <br><br>
    

</div>
<?php
function load_dep(){
    include("connection.php");
    $sql="select * from department order by depname";
    $output=' ';
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        $output.='<option value="'.$row['depid'].'">'.$row['depname'].'</option>';
    }
    return $output;

}

?>

</body>
<script type="text/javascript">
   
    $(document).ready(function(){
        $('#dep').change(function(){
            var dep_id=$(this).val();
            if(dep_id)
            {
          
            $.ajax({
                url:"getcourse.php",
                method:"POST",
                data:{dep_id:dep_id},
                dataType:"text",
                success:function(data)
                {  
                 
                    $('#course').html(data); 
                }
            });
            }
        });


    });

    </script>
    <?php
    if(isset($_POST['submit']))
    {
        $bid=$_POST['bid'];
        $btitle=$_POST['bname'];
        $bauthor=$_POST['author'];
        $cid=$_POST['course'];
        $bpublish=$_POST['pyear'];
        include("connection.php");
        $sql1="select  *  from bookdetails where bid=".$bid;
        $res1=mysqli_query($conn,$sql1);
        if((mysqli_num_rows($res1))>0)
        {
            echo "<script>alert('BOOKID already exists')</script>";
        }
        else
        {
           
            
           $sql3="insert into bookdetails values(".$bid.",'".$bauthor."','".$btitle."',".$cid.",".$bpublish.",1)";
           
           $res3=$conn->query($sql3) or die("Error quering database2".mysqli_error($conn));
           echo "<div class='alert alert-success' role='alert' style='text-align:center'>Successfully Inserted</div>";
            
            $conn->close();
        }
    }
        
            ?>
            <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</html>