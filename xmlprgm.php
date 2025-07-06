<?php
$xml= simplexml_load_file('s1.xml')or
die("erroe");

foreach($xml->emp as $xml)
{
    echo"ename".$xml->name."<br>";
     echo"color".$xml->name."<br>";
      echo"eadd".$xml->name."<br>";
       echo"eno".$xml->name."<br>";
       
}
?>