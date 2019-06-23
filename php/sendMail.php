<?php
    if(isset($_POST['fullName']) && isset($_POST['email'])){
        $fullName = trim($_POST['fullName']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);

        $to = 'kamyaj89@gmail.com';
        $from = $email;
        $subject = 'House With Me Client';
        $message = "$fullName is looking for property. Call him on $phone";
        $message = "
            <html>
                <head>
                    <title>House With Me Client</title>
                </head>
                <body>
                    <h1 style=\"color: blue;\">You have a client</h1>
                    <p>$fullName is looking for property.</p>
                    <p>Call him on <a href=\"tel:\/\/$phone\">$phone</a></p>
                    <p>Or mail him at $from</p>
                </body>
            </html>
            ";

        $headers = [
            'From' => 'https://housewithme.com',
            'Reply-To' => $from,
            'X-Mailer' => 'PHP/' . phpversion(),
            'MIME-Version' => '1.0',
            'Content-type' => 'text/html; charset=iso-8859-1',
            'Bcc' => 'jacksonk.dev@gmail.com'
        ];

        mail($to, $subject, $message, $headers);
    }
?>