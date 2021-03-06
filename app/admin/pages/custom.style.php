<?php
    header("Content-type: text/css");

    include_once "../connection/Crud.php";
    $crud  = new Crud;
	$spotlight = $crud->read('spotlight_game', 0, 1);
?>

body {
	background-color: #363636;
}

.header__page {
	height: 109px;
}

.header__page-logo img {
	display: block;
	width: 109px;
	height: 109px;
	margin-right: 30px;
}

.header__page-logo a {
	font-family: 'Montserrat', sans-serif;
	font-size: 23px;
	letter-spacing: 0.68px;
	text-decoration: none;
}

.main__page-container {
	background: url('../../../assets/images/<?= $spotlight->background_image; ?>') 50% 100% no-repeat;
	background-size: cover;
}

.page__container-card {
	display: flex;
	flex-direction: column;
	width: 586px;
	height: 1080px;
	margin: 0 auto;
	background: transparent url('../../../assets/images/Imagem-background-card.svg') 0% 0% no-repeat;
	box-shadow: 0px 3px 6px rgba(0, 0, 0, .9);
}

.container__card-title {
	padding: 22px 0 0 29px;
}

.container__card-title h6 {
	font-family: 'Open Sans', sans-serif;
	font-size: 18px;
}

.container__card-image {
	padding: 20px 27px 0 20px;
}

.container__card-description {
	width: 271px;
	height: 121px;
	margin: 0 auto;
	padding: 10px 0 0 29px;
}

.container__card-description p {
	font-family: 'Open Sans', sans-serif;
	font-size: 20px;
	font-weight: 400;
	color: #F0F0F2;
	text-shadow: 0px 3px 6px #000029;
}

/* CARD HEROS */
.main__page-heros {
	height: 1080px;
	margin-top: 300px;
}

.page__heros-container {
	display: flex;
	justify-content: center;
	align-items: center;
}

.container__cards-card {
	width: 385px;
	height: 603px;
	margin: 50px 60px;
	background: #fff;
	box-shadow: 0px 3px 6px #FFFFFF63;
	border-radius: 27px;
}

.cards__card-top {
	width: 339px;
    height: 365px;
	position: relative;
	top: -100px;
	margin: 0 auto;
	border: 2px solid #FFF;
	background-color: #363636;
	border-radius: 99px;
	box-shadow: 0px 3px 6px #FF060629;
}

.cards__card-top img {
	display: block;
	width: 385px;
	max-width: 100%;
	position: absolute;
	top: -90px;
	left: 3px;
}

.cards__card-bottom {
	width: 100%;
	height: 153px;
	position: relative;
	top: -90px;
	padding: 36.5px;
	margin: 0 auto;
	text-align: left;
	color: #363636;
	font-family: 'Open Sans', sans-serif;
	font-size: 20px;
}

/* FOOTER PAGE */

.footer__page {
	height: 670px;
	background-color: #58B790;
	position: absolute;
}

.footer__page-formulario {
	background: #fff;
	padding: 50px;
	position: relative;
	top: -50px;
	box-shadow: 0px 0px 6px #0000004D;
	border-radius: 10px;
}

.footer__page-formulario h3 {
	font-family: 'Montserrat', sans-serif;
	font-size: 35px;
	text-align: center;	
	letter-spacing: -0.88px;
	color: #63C7A9;
	padding-top: 82px;
}

.btn-send {
	width: 249px;
	height: 48px;
	background-color: #63C7A9;
	color: #FFF;
}

.footer__page-line {
	background-color: #363636; 
}