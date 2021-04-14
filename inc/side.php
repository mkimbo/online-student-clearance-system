<nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div><?php student_name();?></div>
                                <div class="user-text-online">
                                    <?php student_status();?>
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li>
                        <a href="index.php?id=studentHome"><i class="fa fa-users fa-fw"></i>Home</a>
                        <a href="router.php?id=finance"><i class="fa fa-arrow-right fa-fw"></i>Finance Department</a>
                        <a href="router.php?id=library"><i class="fa fa-arrow-right fa-fw"></i>Library Department</a>
                        <a href="router.php?id=examination"><i class="fa fa-arrow-right fa-fw"></i>Examination Department</a>
                        <a href="router.php?id=dos"><i class="fa fa-arrow-right fa-fw"></i>DOS Department</a>
                    </li>
                </ul>
            </div>
             
            <!-- end sidebar-collapse -->
        </nav>