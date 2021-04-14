<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?php
                $page=$_GET['id'];
                if($page=='studentHome'){
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
    <div class="col-lg-12">
        <div class="panel panel-primary text-center no-boder">
            <?php student_details();?>
        </div>
    </div>
    
</div>
<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i>Clearance Report
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" >
                                    <thead>
                                        <tr>
                                            <th>Department</th>
                                            <th>Status</th>
                                            <th>Issues</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                         
                                        <?php  examinationStatus();?>
                                        <?php  financeStatus();?>
                                        <?php  libraryStatus();?>
                                        <?php  DeanStatus();?>
                                       
                                        </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            

                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>

        </div>
</div>
    