<?php
$connection = mysqli_connect("localhost:4306", "root", "abcd", "library");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$query = "SELECT COUNT(sno) FROM book_details";
$result = mysqli_query($connection,$query);
$val = mysqli_fetch_assoc($result);

$query = "SELECT COUNT(sno) FROM book_details where Availability = 'NOT ISSUED'";
$result = mysqli_query($connection,$query);
$value = mysqli_fetch_assoc($result);

$query = "SELECT COUNT(s_no) FROM issue_book ";
$result = mysqli_query($connection,$query);
$valu = mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>    
    <div class="nav">
        <a href="https://srmeaswari.ac.in/"><img id="dep" src="srmeec.png" alt="eec logo"></a>
        <p id="dept">DEPARTMENT OF CSE</p>
        <div><a class="a1" href="#home">Home</a></div>
        <div><a class="a2" href="search.php">Search</a></div>
        <div><a class="a3" href="index.php">Admin</a></div>
    </div>

    <div class="box1">
        <p class="bimg" style="background-image: url('H_images/bbb.jpg');"></p>
    </div>
    <div  class="heading">
        <h2>Library Management System</h2>
    </div>
    <div class="show">
        <div class="books">
            <h1>No. of Books</h1>
            <p id="number1"><?php print_r($val['COUNT(sno)'])?></p>
        </div>
        <div class="avl">
            <h1>No. of Books Available</h1>
            <p id="number3"><?php print_r($value['COUNT(sno)'])?></p>
        </div>
        <div class="iss">
            <h1>No. of Books Issued</h1>
            <p id="number4"><?php print_r($valu['COUNT(s_no)'])?></p>
        </div>
    </div>
</body>
</html>