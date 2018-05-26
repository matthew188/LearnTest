<?php
function myff($a)
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs<br />\n";
    if ($numargs >= 2) {
        echo "Second argument is: " . func_get_arg(1) . "<br />\n";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo "Argument $i is: " . $arg_list[$i] . "<br />\n";
    }
}
$min = date('d',time())-date('d',strtotime('2018-04-13'));
var_dump($min);

$dao = new PDO('mysql:host=localhost;dbname=test','root','');
$name = 'aaa';
$sth = $dao->prepare('SELECT name, status  FROM admin   WHERE name = ? ');
$sth->bindParam(1, $name, PDO::PARAM_STR);
$sth->execute();
$res = $sth->fetchAll();
print_r($res);

//
//$url = parse_url('http://www.yh.com/loupan/jianan/p2?u=1');
//var_dump($url);
//var_dump(htmlspecialchars('<script>'));
//
//var_dump($_SESSION) ;
//
//
//
//$data = array(
//    'user' => array("x","y","z")
//);
//
//echo http_build_query($data, 'flags_');