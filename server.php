<?php>
/* GET PHPMYADMIN, CREATE A DATABASE TITLED "soap" AND CREATE A TABLE CALLED "students" WITH 2 COLUMNS (Id and Name). Name; Type=Varchar, Length=32. Id; Type=INT, Length=1, Null=Checked, Index=Primary, A_=Checked   */
class server
{
  private $con;
  public function __construct()
  {
    $this->con = (is_null($this->con)) ? self::connect() : $this->con;
  }
  
  static function connect()
  {
    $con = mysql_connect('localhost /*local host*/', 'root /*username*/', 'root /*password*/');
    $db = mysql_select_db('soap /*name of database*/', $con);
  }
  }
  
  public function getStudentName($id_array)
  {
    $id = $id_array['id']
    $sql = "SELECT name FROM students WHERE id = '$id'";
    $qry = mysql_query($sql, $this->con);
    $res = mysql_fetch_array($qry);
    return $res['name'];
  }
}

$params = array('uri' => 'path/file/location');
$server = new SoapServer(NULL, $params);
$server->setClass('server');
$server->handle();

?>
