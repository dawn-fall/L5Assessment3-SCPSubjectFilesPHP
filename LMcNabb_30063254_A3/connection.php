<?php
    //database credentials
    $user = "a30063254_SamsungMiniGT-S5570";
    $db = "a30063254_scp";
    $pw = "kenworthscp";
    
    //database connection
    $connection = new mysqli('localhost', $user, $pw, $db);
    
    //var that returns all records in the database
    $result = $connection->query("select * from scp");
    
    //process data from form.php
    //check to see if form data has been sent via post
    if(isset($_POST['submit']))
    {
        //create vars from form post data
        $item = $_POST['item'];
        $class = $_POST['class'];
        $image = $_POST['image'];
        $contain = $_POST['contain'];
        $descri = $_POST['descri'];

        //create a sql insert cmd
        $insert = "insert into scp(item, class, image, contain, descri) values('$item', '$class', '$image', '$contain', '$descri')";

        if($connection->query($insert) === TRUE)
        {
            echo "<h1>Record added successfully!</h1>
            <p><a href='index.php'>Back to Index</a></p>";
        }
        else
        {
            
            
            echo "<h1>Error submitting record :(</h1>
            <p><a href='index.php'>Back to Index</a></p>";
        }
    }
    
    //update record
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        //create vars from form post data
        $item = $_POST['item'];
        $class = $_POST['class'];
        $image = $_POST['image'];
        $contain = $_POST['contain'];
        $descri = $_POST['descri'];

        //create update sql insert cmd
        $update = "update scp set item='$item', class='$class', image='$image', contain='$contain', descri='$descri' where id='$id'";

        if($connection->query($update) === TRUE)
        {
            echo "<h1>Record updated successfully!</h1>;
            <p><a href='index.php'>Back to Index</a></p>";
        }
        else
        {
            echo "<h1>Error updating record :(</h1>;
            <p>{$connection->error}</p>;
            <p><a href='index.php'>Back to Index</a></p>";
        }
    }
    
    //delete record
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];

        //delete
        $delete = "delete from scp where id='$id'";

        if($connection->query($delete) === TRUE)
        {
            echo "<h1>Record deleted successfully!</h1>
            <p><a href='index.php'>Back to Index</a></p>";
        }
        else
        {
            echo "<h1>Error deleting record :(</h1>;
            <p>{$connection->error}</p>;
            <p><a href='index.php'>Back to Index</a></p>";
        }
    }
?>