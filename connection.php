<?php
    //database credentials
    $user = "a30029966_user";
    $pw = "emcol@n1gG4";
    $db = "a30029966_scp";

    //database connection
    $connection = new mysqli('localhost', $user, $pw, $db);
    
    //var that reutrns records in database
    $result = $connection->query("select * from truck");
    
    // check if form data has been sent
    if(isset ($_POST['submit']))
    {
        //create variables from form post data
        $item = $_POST['item'];
        $class = $_POST['class'];
        $containment = $_POST['containment'];
        $description = $_POST['description'];
        $image = $_POST['image'];
        
        //create sql insert command
        $insert = "insert into truck(item, class, containment, description, image) values('$item','$class','$containment','$description','$image')";
        
        if($connection->query($insert) === TRUE)
        {
            echo "
                <h1>Record Added Successfully</h1>
                <p><a href='index.php'>Go to Index</a></p>
            ";
        }
        else
        {
            echo "
                <h1>Error: Could not submit</h1>
                <p>{$connection->error}</p>
                <p><a href='form.php'>Go to Form</a></p>
            ";
        }
    }// end isset post
    
    if(isset ($_POST['update']))
    {
        //create variables from form post data
        $id = $_POST['id'];
        $item = $_POST['item'];
        $class = $_POST['class'];
        $containment = $_POST['containment'];
        $description = $_POST['description'];
        $image = $_POST['image'];
        
        //create sql update command
        $update = "update truck set item='$item', class='$class', containment='$containment', description='$description', image='$image' where id='$id'";
        
        if($connection->query($update) === TRUE)
        {
            echo "
                <h1>Record Updated Successfully</h1>
                <p><a href='index.php'>Go to Index</a></p>
            ";
        }
        else
        {
            echo "
                <h1>Error: Could not update</h1>
                <p>{$connection->error}</p>
                <p><a href='form.php'>Go to Form</a></p>
            ";
        }
    }// end update post
    
    // delete record
    if (isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        
        // delete sql command 
        $del = "delete from truck where id=$id";
        
        if($connection->query($del) === TRUE)
        {
            echo "
                <style>
                
                    body{
                        font-family: 'Courier';
                    }
                    
                    a{
                        background-color: RGB(110, 110, 110);
                        border: none;
                        color: white;
                        padding 16px 32px;
                        text-align: center
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                    }
                    
                </style>
                
                <h1>Record Deleted</h1>
                <p><a href='index.php'>Back to Index Page</p>
            ";
        }
        
        else
        
        {
            echo "
                <style>
                    body{
                        font-family: sans-serif;
                    }
                    
                    a{
                    background-color: Red;
                    border: none;
                    color: white;
                    padding: 16px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    }
                    
                </style>
                
                <h1>Error deleting record</h1>
                <p>{$connection->error}</p>
                <p><a href='index.php'>Back to index page</a></p>
                ";
        }
    } //end delete
?>
