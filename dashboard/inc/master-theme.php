<style type="text/css">
	/*PRELOADER SECTION*/
	.preloader {
		background-color: #00000080;
	}
	/*GENERAL SECTION*/
	::-webkit-scrollbar-track {
	    background: rgb(0 0 0 / 30%);
	}
	::-webkit-scrollbar-thumb {
	    background: linear-gradient(0deg,#755621 0,#d1b365 100%) !important;
	}
	::selection {
	    color: #fff !important;
    	background: #d1b365 !important;
	}
	.body-d {
		background: #212121;
	}
	[data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-item:hover>a.sb-menu-d, [data-layout=vertical][data-sidebar=dark][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-item:hover>.sb-menu-d {
		background: #191919 !important;
	}
	.general-box {
        background: #191919;
		box-shadow: 14px 14px 20px #000000c4, -20px -15px 20px #ffffff08;
	}
	/* #general-btn {
		color: #fff;
		background: #e00702;
	}
	#general-btn:hover {
		background: #e00702;
	}
	#second-btn {
		color: #fff;
		background: #34798e;
	}
	#second-btn:hover {
		background: #34798e;
	}
	#third-btn {
		color: #fff;
		background: #e00702;
	}
	#third-btn:hover {
		background: #e00702;
	}
	#fourth-btn {
		color: #000;
		background: #fff;
	}
	#fourth-btn:hover {
		background: #fff;
	}
	#fiveth-btn {
		color: #fff;
		background: #1bb73f;
	}
	#fiveth-btn:hover {
		background: #1bb73f;
	}
	#sixth-btn {
		color: #fff;
		background: #e00702;
	}
	#sixth-btn:hover {
		color: #fff;
		background: #e00702;
	}
	#seventh-btn {
		color: #fff;
		background: #e18d00;
	}
	#seventh-btn:hover {
		background: #e18d00;
	}
	#eighth-btn {
		color: #fff;
		background: #e00702;
	} */
	.btn1 {
		color: #fff;
		background: linear-gradient(73deg,#755621 0,#d1b365 100%);
	}
	.btn1:hover {
		color: #fff;
		background: linear-gradient(73deg,#755621 0,#d1b365 100%);
	}
	.btn2 {
		color: #fff;
		/* background: #efefef; */
		border: 2px solid #efefef !important;
	}
	.btn2:hover {
		color: #000;
		background: #efefef;
	}
	.btn3 {
		color: #fff;
		background: #06d736;
		/* box-shadow: inset 0 2px 1px -1px rgb(255 255 255 / 20%), inset 0 -2px 1px -1px rgb(0 0 0 / 20%), 2px 2px 2px rgb(0 0 0 / 20%), 1px 1px 15px rgb(6 215 54 / 77%); */
	}
	.btn3:hover {
		color: #fff;
		background: #05cc33;
	}
	.btn4 {
		color: #fff;
		background: #6259ca;
	}
	.btn4:hover {
		color: #fff;
		background: #3e3796;
	}
	.btn5 {
		color: #fff;
		background: #ff3333;
		/* box-shadow: inset 0 2px 1px -1px rgb(255 255 255 / 20%), inset 0 -2px 1px -1px rgb(0 0 0 / 20%), 2px 2px 2px rgb(0 0 0 / 20%), 1px 1px 15px rgb(255 51 51 / 77%); */
	}
	.btn5:hover {
		color: #fff;
		background: #ff3333;
	}
	.gnl-green {
		color: #00d230 !important;
	}
	.gnl-red {
		color: #ff4d4d !important;
	}
	.gnl-bg-not-allowed, .gnl-bg-not-allowed:hover {
		color: #fff;
		background: #ababab;
    		cursor: not-allowed;
	}

	/*SIDEBAR SECTION*/
	#sb-active {
		color: #fff !important;
		background: linear-gradient(144deg,#755621 0,#d1b365 100%) !important;
	}
	#sb-sub-active {
		color: #fff !important;
	}
	#sb-sub-active:before {
		background: #fff !important;
	}
	.sidebar-d {
		position: fixed !important;
    	background: #070707 !important;
    	border-right: unset !important;
		width: 258px !important;
	}
	.sidebar-d:before {
		background: #191919d9 !important;
	}
	.sidebar-logo-d {
		background: #070707 !important;
		border-bottom: 1px solid #f7c163;
		box-shadow: -8px 1px 8px 0px #f7c163bf;
		/* background: #191919 !important; */
	}
	.dropdown-menu {
		background: #171717;
		box-shadow: 0 3px 9px 0 rgb(0 0 0 / 15%);
	}
	.dropdown-item:hover {
	    color: #fff;
	    background-color: #d1b365;
	    transition: all 0.3s linear;
	}
	.dropdown-item:hover i {
	    color: #fff !important;
	}
	[data-sidebar=gradient-2][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-item:hover>.menu-dropdown, [data-sidebar=gradient-3][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-item:hover>.menu-dropdown, [data-sidebar=gradient-4][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-item:hover>.menu-dropdown, [data-sidebar=gradient][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-item:hover>.menu-dropdown {
		background: #191919;
	}
	.navbar-menu .navbar-nav .menu-link, .navbar-menu .navbar-nav .nav-sm .nav-link {
		color: #ffffff80 !important;
	}
	.navbar-menu .navbar-nav .menu-link:hover, .navbar-menu .navbar-nav .nav-sm .nav-link:hover {
		color: #fff !important;
	}
	@media (max-width: 991px){
		.sidebar-d {
			backdrop-filter: blur(20px);
		}
	}

	/*THEMES OFFCANVAS SECTION*/
	.offcanvas {
		background: #191919;
	}
	[data-layout-mode=dark] .colorscheme-cardradio .bg-light {
	    background-color: #fff !important;
	}
	[data-layout-mode=light] .colorscheme-cardradio .light .bg-light, .bg-light {
	    background-color: #fff !important;
	}
	[data-layout-mode=dark] .colorscheme-cardradio .dark .bg-dark, .bg-dark {
	    background-color: #02153b !important;
	}
	[data-layout-mode=master] .colorscheme-cardradio .master .bg-master, .bg-master {
	    background-color: #212121 !important;
	}
	[data-layout-mode=ib] .colorscheme-cardradio .ib .bg-ib, .bg-ib {
	    background-color: #2C3A3A !important;
	}
	#tm-bg-master {
		background: #ff423d !important;
	}
	#tm-bg-ib {
		background: #D8A97B !important;
	}
	#tm-bg-light {
		background: #4051892e !important;
	}
	.bg-master:before {
	    color: #e00702;
	    content: "\eb80";
	    font-family: remixicon;
	    position: absolute;
	    top: 2px;
	    right: 6px;
	    font-size: 16px;
	}
	.bg-master {
		border-color: #e00702 !important;
	}
	#box-bg-light {
		background: #4051892e !important;
	}
	.card-radio .form-check-input:checked+.bg-light {
	    border-color: #00b7ff !important;
	}
	.form-check-input:checked+.bg-light:before {
		color: #00b7ff !important;
	}
	.card-radio .form-check-input:checked+.bg-dark {
	    border-color: #00b7ff !important;
	}
	.form-check-input:checked+.bg-dark:before {
		color: #00b7ff !important;
	}
	.card-radio .form-check-input:checked+.bg-master {
	    border-color: #e00702 !important;
	}
	.form-check-input:checked+.bg-master:before {
		color: #e00702 !important;
	}
	.card-radio .form-check-input:checked+.bg-ib {
	    border-color: #D8A97B !important;
	}
	.form-check-input:checked+.bg-ib:before {
		color: #D8A97B !important;
	}
	#themes-title-bg {
		background: linear-gradient(170deg, #ff423d, #e00702) !important;
	}
	#themes-sub-title, #tm-cl-title {
		color: #fff;
	}

	/*BREADCRUMB SECTION*/
	#bc-div {
		color: #fff;
		background: #191919;
		box-shadow: 0 10px 30px 0 rgb(24 28 33 / 5%);
	}
	#bc-div a {
		color: #fff;
		transition: all 0.3s linear;
	}
	#bc-div a:hover {
		color: #d1b365;
		transform: translateY(-5px);
	}
	#bc-active {
		color: #d1b365;
	}

	/*FORM SECTION*/
	#form-sub-title {
        color: #d1b365;
    }
    label {
    	color: #fff;
    }
    #tb-input-div .form-control {
	    background: #ffffff33 !important;
	}
    .form-control, .select2-container--default .select2-selection--single, .select2-container--default .select2-search--dropdown .select2-search__field, .multiselect, .iti__country-list, .choices__inner {
    	color: #fff !important;
		background: #3a3a3a !important;
    }
	.form-control:focus, .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-search--dropdown .select2-search__field:focus, .multiselect:focus, .dataTables_filter input:focus, div.dataTables_wrapper div.dataTables_filter input:focus {
		border: 1px solid #d1b365 !important;
    }
    .choices__inner {
    	border: unset;
    }
    .choices__placeholder {
	    color: #fff;
	}
    .select2-container--default .select2-selection--single .select2-selection__rendered {
		color: #fff !important;
	}
	::-webkit-calendar-picker-indicator {
	    filter: invert(0);
	}
	.form-control:disabled, .form-control[readonly], .select2-container--default.select2-container--disabled .select2-selection--single {
		background: #3a3a3a94 !important;
		color: #ffffff80 !important;
	}
	.select2-container--default .select2-search--dropdown {
		background: #3a3a3a !important;
	}
	.select2-dropdown, .choices__list--dropdown, .choices[data-type*=select-one] .choices__input {
		border: unset !important;
    	background: #ffff !important;
    	box-shadow: 0 3px 9px 0 rgb(28 28 51 / 15%);
    }
    .choices[data-type*=select-one] .choices__input {
    	border: 1px solid #fff !important;
    }
    .select2-container--default .select2-results__option--selected, .select2-container--default .select2-results__option[aria-selected=true]:hover, .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable, .choices__list--dropdown .choices__item--selectable.is-highlighted {
	    background-color: #d1b365 !important;
		color: #fff !important;
	}
	.select2-container--open .select2-selection--single .select2-selection__arrow b {
		border-color: transparent transparent #888 transparent !important;
		border-width: 0 4px 5px 4px !important;
	}
	.form-control::-webkit-file-upload-button {
		color: #fff;
        background-color: #3a3a3a;
    }
    .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
    	color: #fff;
        background-color: #3a3a3a;
    }
	label span {
        color: #ff4d4d;
    }
    #pw-ct-title, .select2-results__option {
		color: #ffffff;
		background: #3a3a3a;
	}
    .select2-results__option--disabled {
		color: #ddd;
	}
	#otp-btn {
	    color: #fff;
	    background: #f93ffa;
	}
	#otp-btn:disabled {
	    color: #fff;
	    background: #7f7f7f;
	    cursor: not-allowed;
	}
	#password_contain {
		background: #3a3a3a;
	}
	.valid {
        color: #20b843;
    }
    .invalid {
        color: #ff4444;
    }
    #otp-btn {
        color: #fff;
        background: #f93ffa;
    }
    #otp-btn:disabled {
        color: #fff;
        background: #7f7f7f;
        cursor: not-allowed;
    }
    #link-p,#link-p1 {
        color: #f9f9f9;
    }
    #note-special {
		color: #f9f9f9;
	}
    .note-b {
		color: #b44c36;
		background: #fbd1c8;
	}
	#input-copy {
	    color: #fff;
	    background: #000f2d;
	}
	.toastify {
		background: #d1b365 !important;
    	box-shadow: 0 3px 9px 0 rgb(28 28 51 / 15%) !important;
	}
	[data-layout-mode=dark] .form-switch .form-check-input, [data-layout-mode=dark] .form-switch .form-check-input:focus {
		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23ced4da'/%3e%3c/svg%3e") !important;
	}
	.form-switch-success .form-check-input:checked {
	    background-color: #00d230;
	    border-color: #00d230 !important;
	}
	#form-filemanager-div input[readonly] {
		background: #412b2b !important;
	}
	.iti__country-list {
		border: unset !important;
		box-shadow: unset !important;
	}
	.form-check-info .form-check-input:checked {
	    background-color: #e00702;
	    border-color: #e00702;
	}
	#search_result, #search_result1 {
		background: #212121;
    	box-shadow: 0 3px 9px 0 rgb(0 0 0 / 15%);
	}
	#search_result a, #search_result1 a {
    	color: #f9f9f9;
    }
    #search_result a:hover, #search_result1 a:hover {
    	color: #fff;
    	background-color: #e00702 !important;
    }
    .form-check-input {
		background: #3a3a3a;
	    border-color: #3a3a3a !important;
	    background-repeat: no-repeat;
	    background-image: url('<?php echo $base_url; ?>/img/switch.svg') !important;
	}
	.tick-input {
		background: #fff !important;
		background-image: unset !important;
	}
	.tick-input:checked {
		background: #e00702 !important;
		border-color: #e00702 !important;
	}
	.form-select {
        background-image: url('<?php echo $base_url; ?>/img/down-arrow.png') !important;
        background-repeat: no-repeat !important;
        background-position: right 10px center !important;
        background-size: 15px !important;
		background-color: #3a3a3a;
		/* height: 40px;
		padding: 7px 26px 7px 10px;
		font-size: 13px; */
    }
	.form-control::-webkit-calendar-picker-indicator {
		/* color: #fff; */
		filter: brightness(0) invert(1);
    }
	.select2-container--default .select2-selection--multiple {
		background-color: #3a3a3a;
		border: 1px solid #3a3a3a;
		min-height: 40px;
	}
	.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
		color: #fff;
		border-right: 1px solid #8b8b8b;
	}
	.select2-container--default .select2-selection--multiple .select2-selection__choice {
		background-color: #707070;
		border: 1px solid #707070;
		margin-top: 7px;
	}
	.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover, .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:focus {
		background-color: #707070;
		color: #d7d6d6;
	}

    /*TABLE SECTION*/
    .dt-buttons a.dt-button, .dt-buttons button.dt-button, .dt-buttons div.dt-button, .dt-buttons input.dt-button {
	   	color: #fff;
	    background: #191919;
	    border-color: #191919;
	    transition: all 0.3s;
	}
	.dt-buttons a.dt-button:hover, .dt-buttons button.dt-button:hover, .dt-buttons div.dt-button:hover, .dt-buttons input.dt-button:hover {
	    border-color: #4c4c4c !important;
	    background: #4c4c4c !important;
	}
	.table-bordered>:not(caption)>* {
	    border-color: #ffffff08;
	}
	div.dataTables_wrapper div.dataTables_paginate {
		margin: 4px 0 0 0 !important;
	}
	/* .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
		border: 1px solid #0000000d !important;
		color: #fff !important;
		background: #fff !important;
	}
	.dataTables_wrapper .dataTables_paginate .ellipsis {
		display: inline-block;
		border: 1px solid #ededed;
		padding: 7.31px 10px !important;
	}
	.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover  {
		color: #fff !important;
		background: #212529 !important;
		border:1px solid #0000000d !important;
		border-radius: 0;
	}
	.dataTables_wrapper .dataTables_paginate .paginate_button {
		margin-left: unset !important;
		border: 1px solid #ededed !important;
	}
	.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
		border: 1px solid #000 !important;
		background: #212529 !important;
	} */
	.page-item.active .page-link{
		color: #fff;
		background-color: #d1b365!important;
		border-color: #d1b365;
	} 
	.page-link:hover {
	    background-color: #d1b365;
	    border-color: #d1b365;
	}
	.page-item.disabled .page-link, .page-link {
		color: #d9d9d9;
		background-color: #3a3a3a;
	}
	#table-div th {
		color: #fff;
		background: #0f0f0f;
	}
	#table-div td {
		color: #f9f9f9;
		background: #212121;
	}
	#tb-link {
		color: #ff423d;
		transition: all 0.3s;
	}
	#tb-link:hover {
		text-decoration: underline !important;
	}
	.note-color-1 {
		color: #737c91;
	}
	#tb-title, #dpc-title {
		color: #fff;
	}
	.tb-status {
		color: #fff;
	}
	#tb-status-1 {
		background: #00d230;
	}
	#tb-status-2 {
		background: #ff4d4d;
	}
	#tb-status-3 {
		background: #e18d00;
	}
	#tb-time-p {
		color: #9c9c9c;
	}
	#rs-icon {
	    color: #fff;
	    background: #55719b;
	}
	#dpc-icon {
		color: #fff;
	}
	#dpc-main {
		color: #fff;
		background: #ff4d4d;
	}
	#dpc-profile {
		color: #00b7ff;
	}
	.tb-ac-btn:hover {
    	color: #fff;
    }
    #tb-ac-btn-1 {
		/* border: 2px solid rgb(0 183 255 / 50%);
    	background: #00b7ff; */
    	/* color: #00b7ff; */
		background: #106dff;
		box-shadow: inset 0 2px 1px -1px rgb(255 255 255 / 20%), inset 0 -2px 1px -1px rgb(0 0 0 / 20%), 2px 2px 2px rgb(0 0 0 / 20%), 1px 1px 15px #106dffc4;
    }
	/* #tb-ac-btn-1:hover {
		box-shadow: inset 0 0 0.5em 0 #00b7ff, 0 0 0.5em 0 #00b7ff;
		border: 2px solid #00b7ff;
	} */
    #tb-ac-btn-2 {
		/* border: 2px solid rgb(255 77 77 / 50%);
    	background: #ff4d4d; */
		/* color: #ff4d4d; */
		background: #ff4d4d;
		box-shadow: inset 0 2px 1px -1px rgb(255 255 255 / 20%), inset 0 -2px 1px -1px rgb(0 0 0 / 20%), 2px 2px 2px rgb(0 0 0 / 20%), 1px 1px 15px #ff4d4d63;
    }
	/* #tb-ac-btn-2:hover {
		box-shadow: inset 0 0 0.5em 0 #ff4d4d, 0 0 0.5em 0 #ff4d4d;
		border: 2px solid #ff4d4d;
	} */
    #tb-ac-btn-3 {
		/* border: 2px solid rgb(99 89 201 / 50%);
    	background: #6259ca; */
    	/* color: #6259ca; */
		background: #6259ca;
		box-shadow: inset 0 2px 1px -1px rgb(255 255 255 / 20%), inset 0 -2px 1px -1px rgb(0 0 0 / 20%), 2px 2px 2px rgb(0 0 0 / 20%), 1px 1px 15px hsl(245deg 52% 57% / 77%);
    }
    /* #tb-ac-btn-3:hover {
		box-shadow: inset 0 0 0.5em 0 #6259ca, 0 0 0.5em 0 #6259ca;
		border: 2px solid #6259ca;
    } */
    #tb-ac-btn-4{
		/* border: 2px solid rgb(0 210 48 / 50%);
    	background: #00d230; */
    	/* color: #00d230; */
		background: #ef2323;
		box-shadow: inset 0 2px 1px -1px rgb(255 255 255 / 20%), inset 0 -2px 1px -1px rgb(0 0 0 / 20%), 2px 2px 2px rgb(0 0 0 / 20%), 1px 1px 15px #ef232373;
    }
    /* #tb-ac-btn-4:hover{
		box-shadow: inset 0 0 0.5em 0 #00d230, 0 0 0.5em 0 #00d230;
		border: 2px solid #00d230;
    } */
    #tb-ac-btn-5 {
		/* border: 2px solid rgb(225 141 0 / 50%);
		background: #e18d00; */
		/* color: #e18d00; */
		background: #e18d00;
		box-shadow: inset 0 2px 1px -1px rgb(255 255 255 / 20%), inset 0 -2px 1px -1px rgb(0 0 0 / 20%), 2px 2px 2px rgb(0 0 0 / 20%), 1px 1px 15px #e18d0073;
    }
    /* #tb-ac-btn-5:hover {
		box-shadow: inset 0 0 0.5em 0 #e18d00, 0 0 0.5em 0 #e18d00;
		border: 2px solid #e18d00;
    } */
    #tb-ac-btn-6 {
		background: #e18d00;
    }
    .dataTables_length .form-select {
    	color: #fff;
    	background-color: #3a3a3a;
    	border-color: #3a3a3a;
    	background-image: url('<?php echo $base_url; ?>/img/down-arrow.png');
    }
    .btn-soft-secondary:active, .btn-soft-secondary:focus, .btn-soft-secondary:hover {
	    background-color: #d1b365;
	}
	.tb-label-red {
	    color: #fff;
		background: #ff4d4d;
	}
	.tb-label-green {
	    color: #fff;
		background: #00d230;
	}
	.tb-label-grey {
	    color: #fff;
		background: #787878;
	}
	.tb-label-yellow {
		color: #fff;
		background: #e18d00;
	}
	.tb-label-red {
		color: #fff;
		background: #ff4d4d;
	}
	.tb-label-purple, #dpc-selected {
		color: #fff;
		background: #6259ca;
	}
	#tb-red-p, .tb-red-p {
		color: #ff4d4d;
	}
	#tb-green-p, .tb-green-p  {
		color: #56F000;
		/* color: #00d230; */
	}
	#tb-blue-p, .tb-blue-p  {
		color: #2DCCFF;
	}
	#tb-yellow-p, .tb-yellow-p  {
		color: #FCE83A;
	}
	#tb-orange-p, .tb-orange-p  {
		color: #FFB302;
	}
	#tb-total {
		color: #fff;
		background: #ff423d;
	}
	#tb-contributor-box {
		border-bottom: 1px dashed #ffffff26;
	}
	#tb-contributor-box:last-child {
		border-bottom: unset;
	}
	#tb-contributor-title, div.dataTables_wrapper div.dataTables_info {
		color: #d9d9d9;
	}
	#tb-contributor-p {
		color: #f9f9f9;
	}
	.tb-title-td {
		background: #3a3a3a !important;
	}
	#check-div input {
		background: #fff;
		border-color: #fff;
	}
	#check-div input:checked {
		background: #fa501c;
		border-color: #fa501c;
	}
	.btn-soft-secondary {
		color: #fff;
	    background-color: #3a3a3a;
	    border-color: #3a3a3a;
	}
	.choices[data-type*=select-one]:after {
		color: #fff;
	}
	.choices__list--dropdown .choices__item {
    	color: #f9f9f9;
    }
	/* table.table-bordered.dataTable th, table.table-bordered.dataTable td {
		border-color: #ced4da45;
	} */
	.dataTables_wrapper.no-footer .dataTables_scrollBody {
		border-bottom: unset !important;
		/* border-bottom: 1px solid #ced4da45; */
	}
	div.dtfc-left-top-blocker, div.dtfc-right-top-blocker {
		background-color: unset !important;
	}
	.pagination {
		align-items: center !important;
	}

	/*FILTER SECTION*/
	#tb-border-line {
		border-bottom: 1px dashed #ffffff3b;
	}
	.flatpickr-calendar {
	    background: #191919;
	    box-shadow: 0 3px 9px 0 rgb(28 28 51 / 15%);
	}
	.flatpickr-day.today {
		border-color: #d1b365;
	}
	.flatpickr-day.endRange.startRange+.endRange:not(:nth-child(7n+1)), .flatpickr-day.selected.startRange+.endRange:not(:nth-child(7n+1)), .flatpickr-day.startRange.startRange+.endRange:not(:nth-child(7n+1)), .flatpickr-day.inRange {
	    box-shadow: -10px 0 0 #d1b365;
	}
	.flatpickr-months, .flatpickr-weekdays {
		background-color: #d1b365;
	}
	.flatpickr-day.inRange, .flatpickr-day.nextMonthDay.inRange, .flatpickr-day.nextMonthDay.today.inRange, .flatpickr-day.nextMonthDay:focus, .flatpickr-day.nextMonthDay:hover, .flatpickr-day.prevMonthDay.inRange, .flatpickr-day.prevMonthDay.today.inRange, .flatpickr-day.prevMonthDay:focus, .flatpickr-day.prevMonthDay:hover, .flatpickr-day.today.inRange, .flatpickr-day:focus, .flatpickr-day:hover {
		background: #d1b365;
		border-color: #d1b365;
	}
	.flatpickr-day.endRange, .flatpickr-day.endRange.inRange, .flatpickr-day.endRange.nextMonthDay, .flatpickr-day.endRange.prevMonthDay, .flatpickr-day.endRange:focus, .flatpickr-day.endRange:hover, .flatpickr-day.selected, .flatpickr-day.selected.inRange, .flatpickr-day.selected.nextMonthDay, .flatpickr-day.selected.prevMonthDay, .flatpickr-day.selected:focus, .flatpickr-day.selected:hover, .flatpickr-day.startRange, .flatpickr-day.startRange.inRange, .flatpickr-day.startRange.nextMonthDay, .flatpickr-day.startRange.prevMonthDay, .flatpickr-day.startRange:focus, .flatpickr-day.startRange:hover {
		background: #d1b365;
		border-color: #d1b365;
	}
	#filter-btn-div a, #filter-btn-div button {
		border: unset;
	}
	.flatpickr-day {
		color: #fff;
	}
	.flatpickr-weekdays {
		border-bottom: unset;
	}

	/*MODAL SECTION*/
	.modal-content {
		border: unset;
	}
	#modal-title {
		color: #fff;
	}
	#modal-p {
		color: #f3f3f3;
	}
	#md-border-line {
		border-top: 1px dashed #ffffff26;
	}
	#md-qrcode-title {
		color: #fff;
	}
	.modal-dialog:not(.modal-dialog-scrollable) .modal-header {
	    border-bottom: 1px solid #ffffff26;
	}
	#modal-btn-div {
		border-top: unset;
	}
	.input-group-border-top {
	    border-top: 1px solid #ffffff26;
	}
	.input-group-border-bottom {
	    border-bottom: 1px solid #ffffff26;
	}
	#md-symbol-div {
		color: #f9f9f9;
	}
	#md-symbol-div .color-symbol {
		color: #e00702;
	}
	.btn-close {
		color: #fff;
		filter: brightness(0) invert(1);
	}

	/*HEADER SECTION*/
	.header-d {
		background: #070707 !important;
		backdrop-filter: blur(20px);
		/* box-shadow: 0px 10px 30px rgb(0 0 0 / 5%); */
		border-bottom: 1px solid #f7c163;
		box-shadow: 9px 0px 8px 0px #f7c163bf;
	}
	.btn-ghost-secondary:active, .btn-ghost-secondary:focus, .btn-ghost-secondary:hover {
	    color: #d1b365;
	    background-color: rgb(255 255 255 / 5%);
	}
	.bg-pattern {
		background: url(../assets/images/modal-bg.png);
		background-color: #191919 !important;
	}
	.text-secondary {
	    color: #4be8d4 !important;
	}
	.nav-tabs-custom .nav-item .nav-link.active {
	    color: #fff;
	}
	.dropdown-head .nav-tabs-custom .nav-link.active {
	    background-color: #ffffff26;
	}
	#notification-title {
		color: #fff;
	}
	#notification-p {
		color: #d4d4d4;
	}
	#notification-time {
		color: #e00702;
	}
	.topbar-user {
	    background-color: unset;
	}
	#hd-username {
		color: #fff;
	}
	#hd-position {
		color: #d1b365;
	}
	.hd-wallet-active {
    	color: #fff;
		background: rgb(255 255 255 / 15%) !important;
	}
	.hd-wallet-active i {
    	color: #fff !important;
	}
	.header-item, .btn-ghost-secondary {
		color: #fff;
	}
	.hamburger-icon span {
		background: #fff  !important;
	}
	.dropdown-item {
		color: #878a99;
	}

	/*FOOTER SECTION*/
	#footer-p {
		color: #f9f9f9;
	}

	/*MOBILE MENU SECTION*/
    @media (max-width: 991px){
    	#mm-section {
			background: #191919b3;
			border-image: linear-gradient(to right, #e00702, #ff423d);
			border-image-slice: 1;
		}
		#mm-section ul li a #mm-icon {
			color: #fff;
		}
		#mm-section ul li a #mm-text {
			color: #f9f9f9;
		}
		#mm-indicator {
			background: linear-gradient(45deg, #e00702, #ff423d);
		}
    }

