<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['FIRSTNAME'] ?? '';
    $email = $_POST['EMAIL'] ?? '';
    $phone = $_POST['PHONE'] ?? '';
    $project = $_POST['PROJECT'] ?? '';
    $location = $_POST['LOCATION'] ?? '';
    $client = $_POST['CLIENT'] ?? '';

    $to = "botmediadigitalmarketing@gmail.com";
    $subject = "New Lead Notification - Website";

    $message = "
    <html>
    <head>
    
    <title>New Lead</title></head>
    <body>
    <h3>Lead Details</h3>
    <table border='1' cellspacing='0' cellpadding='6'>
      <tr><td><strong>Name</strong></td><td>$name</td></tr>
      <tr><td><strong>Email</strong></td><td>$email</td></tr>
       <tr><td><strong>Phone</strong></td><td>$phone</td></tr>
        <tr><td><strong>Project</strong></td><td>$project</td></tr>
        <tr><td><strong>Location</strong></td><td>$location</td></tr>
        <tr><td><strong>Client</strong></td><td>$client</td></tr>
    </table>
    </body>
    </html>
    ";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <no_reply@Eldeco.com>' . "\r\n";
$headers .= 'Cc: botmediadigitalmarketing@gmail.com' . "\r\n";

if(mail($to,$subject,$message,$headers)) //Send an Email. Return true on success or false on error


{
echo 

"<script>window.location.href='thanks.html';</script>";
}
else
{
echo "<script>
alert('Plz Try Agian');
window.location.href='index.html'

;
</script>";
}
}
?>
