<html>
	<head>
	</head>
	<body>
<?php

  include('bootstrap.php');

  echo '<h3>Application Autoloading</h3>';

  echo '<b>Selected Laptops:</b><br>';


  $elements = array(
      "Brand" => array('Dell', 'HP', 'Apple'), 
      "Processor" => array('i3' , 'i7' , 'i5'),
      "RAM" => array('4GB', '8GB', '12GB'),
      "HDD" => array('500GB', '1TB', '2TB'),
      "Price" => array('$399' , '$900' , '$1199'),
  );

  $vals = array_values($elements);
  $headers = True;
  $h = new HTMLElementCreator();
  $h->makeTable($elements, $headers);

  echo '<br><b>Link for the Specification:</b>';
  echo '<br>Click here for more Info : ';
  $h->link('SPECS','http://laptops.specout.com/');

  echo '<br><br><b>Five Cars I like:</b><br>';
  $cars = array('BMW M5','Jauar XJL','Mercedes AMG','Tesla');
  $h->makeList($cars);


  echo '<br><b>Files:</b><br>';
  echo '<br>Writing some text to file.txt<br>';
  $filehandler = new FileExceptionHandling();
  if ($filehandler->exists("file.txt")){
    if ($filehandler->canWrite("file.txt")){
      $filehandler->write("file.txt", "This is Test File");
  }
}


  $c = new CURL();
  echo '<br><b>CURL Request:</b><br>';
  echo '<br>The contents of the file.txt file is: ';
  echo $c->httpGet("https://web.njit.edu/~mr295/Project2/gile.txt");

?>
	</body>
</html>