/***** HOMEPAGE *****/

    /*FEATURES SECTION*/
    #ft-title {
        color: #191919d9;
    }
    #ft-box {
		background: linear-gradient(134deg, #ffffffd9 58%, transparent);
		box-shadow: 0 3px 9px 0 rgb(28 28 51 / 15%);
	}
	#ft-p {
		color: #191919d9;
		text-shadow: 2px 2px 6px #ffffff33;
	}
	#ft-icon {
		color: #000000d9;
		background: #ffffff36;
		box-shadow: 6px 5px 20px -2px rgb(0 23 82 / 8%);
	}
    .ft-icon-1 {
    	box-shadow: 0 5px 10px rgb(0 0 0 / 20%);
        background: linear-gradient(to bottom right, #ff423d 0%, #e00702 100%);
    }
    .ft-icon-2 {
    	box-shadow: 0 5px 10px rgb(0 0 0 / 20%);
        background: linear-gradient(to bottom right, #ff423d 0%, #e00702 100%);
    }
    .ft-icon-3 {
    	box-shadow: 0 5px 10px rgb(0 0 0 / 20%);
        background: linear-gradient(to bottom right, #ff423d 0%, #e00702 100%);
    }
    .ft-icon-4 {
    	box-shadow: 0 5px 10px rgb(0 0 0 / 20%);
        background: linear-gradient(to bottom right, #ff423d 0%, #e00702 100%);
    }

    /*LINE CHART / NETWORK REPORT SECTION*/
    #nr-title-div, #er-title-div {
    	border-bottom: 1px solid #ffffff26;
    }
    #nr-div {
    	background: linear-gradient(170deg, #ff423d, #e00702);
    }
    #nr-sub-title {
        color: #fff;
    }
    #nr-info-title {
        color: #111;
        background: #fff;
    }
    #nr-info-number {
        color: #fff;
    }
    #cmb-div {
    	background: linear-gradient(170deg, #256aaf, #412b2b);
    }
    #cmb-sub-title {
        color: #fff;
    }
    #cmb-p {
        color: #f9f9f9;
    }

    /*EXCHANGE RATES SECTION*/
    #er-title {
    	color: #fff;
    }

