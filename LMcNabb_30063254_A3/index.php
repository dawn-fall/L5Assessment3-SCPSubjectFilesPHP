<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCP Subject Files</title>
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
    
    <!--record db record-->
    <div>
        <?php 
            if(isset($_GET['link']))
            {
                //remove single quotes and save as php var
                $item = trim($_GET['link'], "'");

                //run sql command to retrieve record based on get value
                $record = $connection->query("select * from scp where item='$item'");
                
                //turn record into an array u can use
                $array = $record->fetch_assoc();
                
                //get id field in table and save value here
                $id = $array['id'];
                
                //create get value based on the id value
                $update = "update.php?update=" . $id;
                
                $delete = "connection.php?delete=" . $id;
                
                //echo out field data
                echo "
                <br>
                        <div class='m-2 border shadow'>
                        <br><br><br>
                                <h2 style='text-align:center; '><strong>Item: </strong>{$array['item']}</h2>
                                <h3 style='text-align:center; '><strong>Class: </strong>{$array['class']}</h3>
                                <p style='text-align: center;'><img class='subject' style='max-width: 375px;' src='{$array['image']}'</p>
                            
                            <div style='margin-left: 50px; margin-right: 50px; 'background-color: rgb(227, 227, 227);'>
                                <div class='container'>
                                    <h5><strong>Containment Procedures: </strong>{$array['contain']}</h5><br>
                                </div>
                            </div>
                                    
                            <div style='margin-left: 50px; margin-right: 50px; padding: 0px;'>
                                <div class='container'>    
                                    <h5><strong>Description: </strong>{$array['descri']}</h5><br>
                                    <h5><a href='{$update}' class='btn btn-warning'>Update Record</a><a href='{$delete}' class='btn btn-danger'>Delete Record</a></h5>
                                </div>
                            </div>
                            <br><br><br> 
                        </div>
                ";
            }
            else
            {
              echo "
                 <div class='m-2 border shadow'>
                  <h1 class='p-5' style='text-align: center;'><b>Welcome to the SCP Foundation.</b></h1>
                  <h4 class='p-2' style='text-align: center;'>This is the <strong>[EXPERTIMENTAL PHP]</strong> web-based catalogue system.</h4>
                  <h5 class='p-2' style='text-align: center;'>Above you will find the navigation bar to easily go between case files.</h5>
                  <br>
                  <h3 class='p-2' style='text-align: center;'><b>Reminder:</b> </h3>
                  <h5 class='p-2' style='text-align: center;'>This is <i>classified infomation</i>, and you are not permitted to share this with anybody outside of the Foundation.</h5>
                  <h5 class='p-2' style='text-align: center;'>Failure to comply will result in ███████████████ ██████████.</h5>
                  <h3 class='p-3' style='text-align: center;'><b>Proceed with caution.</b></h3>
                  <br>
            
                  <p style='text-align: center;'><img class='subject' src='images/conf.png' alt='CONFIDENTIAL'></p>
                  <br><br>
                </div>
                 ";
            }
        ?>
    </div>
    
    <footer class="text-light py-3 pt-4 grad">
      <div class="container-sm">
        <div class="row">
          <div class="col-md-6" >
            <h5>SCP Subject Files Catalogue</h5>
            <p>██████████████████████████████████<br>█████████████████, ██████████████<br>██████████████████</p>
          </div>
          <div class="col-md-6">
            <h5>Connect with Us</h5>
            <ul class="list-unstyled">
              <li><a href="purposeful404.html" target="_blank">████████</a></li>
              <li><a href="purposeful404.html" target="_blank">███████</a></li>
              <li><a href="purposeful404.html" target="_blank">█████████</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>