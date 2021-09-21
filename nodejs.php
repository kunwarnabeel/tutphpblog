<?php
    include_once('conn.php');
    $pageName = basename($_SERVER['PHP_SELF']);
    $mainSlug = trim(str_replace('.php','',$pageName));
    $subSlug = trim($_GET['slug']);
    
    $categoryQuery = "SELECT p.pageName , c.slug AS category_slug , p.`slug` FROM `post` p LEFT JOIN `category` c ON p.`category_id`=c.`id` WHERE c.`slug`='$mainSlug' ORDER BY p.`orderBy` ASC";
    $categoryResult = $conn->query($categoryQuery);

    $contentQuery = "SELECT p.pageName , p.title , p.metaTitle , p.content , c.`slug` AS category_slug , c.`title` AS cat_title FROM `post` p LEFT JOIN `category` c ON p.`category_id`=c.`id`
    WHERE c.`slug`='$mainSlug' AND p.slug='$subSlug'";
    $contentResult = $conn->query($contentQuery);
    if ($contentResult->num_rows > 0) {
        $row2 = $contentResult->fetch_row();
        $sideHeading = $row2[5];
        $mainContent = $row2[3];
    }
    include_once('header.php');
?>


        <nav class="navbar menuLeft p-0 navbar-expand-md">
            <div class="navbar-collapse collapse" id="navbarLeft">
                <div class="menuVerticalParent">
                    <ul class="menuVertical">
                        <li class="menu-title">
                            <?php echo $sideHeading ?> Tutorials
                        </li>
                        <?php
                            if ($categoryResult->num_rows > 0) {
                                while($row = $categoryResult->fetch_assoc()) {
                            ?>
                        <li>
                            <a href="<?php echo $serverName.$row["category_slug"].'.php?slug='.$row["slug"] ?>"><?php echo $row["pageName"] ?></a>

                        </li>
                        <?php
                            }
                        }
                        
                        ?>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <!--Navbar-->
        <!--/.Navbar-->
        <section class="middleContent" id="middleContent">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 pr-md-0 col-lg-12 col-xl-8">
                        <div class="lb-ad">


                            <div id='tt_leaderboard_atf_desk'></div>
                            <div id='tt_leaderboard_atf_flex_mob'></div>
                        </div>
                        <div class="navigation">
                            <div class="row">

                                <div class="col-6  text-left"><a id="btnPrev" class="btn  rounded-0" href='#'><i class="fa fa-angle-left mr-1"></i> Previous</a>
                                </div>

                                <div class="col-6 text-right float-right"><a id="btnNext" class="btn rounded-0" href='#'>Next <i
                                            class="fa fa-angle-right ml-1"></i></a></div>
                            </div>
                        </div>


                        <article class="article">
                                <?php echo $mainContent ?>
                        </article>




                        <div class="border border-secondary mt-3 mb-3 p-3 align-middle bg-light text-center ">
                            <span class="mr-3 text-dark " style="font-size:18px ">Want to check how much you know
                                Node.js? </span>
                            <div class="mt-3 "><a class="btn start-learning text-white " href="# " title="Test your Node.js knowledge ">Start Node.js Test</a></div>
                        </div>
                        <div id="social-platforms " class="mt-4 mb-4 ">
                            <ul class="row align-items-center ">
                                <li class="col-md-3 col-sm-6 pl-lg-0 ">
                                    <a class="btn btn-icon btn-facebook " id="fbshare "><i
                                            class="fa fa-facebook "></i><span>Share</span></a>
                                </li>
                                <li class="col-md-3 col-sm-6 pl-sm-0 "> <a class="btn btn-icon btn-twitter " href="# "><i class="fa fa-twitter "></i><span> Tweet</span></a></li>
                                <li class="col-md-3 col-sm-6 pl-sm-0 ">
                                    <a class="btn btn-icon btn-linkedin " href="# "><i class="fa fa-linkedin "></i><span>Share</span></a>
                                </li>
                                <li class="col-md-3 col-sm-6 pl-md-0 "> <a class="btn btn-icon btn-whatsapp " href="# "><i class="fa fa-whatsapp "></i><span>Whatsapp</span></a></li>
                            </ul>
                        </div>





                        <div class="navigation ">
                            <div class="row ">

                                <div class="col-6 text-left "><a id="btnPrev " class="btn rounded-0 " href='#'><i class="fa fa-angle-left mr-1 "></i> Previous</a>
                                </div>

                                <div class="col-6 text-right float-right "><a id="btnNext " class="btn rounded-0 " href='#'>Next <i
                                            class="fa fa-angle-right ml-1 "></i></a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

<?php
    include_once('footer.php');
?>


            
