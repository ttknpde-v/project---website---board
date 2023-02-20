<?php require_once ('../modules/check-order-board.php'); ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style-answer-board.css">
    <link rel="icon" href="../image/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" >
    <title>web boards</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<!-- call Jquery CDN-->

        <!--   menu     -->
        <div class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse">
                    <a class="navbar-brand">
                        <img class="fix-img" src="../image/icon.png">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="set-boards.php">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="all-boards.php">view boards</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--   menu     -->



        <!--  show boards and form for answer the question  -->
        <div class="container mt-4">
            <div class="">
                <span class="text-bg-primary p-3" id="no" value="">Topic Order
                    <?php /** @var  $data_select */
                        echo $data_select['no'];
                    ?>
                </span>
            </div>
            <!--  use tage table for question -->
            <table class="table mt-4 table-borderless" id="answer-boards">
                <tr>
                    <td>topic's <?php echo $data_select['usertopic'];?></td>
                </tr>
                <tr>
                    <td>nickname's  <?php echo $data_select['username'];?></td>
                </tr>
                <tr>
                    <td>details on below
                        <p><br>
                            <?php echo $data_select['userdetails'];?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="td-datetime">datetime <?php echo $data_select['datetime'];?></td>
                </tr>
            </table>
        </div>

        <!-- show answer -->
        <div class="container mt-4">
            <div id="display-answer">

            </div>
        </div>
        <!-- show answer -->

        <!-- form answer -->
        <div class="container mt-4">
            <form class="form-control" action="" method="post" id="form-add-answer-board">
                <div class="container mt-4">
                    <p class="message text-center">add answer</p>
                </div>
                <div class="row">

                    <div class="col">
                        <label class="form-label">nickname</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="your nickname...">
                    </div>

                    <div class="col">
                        <label class="form-label">email</label>
                        <input class="form-control" type="email" placeholder="...@htmail.com" name="email" id="email">
                    </div>

                    <div>
                        <p class="text-center">details</p>
                        <textarea class="form-control" id="details" placeholder="your opinion..." rows="8"></textarea>
                    </div>

                    <div class="container text-center">
                        <button class="btn btn-primary" type="submit" id="send">send</button>
                        <button class="btn btn-primary" type="reset" id="reset">reset</button>
                        <input class="btn btn-primary" type="hidden" id="hidden" value="<?php echo $data_select['no']; ?>">
                    </div>
                    <div class="container text-center" id="result-insert-answer">

                    </div>
                </div>
            </form>
        </div>
        <!-- form answer -->

        <!--  footer  -->
        <footer class="bg-light text-center text-white">
            <div class="text-center mt-4" style="background-color: #d1d2d4; padding: 20px 0px 20px; ">
                <p class="text-white" >© 2023 copyright web-board.com</p>
                <div class="container p-0 pb-0">
                    <section class="mb-2">
                        <a class=""><i class="fa-brands fa-discord"></i></a>
                        <a class=""><i class="fa-brands fa-facebook"></i></a>
                        <a class=""><i class="fa-brands fa-google"></i></a>
                        <a class=""><i class="fa-brands fa-twitter"></i></a>
                        <a class=""><i class="fa-brands fa-instagram"></i></a>
                        <a class=""><i class="fa-solid fa-envelope"></i></a>
                    </section>
                </div>
            </div>
            <!-- Copyright -->
        </footer>

<script type="" src="../js/script-control-form-answer.js"></script>
</body>
</html>