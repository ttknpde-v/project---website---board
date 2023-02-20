<?php require_once ('../database/config-db.php'); require_once ('../modules/direction-sql.php');  ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style-all-board.css">
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
                    <img class="fix-img" src="../image/icon.png" style="height: 20px">
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


    <!--  table  -->
    <div class="container mt-4">
        <table class="table align-middle mb-0">
            <thead class="bg-light">
                <tr>
                    <th class="text-center">order</th>
                    <th>topic</th>
                    <th>view</th>
                    <th>answer</th>
                    <th class="text-center">date time</th>
                </tr>
            </thead>
            <tbody>

            <!--    loop process details   -->
            <?php  $obj_db = new Database_connect(); $obj_dsql = new Using_direct_sql();
                    $connect = $obj_db->open_database();
                    $result_select = $obj_dsql->select_table($connect);
                    if(mysqli_num_rows($result_select) > 0) {
                        while ($data = mysqli_fetch_array($result_select)) {
            ?>
                <tr>
                    <td class="text-center" "><?php echo $data['no']; ?></td>
                    <td><a class="links" href="answer-the-ques-boards.php?id=<?php echo $data['no']; ?>"><?php echo $data['usertopic']; ?></a> <--click!!</td>
                    <td><span class="box1 text-center"><?php echo $data['view']; ?></span></td>
                    <td><span class="box2 text-center"><?php echo $data['answer']; ?></span></td>
                    <td class="text-center"><?php echo $data['datetime']; ?></td>
                </tr>
            <?php       }
                    }
            ?>
            <!--    loop process details   -->

            </tbody>
        </table>
    </div>


    <div class="push"></div>


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
    </footer>
    <!--  footer  -->

<!--<script type="" src="../js/script-control-form.js"></script>-->
</body>
</html>