<?php
try{
 $countrycode=$_POST['country'];
 $soapclient = new SoapClient('http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?wsdl');
 $param=array('sCountryISOCode'=>$countrycode);
 $response =$soapclient->FullCountryInfo($param);
 echo '<br><br><br>';
 $array = json_decode(json_encode($response), true);

  function display($array_rec){
     if($array_rec){
       foreach($array_rec as $value){

        if(is_array($value)){
          display($value);
        }
        else{
          echo "<h3>$value</h3>";
        }
      }
  }
}
  display($array);

}catch(Exception $e){
    echo $e->getMessage();
}
?>