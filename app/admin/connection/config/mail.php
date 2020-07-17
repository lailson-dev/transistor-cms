<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST)) {
	include_once '../Crud.php';

	require '../PHPMailer/src/Exception.php';
	require '../PHPMailer/src/PHPMailer.php';
	require '../PHPMailer/src/SMTP.php';

	session_start();

	$message = filter_input(INPUT_POST, 'input-reply', FILTER_SANITIZE_SPECIAL_CHARS);

	try {
	    $mailer = new \PHPMailer\PHPMailer\PHPMailer(true);
	    $mailer->isSMTP();
	    $mailer->isHTML(true);
	    $mailer->CharSet = 'UTF-8';
	    $mailer->SMTPAuth = true;
	    $mailer->SMTPSecure = 'ssl';
	    $mailer->Host = MAIL_HOST;
	    $mailer->Port = MAIL_PORT;
	    $mailer->Username = MAIL_USERNAME;
	    $mailer->Password = MAIL_PASSWORD;
	    $mailer->From = MAIL_USERNAME;
	    $mailer->FromName = MAIL_NAME;
	    $mailer->Subject = MAIL_SUBJECT;
	    $mailer->Body = $message;
	    $mailer->SMTPOptions = array(
	        'ssl' => array(
	            'verify_peer' => false,
	            'verify_peer_name' => false,
	            'allow_self_signed' => true
	        )
	    );

	    $mailer->addAddress($_SESSION['messageEmail']);
	    if($mailer->Send()) {
	    	$updateStatus = new Crud;
	    	$updateStatus->setId($_SESSION['idMessage']);
	    	$updateStatus->setStatus(1);

	    	if(!$updateStatus->updateMessage())
	    		header('Location: ../../messages.php?false');	    	
	    }

	    header('Location: ../../messages.php?true');
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}