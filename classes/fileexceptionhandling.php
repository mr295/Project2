<?php

  class FileExceptionHandling{

    private $c = true;
    
    public function __construct(){
    }
    
    function exists($fname){
      $e = file_exists($fname);
      if (!$e) {
        echo 'fname is ' . $fname;
        echo "The file does not exist.  The program will now terminate.<br>";
        die();
      }
      else{
        echo "The file exists.<br>";
      }
      return $e;
    }
    
    function canWrite($fname){
      $cw = is_writable($fname);

      return $cw;
    }
    
    function write($fname, $txt){
        $fp = fopen($fname, "w");
        fwrite($fp, $txt);
        fclose($fp);
    }
  }
?>