/***** USER PROFILE PAGE  *****/
	#bg-img-div .avatar-title {
		color: #fff !important;
		background: linear-gradient(84deg,#e00702 30%,#ff423d 100%) !important;
	}
	#bg-img-div .avatar-title i {
		color: #fff !important;
	}
	#bg-name {
        color: #fff;
    }
    #bg-email {
    	color: #f9f9f9;
    }
    #bg-poi, #att-green {
        color: #00d230;
    }
    #bg-since {
        color: #c4c4c4;
    }
    #bg-ft-title {
        color: #c4c4c4;
    }
    #bg-ft-p {
        color: #fff;
    }
    #bg-ft-icon {
        color: #fff;
    }
    .bg-ft-icon-1 {
        box-shadow: 0 5px 10px rgb(0 0 0 / 20%);
    	background: linear-gradient(to bottom right, #ff423d 0%, #e00702 100%);
    }
    .bg-ft-icon-2 {
        box-shadow: 0 5px 10px rgb(0 0 0 / 20%);
    	background: linear-gradient(to bottom right, #ff423d 0%, #e00702 100%);
    }
    .bg-ft-icon-3 {
        box-shadow: 0 5px 10px rgb(0 0 0 / 20%);
    	background: linear-gradient(to bottom right, #ff423d 0%, #e00702 100%);
    }
    .nav-pills .nav-link.active,.nav-pills .nav-link:hover {
        color: #fff !important;
    }
    .profile-nav.nav-pills .nav-link::before {
        background-color: unset;
        border-bottom: 3px solid #e00702;
    }
    #att-name {
        color: #e00702;
    }
    #att-time {
        color: #d9d9d9;
    }
    #att-p {
        color: #f9f9f9;
    }
    #bg-position-div {
    	color: #fff;
    }
