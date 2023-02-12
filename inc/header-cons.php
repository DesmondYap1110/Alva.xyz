<script src="<?php echo $base_url; ?>/assets/js/layout.js"></script>
<link href="<?php echo $base_url; ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $base_url; ?>/assets/css/icons.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $base_url; ?>/assets/css/app.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $base_url; ?>/assets/css/custom.min.css" rel="stylesheet" type="text/css">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $base_url; ?>/img/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $base_url; ?>/img/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $base_url; ?>/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $base_url; ?>/img/apple-touch-icon-57x57.png">
<link rel="icon" sizes="32x32" href="<?php echo $base_url; ?>/img/favicon-32x32.png">
<link rel="icon" sizes="192x192" href="<?php echo $base_url; ?>/img/favicon-192x192.png">
<meta name="theme-color" content="#2F0B39">
<style type="text/css">
    /*BTN SECTION*/
    .gnlbtn {
        font-size: 14px;
        font-weight: 600;
        line-height: 1.4;
        background: unset;
        padding: 22px 63px;
        text-align: center;
        position: relative;
        letter-spacing: 1px;
        display: inline-block;
    }
    .gnlbtn:before, .gnlbtn:after {
        content: '';
        inset: -3px;
        position: absolute;
        transition: all 0.5s;
    }
    .gnlbtn:hover:after {
        filter: blur(10px);
    }
    .gnlbtn span {
        top: 0;
        left: 0;
        z-index: 10;
        width: 100%;
        height: 100%;
        display: flex;
        overflow: hidden;
        position: absolute;
        align-items: center;
        justify-content: center;
    }
    .gnlbtn span:before {
        content: '';
        top: 0;
        left: -50%;
        width: 100%;
        height: 100%;
        position: absolute;
        transition: all 0.5s;
        transform: skew(25deg);
        background: transparent;
    }
    #gnlbtncl2 {
        color: #fff;
    }
    #gnlbtncl2:before, #gnlbtncl2:after {
        background: linear-gradient(45deg, #ffffff, #484848, #ffffff);
    }
    #gnlbtncl2 span {
        background: #212121;
    }
    #gnlbtncl2 span:hover:before {
        background: rgba(255, 255, 255, 0.075);
    }
    #gnl-btn > span {
        overflow: hidden;
    }
    #gnl-btn span {
        display: block;
        position: relative;
    }
    #gnl-btn:hover > span > span {
        animation: MoveUpInitial 0.2s forwards, MoveUpEnd 0.2s forwards 0.2s;
    }
    @keyframes MoveUpInitial {
        to {
            transform: translate3d(0,-105%,0);
        }
    }
    @keyframes MoveUpEnd {
        from {
            transform: translate3d(0,100%,0);
        }
        to {
            transform: translate3d(0,0,0);
        }
    }

    /*ANIMATED TEXT SECTION*/
    .fn_animated_text .letter {
        opacity:0;
        transform:translate(-300px,0) scale(0);
        display:inline-block;
    }
    @keyframes FrenifyLetterAnimation {
        60%,80% {
            transform:translate(20px,0) scale(1);
            color:rgba(255,255,255,.8);
        }
        99% {
            transform:translate(0) scale(1.2);
            color:#ffef00;
        }
        100% {
            transform:translate(0) scale(1);
            opacity:1;
            color:rgba(255,255,255,.8);
        }
    }
    @keyframes FrenifyLetterAnimationblack {
        60%,80% {
            transform:translate(20px,0) scale(1);
            color:#000;
        }
        99% {
            transform:translate(0) scale(1.2);
            color:#ffef00;
        }
        100% {
            transform:translate(0) scale(1);
            opacity:1;
            color:#000;
        }
    }

	/*GENERAL SECTION*/
	body {
		background-color: #07080a;
	}
	::selection {
        color: #fff;
        background: #008bff;
    }
    ::-webkit-scrollbar {
        width: 3px;
    }
    ::-webkit-scrollbar-track, ::-webkit-scrollbar-thumb {
        border-radius: 10px;
    }
    ::-webkit-scrollbar-track {
        background: rgb(0 0 0 / 30%);
    }
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(to right,#755621 0,#d1b365 100%);
    }
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(to right,#755621 0,#d1b365 100%);
    }
	#form-section {
		z-index: 2;
		height: 100vh;
		display: flex;
		padding: 3rem 0;
    	position: relative;
		align-items: center;
		justify-content: center;
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		background-image: url('<?php echo $base_url; ?>/img/bg/bg14.jpg');
	}
	#form-section:before {
	    content: "";
	    position: absolute;
	    left: 0px;
	    top: 0px;
	    height: 100%;
	    width: 100%;
	    z-index: -1;
	    background: rgb(2 0 30 / 20%);
	}
	#logo-div {
		text-align: center;
		margin-bottom: 15px;
	}
	#logo-div img {
		width: 180px;
		height: auto;
	}
	#form-img-div {
		text-align: center;
		margin-bottom: 1.5rem;
	}
	#form-img-div img {
		width: 150px;
		height: auto;
	    border-radius: 50%;
	}
	#form-div {
		padding: 40px 30px;
		margin-top: 1.5rem;
		position: relative;
		backdrop-filter: blur(10px);
		background: #0000003b;
		/* border: 2px solid transparent;
		box-shadow: 0 3px 15px 3px rgb(155 155 154 / 50%);
		border-image: linear-gradient(to right, #9b9b9a, #fff);
		border-image-slice: 1; */
		border-radius: 10px;
	}
	#form-title-div {
		text-align: center;
		margin-bottom: 1.5rem;
	}
	#form-title {
		color: #fff;
		font-size: 24px;
		font-weight: 600;
		line-height: 1.4;
		margin-bottom: 5px;
	}
	#form-p {
		color: #f9f9f9;
		font-size: 13px;
		line-height: 1.4;
		margin-bottom: 0;
	}
	#form-p b {
		color: #00b7ff;
	}
	.input-div {
		margin-bottom: 20px;
	}
	.input-div label {
		color: #f7c163;
		font-size: 13px;
		margin-bottom: 5px;
	}
	.input-div .form-control, .select2-container--default .select2-selection--single, .select2-container--default .select2-search--dropdown .select2-search__field {
	    color: #fff;
    	background: rgb(255 255 255 / 15%);
	}
	.input-div .form-control, .select2-container--default .select2-selection--single {
	    height: 40px !important;
	    border: unset !important;
	    font-size: 13px;
	    padding: 0 10px;
	    line-height: 1.4;
	    transition: 0.3s;
		border-bottom: 1px solid #ffffff26 !important;
		background: unset;
		border-radius: unset;
		letter-spacing: 2px;
		padding: 0;
		padding-bottom: 10px;
	}
	.select2-container--default .select2-selection--single .select2-selection__rendered {
		color: #fff !important;
		padding: 0 !important;
    	line-height: 40px !important;
	}
	.select2-container--default .select2-selection--single .select2-selection__arrow {
		top: 0 !important;
	    height: 40px !important;
	}
	.form-control:disabled, .form-control[readonly] {
		background: rgb(255 255 255 / 15%) !important;
    	color: #f9f9f9 !important;
	}
	.select2-container--default .select2-search--dropdown {
		background: linear-gradient(58deg, #151b24, #1d2634) !important;
	}
	.select2-dropdown {
		border: unset !important;
    	background: linear-gradient(58deg, #151b24, #1d2634) !important;
    }
    .select2-container--default .select2-results__option--selected, .select2-container--default .select2-results__option[aria-selected=true]:hover, .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
	    background-color: #00b7ff !important;
	}
	.select2-container--open .select2-selection--single .select2-selection__arrow b {
		border-color: transparent transparent #ffffff transparent!important;
	}
	.input-div .file-input {
    	line-height: 40px;
	}
	#input-btn-div button, #input-btn-div a, #secure-btn-div button, #secure-btn-div a {
		width: 100%;
	}
	.alert p {
		margin-bottom: 0;
	}
	#link-div {
		margin-bottom: 30px;
	}
	#link-p, #link-p1 {
		font-size: 13px;
		line-height: 1.4;
		margin-bottom: 5px;
	}
	#link-p {
		color: #f9f9f9;
	}
	#link-p a, .form-check-label a {
		color: #ffffff;
		transition: all 0.3s;
		text-decoration: underline !important;
	}
	#link-p a:hover, .form-check-label a:hover {
		text-decoration: underline !important;
	}
	.form-check-input {
		margin-top: 0.1em;
		background-color: rgb(255 255 255 / 15%);
    	border-color: rgb(255 255 255 / 15%);
	}
	.form-check-input:checked {
		background-color: #d1b365;
    	border-color: #d1b365;
	}
	.form-check-label {
		font-size: 13px;
	}
	#link-div p:last-child {
		margin-bottom: 0;
	}
	#note-p {
		display: block;
		font-size: 11px;
		margin-top: 5px;
		line-height: 1.4;
		margin-bottom: 0;
	}
	.note-color-1, .note-color-2 {
		color: #d4d4d4;
	}
	.form-control:disabled {
		cursor: not-allowed;
	}
	.select2-container--default .select2-selection--single {
		background-color: unset !important;
	}
	#password_contain {
        display:none;
        padding: 15px;
        border-radius: 5px;
        position: relative;
        margin-bottom: 0.5rem;
        background: #ffffff24;
    }
    #pw-ct-title {
    	color: #f9f9f9;
        font-size: 13px;
        font-weight: 500;
        line-height: 1.4;
        margin-bottom: 0.5rem;
        padding-left: 0 !important;
    }
    #password_contain .invalid, #password_contain .valid {
        font-size: 12px;
        line-height: 1.4;
        margin-left: 5px;
        margin-bottom: 5px;
    }
    #password_contain p:last-child {
        margin-bottom: 0;
    }
    .valid:before {
        position: relative;
        left: -5px;
        content: "✔";
    }
    .invalid:before {
        position: relative;
        left: -5px;
        content: "✖";
    }
    .valid {
        color: #20b843;
    }
    .invalid {
        color: #ff4444;
    }
	.pw-ct-p {
		font-size: 11px;
		line-height: 1.4;
		margin-bottom: 5px;
	}
	.pw-ct-p:last-child {
		margin-bottom: 0;
	}
	#psw-div {
		position: relative;
	}
	#psw-visable-icon {
	    top: 0;
	    right: 10px;
	    height: 100%;
	    display: flex;
	    color: #d1b365;
	    align-items: center;
	    cursor: pointer;
	    position: absolute;
	}
	input:-webkit-autofill, input:-webkit-autofill:hover,  input:-webkit-autofill:focus,  input:-webkit-autofill:active {
		background: -webkit-linear-gradient(#fff, #ffffff) !important;
		-webkit-background-clip: text !important;
		-webkit-text-fill-color: transparent;
	}
	@media (min-width: 1200px) {
		.container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
			max-width: 1400px !important;
		}
	}
	@media(max-width: 991px) and (min-width: 820px){
		.container {
			height: fit-content;
		}
		body {
			background-color: #0c0c0a;
			background-repeat: no-repeat;
			background-size: 100%;
			background-position: center bottom;
			background-image: url('<?php echo $base_url; ?>/img/bg-mb2.jpg');
			background-attachment: fixed;
		}
		#mb-div {
			margin-left: auto;
			margin-right: auto;
			margin-top: 0;
		}
		/* #form-section {
			padding: 10rem 0 0 0;
			align-items: unset;
			justify-content: unset;
			background-color: unset;
			background-repeat: unset;
			background-size: unset;
			background-position: unset;
			background-image: unset;
			background-attachment: unset;
			height: fit-content;
		} */
		#form-section:before {
			display: none;
		}
		/* #logo-div {
			margin-bottom: 0;
		}
		#logo-div img {
			width: 220px;
		} */
		#form-div {
			margin-top: -20px !important;
    	}
		#form-title-div {
		    margin-bottom: 1.5rem;
		}
		#form-title {
			font-size: 24px;
		}
		#form-p {
			font-size: 13px;
		}
		.input-div {
			margin-bottom: 30px;
		}
		.input-div label {
			display: none;
		    font-size: 11px;
		}
		.input-div .form-control, .select2-container--default .select2-selection--single {
			height: 35px !important;
			font-size: 11px;
			border-bottom: 1px solid #ffffff26 !important;
			background: unset;
			border-radius: unset;
			letter-spacing: 2px;
			padding: 0;
			padding-bottom: 10px;
		}
		.select2-container--default .select2-selection--single .select2-selection__rendered {
	    	line-height: 35px !important;
		}
		.select2-container--default .select2-selection--single .select2-selection__arrow {
		    height: 35px !important;
		}
		#general-btn, #second-btn, #third-btn {
		    font-size: 11px;
		}
		#link-p, #link-p1 {
		    font-size: 10px;
		    margin-bottom: 3px;
		}
		#check-div {
			display: flex;
		}
		.form-check-label {
			width: 100%;
			margin-left: 8px;
			font-size: 10px;
		}
		#note-p {
		    font-size: 9px;
		}
		#pw-ct-title {
    		font-size: 11px;
    	}
    	.pw-ct-p {
		    font-size: 9px;
		}
	    #password_contain .invalid, #password_contain .valid {
	        font-size: 10px;
	    }
		.form-check-label {
			font-size: 12px;
		}
		#check-div {
			margin-bottom: 30px;
		}
		#link-p, #link-p1 {
			font-size: 12px;
		}
		.input-div .form-control, .select2-container--default .select2-selection--single {
			font-size: 14px;
		}
		#link-div {
			margin-bottom: 15px; 
		}
	}
	@media (max-width: 819px){
		.container {
			height: fit-content;
		}
		body {
			background-color: #0c0c0a;
			background-repeat: no-repeat;
			background-size: 100%;
			background-position: center bottom;
			background-image: url('<?php echo $base_url; ?>/img/bg-mb2.jpg');
			background-attachment: fixed;
		}
		#mb-div {
			margin-left: auto;
			margin-right: auto;
			margin-top: 0;
		}
		#form-section:before {
			display: none;
		}
		#logo-div img {
			width: 160px;
		}
		#form-title-div {
		    margin-bottom: 1.5rem;
		}
		#form-title {
		    font-size: 18px;
		}
		#form-p {
		    font-size: 10px;
		}
		.input-div {
			margin-bottom: 30px;
		}
		.input-div label {
			display: none;
		    font-size: 11px;
		}
		.input-div .form-control, .select2-container--default .select2-selection--single {
			height: 35px !important;
			font-size: 11px;
			border-bottom: 1px solid #ffffff26 !important;
			background: unset;
			border-radius: unset;
			letter-spacing: 2px;
			padding: 0;
			padding-bottom: 10px;
		}
		.select2-container--default .select2-selection--single .select2-selection__rendered {
	    	line-height: 35px !important;
		}
		.select2-container--default .select2-selection--single .select2-selection__arrow {
		    height: 35px !important;
		}
		#general-btn, #second-btn, #third-btn {
		    font-size: 11px;
		}
		#link-p, #link-p1 {
		    font-size: 10px;
		    margin-bottom: 3px;
		}
		#check-div {
			display: flex;
		}
		.form-check-label {
			width: 100%;
			margin-left: 8px;
			font-size: 10px;
		}
		#note-p {
		    font-size: 9px;
		}
		#pw-ct-title {
    		font-size: 11px;
    	}
    	.pw-ct-p {
		    font-size: 9px;
		}
	    #password_contain .invalid, #password_contain .valid {
	        font-size: 10px;
	    }
		#check-div {
			margin-bottom: 30px;
		}
		#form-div {
			margin-top: 0 !important;
    	}
    }
	
