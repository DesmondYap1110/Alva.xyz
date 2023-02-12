<?php
require_once('script.php');

//Display ARMP Rate
$rows = displayARMP($ALVADB);

?>
<!-- ARMP RATE SECTION -->
<div id="armp-div">
    <p id="form-sub-title">ARMP Rate</p>
    <!-- Discount Rate Section -->
    <div id="discount-div">
        <label>Discount Rate</label>
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-5 col-sm-5 col-5">
                <select class="form-select" aria-label="Default select example" id="discount_select" required>
                    <option value="" disabled selected>Choose a Discount Rate</option>
                    <option value="1" <?php isSelected($rows['type'],1); ?> >By Net Amount (RM)</option>
                    <option value="2" <?php isSelected($rows['type'],2); ?> >By Percentage (%)</option>
                </select>
            </div>

            <!-- Discount Rate Input -->
            <div class="col-lg-3 col-md-5 col-sm-5 col-5">
                <div id="discount_amount_div">
                    <input type="text" class="form-control camount" id="discount_amount" name="amount" required maxlength="50" value="<?php echo $rows['amount']; ?>" onkeypress="return isNumberKey(this,event)">
                </div>
            </div>
            <!-- End of Discount Rate Input -->
            
            <!-- Discount Rate Save button -->
            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                <div id="armp_btn_div">
                    <button type="button" onclick="updateD('<?php echo $rows['ID']; ?>')" data-toast data-toast-text="Successfully Save" data-toast-gravity="top" data-toast-position="right" data-toast-duration="3000" class="tb-ac-btn" id="tb-ac-btn-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Save"><i class="ri-save-3-line"></i></button>
                </div>
            </div>
            <!-- End of Discount Rate Save button -->

        </div>
    </div>

    <!-- Referral Rate Section -->
    <div id="referral-div">
        <label>Referral Rate</label>
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-5 col-sm-5 col-5">
                <select class="form-select" aria-label="Default select example" id="referral_select" onchange="forInputReferralRate()" required>
                    <option value="" disabled selected>Choose a Referral Rate</option>
                    <option value="1" <?php isSelected($rows['referral_type'],1); ?>>By Net Amount (RM)</option>
                    <option value="2" <?php isSelected($rows['referral_type'],2); ?>>By Percentage (%)</option>
                </select>
            </div>
            <!-- Referral Rate Input -->
            <div class="col-lg-3 col-md-5 col-sm-5 col-5">
                <div id="referral_amount_div">
                    <input type="text" class="form-control camount" id="referral_amount" name="amount" required maxlength="50" value="<?php echo $rows['referral_amount']; ?>" onkeypress="return isNumberKey(this,event)">
                </div>
            </div>
            <!-- End of Referral Rate Input -->

            <!-- Referral Rate Save button -->
            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                <div id="armp_btn_div">
                    <button type="button" onclick="updateR('<?php echo $rows['ID']; ?>')" data-toast data-toast-text="Successfully Save" data-toast-gravity="top" data-toast-position="right" data-toast-duration="3000" class="tb-ac-btn" id="tb-ac-btn-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Save"><i class="ri-save-3-line"></i></button>
                </div>
            </div>
            <!-- End of Referral Rate Save button -->
        </div>
    </div>
</div>
<!-- END OF ARMP RATE SECTION -->
<?php

function isSelected($data,$value)
{
    if($data==$value)
    {
        echo 'selected';
    }

}
?>