/***** USER PROFILE PAGE - Member Profile Info  *****/
	#profile-img-div .avatar-title {
		color: #fff !important;
		background: linear-gradient(to right, #0092ce, #00b5ff) !important;
	}
	#profile-img-div .avatar-title i {
		color: #fff !important;
	}
	#bg-name {
        color: #fff;
    }
    #bg-email {
    	color: #f9f9f9;
    }
    #bg-poi, #att-green {
        color: #00d230;
    }
    #bg-since {
        color: #c4c4c4;
    }
    #bg-ft-title {
        color: #c4c4c4;
    }
    #bg-ft-p {
        color: #fff;
    }
    #bg-ft-icon {
        color: #fff;
    }
    .bg-ft-icon-1 {
        box-shadow: 0 5px 10px rgb(0 0 0 / 20%);
    	background: linear-gradient(to bottom right, #ff423d 0%, #e00702 100%);
    }
    .bg-ft-icon-2 {
        box-shadow: 0 5px 10px rgb(0 0 0 / 20%);
    	background: linear-gradient(to bottom right, #ff423d 0%, #e00702 100%);
    }
    .bg-ft-icon-3 {
        box-shadow: 0 5px 10px rgb(0 0 0 / 20%);
    	background: linear-gradient(to bottom right, #ff423d 0%, #e00702 100%);
    }
    .nav-pills .nav-link.active,.nav-pills .nav-link:hover {
        color: #fff !important;
    }
    .profile-nav.nav-pills .nav-link::before {
        background-color: unset;
        border-bottom: 3px solid #e00702;
    }
    #att-name {
        color: #e00702;
    }
    #att-time {
        color: #d9d9d9;
    }
    #att-p {
        color: #f9f9f9;
    }
    #bg-position-div {
    	color: #fff;
    }

