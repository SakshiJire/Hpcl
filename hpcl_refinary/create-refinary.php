<?php

session_start();
error_reporting(0);
if(strlen($_SESSION['alogin'])==""){   
    header("Location: index.php"); 
    }
    else{
        if((time()-$_SESSION['last_login_timestamp']>300)){
            header("location:logout.php");
        }else{
            $_SESSION['last_login_timestamp']=time();
            include('app/config.php');



            if(isset($_POST['submit'])){
                $sample_label = $_POST['sample_label'];
                $supply_location = $_POST['supply_location'];
                $regional_office = $_POST['regional_office'];
                $retail_outletname = $_POST['retail_outletname'];
                $location = $_POST['location'];
                $oil_companyname = $_POST['oil_companyname'];
                $product_name = $_POST['product_name'];
                $sample_source = $_POST['sample_source'];
                $dispense_unitno = $_POST['dispense_unitno'];
                $sample_drawndt = $_POST['sample_drawndt'];
                $sample_drawntime = $_POST['sample_drawntime'];
                $tank_no = $_POST['tank_no'];
                $den_rec_denregister = $_POST['den_rec_denregister'];
                $den_obs_inspofficer = $_POST['den_obs_inspofficer'];
                $p_lreceipt_invoicedt = $_POST['p_lreceipt_invoicedt'];
                $lastreceipt_tanklorryno = $_POST['lastreceipt_tanklorryno'];
                $cash_memono = $_POST['cash_memono'];
                $woodbox_plastsealno = $_POST['woodbox_plastsealno'];
                $cash_memodt = $_POST['cash_memodt'];
                $delete_status = $_POST['delete_status'];
                $username = $_POST['username'];
                $password = $_POST['password'];

                //print_r($passwordd);


                //   $sql= "INSERT INTO refinary (`sample_label`, `supply_location`, `regional_office`, `retail_outletname`, `location`, `oil_companyname`, `product_name`, `sample_source`, `dispense_unitno`, `sample_drawndt`, `sample_drawntime`, `tank_no`, `den_rec_denregister`, `den_obs_inspofficer`, `p_lreceipt_invoicedt`, `lastreceipt_tanklorryno`, `cash_memono`, `woodbox_plastsealno`, `cash_memodt`, `delete_status`, `username`, `password`)
                //   VALUES ('".$sample_label."','".$supply_location."','".$regional_office."', '".$retail_outletname."' ,'".$location."' ,'".$oil_companyname."', '".$product_name."', '".$sample_source."', '".$dispense_unitno."', '".$sample_drawndt."', '".$sample_drawntime."', '".$tank_no."', '".$den_rec_denregister."', '".$den_obs_inspofficer."', '".$p_lreceipt_invoicedt."', '".$lastreceipt_tanklorryno."', '".$cash_memono."', '".$woodbox_plastsealno."', '".$cash_memodt."', '".$delete_status."', '".$username."', '".$password."')";

                $sql= "INSERT INTO `refinary` ( `sample_label`, `supply_location`, `regional_office`, `retail_outletname`, `location`, `oil_companyname`, `product_name`, `sample_source`, `dispense_unitno`, `sample_drawndt`, `sample_drawntime`, `tank_no`, `den_rec_denregister`, `den_obs_inspofficer`, `p_lreceipt_invoicedt`, `lastreceipt_tanklorryno`, `cash_memono`, `woodbox_plastsealno`, `cash_memodt`, `delete_status`, `username`, `password`) VALUES ('$sample_label', '$supply_location', '$regional_office', '$retail_outletname', '$location', '$oil_companyname', '$product_name', '$sample_source', '$dispense_unitno', '$sample_drawndt', '$sample_drawntime', '$tank_no', '$den_rec_denregister', '$den_obs_inspofficer', '$p_lreceipt_invoicedt', '$lastreceipt_tanklorryno', '$cash_memono', '$woodbox_plastsealno', '$cash_memodt', '$delete_status', '$username', '$password')"; 

                    
                        //$res = $conn->exec($sql);
                        $res = mysqli_query($conn, $sql);
                        // echo "here";

                        if ($res) {
                            $msg =  'Refinery Added successfully';
                        } else {
                            $error= 'Failed to add Refinery.';
                        }
                    

                        //if($res){
                        // echo "success";
                            // echo '<script>
                
                            // $(document).ready(function(){
                            
                            //     Swal.fire({
                            //         $qr=document.GetElementById("qr")
                            //         title: "Refinary Added Successfully!",
                            //         text: ",
                            //         icon: "success",
                                    
                            //         confirmButtonText: "OK"
                            //     }).then(function() {
                            //         window.location.href = "viewrefinary.php"; // Redirect to viewrefinary.php after user clicks OK
                            //     });
                            // });
            
                            // </script>';
                        
                                
                    // }
                    // else{
                    //     echo "fail";
                    // }
            
            



            


                // $sql="INSERT INTO  tblclasses(ClassName,ClassNameNumeric,Section) VALUES(:classname,:classnamenumeric,:section)";


        



                // $query->bindParam(':sample_label',$sample_label,PDO::PARAM_STR);
                // $query->bindParam(':supply_location',$supply_location,PDO::PARAM_STR);
                // $query->bindParam(':regional_office',$regional_office,PDO::PARAM_STR);
                // $query->bindParam(':retail_outletname',$retail_outletname,PDO::PARAM_STR);
                // $query->bindParam(':locationn',$locationn,PDO::PARAM_STR);
                // $query->bindParam(':oil_companyname',$oil_companyname,PDO::PARAM_STR);
                // $query->bindParam(':product_name',$product_name,PDO::PARAM_STR);
                // $query->bindParam(':sample_source',$sample_source,PDO::PARAM_STR);
                // $query->bindParam(':dispense_unitno',$dispense_unitno,PDO::PARAM_STR);
                // $query->bindParam(':sample_drawndt',$sample_drawndt,PDO::PARAM_STR);
                // $query->bindParam(':sample_drawntime',$sample_drawntime,PDO::PARAM_STR);
                // $query->bindParam(':tank_no',$tank_no,PDO::PARAM_STR);
                // $query->bindParam(':den_rec_denregister',$den_rec_denregister,PDO::PARAM_STR);
                // $query->bindParam(':den_obs_inspofficer',$den_obs_inspofficer,PDO::PARAM_STR);
                // $query->bindParam(':p_lreceipt_invoicedt',$p_lreceipt_invoicedt,PDO::PARAM_STR);
                // $query->bindParam(':lastreceipt_tanklorryno',$lastreceipt_tanklorryno,PDO::PARAM_STR);
                // $query->bindParam(':cash_memono',$cash_memono,PDO::PARAM_STR);
                // $query->bindParam(':woodbox_plastsealno',$woodbox_plastsealno,PDO::PARAM_STR);
                // $query->bindParam(':cash_memodt',$cash_memodt,PDO::PARAM_STR);
                // $query->bindParam(':delete_status',$delete_status,PDO::PARAM_STR);
                // $query->bindParam(':username',$username,PDO::PARAM_STR);
                // $query->bindParam(':passwordd',$passwordd,PDO::PARAM_STR);

                // $query->execute();

                

                
                // $lastInsertId = $dbh->lastInsertId();
                
            
            
            
            }
    }




       
    
    

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Admin Create Class</title>
        <link rel="stylesheet" href="css/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
         <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
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
                                    <h2 class="title">Refinary</h2>
                                </div>
                                
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            							<li><a href="#">Refinaries</a></li>
            							<li class="active">Create Refinary</li>
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
                                                    <h5>Add Refinary</h5>
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

                                            <form method="post"  role="form" action="#" enctype="multipart/form-data">
                                            <div class="row mb-1">
                            <!-- <div class="col-sm-4">
                                <label for="refinary_id" class="form-label"></label>
                                <input type="text" class="form-control" name="refinary_id" id="refinary_id" placeholder="Refinary id" >
                            </div> -->

                                
                            <div class="col-sm-4 mt-3">
                                <label for="sample_label" class="control-label">Sample Label :</label>
                                <input type="text" class="form-control" name="sample_label" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')"id="sample_label" placeholder="" >
                            </div>
                                
                            <div class="col-sm-4 mt-3">
                                <label for="supply_location" class="control-label">Supply Location :</label>
                                <input type="text" class="form-control" name="supply_location" id="supply_location" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')" placeholder="" >
                            </div>
                        

                            <div class="col-sm-4 mt-3">
                                <label for="regional_office" class="control-label">Regional Office :</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')" name="regional_office" id="regional_office" placeholder="" >
                            </div>

                        </div>


                        <div class="row mb-3">

                            <div class="col-sm-4 mt-3">
                                <label for="retail_outletname" class="control-label">Name of Retail Outlet :</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')"name="retail_outletname" id="retail_outletname"  placeholder="" >
                            </div>

                            <div class="col-sm-4 mt-3">
                                 <label for="locationn" class="control-label">Location :</label>
                                 <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')"  name="locationnn" id="locationn" placeholder="" >
                            </div>
                        
                        
                            <div class="col-sm-4 mt-3">
                                <label for="oil_companyname" class="control-label">Name of Oil Company :</label>
                                <input type="text" class="form-control" name="oil_companyname" id="oil_companyname" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')"  placeholder="">
                            </div>

                        </div>
                        

                        <div class="row mb-2">
                            
                            <div class="col-sm-4 mt-3">
                                <label for="product_name" class="control-label">Product Name :</label>
                                <input type="text" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')"  class="form-control" name="product_name" id="product_name" placeholder="" >
                            </div>
                                
                            <div class="col-sm-4 mt-3">
                                <label for="sample_source" class="control-label">Source of Sample :</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')"name="sample_source" id="sample_source" placeholder="" >                                
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="dispense_unitno" class="control-label">Dispensing Unit Number :</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')" name="dispense_unitno" id="dispense_unitno" placeholder="" >
                            </div>

                        </div>

                        <div class="row mb-2">
                        
                            <div class="col-sm-4 mt-3">
                                <label for="sample_drawndt" class="control-label">Sample Drawn Date :</label>
                                <input type="date" class="form-control" name="sample_drawndt" id="sample_drawndt" placeholder="" >
                            </div>
                                
                            <div class="col-sm-4 mt-3">
                                <label for="sample_drawntime" class="control-label">Sample Drawn Time :</label>
                                <input type="time" class="form-control" name="sample_drawntime" id="sample_drawntime" placeholder="" >
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="tank_no" class="control-label">Tank Number :</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')" name="tank_no" id="tank_no" placeholder="" >
                            </div>

                        </div>

                        <div class="row mt-3 mb-2">
                        
                            
                                
                            <div class="col-sm-4 mt-3">
                                <label for="den_rec_denregister" class="control-label">Density at 15 DEG C as Recorded in Density Register :</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'')" name="den_rec_denregister" id="den_rec_denregister" placeholder="" >
                            </div>
                                
                            <div class="col-sm-4 mt-3">
                                <label for="den_obs_inspofficer" class="control-label">Density at 15 DEG C Observed by Inspecting Office :</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'')" name="den_obs_inspofficer" id="den_obs_inspofficer" placeholder="" >
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="p_lreceipt_invoicedt" class="control-label">Invoice Date of Last Receipt of Product :</label>
                                <input type="date" class="form-control" name="p_lreceipt_invoicedt" id="p_lreceipt_invoicedt" placeholder="" >
                            </div>

                        </div>

                        <div class="row mt-1 mb-3">
                        
                            
                                
                            <div class="col-sm-4 mt-3">
                                <label for="lastreceipt_tanklorryno" class="control-label">Tank Lorry Number of Last Receipt</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')" name="lastreceipt_tanklorryno" id="lastreceipt_tanklorryno" placeholder="" >
                            </div>
                                
                            <div class="col-sm-4 mt-3">
                                <label for="cash_memono" class="control-label">Cash Memo Number</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')"name="cash_memono" id="cash_memono" placeholder="" >
                            </div>

                            <div class="col-sm-4 mt-3">
                                <label for="woodbox_plastsealno" class="control-label">Plastic Seal No of Wooden Box</label>
                                <input type="text" class="form-control" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')" name="woodbox_plastsealno" id="woodbox_plastsealno" placeholder="" >
                            </div>

                        </div>

                        <div class="row mt-3">

                            <div class="col-sm-4 mt-3">
                                <label for="cash_memodt" class="control-label">Cash Memo Date :</label>
                                <input type="date" class="form-control" name="cash_memodt" id="cash_memodt" placeholder="" value="" >
                            </div>
                            
                            
                            
                            <div class="col-sm-4 mt-3">
                                <label for="username" class="control-label">Username :</label>
                               <input type="text" class="form-control" name="username" id="username" oninput="this.value=this.value.replace(/[^a-z0-9]/g,'')" placeholder="">          
                            </div>
                            <div class="col-sm-4 mt-3">
                                <label for="passwordd" class="control-label">Password :</label>
                                <input type="password" class="form-control" name="passwordd" id="passwordd" placeholder="">
                                <input type="hidden" name="delete_status" id="delete_status" value="1">
                            </div>

                        <div class="row mb-5 mt-3">

                            <div class="col-sm-3"><a href="profile.php?refinary_id=<?php //echo $refinary_id?>"><?php// echo $link?></a></div>
<?php

    ?>
                            
                            <div class="col-sm-2 mb-2">
                                <!-- <button type="submit" class="form-control btn btn-primary" name="submit" id="submit">submit</button> -->
                            </div>
                            
                            <div class="col-sm-2 mb-1">
                                <button type="reset" name="reset"  id="reset" class="form-control btn btn-dark button">Reset</button>
                            </div>
                            
                            <div class="col-sm-2">
                                <!-- <button type="submit" class="form-control btn btn-primary" name="generateqr" id="generateqr">Generate QR</button> -->

                            </div>
                            
                            <div class="col-sm-3"></div>

                        </div>
                                        
                        
                    <!-- </div> -->

                                                        <div class="">
                                                           <button type="submit" name="submit" class="btn btn-success btn-labeled">Submit<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
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
<?php  } ?>
