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
  <body class="container">
    <h1>SCP CRUD Application</h1>
    
    <p><a href="index.php" class="btn btn-primary">Return to Index</a></p>
    
    <form method="post" action="connection.php" class="form-group">
        <label>Enter SCP Item #:</label>
        <br>
        <input type="text" name="item" placeholder="Item" class="form-control">
        <br><br>
        <label>Enter Class:</label>
        <br>
        <input type="text" name="class" placeholder="Class" class="form-control">
        <br><br>
        <label>Enter Containment Procedures:</label>
        <br>
        <input type="text" name="containment" placeholder="Containment" class="form-control">
        <br><br>
        <label>Enter Description:</label>
        <br>
        <input type="text" name="description" placeholder="Description" class="form-control">
        <br><br>
        <label>Enter Image Address:</label>
        <br>
        <input type="text" name="image" placeholder="images/imageName.jpg" class="form-control">
        <br><br>
        <input type="submit" name="submit" value="Submit Record" class="btn btn-dark">
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>
