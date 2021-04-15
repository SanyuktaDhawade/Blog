<?php

    $cann = mysqli_connect("localhost", "homestead", "secret", "packetcode-tut");
    if(!$cann){
        echo"<h3 class='container bg-dark text-center p-3 text-warning rounded-lg mt-5'>Not able establish 
        Database Connection</h3>";
    }

    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn, $sql);
    if(isset($_REQUEST["new_post"])){
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];
       
        $sql = "INSERT INTO data(title, content) VALUES('$title', '$content')";
        mysqli_query($cann, $sql);
        header("Location: index.php");
        exit();
    } 

?>    