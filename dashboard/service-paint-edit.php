 <?php
    require_once('script.php');
    $pg = "sp";
    $subpg = "paint";

    //Display ARMP Rate
    //$rows = displayARMP($ALVADB);

?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Services & Packages | Edit Services & Packages | <?php echo $base_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HEADER CONS SECTION -->
    <?php include "inc/header-cons.php"; ?>
    <!-- END OF HEADER CONS SECTION -->

    <!-- COLOR THEME SECTION -->
    <?php include "inc/master-theme.php"; ?>
    <!-- END OF COLOR THEME SECTION -->

    <style>
        .tb-armp th:nth-child(2),.tb-armp th:nth-child(3),
        .tb-armp td:nth-child(2),.tb-armp td:nth-child(3) {
            text-align: center;
        }
        .table th:nth-child(1), .table td:nth-child(1) {
            width: 60%;
        }
        .table th:nth-child(2), .table td:nth-child(2) {
            text-align: center;
            width: auto;
        }
        .table th:nth-child(3), .table td:nth-child(3) {
            text-align: center;
            width: auto;
        }
        .tb-other th:nth-child(1), .tb-other td:nth-child(1) {
            width: 38.7%;
        }
        .tb-other th:nth-child(2), .tb-other td:nth-child(2),
        .tb-other th:nth-child(3), .tb-other td:nth-child(3),
        .tb-other th:nth-child(4), .tb-other td:nth-child(4) {
            text-align: center;
            width: auto;
        }
    </style>
