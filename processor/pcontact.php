
<?php
// session_start();
include("../includes/config.php");
function send_mail($email, $message, $subject, $Company) {
        require_once('mailer/class.phpmailer.php');
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Host = "https://www.innovatrix.ng";
        // $mail->Host = "server326.web-hosting.com";
        $mail->Port = 587;
        $mail->AddAddress($email);
        $mail->Username = $Company['email'];
        $mail->Password = "malockdredge";
        $mail->SetFrom($Company['email'], $Company['name']);
        $mail->AddReplyTo($Company['email'], $Company['name']);
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        //if($mail->Send()){ return 1; }else{ return 0; }
      return (int)($mail->Send());
    }

if(isset($_POST["submit"])){
    $fname= $_POST["fname"];
    $lname= $_POST["lname"];
    $email= $_POST["email"];
    $service= $_POST["service"];
    $subject= $_POST["subject"];
    $message= $_POST["message"];

    if (empty($fname) || empty($lname) || empty($email) || empty($service) || empty($subject) || empty($message)) {
        $_SESSION["msg"]= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Hi Dear!</strong> fields are empty.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';

      header("location:../contact.php#return");
    }else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $_SESSION["msg"]= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Hi Dear!</strong> Email must be a valid email<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
            header("location:../contact.php#return");

        }else{
            if(send_mail($email, $message, $subject,$Company)==1){
                $_SESSION["msg"]= '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Message</strong> Sent Succesfully<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';

            }

        }
    }

}else{
    $_SESSION["msg"]= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error</strong> in transmitting data<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';


}


    ?>