/***** PAST TRANS PAGE  *****/
	.nav-tabs .nav-link {
		margin-bottom: 0px;
		background: transparent;
		border-radius: unset;
	}
	.nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
		background: #ffffff29;
	}
	.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
		background-color: #ffffff29;
		border: none;
	}
	.nav-customs.nav .nav-link {
		background-color: #1a1a1a;
	}
	.nav-customs.nav .nav-link::after, .nav-customs.nav .nav-link::before {
		background-color: #1a1a1a;
	}
	.nav-customs.nav .nav-link.active, .nav-customs.nav .nav-link.active:after, .nav-customs.nav .nav-link.active:before {
		background-color: #d1b365;
		color: #fff;
	}
	.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
		background: linear-gradient(73deg,#755621 0,#d1b365 100%);
	}

/***** NETWORK PAGE *****/
	#pj-name, #dp-name {
        color: #d9d9d9;
    }
    #pj-name span, #dp-name span {
        color: #fff;
    }
    #tree .open:before {
        border-left: 1px dashed #ffffff26;
    }
    #tree .open:after {
        border-top: 1px dashed #ffffff26;
    }
    #nd-box {
        color: #fff;
        background: #e00702;
    }
    #nd-box:hover {
        color: #fff;
        background: #ff423d;
    }
    .end #nd-box:hover {
        color: #fff;
        background: #e00702;
    }
    #tree a, #pj-name a, #dp-name a {
        color: #ff423d;
    }

/***** COMMISSION PAYOUT PAGE *****/
	#cmm-filter-div span {
		color: #fff;
		background: #fa501c;
	}
	.note-red {
		color: #ff4d4d;
	}
	.note-green {
		color: #00d230;
	}
	.note-orange {
		color: #e18d00;
	}
	.note-grey {
		color: #d9d9d9;
	}

/***** CONFIGURATION PAGE *****/
	#stt-tab-p {
        color: #fff;
    }
    #stt-red-p {
    	color: #ff4d4d;
    }
    .green {
    	color: #00d230 !important;
    }
    .red {
    	color: #ff4d4d !important;
    }

/***** EDIT EMAIL TEMPLATE PAGE *****/
    #et-p {
    	color: #f9f9f9;
    }

/***** FUNDS PLAN *****/
	#plan-div {
        border-bottom: 1px dashed #ffffff26;
    }
    #plan-title {
        color: #fff;
    }
    #roi-title {
        color: #ff423d;
    }
    #inv-p {
        color: #f9f9f9;
    }
    #prd-p {
        color: #9c9c9c;
    }
    #plan-date {
        color: #d9d9d9;
    }
    #plan-date2 {
        color: #fff;
    }
</style>