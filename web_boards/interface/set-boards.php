<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style-set-board.css">
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
                        <li class="nav-item">
                            <a class="nav-link" href="#form-add-board">post board</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--   menu     -->


        <!--  content  -->
        <div class="container mt-4">
            <div class="row"> <!-- control by grid -->

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="../image/icon.png">
                            <div class="card-header">News number one</div>
                            <p class="card-text p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="../image/icon.png">
                            <div class="card-header">News number one</div>
                            <p class="card-text p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="../image/icon.png">
                            <div class="card-header">News number one</div>
                            <p class="card-text p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="../image/icon.png">
                            <div class="card-header">News number one</div>
                            <p class="card-text p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="../image/icon.png">
                            <div class="card-header">News number one</div>
                            <p class="card-text p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="../image/icon.png">
                            <div class="card-header">News number one</div>
                            <p class="card-text p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="../image/icon.png">
                            <div class="card-header">News number one</div>
                            <p class="card-text p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="../image/icon.png">
                            <div class="card-header">News number one</div>
                            <p class="card-text p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--  content  -->


        <!--  form add board  -->
        <div class="container mt-4">
            <form class="form-control" action="" method="post" id="form-add-board">
                <div class="container mt-4">
                    <p class="message">add board</p>
                </div>
                <div class="row">

                    <div class="col">
                        <label class="form-label">topic</label>
                        <input class="form-control" type="text" name="topic" id="topic" placeholder="your topic...">
                    </div>

                    <div class="col">
                        <label class="form-label">nickname</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="your nickname...">
                    </div>

                    <div>
                        <label class="form-label">email</label>
                        <input class="form-control" type="email" placeholder="...@htmail.com" name="email" id="email">
                    </div>

                    <div>
                        <p class="text-center">details</p>
                        <textarea class="form-control" id="details" placeholder="your opinion..."></textarea>
                    </div>

                    <div class="container text-center">
                        <button class="btn btn-primary" type="submit" id="send">send</button>
                        <button class="btn btn-primary" type="reset" id="reset">reset</button>
                        <div id="go-to-view-board">

                        </div>
                    </div>
                    <div class="container text-center" id="result-insert">

                    </div>
                </div>
            </form>
        </div>
        <!--  form add board  -->


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

<script type="" src="../js/script-control-form.js"></script>
</body>
</html>