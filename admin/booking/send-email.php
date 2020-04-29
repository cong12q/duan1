<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();
require './lib/PHPMailer/src/Exception.php';
require './lib/PHPMailer/src/PHPMailer.php';
require './lib/PHPMailer/src/SMTP.php';
$recceiver = $_POST['recceiver'];
$subject = $_POST['subject'];
$content = $_POST['content'];


$listRecceiver = explode(",", $recceiver);
// var_dump($recceiver, $subject, $content);die;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->CharSet = 'utf8';                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'congnga2672000@gmail.com';                     // SMTP username
    $mail->Password   = 'anhcong12';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('congnga2672000@gmail.com', 'Nguyễn Công Nga');
    foreach($listRecceiver as $recceiverEmail){
        $mail->addAddress($recceiverEmail);  
    }
                
    $mail->addReplyTo('congnga2672000@gmail.com', 'Nguyễn Công Nga');
    

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $content;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    $id1 = trim($_POST['id']);
    $id2=$_SESSION[AUTH]['id'];
    $reply_for= trim($_POST['content']);
    $updateContactQuery = "update booking set status = '1', reply_message='$reply_for', reply_by='$id2' where id = '$id1'";
    queryExecute($updateContactQuery, false);
    header("location: " . ADMIN_URL . "booking/index.php?msg=Trả lời thành công");
    die;
//if($updateUser['role_id'] >= $_SESSION[AUTH]['role_id']){
//    header("location: " . ADMIN_URL . "users?msg=Không đủ quyền hạn thực hiện hành động này");
//    die;
//}

    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>