<$php
class client
{
  public function __construct()
  {
    $params = array('location' => 'http://location/to/server.php',
      'uri' => 'urn://location/to/server.php',
      'trace' => 1 /* enables tracing to debug errors, with only 1 message sent back */ );
      
    $this->instance = new SoapClient(NULL, $params);
  }
}
$>
