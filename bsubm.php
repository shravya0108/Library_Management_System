
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<?php
if(isset($_POST['submit']))
{
    $conn= mysqli_connect("localhost","root","","blog_submissions");
    // Check connection
    if (!$conn) {
   
    echo "<div class='alert alert-danger' role='alert'>
    Failed to connect to MySQL:". $conn -> connect_error.
    "</div>";
    exit();
    }
    else
    {
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $title = test_input($_POST["title"]);
    $text = nl2br(test_input($_POST["text"]));

    $submissiontype = test_input($_POST["submissiontype"]);
   
      $text=str_replace("'","\'",$text);
    $sql = "INSERT INTO blog_sub VALUES ('$name', '$email', '$submissiontype','$title','$text')";
    if ($conn->query($sql) === TRUE) {
      
      echo "<script>alert('Submission Successful')</script>";
      echo "<script>window.history.back()</script>";
    }
}

}
?>