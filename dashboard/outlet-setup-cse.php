 <?php
    require_once('script.php');
    require_once('../php/class/member.class.php');
    require_once('../php/class/modal.class.php');

    $pg = "os";
    $subpg = "cse";

    //import from member.class.php
    $cse = new member("member",$ALVADB);

    //import from modal.class.php
    $delete = new Modal(
        //Modal ID
        "DeleteModal",

        //Title Modal
        "Delete Staff",

        //Modal Description
        "delete this staff?",

        //Modal ID
        "delete",

        //Database table
        "member",

        //Database Connection
        $ALVADB
    );

    $delete->UpdateAction(
        //Based on member ID
        'ID',

        //Select deleted in column database 
        'deleted',  

        //Update deleted = 1
        '1' , 

        // The url return after update or delete
        "outlet-setup-cse.php" ,

        // D = Delete  U=Update
        'D' 
    );


?>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="dark">
<head>
    <meta charset="utf-8">
    <title>Outlet Setup | CSE Module | <?php echo $base_name; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HEADER CONS SECTION -->
    <?php include "inc/header-cons.php"; ?>
    <!-- END OF HEADER CONS SECTION -->

    <!-- COLOR THEME SECTION -->
    <?php include "inc/master-theme.php"; ?>
    <!-- END OF COLOR THEME SECTION -->

    <!-- DATATABLE CSS -->
    <?php include "inc/datatable-css.php"; ?>
    <!-- END OF DATATABLE CSS -->

    <style>
        .table-cse th:nth-child(1), .table-cse td:nth-child(1),
        .table-cse th:nth-child(3), .table-cse td:nth-child(3),
        .table-cse th:nth-child(4), .table-cse td:nth-child(4),
        .table-cse th:nth-child(5), .table-cse td:nth-child(5),
        .table-cse th:nth-child(6), .table-cse td:nth-child(6) {
            text-align: center;
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

        <div class="main-content">

            <!-- BREADCRUMB SECTION -->
            <section id="bc-section">
                <div id="bc-div">
                    <a href="<?php echo $base_url_dashboard; ?>"><i class="ri-dashboard-2-line"></i></a>
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>                    
                    Outlet Setup
                    <span id="bc-arrow"><i class="ri-arrow-right-s-line"></i></span>                    
                    <span id="bc-active">CSE Module</span>
                </div>
            </section>

            <!-- END OF BREADCRUMB SECTION -->
            <div class="page-content">
                <section id="general-section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="add-btn-div">
                                    <a href="<?php echo $base_url_dashboard; ?>/outlet-setup-cse-add.php" id="general-btn" class="btn1"><i class="ri-add-fill"></i>Add Staff</a>
                                </div>
                                <div id="tb-box" class="general-box">
                                    <div id="tb-border-line">
                                        <div id="tb-title-div">
                                            <p id="tb-title">CSE Module</p>
                                            <?php if (isset($_GET['add'])) { $register = $_GET['add']; if ($register == 'succ') { ?>
                                            <div class="alert alert-success" role="alert">
                                                <p class="alert-heading">Staff Added Successfully.</p>
                                            </div>
                                            <?php } } ?>
                                            <?php if (isset($_GET['delete'])) { $register = $_GET['delete']; if ($register == 'succ') { ?>
                                            <div class="alert alert-success" role="alert">
                                                <p class="alert-heading">Staff Deleted Successfully.</p>
                                            </div>
                                            <?php } } ?>
                                            <?php if (isset($_GET['update'])) { $register = $_GET['update']; if ($register == 'succ') { ?>
                                            <div class="alert alert-success" role="alert">
                                                <p class="alert-heading">Staff Edited Successfully.</p>
                                            </div>
                                            <?php } } ?>
                                            <?php if (isset($_GET['process'])) { $register = $_GET['process']; if ($register == 'invalid') { ?>
                                            <div class="alert alert-danger" role="alert">
                                                <p class="alert-heading">Process Invalid.</p>
                                            </div>
                                            <?php } } ?>
                                        </div>
                                    </div>
                                    <div id="table-padding">
                                        <div id="table-div">
                                            <table id="example" class="table-cse table table-bordered nowrap table-striped align-middle">
                                                <thead>
                                                    <tr>   
                                                        <th>Staff ID</th>
                                                        <th>Staff Name</th>
                                                        <th>Contact No.</th>
                                                        <th>Email</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    //Display the data
                                                    displaydata($cse,$delete);
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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

    <!-- DATATABLE JS -->
    <?php include "inc/datatable-js.php"; ?>
    <!-- END OF DATATABLE JS -->

</body>
</html>

<?php

function displaydata($data,$delete)
{
    $total_row = $data->totaldata(" AND type='1'");

    if($total_row>0)
    {

        for($i=0; $i<$total_row; $i++)
        {
            echo
            '
            <tr>
                <td>'.$data->get_row()[$i]['member_ID'].'</td>
                <td>'.$data->get_row()[$i]['name'].'</td>
                <td>'.$data->get_row()[$i]['contact'].'</td>
                <td>'.$data->get_row()[$i]['email'].'</td>
                <td>
                '.
                //Status Part
                managestatus( 
                    $data->get_row()[$i]['ID'] , 
                    $data->get_row()[$i]['status'],
                    "outlet-setup-cse"
                )
                .'
                </td>
                <td>
                    <div id="tb-act-btn-div">
                        <a href="'.$GLOBALS['base_url_dashboard'].'/outlet-setup-cse-edit.php?mid='.$data->get_row()[$i]['member_ID'].'" class="tb-ac-btn" id="tb-ac-btn-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit Staff" ><i class="ri-edit-2-line"></i></a>
                        <a href="javascript:void(0);" class="tb-ac-btn" id="tb-ac-btn-2" data-bs-toggle="modal" data-bs-target="#DeleteModal'.$data->get_row()[$i]['ID'].'"><i class="ri-delete-bin-6-line"></i></a>
                    </div>
                </td>
                '.$delete->createModal($data->get_row()[$i]['ID']).'
            </tr>
            ';
        }
    }
}

function managestatus($ID,$status,$togo)
{
    if($status==1)
    {
        return 
        '
        <a href="status.php?mid='.$ID.'&status=0&togo='.$togo.'" id="general-btn" class="btn3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Click to Block">Active</a>
        ';
    }
    elseif($status==0)
    {
        return
        '
        <a href="status.php?mid='.$ID.'&status=1&togo='.$togo.'" id="general-btn" class="btn5" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Click to Active">BLOCK</a>
        ';
    }

}
?>