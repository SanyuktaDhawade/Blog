<?php

    include "logic.php"

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Blog </title>
</head>
<body>
    <div class="container mt-5">
        <?php if(isset($_REQUEST['info'])){?>
            <?php if($_REQUEST['info']=="added"){?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully 
                </div>    
            <?php } ?>

        <?php }?>
       
        <div class="text-center">
            <a herf="create.php" class="btn btn-outline-dark">+ Create a new post</a>
        </div>

        <div class="row">
                <?php foreach ($query as $q){?>
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="card text-white bg-dark mt-5">
                            <div class="card-body" style="width: 18rem;">
                                <h5 class="card-title"><?php echo $q['title'];?></h5>
                                <p class="card-text"><?php echo $q['content'];?></p>
                                <a href="" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                            </div>
                        </div>
                    </div>
                <?php }?>
        </div>        
    </div>    
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stakcpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>      
</body>


</html>