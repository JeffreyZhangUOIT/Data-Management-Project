<?php
//database configuration
$config['mysql_host'] = "sofe2800.c0h6qxbwqnzj.us-east-1.rds.amazonaws.com";
$config['mysql_user'] = "admin";
$config['mysql_pass'] = "sofe2800project";
$config['db_name'] = 'project';
$config['table_name'] = $_GET['tname'];

//connect to host
mysql_connect("sofe2800.c0h6qxbwqnzj.us-east-1.rds.amazonaws.com", "admin", "sofe2800project");

//select database
@mysql_select_db("project") or die( "Unable to select database");
$xml          = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
$root_element = $config['table_name'];
$xml         .= "<$root_element>";
//select all items in table
$sql = "SELECT * FROM ".$config['table_name'];

$result = mysql_query($sql);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

if(mysql_num_rows($result)>0)
{
   while($result_array = mysql_fetch_assoc($result))
   {
      $xml .= "<".$config['table_name'].">";

      //loop through each key,value pair in row
      foreach($result_array as $key => $value)
      {
         //$key holds the table column name
         $xml .= "<$key>";

         //embed the SQL data in a CDATA element to avoid XML entity issues
         $xml .= "<![CDATA[$value]]>";

         //and close the element
         $xml .= "</$key>";
      }

      $xml.="</".$config['table_name'].">";
   }
}
//close the root element
$xml .= "</$root_element>";

//send the xml header to the browser
header ("Content-Type:text/xml");

//output the XML data
echo $xml;

?>
