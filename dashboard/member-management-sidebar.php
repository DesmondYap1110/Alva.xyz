<div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
    <div class="general-box" id="profile-sidebar-div">
        <div id="profile-img-name-div">
            <div class="profile-pic">
                <div class="profile-pic-img" id="profile-div">
                    <img src="<?php $base_url; ?>/img/avatar.png" class="rounded-circle" id="profile-img" alt="Member Name">
                </div>
                <a href="javascript:void(0);" class="text-dark">
                    <p id="profile-name">Member Name</p>
                </a>
                <!-- <a id="user-navi" href="javascript:void(0);"><i class="fa fa-plus-circle"></i>Show More</a> -->
            </div>
        </div>
        <ul class="item1-links nav nav-tabs mb-0" id="user-nav-div">
            <li class="nav-item">
                <a href="<?php echo $base_url_dashboard;?>/member-management-edit.php" class="nav-link <?php if($subpg == "profile"){ echo 'active'; } ?>"><i class="ri-edit-box-line"></i>&nbsp;Edit Member Profile</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $base_url_dashboard;?>/member-management-commission.php" class="nav-link <?php if($subpg == "commission"){ echo 'active'; } ?>"><i class="ri-coins-line"></i>&nbsp;Commission List</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo $base_url_dashboard;?>/member-management-wallet.php" class="nav-link <?php if($subpg == "wallet"){ echo 'active'; } ?>"><i class="ri-wallet-3-line"></i>&nbsp;Wallet Withdrawal</a>
            </li>
        </ul>
    </div>
</div>
