<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?php
                $page=$_GET['id'];
                if($page=='home'){
                    echo "Dashboard Home";
                }else if($page=='users'){
                    echo "Dashboard - Users";
                }else if($page=='owners'){
                   echo "Dashboard - Property Owners";
                }else if($page=='cont'){
                    echo "Dashboard - Registered Admins";
                }else if($page=='booked'){
                    echo "Dashboard - Booked Properties";
                }
            ?>
        </h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <div class="panel panel-primary text-center no-boder">
            <div class="panel-body red">
                <i class="fa fa-users fa-3x"></i>
                <h3><?php userCount();?> </h3>
            </div>
            <a href="index.php?id=users"><div class="panel-footer">
                <span class="panel-eyecandy-title">Registered Students
                </span>
            </div></a>
        </div>
    </div>
    <div class="col-lg-3">
            <div class="panel panel-primary text-center no-boder">
                <div class="panel-body green">
                    <i class="fa fa-users fa-3x"></i>
                    <h3><?php graduatesCount();?> </h3>
                </div>
                <a href="index.php?id=graduation"><div class="panel-footer">
                    <span class="panel-eyecandy-title">Cleared Students
                    </span>
                </div></a>
            </div>
    </div>

</div>
<div class="row">
    <div class="col-lg-3">
            <div class="panel panel-primary text-center no-boder">
                <div class="panel-body blue">
                    <i class="fa fa-users fa-3x"></i>
                    <h3><?php dosCount();?> </h3>
                </div>
                <a href="router.php?id=dos"><div class="panel-footer">
                    <span class="panel-eyecandy-title">Dean of Students
                    </span>
                </div></a>
            </div>
    </div>
    <div class="col-lg-3">
        <div class="panel panel-primary text-center no-boder">
            <div class="panel-body blue">
                <i class="fa fa-users fa-3x"></i>
                <h3><?php financeCount();?> </h3>
            </div>
             <a href="router.php?id=finance"><div class="panel-footer">
                <span class="panel-eyecandy-title">Finance 
                </span>
            </div></a>
        </div>
    </div>
     <div class="col-lg-3">
        <div class="panel panel-primary text-center no-boder">
            <div class="panel-body blue">
                <i class="fa fa fa-users fa-3x"></i>
                <h3><?php libraryCount();?></h3>
            </div>
            <a href="router.php?id=library"><div class="panel-footer">
                <span class="panel-eyecandy-title">Library
                </span>
            </div></a>
        </div>
    </div>

     <div class="col-lg-3">
        <div class="panel panel-primary text-center no-boder">
            <div class="panel-body blue">
                <i class="fa fa-users fa-3x"></i>
                <h3><?php examinationCount();?> </h3>
            </div>
            <a href="router.php?id=examination"><div class="panel-footer">
                <span class="panel-eyecandy-title">examination
                </span>
            </div></a>
        </div>
    </div>
    
</div>
    