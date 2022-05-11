<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lato:wght@300;900&family=Mukta:wght@300;400&family=Nunito:ital,wght@0,200;1,300&family=Open+Sans:ital,wght@0,800;1,300;1,400&family=Spinnaker&family=Tangerine:wght@700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/74e5afab15.js" crossorigin="anonymous"></script>
     
    <title>Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&display=swap" rel="stylesheet">
    <script href="blogfront.css" rel="stylesheet"></script>
    <style>
        .nav-item{
    margin-left:4rem;
    font-weight: bold;
    font-size:1rem;
}
.nav-item:hover{
    background-color: rgb(201, 201, 231);
}
.shift{
    margin-left: 5rem;
}
body{
  overflow-x: hidden;
}
.blogimg{
  height: 550px;
  width:100%;
  
  
 
}
.wel{
  text-align: center;
  font-size: 70px;
  padding-top:4rem;
  
  
  font-weight:700;
}
.carousel-item{
    background-color: #94DAFF;
    width:1250px;
    height:150px;
}
#latestblogs{
    position:absolute;
    top:45rem;
    
}
.text{
    padding-top: 5rem;
    padding-bottom:15rem;
    padding-right:8rem;
    padding-left:8rem;
}
.blogh2{
    text-align:center;
}
#butn,#butn1,#butn2{
    display: inline-block;
    position:absolute;
    vertical-align: top;
    padding:2rem 4rem;
    top:45rem;
    margin:6rem;
    font-weight: bolder;
    border-width:thick;
}
.btn-default{
    background-color:#0b7cd8;
}







        </style>
  <!--script href="blogfront.css" rel="stylesheet"></script-->
  </head>
  <body>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script href="blogfront.css" rel="stylesheet"></script>

    <?php
    include("header.html");

    ?>
     
      <div class="blog-main-img">
        <img class="blogimg" src="images/blogmainimg.jpg" alt="Blog image ">
          
        </div>
      <div class="wel">
        <h1>Creative Informative Blogs</h1>
      </div>
       
      <!--section id="latestblogs">
        <div id="carouselExampleInterval" class="carousel slide"  data-bs-interval="false">
            <div class="carousel-inner" style="width:100%;">
              <div class="carousel-item  active container-fluid text" >
                <h2 class="blogh2">This is Blog page for students</h2>
              </div>
              <div class="carousel-item container-fluid text" >
                <h2 class="blogh2">Sit quasi libero et odit illum eos rerum qui quibusdam culpa ea voluptatem blanditiis et voluptate neque ea ullam nihil. Est sequi neque et repellat vitae ea voluptatem dolore non animi explicabo At obcaecati omnis a dolores similique rem sint veritatis.</h2>
              </div>
              <div class="carousel-item container-fluid text">
                <h2 class="blogh2">aaaaaaa aaaaaaaaaaa aaaaaaaaaaa aaaaaaaaaaaaa aaaaaaaaaaaa aaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaa</h2>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" ></span>
              
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" ></span>
              
            </button>
          </div>
          </div>
    </section-->

    <div class="row">
      <div class="col-lg-4">

        <button id="butn" class="btn btn-outline-dark " OnClick="window.location.href='poem.php'"> POEM</button>
       </div>
       <div class="col-lg-4">
        <button id="butn1" class="btn btn-outline-dark" OnClick="window.location.href='story.php'">STORIES</button>
      </div>
      <div class="col-lg-4">
        <button id="butn2" class="btn btn-outline-dark " OnClick="window.location.href='article.php'">ARTICLES</button>
      </div>

    </div>
    <?php include('footer.html')?>
  </body>
</html>