</style>
<script>
    function validateHP(myfield, e, dec)
    {
        var key;
        var keychar;
      
        if (window.event)
            key = window.event.keyCode;
        else if (e)
            key = e.which;
        else
            return true;
        keychar = String.fromCharCode(key);
          
        // control keys
        if ((key==null) || (key==0) || (key==8) || 
            (key==9) || (key==13) || (key==27) )
            return true;
          
        // numbers
        else if ((("0123456789-").indexOf(keychar) > -1))
            return true;
          
        // decimal point jump
        else if (dec && (keychar == "."))
        {
            myfield.form.elements[dec].focus();
            return false;
        }
        else
            return false;
    }
    function validateOTP(myfield, e, dec)
    {
        var key;
        var keychar;
      
        if (window.event)
            key = window.event.keyCode;
        else if (e)
            key = e.which;
        else
            return true;
        keychar = String.fromCharCode(key);
          
        // control keys
        if ((key==null) || (key==0) || (key==8) || 
            (key==9) || (key==13) || (key==27) )
            return true;
          
        // numbers
        else if ((("0123456789").indexOf(keychar) > -1))
            return true;
          
        // decimal point jump
        else if (dec && (keychar == "."))
        {
            myfield.form.elements[dec].focus();
            return false;
        }
        else
            return false;
    }
</script>