<!DOCTYPE html>
<?php require('../modules/insert-topic.php');?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-mainweb.css">
    <link rel="icon" href="../img/earth.jpg">
    <!-- link bootstap -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- link bootstap -->
    <title>welcome to website-board</title>
</head>
<body>
    
    <!-- menu -->
    <div class="main-menu">
        <nav class="">        
            <ul class="nav nav-tabs nav-justified">
                <li class="nav-item"><a class="nav-link" href="mainweb.php">website-board</a></li>
                <li class="nav-item"><a class="nav-link" href="#add">add board</a></li>
                <li class="nav-item"><a class="nav-link" href="allboards.php">all board</a></li>
            </ul>

        </nav>
    </div>


    <!-- greeting -->
    <div class="main-greeting">
        <p><h2 class="p1">Hello , Can I help you ?</h2></p>
    </div>

    
    <!-- form -->
    <div class="main-form" id="add">
        <p><h3 class="p2">Add a question</h3></p>
        <form action="" method="POST">
                
            <div class="mb-3 row">     
                <label class="col-sm-2 col-form-label" for="">topic</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="topic" id="" required>
                </div>    
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="">author</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="name" id="" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="">email</label>
                <div class="col-sm-10">
                    <input class="form-control" type="email" name="email" id="" required>
                </div>
            </div>


            <div class="main-detail">
                <label class="form-label" for="">details</label>
                <textarea class="form-control" name="detail" id="" rows="8"></textarea>
            </div>


            <div class="main-bt">
                <button class="btn btn-outline-primary" name="send" type="submit">send</button>
                <button class="btn btn-outline-primary" type="reset">clear</button>
                <button class="btn btn-outline-primary"><a class="go-to" href="allboards.php">all board</a></button>
            </div>

        </form>
    </div>

    <!-- footer -->
    <div>
        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-3">
                <p>© 2023 Copyright website-board</p>
            </div>
        </footer>
    </div>
    
</body>
</html>