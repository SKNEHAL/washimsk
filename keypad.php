<?php
if(isset($_GET['x'])&& !empty($_GET['x']))
{

$p=json_decode($_GET['x']);

echo $p->name."<br>";


}

?>