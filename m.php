<?php
if(isset($_GET['x']))
{

$p=json_decode($_GET['x']);

echo "<h2>$p->name</h2>";
echo $p->city;


}
if(isset($_GET['hello'])){

 $s=json_decode($_GET['hello']);
echo $s->students.name;

}
?>
<style>

h2{

color: red;
	}
	</style>
<?php
 $nehal=file_get_contents("process.php");
 
echo"<br>". $nehal;


?>