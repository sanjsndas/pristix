<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">
        <title>Pristixasic : Request accepted!</title>
        <meta property="og:title" content="Pristixasic : Request accepted!" />
        <meta property="og:image" content="icon.png"/>
        
        <meta property="og:description" content="Pristixasic : Request accepted!">
        <meta name="description" content="Pristixasic : Request accepted!">
        <link rel="stylesheet" href="files/st-css/bootstrap.css">
        <link rel="stylesheet" href="files/st-css/bootstrap-icons.css">
        <script src="files/dir_src/jquery.min.js"></script>
        <script src="files/dir_src/bootstrap.min.js"></script>
        <script src="files/dir_src/slick.js"></script>
        <link rel="stylesheet" href="files/st-css/slick.css"/>
		<link rel="stylesheet" href="files/st-css/slick-theme.css" />
        

        <link rel="shortcut icon" href="icon.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet">

        

        
        </head>
        <body>

            
            <nav class="navbar bg-body-tertiary" >
                <div class="container-fluid">
                  <a class="navbar-brand logobox" href="./">
                    <img src="icon.png" >
                    <h5 class="tstli-sat">Pristixasic</h5>
                </a>
                <div class="navBoxx">
                    <div class="navBoxx_desktop">
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li><a href="./#our-service">Our Services</a></li>
                            <li><a href="./#teste">Customer Testimonials</a></li>
                            
                        </ul>
                    </div>
                    
                    <div class="navbar_mob">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Переключить навигацию">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>

                  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Pristixasic</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label=""></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="mob_nav_list">
                            <li><a href="./">Home</a></li>
                            <li><a href="./#our-service">Our Services</a></li>
                            <li><a href="./#teste">Customer Testimonials</a></li>
                            
                        </ul>
                    </div>
                  </div>
                </div>
              </nav>
            <div class="header_top">
                <div class="container">
                    <div class="header_top__middle Padd">
                        Modern Clothing with Authentic National Folklore Heritage
                    </div>
                </div>
                <div class="first-image"><div class="first-image-background"></div></div>
            </div>
            


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-banner__thumbnailhi{
		margin: 0px;
		padding: 0px;
		font-family: 'Nunito Sans', sans-serif;
		width: 100%;
		font-size: 17px;
		padding: 328px 0px;
	}
	.bodyClass1-banner__thumbnailhi{
		background: #f8f5f1;
		color: #ffffff;
	}
	.bodyClass2-banner__thumbnailhi{
		background: #f6f7d4;
		color: #fff;
	}
	.bodyClass3-banner__thumbnailhi{
		background: #fff;
		color: #111;
	}
	.wrapage-block-banner__thumbnailhi{
		background-size: 100%;
		width: 100%;
	}
	.box_main-banner__thumbnailhi{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-banner__thumbnailhi h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-banner__thumbnailhi p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-banner__thumbnailhi{
		text-align: center;
	}
	.mainBlock-banner__thumbnailhi ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-banner__thumbnailhi ul>li span{
		font-weight: bold;
	}
	.mainBlock-banner__thumbnailhi{
		max-width: 1003px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 0px;
	}
	.mainBlock-banner__thumbnailhi .cBlock-banner__thumbnailhi{
		text-align: center;
	}

	.bodyClass3-banner__thumbnailhi .mainBlock-banner__thumbnailhi{
		background: none;
		border-top: 2px dashed #f6f7d4;
		border-bottom: 2px dashed #f6f7d4;
	}
	.bodyClass2-banner__thumbnailhi .mainBlock-banner__thumbnailhi{
		background: #3B0944;
		color: #fff !important;
		box-shadow: 0px 0px 0px #3B0944;
	}
	.bodyClass2-banner__thumbnailhi .mainBlock-banner__thumbnailhi p{
		color: #fff !important;
	}
	.bodyClass1-banner__thumbnailhi .mainBlock-banner__thumbnailhi{
		background: #075430;
		color: #ffffff;
		border-left: 5px solid #46B5D1;
	}
	.bodyClass1-banner__thumbnailhi .mainBlock-banner__thumbnailhi p{
		color: #ffffff !important;
	}
	.order-banner__thumbnailhi{
		font-size: 22px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-banner__thumbnailhi p{
			padding: 0px 15px;
		  }
		  .box_main-banner__thumbnailhi h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-banner__thumbnailhi{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-banner__thumbnailhi{
			height: 100%;
		}
	}
</style>
<div class="bodyClass3-banner__thumbnailhi" id="mainWrapp-banner__thumbnailhi">


	<div class="wrapage-block-banner__thumbnailhi">
		<div class="box_main-banner__thumbnailhi">
			<div class="mainBlock-banner__thumbnailhi">
				<p>We're truly grateful for your outreach and the confidence you've placed in us. Your support empowers our dedicated team to enhance the caliber of our offerings continually.</p>
<p>Remember, your insights, feedback, and suggestions are invaluable to our growth and evolution. If there's anything on your mind or if you require assistance, please feel free to reach out. Our commitment is to be readily available to assist you.</p>
<p class="cBlock-banner__thumbnailhi">With heartfelt thanks and warm wishes!</p>
			</div>
		</div>
	</div>


</div>




            <style>

                .button-1 {
                align-items: center;
                background-clip: padding-box;
                background-color: #fa6400;
                border: 1px solid transparent;
                border-radius: .25rem;
                box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
                box-sizing: border-box;
                color: #fff;
                cursor: pointer;
                display: inline-flex;
                font-size: 16px;
                font-weight: 700;
                justify-content: center;
                line-height: 1.3;
                margin: 0;
                min-height: 3rem;
                padding: calc(.875rem - 1px) calc(1.5rem - 1px);
                position: relative;
                text-decoration: none;
                transition: all 250ms;
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
                vertical-align: baseline;
                width: auto;
                }
    
                .button-1:hover,
                .button-1:focus {
                background-color: #fb8332;
                box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
                }
    
                .button-1:hover {
                transform: translateY(-1px);
                }
    
                .button-1:active {
                background-color: #c85000;
                box-shadow: rgba(0, 0, 0, .06) 0 2px 4px;
                transform: translateY(0);
                }
    
                .button-2 {
                align-items: center;
                background-color: #FFFFFF;
                border: 1px solid rgba(0, 0, 0, 0.1);
                border-radius: .25rem;
                box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
                box-sizing: border-box;
                color: rgba(0, 0, 0, 0.85);
                cursor: pointer;
                display: inline-flex;
                font-size: 16px;
                font-weight: 700;
                justify-content: center;
                line-height:1.3;
                margin: 0;
                min-height: 3rem;
                padding: calc(.875rem - 1px) calc(1.5rem - 1px);
                position: relative;
                text-decoration: none;
                transition: all 250ms;
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
                vertical-align: baseline;
                width: auto;
                }
    
                .button-2:hover,
                .button-2:focus {
                border-color: rgba(0, 0, 0, 0.15);
                box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
                color: rgba(0, 0, 0, 0.65);
                }
    
                .button-2:hover {
                transform: translateY(-1px);
                }
    
                .button-2:active {
                background-color: #F0F0F1;
                border-color: rgba(0, 0, 0, 0.15);
                box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
                color: rgba(0, 0, 0, 0.65);
                transform: translateY(0);
                }
    
                .button-3 {
                background-color: #0095ff;
                border: 1px solid transparent;
                border-radius: 3px;
                box-shadow: rgba(255, 255, 255, .4) 0 1px 0 0 inset;
                box-sizing: border-box;
                color: #fff;
                cursor: pointer;
                display: inline-block;
                font-size: 16px;
                font-weight:700;
                line-height: 1.3;
                margin: 0;
                outline: none;
                padding: 12px .8em;
                position: relative;
                text-align: center;
                text-decoration: none;
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
                vertical-align: baseline;
                white-space: nowrap;
                }
    
                .button-3:hover,
                .button-3:focus {
                background-color: #07c;
                }
    
                .button-3:focus {
                box-shadow: 0 0 0 4px rgba(0, 149, 255, .15);
                }
    
                .button-3:active {
                background-color: #0064bd;
                box-shadow: none;
                }
    
            @media(max-width: 992px){
                .Second .col-5{
                    align-items: center;
                    width: 100%;
                    height: 100%;
                }
                .Second .row{
                    justify-content: center;
                    align-items: center;
                    flex-direction: column-reverse!important;
                }
                .inputs{
                    display: flex;
                    flex-direction: column!important;
                    width: 100%;
                    gap: 0!important;
                }
                .third_image-block{
                    display: none;
                }
                .third_list{
                    width: 100%;
                }
                .content_block_main{
                    flex-direction:column-reverse!important;
                }
                .benefitsRow >.col-3{
                    width: 47%!important;
                }
                
            }
            @media(max-width: 768px){
                .kon .container{
                    max-width: 100%!important;
                }
            }
            @media(max-width: 580px){
                .kon-row{
                    display: flex;
                    flex-direction: column;
                }
                .benefitsRow >.col-3{
                    width: 100%!important;
                }
                .slider-nav-img img{
                    height: 510px!important;
                }
                .comments-item{
                    flex-direction: column-reverse!important;
                }
                
            }
            @media(max-width: 400px){
                .header_top__top{
                    gap: 14px;
                    flex-direction: column;
                }
                .Padd{
                    padding: 45px 30px!important;
                }
                .header_top__middle{
                    font-size: 17px!important;
                }
                h1 {
                    font-size: 25px!important;
                }
                h5{
                    font-size: 17px!important;
                }
                .header_top__top > div:first-child{
                    flex-direction: column!important;
                }
            }
          
    
                body{
                    direction: ltr;
                    font-family: 'Source Serif 4', sans-serif !important;
                    font-size: 14px;
                    margin: 0;
                    padding: 0px;
                }
                h1{
                    text-transform: uppercase;
                    font-size: 29px;
                }
    
                .content-block {
                    padding: 22px;
                }
                .header_top{
                    overflow: hidden;
                }
                .kol-Box-heder {
                    display: flex; 
                    align-items: center; 
                    gap: 14px;
                }
                .header_top__top{
                    gap: 14px;
                    padding:27px;
                    display: flex;
                    position: relative;
                    height: auto;
                    align-items: center;
                    justify-content: space-between;
                }
                .header_top__top img{
                    height: 75px;
                    width: 75px;
                }
                .header_top__top i{
                    color: darkolivegreen;
                    font-size: 18px;
                    font-weight: 900;
                    border-radius: 50%;
                    background-color: #ececec;
                    padding: 10px;
                    line-height: 0;
                }
                .slider-nav, .slider-comments{
                    direction: ltr;
                }
                .header_top__top p{
                    color: #878787;
                    margin: 0;
                }
                .header_top__middle{
                    text-align: center; 
                    text-transform: uppercase;
                    font-size: 26px;
                    font-style:italic;
                    font-weight: 900;
                }
                .first-image{
                    background: url(uploads/09-2026/calm-ethnic-background.webp)center no-repeat;
                    background-size: cover;
                    width: 100%;
                    height: 502px;
                    animation: width 10s linear infinite alternate;
                }
                .first-image-background{
                    width: 100%;
                    height: 100%;
                }
                @keyframes width{
                0%{
                }
                100%{
                transform: scale(1.1);
                }
                }
                .sizeImgRazmer {
                    width: 55%;
                    margin: 0 auto;
                    display: flex;
                }
                .usTemi {
                    display:flex; 
                    flex-direction: column;
                     gap: 27px;
                }
                .Padd{
                    padding: 110px 30px;
                }
                .as-Bloks {
                    flex-direction:row;
                    gap:40px; 
                    align-items: center;
                }
                .usText-Nt {
                    text-align: center;
                    color: #878787;
                }
                .pfon_hed {
                    color: black; 
                    text-decoration: none;
                }
                .titlBenef {
                    text-align: center;
                    font-weight: 900; 
                    margin-bottom: 90px;
                }
                .subTitle{
                    text-align: center;
                    color: #878787;
                    padding: 0px 20% 27px 20%;
                }
                .titlePadding{
                    padding-bottom: 65px;
                }
    
                .second_image{
                    max-width: 100%;
                    max-height: 100%;
                    z-index: 1;
                }
                .second_image-bg1{
                    position: absolute;
                    background-color: #c6cdc6;
                    top: 23px;
                    left: 28px;
                    width: 100%;
                    height: 96%;
                    z-index: -2;
                }
                .second_image-bg2{
                    position: absolute;
                    background-color: #e4e4e4;
                    bottom: 23px; ;
                    left: 12px;
                    width: 100%;
                    height: 96%;
                    z-index: -2;
                }
                .third_image-block {
                    padding: 0;
                }
                .titlCont {
                    text-align: center; 
                    font-weight: 900;
                }
                .conteiner-mainBlok {
                    justify-content: center;
                }
                .relativ-poz {
                    position: relative;
                }
                .third {
                    width: 100%;
                    height: 100%;
                    background: #f5f4f4;
                }
                .third_bg{
                    width: 100%;
                    height: 100%;
                    background: url(uploads/09-2026/subtle-fabric-texture.png)center;
                    background-size: cover;
                }
                .third_bg .row{
                    height: 100%;
                }
                .third_list{
                    display: flex;
                    background: #fff;
                    color: #878787;
                    padding: 27px 16px;
                    align-items: center;
                    text-align: center;
                }
                .accordion{
                    width: 100%;
                }
                .third_image{
                    width: 100%;
                    object-fit: cover;
                    height: 100%;
                }
                .priv-container {
                    
                    word-break: break-all;
                }
                .priv-container p {
                padding: 14px 0;
                }
                .priv-container li {
                list-style: circle;
                margin: 0 14px;
                padding: 14px 0;
                }
           
                .blokBenif{
                    gap: 14px;
                    display: flex; 
                    flex-direction:column;
                    align-items: center;
                    justify-content: center;
                }
                .benefitsRow{
                    gap: 16px;
                    justify-content: center;
                }
                .blokBenif i{
                    color: #fff;
                    font-size: 38px;
                    margin: 0px 14px 16px 0;
                    border-radius: 50%;
                    background-color: #222831;
                    padding: 16px;
                    line-height: 0;
                }
                .blokBenif p{
                    text-align:center;
                    margin: 0;
                    color: #878787;
                }
    
                .gal{
                    width: 100%;
                    height: 100%;
                    background: #f5f4f4;
                }
                .gal_bg{
                    width: 100%;
                    height: 100%;
                    background: url(uploads/09-2026/subtle-fabric-texture.png)center;
                    background-size: cover;
                }
    
                .slick-slide img{
                    max-width: 100%;
                    width: 100%;
                    object-fit: cover;
                    cursor: grab;
    
                }
                .slider-nav-img img{
                    height: 502px;
                }
                ;
                }
                .kontakt-stal-id p{
                    font-size: .9em;
                    line-height: 1.6;
                    opacity: .85;
                }
                .kon-row{
                    gap: 16px;
                }
                .kon i{
                    color: darkolivegreen;
                    font-size: 20px;
                    align-items: center;
                    padding: 14px 0;
                }
                .kon p{
                    padding: 14px 0;
                    margin: 0;
                    align-items: center;
                    
                }
    
                .kon a{
                    word-break: break-all;
                    text-decoration: none;
                    color: inherit;
                    padding: 14px 0;
                    margin: 0;
                    align-items: center;
                    
                }
    
                .input-control--block-item{
                    display: block;
                    width: 100%;
                    padding:14px;
                    font-size: 14px;
                    font-weight: 700;
                    line-height: 1.3;
                    color: #212529;
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    appearance: none;
                    background-color: #fff;
                    background-clip: padding-box;
                    border: 1px solid #dee2e6;
                    border-radius: var(--bs-border-radius);
                    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                    margin: 16px 0px;
                }
                .textarea-control--block-item{
                    display: block;
                    width: 100%;
                    padding: 14px;
                    font-size: 14px;
                    font-weight: 700;
                    line-height: 1.3;
                    color: #212529;
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    appearance: none;
                    background-color: #fff;
                    background-clip: padding-box;
                    border: 1px solid #dee2e6;
                    border-radius: var(--bs-border-radius);
                    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                }
                .stile-title {
                    font-weight: 700;
                }
                .form-text-color {
                    color: #878787;
                    padding-top: 14px;
                }
                .form-osnpov {
                    height: 100%;
                    border-left: 1px solid #69694222;
                }
                .form-osnpov h1 {
                    font-weight: 700;
                    padding-bottom: 14px;
                }
                .form-osnpov button {
                    margin: 0 0 16px;
                }
                .priceBlockdsfgdg{
                    font-size: 29px;
                }
                .priceBlockdsfgdg span{
                    font-weight: 900;
                    color: #6a6a6a;
                }
                .vidstyp{
                    margin: 22px 0px;
                }
                .tstli-sat {
                    text-transform: uppercase; 
                    margin: 0;
                }
                form button{
                    width: auto!important;
                    padding: 0.8em!important;
                    border-radius: 22px!important;
                    margin-top: 16px;
                }
                .Second h5{
                    font-size: 29px;
                }
                .content_block_main{
                    display: flex;
                    flex-direction: column;
                    gap: 45px;
                }
                .content_block_main > *{
                    flex: 1;
                }
                
                .slider-nav-img{
                    height: 100%;
                }
                .servis_Blok {
                    flex-direction: row; 
                    gap: 22px;
                }
                .comments-item{
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    gap: 22px;
                    text-align: center;
                    padding-left: 16px;
                    padding-right:16px;
                }
                .comments-item h5{
                    margin: 0;
                }
                .titlServ {
                    text-align: center;
                    font-weight: 900; 
                    padding-bottom: 27px;
                }
                .main-content-new {
                    color: #878787;
                }
                .klass-gal {
                    text-align: center; 
                    font-weight: 700;
                }
                .main-kom {
                    height: auto; 
                    margin-bottom: 14px;
                }
                .kom-slider-img{
                    width: 195px;
                    height: 195px;
                }
                .kom-slider-img img{
                    width: 195px;
                    height: 195px;
                    object-fit: cover;
                    cursor: grab;
                    border: 1px solid #222831;
                    border-radius: 0%;
                }
                .comments-item__content{
                    display: flex;
                    flex-direction: column;
                    gap: 14px;
                }
                .name-st-Box {
                    color:darkolivegreen;
                    margin: 0;
                    font-style: italic;
                }
                .navBoxx_desktop ul{
                    margin: 0;
                    padding: 0;
                    display: flex;
                    gap: 14px;
                }
                .navBoxx_desktop ul li{
                    list-style: none;
                }
                .navBoxx_desktop ul a{
                    color: inherit;
                    font-weight: 900;
                    text-decoration: none;
                }
                .navBoxx_desktop ul a:hover{
                    opacity: 0.7;
                }
                .navBoxx{
                    display: flex;
                    align-items: center;
                    gap: 27px;
                }
                .logobox{
                    display: flex;
                    gap: 14px;
                    align-items: center;
                }
                .logobox img{
                    width: 45px;
                }
                .logobox h5{
                    font-family: 'Calistoga', sans-serif;
                    font-size: 26px;
                    margin: 0;
                    padding: 0;
                    font-weight: 900;
                }
                .navbar_mob{
                    display: none;
                }
                .mob_nav_list{
                    display: flex;
                    flex-direction: column;
                    margin: 0;
                    padding: 0;
                }
                .mob_nav_list li{
                    list-style: none;
                    border-bottom: 1px solid #e6e6e6;
                    padding: 14px 0px;
                }
                .mob_nav_list li a{
                    color: inherit;
                    font-weight: 900;
                    text-decoration: none;
                }
                .mob_nav_list li a:hover{
                    opacity: 0.7;
                }
                .mob_nav_list li:last-child{
                    border: none;
                }
                .privBlock{
                    display: flex;
                    gap: 14px;
                    justify-content: center;
                    padding: 65px 0px;
                }
                .privBlock a{
                    text-decoration: none;
                }
                .bloks-service {
                    flex: 1;
                    display: flex;
                    justify-content: center;
                    gap: 16px;
                }
                .bloks-service-item {
                    text-align: left;
                    border: 1px solid #222831;
                    flex: 1;
                    padding: 14px;
                }
                .bloks-service-img {
                    flex: 1;
                    width: 100% !important;
                }
                
    
               @media (max-width: 1200px){
                    .navBoxx_desktop{
                        display: none;
                    }
                    .navbar_mob{
                        display: block;
                    }
                }
    
                @media(max-width: 576px){
                    .navbar .container-fluid{
                        justify-content: center;
                    }
                    .privBlock{
                        flex-direction: column;
                        text-align: center;
                    }
                }
    
                .first-image-background {
                    background: #eabf9f33;
                }
            
.company-id{display:inline-block;margin-top:.7em;font-size:.82em;opacity:.72;letter-spacing:.04em;line-height:1.5;text-decoration:none;cursor:default;pointer-events:none;flex-shrink:0;max-width:100%;}.company-id-wrap{flex-shrink:0;max-width:100%;}
</style>
            <div class="kon" id="contact">
                <div class="container Padd">
                    <div class="row kon-row">
                        
                        <div class="col form-osnpov" >
                            <h1>Order Form</h1>
                             <form method="post" action="{thx-page}">
                                     <label for="control--block-item-name">Enter your name</label><input class="input-control--block-item" id="control--block-itemname" type="text" name="nameemergency-section" required> <label for="control--block-item-email">Email Address</label><input name="emailemergency-section" class="input-control--block-item" id="control--block-item-email" type="email" required>
                                 <div class="vidstyp">
                                    <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="flexCheckChecked"
                                    />
                                    <label class="form-check-label" for="flexCheckChecked">
                                        I accept
                                        <a href="Privacy.html" target="_blank">Privacy policy</a>
                                    </label>
                                    </div>
                                </div>
                                    <button type="submit" class="btn btn-primary" >Request a specialist consultation</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                
                <div class="privBlock">
                    <a href="Privacy.html">Privacy policy</a>
                    <a href="terms-of-service.html">Terms & Conditions</a>
                    <a href="legal-disclaimer.html">Disclaimer</a>
                
                </div>
            </div>
           

            <script>
                document.addEventListener("DOMContentLoaded", function() {

                    const blokBenif = document.querySelectorAll('.blokBenif');
                    if (blokBenif && getComputedStyle(blokBenif).flexDirection === 'row') {
                        const benefitsRow = document.querySelector('.benefitsRow');
                        if (benefitsRow) {
                            benefitsRow.style.gap = '27px';  
                            document.querySelectorAll('.benefitsRow > .col-3').forEach(col => {
                                col.style.width = '47%';
                            });
                            blokBenif.style.flexDirection = 'column';
                        }
                    }

                    document.querySelectorAll('.comments-item').forEach(item => {
                        if (getComputedStyle(item).flexDirection === 'row') {
                            item.style.textAlign = 'start';
                        }
                    });
                });

            </script>

   

</body>
</html>
