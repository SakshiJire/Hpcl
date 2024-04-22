
<?php




session_start();
error_reporting(0);

include('session.php');

include('app/config.php');
if(strlen($_SESSION['alogin'])==""){ 
    header("Location: index.php"); 
    }else{
        if((time()-$_SESSION['last_login_timestamp']>300)){
            header("location:logout.php");
        }else{
            $_SESSION['last_login_timestamp']=time();

    
    
    
    
    
            //include('includes/config.php');
            //echo "here";die;

            
                
            if(isset($_POST['update'])){
                extract($_POST);
        
                $refinary_id = $_POST['refinary_id'];
                //$refinary_id = $_GET['refinary_id'];
    
                $sql = "UPDATE `refinary` SET `sample_label`='$sample_label', `supply_location`='$supply_location', `regional_office`='$regional_office', `retail_outletname`='$retail_outletname', `location`='$location', `oil_companyname`='$oil_companyname', `product_name`='$product_name', `sample_source`='$sample_source', `dispense_unitno`='$dispense_unitno', `sample_drawndt`='$sample_drawndt', `sample_drawntime`='$sample_drawntime', `tank_no`='$tank_no', `den_rec_denregister`='$den_rec_denregister', `den_obs_inspofficer`='$den_obs_inspofficer', `p_lreceipt_invoicedt`='$p_lreceipt_invoicedt', `lastreceipt_tanklorryno`='$lastreceipt_tanklorryno', `cash_memono`='$cash_memono', `woodbox_plastsealno`='$woodbox_plastsealno', `cash_memodt`='$cash_memodt', `username`='$username', `password`='$password' WHERE `refinary_id` = '$refinary_id'";           
                 $query = mysqli_query($conn, $sql); 
                
                // echo($res);
    
               
    // $classname=$_POST['classname'];
    // $classnamenumeric=$_POST['classnamenumeric']; 
    // $section=$_POST['section'];
    // $cid=intval($_GET['classid']);
    // $sql="update  tblclasses set ClassName=:classname,ClassNameNumeric=:classnamenumeric,Section=:section where id=:cid ";
    // $query = $dbh->prepare($sql);
    // $query->bindParam(':classname',$classname,PDO::PARAM_STR);
    // $query->bindParam(':classnamenumeric',$classnamenumeric,PDO::PARAM_STR);
    // $query->bindParam(':section',$section,PDO::PARAM_STR);
    // $query->bindParam(':cid',$cid,PDO::PARAM_STR);
    // $query->execute();
    $msg="Data has been updated successfully";
    }
    
    
    













?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMS Admin Update Class</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen">
    <link rel="stylesheet" href="css/prism/prism.css" media="screen"> <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
    <link rel="stylesheet" href="css/main.css" media="screen">
    <script src="js/modernizr/modernizr.min.js"></script>
</head>

<body class="top-navbar-fixed">
    <div class="main-wrapper">

        <!-- ========== TOP NAVBAR ========== -->
        <?php include('app/topbar.php');?>
        <!-----End Top bar>
             ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
        <div class="content-wrapper">
            <div class="content-container">

                <!-- ========== LEFT SIDEBAR ========== -->
                <?php include('app/leftbar.php');?>
                <!-- /.left-sidebar -->

                <div class="main-page">
                    <div class="container-fluid">
                        <div class="row page-title-div">
                            <div class="col-md-6">
                                <h2 class="title">Update Refinary</h2>
                            </div>

                        </div>
                        <!-- /.row -->
                        <div class="row breadcrumb-div">
                            <div class="col-md-6">
                                <ul class="breadcrumb">
                                    <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                    <li><a href="#">refinaries</a></li>
                                    <li class="active">Update refinary</li>
                                </ul>
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->

                    <section class="section">
                        <div class="container-fluid">





                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <h5>Update Student Class info</h5>
                                            </div>
                                        </div>
                                        <?php if($msg){?>
                                        <div class="alert alert-success left-icon-alert" role="alert">
                                            <strong>Well done!</strong>
                                            <?php echo htmlentities($msg); ?>
                                        </div>
                                        <?php } 
else if($error){?>
                                        <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Oh snap!</strong>
                                            <?php echo htmlentities($error); ?>
                                        </div>
                                        <?php } ?>

                                        <form method="post">
                                           
                                            <?php


$refinary_id = $_GET['refinary_id'];
$sql1 = "SELECT * FROM `refinary` WHERE `refinary_id`='$refinary_id';";

$query = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($query);

if($row){


// $cid=intval($_GET['classid']);
// $sql = "SELECT * from tblclasses where id=:cid";
// $query = $dbh->prepare($sql);
// $query->bindParam(':cid',$cid,PDO::PARAM_STR);
// $query->execute();
// $results=$query->fetchAll(PDO::FETCH_OBJ);
// $cnt=1;
// if($query->rowCount() > 0)
// {
// foreach($results as $result)
// {   ?>
<div class="form-group has-success">
                                                       




                                            <div class="row mb-1">
                                                <input type="hidden" name="refinary_id" id="refinary_id"
                                                    value="<?php echo $row['refinary_id']?>">

                                                <!-- <div class="col-sm-4">
                                <label for="refinary_id" class="form-label"></label>
                                <input type="text" class="form-control" name="refinary_id" id="refinary_id" placeholder="Refinary id" >
                            </div> -->

                                                <div class="col-sm-4 mt-3">
                                                    <label for="sample_label">sample label :</label>
                                                    <input type="text" class="form-control" name="sample_label"
                                                        value="<?php echo $row['sample_label'];?>" id="sample_label"
                                                        placeholder="">
                                                </div>

                                                <div class="col-sm-4 mt-3">
                                                    <label for="supply_location">supply location :</label>
                                                    <input type="text" class="form-control" name="supply_location"
                                                        value="<?php echo $row['supply_location']; ?>"
                                                        id="supply_location" placeholder="">
                                                </div>


                                                <div class="col-sm-4 mt-3">
                                                    <label for="regional_office">regional office :</label>
                                                    <input type="text" class="form-control" name="regional_office"
                                                        value="<?php echo $row['regional_office']; ?>"
                                                        id="regional_office" placeholder="">
                                                </div>

                                            </div>


                                            <div class="row mb-3">

                                                <div class="col-sm-4 mt-3">
                                                    <label for="retail_outletname">name of retail outlet :</label>
                                                    <input type="text" class="form-control" name="retail_outletname"
                                                        value="<?php echo $row['retail_outletname']; ?>"
                                                        id="retail_outletname" placeholder="">
                                                </div>

                                                <div class="col-sm-4 mt-3">
                                                    <label for="location">location :</label>
                                                    <input type="text" class="form-control" name="location"
                                                        value="<?php echo $row['location']; ?>" id="location"
                                                        placeholder="">
                                                </div>


                                                <div class="col-sm-4 mt-3">
                                                    <label for="oil_companyname">name of oil company :</label>
                                                    <input type="text" class="form-control" name="oil_companyname"
                                                        value="<?php echo $row['oil_companyname']; ?>"
                                                        id="oil_companyname" placeholder="">
                                                </div>

                                            </div>


                                            <div class="row mb-2">

                                                <div class="col-sm-4 mt-3">
                                                    <label for="product_name">product name :</label>
                                                    <input type="text" class="form-control" name="product_name"
                                                        value="<?php echo $row['product_name']; ?>" id="product_name"
                                                        placeholder="">
                                                </div>

                                                <div class="col-sm-4 mt-3">
                                                    <label for="sample_source">source of sample :</label>
                                                    <input type="text" class="form-control" name="sample_source"
                                                        value="<?php echo $row['sample_source']; ?>" id="sample_source"
                                                        placeholder="">
                                                </div>

                                                <div class="col-sm-4 mt-3">
                                                    <label for="dispense_unitno">dispensing unit number :</label>
                                                    <input type="text" class="form-control" name="dispense_unitno"
                                                        value="<?php echo $row['dispense_unitno']; ?>"
                                                        id="dispense_unitno" placeholder="">
                                                </div>

                                            </div>

                                            <div class="row mb-2">

                                                <div class="col-sm-4 mt-3">
                                                    <label for="sample_drawndt">sample drawn date :</label>
                                                    <input type="date" class="form-control" name="sample_drawndt"
                                                        value="<?php echo $row['sample_drawndt']; ?>"
                                                        id="sample_drawndt" placeholder="">
                                                </div>

                                                <div class="col-sm-4 mt-3">
                                                    <label for="sample_drawntime">sample drawn time :</label>
                                                    <input type="time" class="form-control" name="sample_drawntime"
                                                        value="<?php echo $row['sample_drawntime']; ?>"
                                                        id="sample_drawntime" placeholder="">
                                                </div>

                                                <div class="col-sm-4 mt-3">
                                                    <label for="tank_no">tank number :</label>
                                                    <input type="text" class="form-control" name="tank_no"
                                                        value="<?php echo $row['tank_no']; ?>" id="tank_no"
                                                        placeholder="">
                                                </div>

                                            </div>

                                            <div class="row mt-3 mb-2">



                                                <div class="col-sm-4 mt-3">
                                                    <label for="den_rec_denregister">density at 15 DEG C as recorded in
                                                        density register :</label>
                                                    <input type="text" class="form-control" name="den_rec_denregister"
                                                        value="<?php echo $row['den_rec_denregister']; ?>"
                                                        id="den_rec_denregister" placeholder="">
                                                </div>

                                                <div class="col-sm-4 mt-3">
                                                    <label for="den_obs_inspofficer">density at 15 DEG C observed by
                                                        inspecting office :</label>
                                                    <input type="text" class="form-control" name="den_obs_inspofficer"
                                                        value="<?php echo $row['den_obs_inspofficer']; ?>"
                                                        id="den_obs_inspofficer" placeholder="">
                                                </div>

                                                <div class="col-sm-4 mt-3">
                                                    <label for="p_lreceipt_invoicedt">invoice date of last receipt of
                                                        product :</label>
                                                    <input type="date" class="form-control" name="p_lreceipt_invoicedt"
                                                        value="<?php echo $row['p_lreceipt_invoicedt']; ?>"
                                                        id="p_lreceipt_invoicedt" placeholder="">
                                                </div>

                                            </div>

                                            <div class="row mt-1 mb-3">



                                                <div class="col-sm-4 mt-3">
                                                    <label for="lastreceipt_tanklorryno">tank lorry number of last
                                                        receipt</label>
                                                    <input type="text" class="form-control"
                                                        name="lastreceipt_tanklorryno"
                                                        value="<?php echo $row['lastreceipt_tanklorryno']; ?>"
                                                        id="lastreceipt_tanklorryno" placeholder="">
                                                </div>

                                                <div class="col-sm-4 mt-3">
                                                    <label for="cash_memono">cash memo number</label>
                                                    <input type="text" class="form-control" name="cash_memono"
                                                        value="<?php echo $row['cash_memono']; ?>" id="cash_memono"
                                                        placeholder="">
                                                </div>

                                                <div class="col-sm-4 mt-3">
                                                    <label for="woodbox_plastsealno">plastic seal no of wooden
                                                        box</label>
                                                    <input type="text" class="form-control" name="woodbox_plastsealno"
                                                        value="<?php echo $row['woodbox_plastsealno']; ?>"
                                                        id="woodbox_plastsealno" placeholder="">
                                                </div>

                                            </div>

                                            <div class="row mt-3">

                                                <div class="col-sm-4 mt-3">
                                                    <label for="cash_memodt">cash memo date :</label>
                                                    <input type="date" class="form-control" name="cash_memodt"
                                                        value="<?php echo $row['cash_memodt']; ?>" id="cash_memodt"
                                                        placeholder="">
                                                </div>
                                                <div class="col-sm-4 mt-3">
                                                    <label for="username">Username :</label>
                                                    <input name="username" class="form-control"
                                                        value="<?php echo $row['username']; ?>" id="username"
                                                        placeholder="">
                                                </div>
                                                <div class="col-sm-4 mt-3">
                                                    <label for="password">Password :</label>
                                                    <input name="password" class="form-control"
                                                        value="<?php echo $row['password']; ?>" id="password"
                                                        placeholder="">
                                                </div>
                                                <?php } ?>


                                                <div class="">
                                                    <button type="submit" name="update"
                                                        class="btn btn-success btn-labeled">Update<span
                                                            class="btn-label btn-label-right"><i
                                                                class="fa fa-check"></i></span></button>
                                                </div>



                                        </form>


                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-8 col-md-offset-2 -->
                        </div>
                        <!-- /.row -->




                </div>
                <!-- /.container-fluid -->
                </section>
                <!-- /.section -->

            </div>
            <!-- /.main-page -->


            <!-- /.right-sidebar -->

        </div>
        <!-- /.content-container -->
    </div>
    <!-- /.content-wrapper -->

    </div>
    <!-- /.main-wrapper -->

    <!-- ========== COMMON JS FILES ========== -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui/jquery-ui.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/pace/pace.min.js"></script>
    <script src="js/lobipanel/lobipanel.min.js"></script>
    <script src="js/iscroll/iscroll.js"></script>

    <!-- ========== PAGE JS FILES ========== -->
    <script src="js/prism/prism.js"></script>

    <!-- ========== THEME JS ========== -->
    <script src="js/main.js"></script>



    <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>

</html>
<?php  }} ?>