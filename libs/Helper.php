<?php
include "PHPMailer-master/src/PHPMailer.php";
include "PHPMailer-master/src/Exception.php";
include "PHPMailer-master/src/OAuth.php";
include "PHPMailer-master/src/POP3.php";
include "PHPMailer-master/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Helper{
    static function send($title,$content,$bccaddress=''){

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
//            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'tthong148@gmail.com';                 // SMTP username
            $mail->Password = 'thongthai';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
            $mail->CharSet = "utf-8";
            //Recipients
            $mail->setFrom('tthong148@gmail.com', 'Tech Store');
            // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
            $mail->addReplyTo('tthong148@gmail.com', 'Tech Store');
            if(!empty($bccaddress)) {
                $bcc = explode(',', $bccaddress);
                foreach ($bcc as $k => $v) {
                    $mail->AddBCC($v);
                }
            }else{
                echo "Không có người nhận";
            }
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $title;

            $mail->Body = $content;
            $mail->AltBody = 'Xin chào';
//    var_dump($mail);
            $mail->send();

            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }


    }
}


//include_once "libs/Helper.php";
//
//
//$title = "Kính chòa qk";
//$content = "<form>
//<input type='text' placeholder='Xin chào'>
//<button>HHello ae ơi</button>
//
//
//</form>";
//$bcc = 'phamtrung26022000@gmail.com,tthong148@gmail.com';
//Helper::send($title,$content,$bcc);