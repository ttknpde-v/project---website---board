<!DOCTYPE html>
<?php require('../modules/view-detail.php'); 
      
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstap -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- link bootstap -->
    <link rel="stylesheet" href="../css/stlye-viewboard.css">
    <link rel="icon" href="../img/earth.jpg">
    <title>welcome to website-board</title>
</head>
<body>
     <!-- menu -->
     <div class="main-menu">
        <nav class="">        
            <ul class="nav nav-tabs nav-justified">
                <li class="nav-item"><a class="nav-link" href="mainweb.php">website-board</a></li>
                <li class="nav-item"><a class="nav-link" href="mainweb.php">add board</a></li>
                <li class="nav-item"><a class="nav-link" href="allboards.php">all board</a></li>
            </ul>
            </nav>
        </div>

        <!-- greeting -->
        <div class="main-greeting">
            <p><h2 class="p1">Topic No. <?php echo $ID; ?></h2></p>
        </div>


        <div class="main-table">
            <!-- table main board -->

            <table class="table">
                <tbody>
                    <tr>
                        <td><h4><?php printf("%s",$result_q['topic_q']);?></h4></td>
                    </tr>
                    <tr>
                        <td>author : <?php printf("%s",$result_q['name_q']);?></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>details : <?php printf("%s",$result_q['detail_q']);?></td>
                    </tr>
                    <tr>
                        <td class="date">date time : <?php printf("%s",$result_q['date_q']);?></td>
                    </tr>

                </tfoot>  
            </table>



            <?php 
            if ($ID != NULL) {
                if ($rows_a > 0) {
                    $count_for_view = 1;
                    while ($result_a = mysqli_fetch_array($query_a)) {
            ?>

            <!-- table answer board -->
            <table class="table">
                <tr>
                    <td class="answer">Answer</td>
                </tr>

                <tbody>
                    <tr>
                        <td>author : <?php echo $result_a['name_a'];?></td>
                    </tr>
                    <tr>
                        <td>email : <?php echo $result_a['email_a'];?></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>details answer : <?php echo $result_a['detail_a'];?></td>
                    </tr>

                </tfoot>
            
            </table>
            <?php 
                    #$count_for_view++;
                    }
                }   
            }
            ?>    
        </div>

        <!-- form answer  -->
        <div class="container-form">
            <div class="main-greeting">
                <p><h2 class="p2">Add answers</h2></p>
            </div>
            <form action="" method="POST">
                
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="">author </label>
                        <div class="col-sm-10">
                            <input class="form-control"  type="text" name="author" id="" require>
                        </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="">email </label>
                        <div class="col-sm-10">
                            <input class="form-control"  type="email" name="email" id="" require>
                        </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="">details </label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="detail" id=""  rows="5" require></textarea>
                        </div>
                </div>

                <div class="main-btn">
                    <input class="btn btn-primary mb-3" name="send"type="submit" value="send">
                    <input class="btn btn-primary mb-3"  type="reset" id="" value="reset">
                    <input class="btn btn-primary mb-3"  type="hidden" id="id" value="<?php echo $result_q['id']; ?>">
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