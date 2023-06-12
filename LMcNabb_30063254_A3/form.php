<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCP Subject Enter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
  </head>
  
  <body>
    
    <?php include "connection.php";?>
    
    <!--nav menu-->
    <nav class="navbar navbar-expand-lg navbar-dark grad p-5">
        <a class="navbar-brand" href="index.php" style="font-size: x-large; color: white; text-decoration:none">SCP Subject Files</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
         
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php foreach($result as $link):?>
                    <li class="nav-item"><a class="nav-link text-light" href="index.php?link=<?php echo $link['item']; ?>" ><?php echo $link['item']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
            
        <li class="nav-item"><a href="form.php" class="nav-link text-light">Add a Subject</a></li>
    </nav>
    
    <br>
    
    <div class="m-2 border shadow">
        <div class="container-bg" style="margin-left: 50px; margin-right: 50px; background-color: rgb(227, 227, 227);">
                <div class="container">
                    <h1>Enter a new Subject in the database:</h1>
                    <br>
                    <form method="post" action="connection.php" class="form-group">
                      <label>Enter Item:</label>
                      <br>
                      <input type="text" name="item" placeholder="Enter item here..." class="form-control">
                      <br><br>
                      <label>Enter Class:</label>
                      <br>
                      <input type="text" name="class" placeholder="Enter class here..." class="form-control">
                      <br><br>
                      <label>Enter Containment Procedures:</label>
                      <br>
                      <textarea name="contain" class="form-control">Enter containment information here...</textarea>
                      <br><br>
                      <label>Enter Description:</label>
                      <br>
                      <textarea name="descri" class="form-control">Enter description here...</textarea>
                      <br><br>
                      <label>Enter image location:</label>
                      <br>
                      <input type="text" name="image" placeholder="E.G: images/scp.jpg" class="form-control">
                      <br>
                      <input type="submit" name="submit" value="Submit Record" class="btn btn-warning">
                    </form>
                </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>