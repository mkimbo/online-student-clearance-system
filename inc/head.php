<div class="row" style="margin-bottom: 20px;">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?php
                $page=$_GET['id'];
                if($page=='studentHome'){
                    echo "DASHBOARD- HOME";
                }else if($page=='finance'){
                    echo "Finance Department";
                }else if($page=='library'){
                    echo "Library Department";
                }else if($page=='dos'){
                    echo "DoS Department";
                }else if($page=='examination'){
                    echo "Exams Department";
                }else if($page=='studentAccount'){
                    echo "Your Account";
                }else if($page=='addevent'){
                    echo "ADD EVENT";
                }else if($page=='rep'){
                    echo "REPLY TO QUERY";
                }else if($page=='view-alert'){
                    echo "ALERT - OPTIONS";
                }
            ?>
        </h1>
    </div>
</div