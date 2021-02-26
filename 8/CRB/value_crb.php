<?php
 $file = simplexml_load_file("http://www.cbr.ru/scripts/XML_daily.asp?date_req=".date("d/m/Y"));
 
 $xml = $file->xpath("//Valute[@ID='R01235']");
 $valute_usd = strval($xml[0]->Value);
 echo "Dollar: ".$valute_usd; // получим курс доллара
  
 echo '<br>';
 $xml = $file->xpath("//Valute[@ID='R01239']");
 $valute_euro = strval($xml[0]->Value);
 echo  "Euro: ".$valute_euro; // получим курс евро
?>
