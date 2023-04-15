<?php

# !IMPORTANT! PHP code being displayed instead of running likely because I do not have hosting (servers must support the PHP language)

#Receive user input
$email = $_POST['email'];
$message = $_POST['message'];

#Filter user input
function filter_email_header($form_field) {  
return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}

$email  = filter_email_header($email);

#Send email
$headers = "From: $email";
$sent = mail('jacobstephens773@gmail.com', 'Contact Form Submission', $message, $headers);

#Thank user or notify them of a problem
if ($sent) {

?><html>
<head>
<title>Thank You</title>
</head>
<body>
<h1>Thank You</h1>
<p>Thank you for your message.</p>
</body>
</html>
<?php

} else {

?><html>
<head>
<title>Something went wrong</title>
</head>
<body>
<h1>Something went wrong</h1>
<p>We could not send your message. Please try again.</p>
</body>
</html>
<?php
}
?>