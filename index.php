<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>SCP CRUD</title>
  </head>
  <body>

    <?php include "connection.php";
    ?>
    
    <div>
        <ul class="nav navbar-dark bg-dark">
            <li class="nav-item active"><a class="nav-link text-light" href="index.php">Home</a></li>
            <!-- run php loop to display fields here -->
            <?php foreach($result as $link): ?>
            
            <li class="nav-item active"><a href="index.php?link='<?php echo
            $link['item']; ?>'" class="nav-link text-light"><?php echo
            $link['item']; ?></a></li>
            
            <?php endforeach; ?>
            
            <li class="nav-item active"><a class="nav-link text-light" href="form.php">Add New</a></li>
        </ul>
    </div>
    
    
    <div class="container">

        
        <div>
            <?php
            
                if(isset($_GET['link']))
                {
                    $item = trim($_GET['link'], "'");
                    
                    //run sql command to retrieve record in GET value
                    $record = $connection->query("select * from truck where item ='$item'");
                    
                    $array = $record->fetch_assoc();
                    
                    //variables to hold update and delete url strings
                    
                    $id = $array['id'];
                    $update = "update.php?update=" . $id;
                    $delete = "connection.php?delete=" . $id;
                    
                    echo "
                    <br>
                    <h4>Item # {$array['item']}</h4>
                    <p><img class='rounded float-end' src='{$array['image']}'></p>  
                    <p><span class='fw-bold'>Class: </span>{$array['class']}</p>
                    <p><span class='fw-bold'>Special Containment Procedures: </span>{$array['containment']}</p>
                    <p><span class='fw-bold'>Description: </span>{$array['description']}</p>
                    <p>
                    <a href='{$update}' class='btn btn-warning'>Update Record</a>
                    <a href='{$delete}' class='btn btn-danger'>Delete Record</a>
                    </p>
                    ";
                    
                    
                }   
                
                else
                {
                    echo "
                    <p><img src='images/logo.png'></p>
                    ";
    
                }
            
            ?>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>
