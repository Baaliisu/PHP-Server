<?php>

class server
{
  public function __construct()
  {
  
  }
  
  public function getStudentName($id_array)
  {
    return 'William';
  }
}

$params = array('uri' => 'path/file/location');
$server = new SoapServer(NULL, $params);
$server->setClass('server');
$server->handle();

?>
