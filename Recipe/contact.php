<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
  <link rel="stylesheet" type="text/css" href="css/menu&footer.css">
</head>
<body>
<div class="menu">
    <ul class="NavBarLeft">
      <li><a class="active" href="home.php">Food.</a></li>
    </ul>
</div>

<div class="container" style="clear: both;">
  <form action="send_mail_process.php" method="post">
    <label for="name">Name::</label> 
    	<input type="text" id="fname" name="name" placeholder="Your name..">

   	<label for="email">Email</label> 
    	<input type="email" id="lname" name="email" placeholder="Your last name..">

    <label for="subject">Subject</label>
    	<textarea id="subject" name="subject" placeholder="Write something.." style="height:50px"></textarea>

    <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name="sendmail" value="Submit">
  </form>
</div>

</body>
</html>