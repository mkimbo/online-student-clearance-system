<div class="row" style="margin-bottom: 20px;">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?php
                $page=$_GET['id'];
                if($page=='home'){
                    echo "DASHBOARD- HOME";
                }else if($page=='users'){
                    echo "All Registered Students";
                }else if($page=='dos'){
                    echo "Dean of Students";
                }else if($page=='finance'){
                    echo "Finance Department";
                }else if($page=='examination'){
                    echo "Examination Department";
                }else if($page=='library'){
                    echo "Library Department";
                }else if($page=='graduation'){
                    echo "Students Ready for Graduation";
                }else if($page=='rep'){
                    echo "REPLY TO QUERY";
                }else if($page=='view-alert'){
                    echo "ALERT - OPTIONS";
                }
            ?>
        </h1>
    </div>
</div