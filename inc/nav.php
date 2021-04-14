        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php?id=studentHome">
                   <p style="font-size:1.5em;color:#FFF;font-weight:bold;margin-top:8px;">Online Clearance</p>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" href="index.php?id=studentHome">
                        <i class="fa fa-home fa-3x"></i>
                    </a>
                </li>


                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="studentAccount.php?id=studentAccount"><i class="fa fa-user fa-fw"></i>Account</a> </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a></li>
                        <li class="divider"></li>
                        <form method="post" action=""><li><button class="btn btn-danger" name="submit_logout"><i class="fa fa-sign-out fa-fw"></i>Logout</button></li></form>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>

<?php submit_logout();?>