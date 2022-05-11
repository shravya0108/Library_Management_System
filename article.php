<!DOCTYPE html>
<?php


$conn= mysqli_connect("localhost","root","","blog_submissions");
// Check connection
if (!$conn) {

echo "<div class='alert alert-danger' role='alert'>
Failed to connect to MySQL:". $conn -> connect_error.
"</div>";
exit();
}
?>
<html>
    <head>
        <meta charset="utf-8">
        
        <title>Article Page</title>
        <meta name="description" content="">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
        
        <link rel="stylesheet" href="poem.css">
 
</script>

<style>
  a{
    margin:5px;
    padding:10px;

}
.container{
  margin:3rem;
  padding:2rem;
  
  border-radius:4rem;

}
.post-headings{
   
    font-weight:20px;
}
.a-links{
    border:solid;
}
.pagination{
    display:flex;
    align-items:center;
    justify-content:center;
}
.navtp{
  position:relative;
}
</style>
    </head>
    <body>
       <div class="poem-body">
       
        <img class="poem1img" src="Images\flowerblog1.jpg" alt="image of flowers">
        <div class="poemimgback">
        <h1 class="welpoem"><span class="h1head">You Can always edit a bad page.You cant edit a blank page</span></h1></div>
        <div class="navtp">
            <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="blog.php">Home</a></li>
               <li class="breadcrumb-item active" aria-current="page">Article</li>
             </ol>
           </nav>
           
       </div>
      
       <div class="poem-disp" id="maindisp">









       </div>
        <div >
          
            <div class="list-group opp p-2 ">
            
               <div class="poem-posts "><h2 >ARTICLE POSTS</h2></div>

                  
                </div>
                <?php 
                 function disp($str)
                 {
                  // echo '<script>document.getElementById("maindisp").innerHTML='.$str.'</script>';
                  echo $str;
                 }
                if(isset($_GET['page'])){
                  $page=$_GET['page'];
                }
                else{
                  $page=1;
                }
                $limit=1;
                $offset = ($page - 1) * $limit;
               $sql1="SELECT * FROM blog_sub WHERE submission_type='article'LIMIT $offset,$limit";
               $res=$conn->query($sql1);
               
               
                
               if(mysqli_num_rows($res)>0)
               {
                 
                while($poemposts = mysqli_fetch_assoc($res)){
                  
                   echo'
                    
                    
                    <div class="blogs container"   style="margin-left:8rem;text-align:center;background-color:#EAEAEA;><h1 style="padding-bottom:0.5rem;"><span style="color:#B34180;font-size:150%;text-decoration:underline;" class="post-headings">
                    '.$poemposts["title"].'</span></h1>
                    <h6 style="padding-bottom:2rem;"><p><br><span style="font-size:105%;"class="">'.$poemposts["content"].'<br><br>-'.$poemposts["name"].'</span></p></h6></div>';
                    
                }


               }
              $sql="SELECT COUNT(*) from blog_sub WHERE submission_type='article'";
              $res=mysqli_query($conn,$sql);
              
              $total_rows=mysqli_fetch_array($res)[0];
              
              $total_page=ceil($total_rows/$limit);

          
          
          ?>

                

                
            
        </div>
        <!--div class="next">
            <ul class="pagination pagination-lg justify-content-center">
                
                <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
                <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
                <li class="page-item"><a class="page-link" href="?page=3">3</a></li>
                
              </ul>
              
        </div-->
        <ul class="pagination">
            <li class="page-item">
             <a  class="page-link" href="?page=1">First</a>
            </li>
             
             <li class="page-item">
             <a class="page-link" href="<?php if($page<=1){echo '#';}else {echo "?page=".$page-1;}?>"><</a>
            </li>
             <?php
                for($i=1;$i<=$total_page;$i++){
                  echo "<li class='page-item'><a class='page-link' href='?page=$i'>".$i."</a></li>";

                }
             
             ?>
             <li class="page-item">
            <a class="page-link" href="<?php if($page==$total_page){echo '#';}else {echo "?page=".$page+1;}?>">></a>
            </li>

            <li class="page-item">
            <a  class="page-link" href="?page=<?php echo $total_page; ?>">Last</a>
            </li>
        </ul>
        <?php  
           $conn->close();
        
        ?>
        <!---div class="join-us">
               <h3>JOIN OUR 506,346 SUBSCRIBERS</h3>
               <h4>Get Latest Updates on your mail!</h4>
               <div class="container-fluid">

                <form name="registration_form" id="registration_form" class="form-horizontal">
                     
                             <div class="d-flex flex-row">
                             <div class="">
                             <label for="email" ></label>
                             <input id="email" class="" type="email" name="email" title="Enter email" placeholder="Email">
                             </div>
                           <div class=" submit-button">
                               <h6><a>SUBMIT</a></h6>
                           </div>
                           </div>
                          
                </form>
                </div>
            <div class="copyrights">
            <p><i class="fas fa-copyright"></i>2020-2021 All Rights Reserved</p>
            </div>    
               
        </div-->
       
    </div>
  
    </body>
</html>