<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
    $mail = new PHPMailer(true);
    $pesan = $_POST['pesan'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $number=$_POST['number'];

    try {
        // Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'ebiethslank763@gmail.com';             // SMTP username
        $mail->Password   = 'uxcvvxxjtuufgnnc';                     // SMTP App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption
        $mail->Port       = 587;                                   // TCP port to connect to

        // Recipients
        $mail->setFrom($email, $nama);                              // Email pengirim sesuai input
        $mail->addAddress('ebiethslank763@gmail.com', 'Admin');     // Admin menerima pesan
        $mail->addReplyTo($email, $nama);                           // Untuk membalas email ke pengirim

        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = "Feedback Customer dari $nama";
        $mail->Body    = 'Hallo Admin,<br><br>Ada pesan baru dari customer:<br><hr>' 
                        . '<strong>Nama:</strong> ' . $nama . '<br>'
                        . '<strong>Email:</strong> ' . $email . '<br>'
                        . '<strong>No Hp:</strong> ' . $number . '<br>'
                        . '<strong>Pesan:</strong><br>' . nl2br($pesan);

        if ($mail->send()) {
            echo "<script>
                    alert('Pesan berhasil dikirim ke email admin.');
                    window.location.href = 'index.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Pesan gagal dikirim. Silakan coba lagi.');
                    window.location.href = 'index.php';
                  </script>";
        }
    } catch (Exception $e) {
        echo "<script>
                alert('Pesan gagal dikirim. Error: {$mail->ErrorInfo}');
                window.location.href = 'index.php';
              </script>";
    }
} else {
    echo "<script>
            alert('Tekan dulu tombolnya, boss!');
            window.location.href = 'index.php';
          </script>";
}