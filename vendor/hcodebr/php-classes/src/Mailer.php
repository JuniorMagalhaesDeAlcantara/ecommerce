<?php

namespace Hcode;

use Rain\TPL;

class Mailer {

	const USERNAME = "jrlevita09gmail.com";
	const PASSWORD = "103555";
	const NAME_FROM = "Body Sites Store"

	private $this->$mail;

	public function __construct($toAddress, $toName, $subject, $tplName, $dat = array())

	{
    
    $config = array(
					"tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]."/views/email",
					"cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
					"debug"         => false // set to false to improve the speed
				   );

					Tpl::configure( $config );

					$tpl = new Tpl;

					foreach ($data as $key => $value) {
						$tpl->assign($key, $value)
					}

					$html = $tpl->draw($tplName, true);

					$this->$this->$mail = new \PHPMailer

     
$this->$mail->isSMTP(); // envia por SMTP

$this->$mail->SMTPDebug = 0;
$this->$mail->Debugoutput = 'html';

$this->$mail->Host = "smtp.gmail.com"; // SMTP servers         
$this->$mail->Port = 587; // Porta SMTP do GMAIL

$this->$mail->SMTPSecure = 'tls';
$this->$mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação   

$this->$mail->Username = Mailer::USERNAME; // SMTP username         
$this->$mail->Password = Mailer::PASSWORD; // SMTP password          
$this->$mail->IsHTML(true);  
       

$this->$mail->setFrom(Mailer/::USERNAME, Mailer::NAME_FROM); 
// E-mail do remetende enviado pelo method post  
         
$this->$mail->addAddress($toAddress, $toName);
// E-mail do destinatario/*  

$this->$mail->Subject = $subject; 
// Assunto do remetende enviado pelo method post
        
$this->$mail->msgHTML($html)

$this->$mail->AlrBody = "This is a plain-text message body";
                    
    

	}
		public function send()
		{
			return $this->mail->send();
		}
}


?>