</head>
<body class="body-d">
    <div id="layout-wrapper">

        <!-- HEADER SECTION -->
        <?php include "inc/header.php"; ?>
        <!-- END OF HEADER SECTION -->

        <!-- SIDEBAR SECTION -->
        <?php include "inc/sidebar.php"; ?>
        <!-- END OF SIDEBAR SECTION -->

        <div class="vertical-overlay"></div>

        <div class="main-content service_package">

             <!-- BREADCRUMB SECTION -->
             <section id="bc-section">
                <div id="bc-div">
                    <a href="<?php echo $base_url_dashboard; ?>"><i class="ri-dashboard-2-line"></i></a>
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>                    
                    <a href="<?php echo $base_url_dashboard; ?>/service-package.php">Services & Packages</a>
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>
                    <span id="bc-active">Edit Services & Packages</span>
                </div>
            </section>
            <!-- END OF BREADCRUMB SECTION -->

            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="form-box" class="general-box">
                                    <form name="edit_form" method="POST" action="" enctype="multipart/form-data">
                                        <p id="form-sub-title">Edit Services & Packages</p>
                                        <?php if (isset($_GET['edit'])) { $pw = $_GET['edit']; if ($pw == 'succ') { ?>
                                            <div class="alert alert-success" role="alert">
                                                <p class="alert-heading">Member's Info successfully edited.</p>
                                            </div>
                                        <?php } } ?>
                                        <?php if (isset($_GET['format'])) { $pw = $_GET['format']; if ($pw == 'fail') { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <p class="alert-heading">Photo Format Invalid (File Size: < 10MB | File Type: PNG, JPEG, JPG)</p>
                                        </div>
                                        <?php } } ?>
                                        <?php if (isset($_GET['upload'])) { $pw = $_GET['upload']; if ($pw == 'fail') { ?>
                                            <div class="alert alert-danger" role="alert">
                                                <p class="alert-heading">Photo Fail to uplaod. Please try again.</p>
                                            </div>
                                        <?php } } ?>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label>Service Name : Paint</label>

                                                <!-- Table Section Start -->
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <!-- Paint Package Section -->
                                                        <div id="table-div">
                                                            <!-- Paint Package Table -->
                                                            <table class="tb-package table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Paint Package</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    //Paint Package Section
                                                                    //<th class="text-center">Action</th>
                                                                    displayservice($ALVADB,"P01",0);
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                            <!-- End of Paint Package Table -->
                                                        </div>
                                                        <!-- End of Paint Package Section -->

                                                        <!-- Bodywork Section -->
                                                        <div id="table-div">
                                                            <!-- Bodywork Table -->
                                                            <table class="tb-bodywork table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Bodywork</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                                    //Bodywork Section
                                                                    //<th class="text-center">Action</th>
                                                                    displayservice($ALVADB,"P02",0);
                                                                ?>
                                                                    
                                                                </tbody>
                                                            </table>
                                                            <!-- End of Bodywork Table -->
                                                        </div>
                                                        <!-- End of Bodywork Section -->

                                                        <!-- Dissassemble Section -->
                                                        <div id="table-div">
                                                            <!-- Dissassemble Table -->
                                                            <table class="tb-dissassemble table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Dissassemble</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                                    //Dissassemble Section
                                                                    //<th class="text-center">Action</th>
                                                                    displayservice($ALVADB,"P03",0);
                                                                ?>
                                                                </tbody>
                                                            </table>
                                                            <!-- End of Dissassemble Table -->
                                                        </div>
                                                        <!-- End of Dissassemble Section -->

                                                        <!-- Sanding Section -->
                                                        <div id="table-div">
                                                            <!-- Sanding Table -->
                                                            <table class="tb-sanding table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Sanding</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                                    //Sanding Section
                                                                    //<th class="text-center">Action</th>
                                                                    displayservice($ALVADB,"P04",0);
                                                                ?>
                                                                </tbody>
                                                            </table>
                                                            <!-- End of Sanding Table -->
                                                        </div>
                                                        <!-- End of Sanding Section -->

                                                        <!-- Putty Filler Section -->
                                                        <div id="table-div">
                                                            <!-- Putty Filler Table -->
                                                            <table class="tb-pf table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Putty Filler (Cement)</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                                    //Putty Filler Section
                                                                    //<th class="text-center">Action</th>
                                                                    displayservice($ALVADB,"P05",0);
                                                                ?>
                                                                </tbody>
                                                            </table>
                                                            <!-- End of Putty Filler Table -->
                                                        </div>
                                                        <!-- End of Putty Filler Section -->

                                                        <!-- Undercoat Section -->
                                                        <div id="table-div">
                                                            <!-- Undercoat Table -->
                                                            <table class="tb-undercoat table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Undercoat (Primer & Body Filler)</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                                    //Undercoat Section
                                                                    //<th class="text-center">Action</th>
                                                                    displayservice($ALVADB,"P06",0);
                                                                ?>
                                                                </tbody>
                                                            </table>
                                                            <!-- End of Undercoat Table -->
                                                        </div>
                                                        <!-- End of Undercoat Section -->

                                                        <!-- Change Colour / Paint Inside Section -->
                                                        <div id="table-div">
                                                            <!-- Change Colour / Paint Inside Table -->
                                                            <table class="tb-cc table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Change Colour / Paint Inside</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                                    //Change Color Section
                                                                    //<th class="text-center">Action</th>
                                                                    displayservice($ALVADB,"P07",0);
                                                                ?>
                                                                </tbody>
                                                                <!-- End of Change Colour / Paint Inside Table -->
                                                            </table>
                                                        </div>
                                                        <!-- End of Change Colour / Paintd Inside Section -->
                                                        
                                                        <!-- Optional Section -->
                                                        <div id="table-div">
                                                            <!-- Optional Table -->
                                                            <table class="tb-optional table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Optional</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                                    //Optional Section
                                                                    //<th class="text-center">Action</th>
                                                                    displayservice($ALVADB,"P08",0);
                                                                ?>
                                                                </tbody>
                                                            </table>
                                                            <!-- End of Optional Table -->
                                                        </div>
                                                        <!-- End of Optional Section -->
                                                        
                                                        <!-- Basecoat Section -->
                                                        <div id="table-div">
                                                            <!-- Basecoat Table -->
                                                            <table class="tb-basecoat table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Basecoat (Color Paint)</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                                    //Basecoat Section
                                                                    //<th class="text-center">Action</th>
                                                                    displayservice($ALVADB,"P09",0);
                                                                ?>
                                                                </tbody>
                                                            </table>
                                                            <!-- End of Basecoat Table -->
                                                        </div>
                                                        <!-- End of Basecoat Section -->
                                                        
                                                        <!-- Paint Pigment Section -->
                                                        <div id="table-div">
                                                            <!-- Paint Pigment Table -->
                                                            <table class="tb-pp table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Paint Pigment</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                                    //Paint Pigment Section
                                                                    //<th class="text-center">Action</th>
                                                                    displayservice($ALVADB,"P10",0);
                                                                ?>
                                                                </tbody>
                                                            </table>
                                                            <!-- End of Paint Pigment Table -->
                                                        </div>
                                                        <!-- End of Paint Pigment Section -->
                                                        
                                                        <!-- Clearcoat Section -->
                                                        <div id="table-div">
                                                            <!-- Clearcoat Table -->
                                                            <table class="tb-clearcoat table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Clearcoat (Lacquer)</th>
                                                                        <th>Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                                    //Clearcoat Section
                                                                    //<th class="text-center">Action</th>
                                                                    displayservice($ALVADB,"P11",0);
                                                                ?>
                                                                </tbody>
                                                            </table>
                                                            <!-- End of Clearcoat Table -->
                                                        </div>
                                                        <!-- End of Clearcoat Section -->

                                                        <!-- Other Section -->
                                                        <div id="table-div">
                                                            <!-- Other Table -->
                                                            <table class="tb-other table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Other</th>
                                                                        <th>Description</th>
                                                                        <th class="text-center">Price (RM)</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                                    //Finishing Section
                                                                    //<th class="text-center">Action</th>
                                                                    displayservice($ALVADB,"P12",1);
                                                                    //Maintenance Section
                                                                    displayservice($ALVADB,"P13",1);
                                                                ?>
                                                                </tbody>
                                                            </table>
                                                            <!-- End of Other Table -->
                                                        </div>
                                                        <!-- End of Other Section -->

                                                         <!-- Warranty Section -->
                                                         <div id="table-div">
                                                            <!-- Warranty Table -->
                                                            <table class="tb-warranty table table-bordered nowrap table-striped align-middle">
                                                                <thead>
                                                                    <tr>   
                                                                        <th>Warranty</th>
                                                                        <th>Month</th>
                                                                        <th class="text-center">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                                    //Warranty Section
                                                                    //<th class="text-center">Action</th>
                                                                    displayservice($ALVADB,"P14",2);
                                                                ?>
                                                                </tbody>
                                                            </table>
                                                            <!-- End of Warranty Table -->
                                                        </div>
                                                        <!-- End of Warranty Section -->
                                                    </div>
                                                </div>
                                                <!-- End of Table Section  -->

                                                <!-- ARMP RATE SECTION -->
                                                <?php
                                                //ARMP-Rate
                                                require_once('armp-rate.php');
                                                ?>
                                                <!-- END OF ARMP RATE SECTION -->

                                            </div>
                                            <div class="col-lg-12">
                                                <div id="form-btn-div">
                                                    <a href="<?php echo $base_url_dashboard; ?>/service-package.php" id="general-btn" class="btn2"><i class="ri-close-fill"></i>Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            
            </div>

            <!-- FOOTER SECTION -->
            <?php include "inc/footer.php"; ?>
            <!-- END OF FOOTER SECTION -->
        </div>
    </div>

    <!-- FOOTER CONS SECTION -->
    <?php include "inc/footer-cons.php"; ?>
    <!-- END OF FOOTER CONS SECTION -->

    <script>
        //AJAX SECTION
        function update(ID,type)
        {
            
            var price;
            var warranty;

            if(type==0)
            {
                //Mean Data Table doesn't have Warranty but Price
                warranty=0;
                price = document.getElementById("price"+ID).value;

            }
            else
            {
                //Mean Data Table doesn't have Price but Warranty
                warranty=document.getElementById("warranty"+ID).value;
                price = 0;
            }

            $.ajax({
                type:"POST",
                url:"service-paint-edit.ajax.php",
                data:
                {
                    ID: ID,
                    price: price,
                    warranty:warranty
                },
                success:function(data)
                {
                    console.log(data);

                }
            })
        }
      
        function updateD(ID)
        {
            var rate = document.getElementById("discount_select").value;
            var amount = document.getElementById("discount_amount").value;
            $.ajax({
                type:"POST",
                url:"service-paint-edit.ajax.php",
                data:
                {
                    DID: ID,
                    rate:rate,
                    amount:amount
                },
            })
        }

        function updateR(ID)
        {
            var rate = document.getElementById("referral_select").value;
            var amount = document.getElementById("referral_amount").value;
            
            $.ajax({
                type:"POST",
                url:"service-paint-edit.ajax.php",
                data:
                {
                    RID: ID,
                    rate:rate,
                    amount:amount
                },
            })
        }
    </script>

    <!-- Validation Input -->
    <script src="inc/validation-input.js"></script>

