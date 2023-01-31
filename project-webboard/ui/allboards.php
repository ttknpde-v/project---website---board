<!DOCTYPE html>
<?php require('../modules/sort-topic.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstap -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- link bootstap -->
    <link rel="stylesheet" href="../css/style-allboards.css">
    <link rel="icon" href="../img/earth.jpg">
    <title>welcome to website-board</title>
</head>
<body>
       <!-- menu -->
       <div class="main-menu">
        <nav class="">        
            <ul class="nav nav-tabs nav-justified">
                <li class="nav-item"><a class="nav-link" href="mainweb.php">website-board</a></li>
                <li class="nav-item"><a class="nav-link" href="#add">add board</a></li>
                <li class="nav-item"><a class="nav-link" href="#table">all board</a></li>
            </ul>
            </nav>
        </div>

         <!-- greeting -->
        <div class="main-greeting">
            <p><h2 class="p1">this's all the topic</h2></p>
        </div>


        <!-- table for board -->
        <div class="main-table" id="table">
           <div class="container mt-3"> 
            <table class="table table-hover">

                <thead>
                    <tr>
                        <th>order</th>
                        <th>topic</th>
                        <th>read</th>
                        <th>answer</th>
                        <th>date</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    $count = 1; # count when people click topic
                
                    while($dbarr = mysqli_fetch_array($query_q)) {
                ?>    
                    <tr class="table-active">
                        <td><?php printf("$count"); ?></td>
                        <td><a href="viewboard.php?ID=<?php echo $dbarr[0]; ?>"><?php printf("%s",$dbarr[2]);?></td></a>
                        <td><?php printf("%s",$dbarr[5]); ?></td>
                        <td><?php  printf("%s",$dbarr[6]); ?></td>
                        <td><?php  printf("%s",$dbarr[7]); ?></td>
                    </tr>
                <?php 
                    $count = $count+1;
                    }
                ?>    
                </tbody>

            </table>
           </div>
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