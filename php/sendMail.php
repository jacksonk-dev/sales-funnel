<?php
    if(isset($_POST['fullName']) && isset($_POST['email'])){
        $fullName = trim($_POST['fullName']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $property = trim($_POST['property']);
        $budget = trim($_POST['budget']);

        if($property === "Select"){
            $property = 'unknown';
        }

        $to = 'ronaldchambadde@gmail.com';
        $from = $email;
        $subject = 'House With Me Client';
        $message = "
            <html>
                <head>
                    <title>House With Me Client</title>
                </head>
                <body>
                    <h1 style=\"color: blue;\">You have a client</h1>
                    <p>$fullName is looking for property.</p>
                    <p>Call <a href=\"tel:\/\/$phone\">$phone</a></p>
                    <p>Or mail at $from</p>
                    <table style=\"width:100%\">
                        <tr 
                            style=\"text-align: left; border: 1px solid black; background-color: #000; color: #fff;\"
                        >
                            <th style=\"padding: 8px 2px\">Property</th>
                            <th style=\"padding: 8px 2px\">Budget (BHD)</th> 
                        </tr>
                        <tr style=\"border: 1px solid black;\">
                            <td>$property</td>
                            <td>$budget</td> 
                        </tr>
                    </table>
                </body>
            </html>
        ";

        $headers = [
            'From' => 'https://housewithme.com',
            'Reply-To' => $from,
            'X-Mailer' => 'PHP/' . phpversion(),
            'MIME-Version' => '1.0',
            'Content-type' => 'text/html; charset=iso-8859-1',
            'Bcc' => 'kamyaj89@gmail.com'
        ];

        mail($to, $subject, $message, $headers);
    }
?>