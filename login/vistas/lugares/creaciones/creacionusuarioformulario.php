<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<style>
body {
  font-family: Arial, sans-serif;
	background: #ddd;
}

h1 {
	text-align: center;
	font-family: "Trebuchet MS", Tahoma, Arial, sans-serif;
	color: #333;
	text-shadow: 0 1px 0 #fff;
	margin: 50px 0;
}

#wrapper {
	width: auto;
	margin: 0 auto;
	background: #fff;
	padding: 20px;
	border: 10px solid #aaa;
	border-radius: 15px;
	background-clip: padding-box;
	text-align: center;
}

.button {
	font-family: Helvetica, Arial, sans-serif;
	font-size: 13px;
	padding: 5px 10px;
	border: 1px solid #aaa;
	background-color: #eee;
	background-image: linear-gradient(top, #fff, #f0f0f0);
	border-radius: 2px;
	box-shadow: 0 1px 3px rgba(0,0,0,0.15);
	color: #666;
	text-decoration: none;
	text-shadow: 0 1px 0 #fff;
	cursor: pointer;
	transition: all 0.2s ease-out;
  &:hover {
    border-color: #999;
    box-shadow: 0 1px 3px rgba(0,0,0,0.25);
  }
  &:active {
    box-shadow: 0 1px 3px rgba(0,0,0,0.25) inset;
  }
}

.overlay {
	position: absolute;
	top: 0;
	bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0,0,0,0.5);
	transition: opacity 200ms;
  visibility: hidden;
	opacity: 0;
	&.light {
    background: rgba(255,255,255,0.5);
  }
  .cancel {
    position: absolute;
    width: 100%;
    height: 100%;
    cursor: default;
  }
  &:target {
    visibility: visible;
    opacity: 1;
  }
}

.popup {
	margin: 75px auto;
	padding: 20px;
	background: #fff;
	border: 1px solid #666;
	width: 300px;
	box-shadow: 0 0 50px rgba(0,0,0,0.5);
	position: relative;
  .light & {
    border-color: #aaa;
    box-shadow: 0 2px 10px rgba(0,0,0,0.25);
  }
  h2 {
    margin-top: 0;
    color: #666;
    font-family: "Trebuchet MS", Tahoma, Arial, sans-serif;
  }
  .close {
    position: absolute;
    width: 20px;
    height: 20px;
    top: 20px;
    right: 20px;
    opacity: 0.8;
    transition: all 200ms;
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
    color: #666;
    &:hover {
      opacity: 1;
    }
  }
  .content {
    max-height: 400px;
    overflow: auto;
  }
  p {
    margin: 0 0 1em;
    &:last-child {
      margin: 0;
    }
  }
}

</style>





<script type="text/javascript">
    
</script>

<body>
    

<h1>Resultados</h1>
<div id="wrapper">

        <?php
       $usuario=$_POST["user"];
       $permisos=$_POST["permiso"];
       $datos=$_POST["datos"];
 require 'PHPMailer/Exception.php';
 require 'PHPMailer/PHPMailer.php';
 require 'PHPMailer/SMTP.php';


 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;
 
 $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'eloyrana@gmail.com';                     //SMTP username
    $mail->Password   = 'jorzoajevwzdjbtk';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('eloyrana@gmail.com', 'MailPHPProx');
    $mail->addAddress('a_elogonpin@iestriana.com', 'Eloy Gonzalez');     //Add a recipient




    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Solicitud de permisos Proxmox';
    $mail->Body    = 'El usuario '.$usuario. ' te solicita el usuario <bold>' .$permisos. '</bold>: <br> 
    <pre>'.$datos.'</pre>';
    $mail->AltBody = 'Solicitud de permisos Proxmox';

    $mail->send();    
}  catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
}

        ?>

<script src="../../../plugins/sweet_alert2/sweetalert2.all.min.js"></script>
<script src="../../../codigo3.js"></script>

</div>
	</div>
    <br>      
     
</div>
		</div>
	</div>
</div>
</body>
</html>








