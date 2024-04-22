<?php
session_start();
error_reporting(0);
include('app/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
    else{
if(isset($_POST['update']))
{
    extract($_POST);
    $refinary_id = $_POST['refinary_id'];


// $classname=$_POST['classname'];
//$classnamenumeric=$_POST['classnamenumeric']; 
//$section=$_POST['section'];
$rid=intval($_GET['refinary_id']);
$sql="UPDATE `refinary` SET `sample_label`='$sample_label', `supply_location`='$supply_location', `regional_office`='$regional_office', `retail_outletname`='$retail_outletname', `location`='$location', `oil_companyname`='$oil_companyname', `product_name`='$product_name', `sample_source`='$sample_source', `dispense_unitno`='$dispense_unitno', `sample_drawndt`='$sample_drawndt', `sample_drawntime`='$sample_drawntime', `tank_no`='$tank_no', `den_rec_denregister`='$den_rec_denregister', `den_obs_inspofficer`='$den_obs_inspofficer', `p_lreceipt_invoicedt`='$p_lreceipt_invoicedt', `lastreceipt_tanklorryno`='$lastreceipt_tanklorryno', `cash_memono`='$cash_memono', `woodbox_plastsealno`='$woodbox_plastsealno', `cash_memodt`='$cash_memodt', `username`='$username', `password`='$password' WHERE `refinary_id` = '$refinary_id'";

$query = mysqli_query($conn,$sql);
    if($query){
    //     echo '<script>
    //     $(document).ready(function(){
    //         Swal.fire({
    //             title: "Done!",
    //             text: "Data updated successfully!",
    //             icon: "success",
    //             confirmButtonText: "OK"
    //         }).then(function() {
    //             window.location.href = "viewrefinary.php"; // Redirect to view2.php after user clicks OK
    //         });
    //     });
    // </script>';
    $msg="Data has been updated successfully";
    }
    else{
        echo "fail to update data";
    }
}



//$query = $conn->prepare($sql);

//$query->execute();

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Admin Update Class</title>
        <link rel="stylesheet" href="css/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            <?php include('app/topbar.php');?>   
          <!-----End Top bar>
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

<!-- ========== LEFT SIDEBAR ========== -->
<?php include('app/leftbar.php');?>                   
 <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Update Student Class</h2>
                                </div>
                                
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            							<li><a href="#">Classes</a></li>
            							<li class="active">Update Class</li>
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
 <strong>Well done!</strong><?php echo htmlentities($msg); ?>
 </div><?php } 
else if($error){?>
    <div class="alert alert-danger left-icon-alert" role="alert">
                                            <strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
                                        </div>
                                        <?php } ?>
                                        <div class="panel-body">

                                                <form method="post">
                                                    
<?php 
$refinary_id=intval($_GET['refinary_id']);
$sql = "SELECT * FROM `refinary` WHERE `refinary_id`='$refinary_id'";


$query = mysqli_query($conn, $sql);

    $cn = 1;
while($row= mysqli_fetch_assoc($query)){
   ?>

<div class="row mb-1">
                            <!-- <div class="col-sm-4">
                                <label for="refinary_id" class="form-label"></label>
                                <input type="text" class="form-control" name="refinary_id" id="refinary_id" placeholder="Refinary id" >
                            </div> -->

                                
                            <div class="col-sm-4 mt-3">
                                <label for="sample_label" class="control-label">Sample Label :</label>
                                <input type="text" class="form-control" name="sample_label" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')"id="sample_label" placeholder="" value="<?php echo $row['sample_label'];?>">
                            </div>
                                
                            <div class="col-sm-4 mt-3">
                                <label for="supply_location" class="control-label">Supply Location :</label>
                                <input type="text" class="form-control" name="supply_location" id="supply_location" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')" placeholder="" value="<?php echo $row['supply_location'];?>">
                            </div>
                        

                            <div class="col-sm-4 mt-3">
                                <label for="regional_office" class="control-label">Regional Office :</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')" name="regional_office" id="regional_office" placeholder="" value="<?php echo $row['regional_office'];?>" >
                            </div>

                        </div>


                        <div class="row mb-3">

                            <div class="col-sm-4 mt-3">
                                <label for="retail_outletname" class="control-label">Name of Retail Outlet :</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')"name="retail_outletname" id="retail_outletname"  placeholder=""
                                value="<?php echo $row['retail_outletname'];?>" >
                            </div>

                            <div class="col-sm-4 mt-3">
                                 <label for="location" class="control-label">Location :</label>
                                 <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')"  name="location" id="location" placeholder="" value="<?php echo $row['location'];?>">
                            </div>
                        
                        
                            <div class="col-sm-4 mt-3">
                                <label for="oil_companyname" class="control-label">Name of Oil Company :</label>
                                <input type="text" class="form-control" name="oil_companyname" id="oil_companyname" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')"  placeholder="" value="<?php echo $row['oil_companyname'];?>">
                            </div>

                        </div>
                        

                        <div class="row mb-2">
                            
                            <div class="col-sm-4 mt-3">
                                <label for="product_name" class="control-label">Product Name :</label>
                                <input type="text" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')"  class="form-control" name="product_name" id="product_name" placeholder="" value="<?php echo $row['product_name'];?>">
                            </div>
                                
                            <div class="col-sm-4 mt-3">
                                <label for="sample_source" class="control-label">Source of Sample :</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')"name="sample_source" id="sample_source" placeholder="" value="<?php echo $row['sample_source'];?>" >                                
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="dispense_unitno" class="control-label">Dispensing Unit Number :</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')" name="dispense_unitno" id="dispense_unitno" placeholder="" value="<?php echo $row['dispense_unitno'];?>">
                            </div>

                        </div>

                        <div class="row mb-2">
                        
                            <div class="col-sm-4 mt-3">
                                <label for="sample_drawndt" class="control-label">Sample Drawn Date :</label>
                                <input type="date" class="form-control" name="sample_drawndt" id="sample_drawndt" placeholder="" value="<?php echo $row['sample_drawndt'];?>">
                            </div>
                                
                            <div class="col-sm-4 mt-3">
                                <label for="sample_drawntime" class="control-label">Sample Drawn Time :</label>
                                <input type="time" class="form-control" name="sample_drawntime" id="sample_drawntime" placeholder="" value="<?php echo $row['sample_drawntime'];?>">
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="tank_no" class="control-label">Tank Number :</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')" name="tank_no" id="tank_no" placeholder="" value="<?php echo $row['tank_no'];?>" >
                            </div>

                        </div>

                        <div class="row mt-3 mb-2">
                        
                            
                                
                            <div class="col-sm-4 mt-3">
                                <label for="den_rec_denregister" class="control-label">Density at 15 DEG C as Recorded in Density Register :</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'')" name="den_rec_denregister" id="den_rec_denregister" placeholder="" value="<?php echo $row['den_rec_denregister'];?>" >
                            </div>
                                
                            <div class="col-sm-4 mt-3">
                                <label for="den_obs_inspofficer" class="control-label">Density at 15 DEG C Observed by Inspecting Office :</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'')" name="den_obs_inspofficer" id="den_obs_inspofficer" placeholder="" value="<?php echo $row['den_obs_inspofficer'];?>" >
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="p_lreceipt_invoicedt" class="control-label">Invoice Date of Last Receipt of Product :</label>
                                <input type="date" class="form-control" name="p_lreceipt_invoicedt" id="p_lreceipt_invoicedt" placeholder="" value="<?php echo $row['p_lreceipt_invoicedt'];?>" >
                            </div>

                        </div>

                        <div class="row mt-1 mb-3">
                        
                            
                                
                            <div class="col-sm-4 mt-3">
                                <label for="lastreceipt_tanklorryno" class="control-label">Tank Lorry Number of Last Receipt</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')" name="lastreceipt_tanklorryno" id="lastreceipt_tanklorryno" placeholder="" value="<?php echo $row['lastreceipt_tanklorryno'];?>">
                            </div>
                                
                            <div class="col-sm-4 mt-3">
                                <label for="cash_memono" class="control-label">Cash Memo Number</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')"name="cash_memono" id="cash_memono" placeholder="" value="<?php echo $row['cash_memono'];?>">
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="woodbox_plastsealno" class="control-label">Plastic Seal No of Wooden Box</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')" name="woodbox_plastsealno" id="woodbox_plastsealno" placeholder="" value="<?php echo $row['woodbox_plastsealno'];?>">
                            </div>

                        </div>

                        <div class="row mt-3">

                            <div class="col-sm-4 mt-3">
                                <label for="cash_memodt" class="control-label">Cash Memo Date :</label>
                                <input type="date" class="form-control" name="cash_memodt" id="cash_memodt" placeholder="" value="<?php echo $row['cash_memodt'];?>" >
                            </div>
                            
                            
                            
                            <div class="col-sm-4 mt-3">
                                <label for="username" class="control-label">Username :</label>
                               <input type="text" class="form-control" name="username" id="username" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')" placeholder="" value="<?php echo $row['username'];?>">          
                            </div>
                            <div class="col-sm-4 mt-3">
                                <label for="password" class="control-label">Password :</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="" value="<?php echo $row['password'];?>">
                                <input type="hidden" name="delete_status" id="delete_status" value="<?php echo $row['delete_status'];?>">
                            </div>

                        <div class="row mb-5 mt-3">

                            <div class="col-sm-3"><a href="profile.php?refinary_id=<?php //echo $refinary_id?>"><?php// echo $link?></a></div>
                                                    <?php } ?>
  <div class="form-group has-success">

                                                        <div class="">
                                                           <button type="submit" name="update" class="btn btn-success btn-labeled">Update<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    </div>


                                                    
                                                </form>
                                                </div>

                                              
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
<?php // } ?>
