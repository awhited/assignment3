<?php 
  
$honda = new car("Honda", "Civic", "1994");	
$honda->$engine->setType("1.8L DOHC VTEC B18c");
$honda->$engine->setMilage("42,000");
$honda->$chassis->setDt("FWD");
$honda->$chassis->setMilage("150,000");
$honda->$chassis->setCode("EG6");

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
  <h1>Yo dawg I herd u liek objects</h1>

  <section>
    <p>My name is Austin and I like racecars. <br>I have one in my garage right now. Here are the specs.</p> 
    <?=$honda; ?> 
  </section>
</body>
</html>
