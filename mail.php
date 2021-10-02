
<?php
$to      = 'vtmanakana@gmail.com';
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
$from    = $_REQUEST['email'];
$name    = $_REQUEST['name'];
$headers = 'From: '. $from . ' '. $name  . "\r\n" .
    'Reply-To: '. $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$success  = mail($to, $subject, $message, $headers);

if($success){ ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <!--Import Google Icon Font-->
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<title>Document</title>
</head>
<body>



  <div class="container center">
 
      <div class="modal-content">
        <h4>Thank you for getting in touch!</h4>
		<p>Your message was sent successfully. I will get back in touch with you as soon as posible !</p>
		<p>Have a great day!</p>
      </div>
      <div class="modal-footer">
        <a href="index.html" class="modal-close btn orange">Close</a>
      </div>
    </div>

  </div>

  <!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</body>
</html>
    
<?php } ?>
