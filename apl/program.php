<?php
class Program
{
  public static function tampilForm(obat $obj)
  {
    $obj->form() ;
  }  
  public static function lakukanIsiData(obat $obj, $data)
  {
    $obj->isiData($data) ;
 	$obj->getData();
  }
  
}
?>