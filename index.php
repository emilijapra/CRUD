
<?php include "./routes.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12"></div>
                <div class="col-12 border col-12  mt-4">
                    <div class="row">
                        <div class="col-7">
                            <h1>
                                <a href="./index.php">HOME</a>
                            </h1>
                        </div>
                        <div class="col-7">
                            <form action="" method="get" class="float-right">
                                <div class="row">
                                  <div class="col-8">
                                      <input type="text" class="form-control" name="search" >
                                    </div>  
                                    <div class="col-6">
                                        <button class="btn btn-primary"type="submit">Look for</button>
                                    </div>
                                        
                                </div>
                            </form>
                    </div>
                    </div>
                    
                    
                    <?php include "./components./form.php"; ?>
                    
        </div>
            
            
            <div class="col-3"></div>
    </div>
     
    <?php include "./components./filter.php"; ?>
    <?php include "./components./table.php"; ?>

    
</div>     
</body>
</html>