</body>
</html>
<?php
function displayservice($dbconn,$condition,$type)
{

    $sql="SELECT * FROM `paint_pricelist` WHERE product_code= '$condition' AND status='1'";
    $query=mysqli_query($dbconn,$sql) or die (mysqli_error($dbconn));
    $totalrow = mysqli_num_rows($query);

    if($totalrow>0)
    {
        while($row = mysqli_fetch_assoc($query))
        {
            //type 0: 3 column and Validation Price
            //type 1: 4 column and Validation Price
            //type 2: 3 column and Validation Integar

            if($type==1)
            {
                $description2 = nl2br(htmlentities($row['short_desc']));
                // $description = htmlentities(nl2br($row['short_desc']));

                echo $display = 
                '
                <tr>
                    <td>'.$row['product_code_desc'].'<span id="tb-time-p">'.$description2.'</span></td>
                    <td>'.$row['product'].'</td>
                    <td class="text-center"><input type="text" class="form-control camount" id="price'.$row['ID'].'" max-length="100" value="'.$row['price'].'" onkeypress="return isNumberKey(this,event);"></td>
                    <td class="text-center"><button type="button" onclick="update('.$row['ID'].',0)" data-toast data-toast-text="Successfully Save" data-toast-gravity="top" data-toast-position="right" data-toast-duration="3000" class="tb-ac-btn" id="tb-ac-btn-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Save"><i class="ri-save-3-line"></i></button></td>
                </tr>
                ';

            }
            elseif($type==0)
            {
                echo $display = 
                '
                <tr>
                    <td>'.$row['product'].'<span id="tb-time-p">'.$row['short_desc'].'</span></td>
                    <td><input type="text" class="form-control camount" id="price'.$row['ID'].'" max-length="100" value="'.$row['price'].'" onkeypress="return isNumberKey(this,event);"></td>
                    <td class="text-center"><button type="button" onclick="update('.$row['ID'].',0)" data-toast data-toast-text="Successfully Save" data-toast-gravity="top" data-toast-position="right" data-toast-duration="3000" class="tb-ac-btn" id="tb-ac-btn-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Save"><i class="ri-save-3-line"></i></button></td>
                </tr>
                ';

            }
            elseif($type==2)
            {
                echo $display = 
                '
                <tr>
                    <td>'.$row['product'].'<span id="tb-time-p">'.$row['short_desc'].'</span></td>
                    <td><input type="text" class="form-control" id="warranty'.$row['ID'].'" max-length="100" value="'.$row['warranty'].'" onkeypress="return validateInt(this, event);"></td>
                    <td class="text-center"><button type="button" onclick="update('.$row['ID'].',1)" data-toast data-toast-text="Successfully Save" data-toast-gravity="top" data-toast-position="right" data-toast-duration="3000" class="tb-ac-btn" id="tb-ac-btn-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Save"><i class="ri-save-3-line"></i></button></td>
                </tr>
                ';

            }
            
        }
    }

}


function displayARMP($dbconn)
{
    $sql="SELECT * FROM `paint_armp_rate` WHERE status='1'";
    $query=mysqli_query($dbconn,$sql) or die (mysqli_error($dbconn));
    $totalrow = mysqli_num_rows($query);

    if($totalrow>0)
    {
        return mysqli_fetch_assoc($query);
    }
}



?>