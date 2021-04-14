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
                                <div><?php adm_name();?></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Admin
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li>
                        <a href="index.php?id=users"><i class="fa fa-users fa-fw"></i>Registered Students</a>
                        <a href="router.php?id=dos"><i class="fa fa-arrow-right fa-fw"></i>Dean of Studies Department</a>
                        <a href="router.php?id=finance"><i class="fa fa-arrow-right fa-fw"></i>Finance Department</a>
                        <a href="router.php?id=examination"><i class="fa fa-arrow-right fa-fw"></i>Exams Department</a>
                        <a href="router.php?id=library"><i class="fa fa-arrow-right fa-fw"></i>Library Department</a>
                        <a href="index.php?id=graduation"><i class="fa fa-arrow-right fa-fw"></i>Graduation List</a>
                    </li>
                </ul>
            </div>
             
            <!-- end sidebar-collapse -->
</nav>