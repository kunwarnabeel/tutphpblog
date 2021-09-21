<?php
    include_once('config.php');
    include_once('conn.php');
    $sql = "SELECT title , slug FROM `category` WHERE `status`=1 order by orderBy asc";
    $result = $conn->query($sql);
         
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$pageTitle?></title>
    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo $serverName.'assets/css/style.css' ?>" rel="stylesheet" type="text/css" />


</head>

<body>
    <!-- wrapper -->
    <div class="phWrapper">
        <header class="phHeader" id="header">
            <nav class="navbar navbar-expand logo-link">
                <a class="navbar-brand text-uppercase" href="#">
                    <img src="./assets/images/tt-logo2.png" alt="LOGO" />
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-flex-icons ml-auto">
                        <li class="followus">Follow Us</li>
                        <li class="nav-item">
                            <a class="nav-link fb-icon" href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tw-icon" href="#W" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>
        <nav class="navbar navbar-expand navbar-dark special-color-dark topMenuHorizontal sticky-top">

            <!-- Navbar brand -->
            <!-- Collapse button -->
            <button class="navbar-toggler d-block d-md-none" type="button" data-toggle="collapse" data-target="#navbarLeft" aria-controls="#navbarLeft" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="topMenu">

                <!-- Links -->
                <ul class="navbar-nav mr-auto left">
                    <li class="nav-item">
                        <a href="<?php echo $serverName ?>" class="nav-link home-icon">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </a>
                    </li>
                   
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                    ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $serverName.$row['slug'].'.php?slug=get-started'?>"><?php echo $row["title"] ?></a></li>
                    <?php
                        }
                    }
                    
                    ?>
                    
                    <!-- <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle no-caret" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                        <div class="dropdown-menu mega-menu v-2 row z-depth-1 special-color" aria-labelledby="navbarDropdownMenuLink1">
                            <a class="close text-white">&#10005; </a>
                            <div class="row mx-md-4 mx-1">
                                <div class="col-md-3 col-sm-6 col-xl-3 sub-menu my-xl-4 mt-4 mb-4">
                                    <h6 class="sub-title text-white">.NET Tutorials</h6>
                                    <ul class="caret-style pl-0">
                                        <li class=""><a class="menu-item" href="#">ASP.NET Core</a></li>
                                        <li class=""><a class="menu-item" href="#">ASP.NET
                                                MVC</a></li>
                                        <li class=""><a class="menu-item" href="#">IoC </a></li>
                                        <li class=""><a class="menu-item" href="#">web api</a>
                                        </li>
                                        <li class=""><a class="menu-item" href="#">C#</a></li>
                                        <li class=""><a class="menu-item" href="#">LINQ</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xl-3 sub-menu my-xl-4  mt-4 mb-4">
                                    <h6 class="sub-title text-white">Client Side</h6>
                                    
                                    <ul class="caret-style pl-0">
                                        <li class=""><a class="menu-item" href="#">TypeScript</a></li>
                                        <li class=""><a class="menu-item" href="#">Angular 11</a></li>
                                        <li class=""><a class="menu-item" href="#">AngularJS 1</a></li>
                                        <li class=""><a class="menu-item" href="#">Node.js</a>
                                        </li>
                                        <li class=""><a class="menu-item" href="#">D3.js</a></li>
                                        <li class=""><a class="menu-item" href="#">jQuery</a>
                                        </li>
                                        <li class=""><a class="menu-item" href="#">JavaScript </a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xl-3 sub-menu my-xl-4 mt-4 mb-4">
                                    <h6 class="sub-title text-white">Server Side</h6>
                                    
                                    <ul class="caret-style pl-0">
                                        <li class=""><a class="menu-item" href="#">Python</a></li>
                                        <li class=""><a class="menu-item" href="#">SQL</a></li>
                                        <li class=""><a class="menu-item" href="#">Sass</a></li>
                                        <li class=""><a class="menu-item" href="#">Https</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xl-3 sub-menu my-xl-4 mt-4 mb-4">
                                    <h6 class="sub-title  text-white">Skill Tests</h6>
                                    <ul class="caret-style pl-0">
                                        <li class=""><a class="menu-item" href="#">ASP.NET
                                                Core</a></li>
                                        <li class=""><a class="menu-item" href="/#">ASP.NET MVC</a>
                                        </li>
                                        <li class=""><a class="menu-item" href="#">LINQ</a></li>
                                        <li class=""><a class="menu-item" href="#">C#</a></li>
                                        <li class=""><a class="menu-item" href="#">web api</a>
                                        </li>
                                        <li class=""><a class="menu-item" href="#">IoC </a></li>
                                        <li class=""><a class="menu-item" href="#">TypeScript</a></li>
                                        <li class=""><a class="menu-item" href="#">AngularJS</a></li>
                                        <li class=""><a class="menu-item" href="#">Node.js</a>
                                        </li>
                                        <li class=""><a class="menu-item" href="#"> jQuery </a>
                                        </li>
                                        <li class=""><a class="menu-item" href="#">
                                                JavaScript</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </li> -->

                </ul>

                <!-- Links -->
                <ul class="navbar-nav nav-flex right ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tests</a>
                    </li>

                </ul>

            </div>
            <!-- Collapsible content -->
        </nav>