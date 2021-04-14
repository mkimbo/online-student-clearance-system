<div id="page-wrapper">
<?php include('inc/head.php');?>
<div class="row">
    <div class="col-lg-12">
        
       
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i>Graduation List.
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                         <th>REG NO.</th>
                                        <th>Name</th>
                                        <th>Faculty</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                     <?php graduation('students');?>
                                     </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.panel-body -->
        </div>

    </div>
</div>
