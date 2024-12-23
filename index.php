<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $id=$_POST['id'];

    $sql ="INSERT INTO details(name,phone,id) VALUES('$name','$phone','$id')";
    if ($connection-> query($sql)===TRUE)
    {
        header("Location: index.php");
        exit();
    }
    else {echo "error:" . $sql . "<br>" . $connection->error;}
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student list</title>
</head>
<body>
   <form action="index.php" method="POST">
    <label for="name">Name</label> <br>
    <input type="text" name="name" id="name"> <br>
    <label for="phone">Phone Number</label> <br>
    <input type="number" name="phone" id="phone"> <br>
    <label for="id">Student ID</label> <br>
    <input type="number" name="id" id="id"> <br>
    <button>submit</button>
   </form>
</body>
</html>