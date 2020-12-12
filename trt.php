<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<button onclick="post()";>check</button>
<button onclick="func()"; >click</button>
</body>
</html>


<?php
$name="sknehal";
$s="sdsdksnd";
echo "<h1>$name</h1>";
function str()
{
echo "dksd";



}
str();
?>
<script >
	let str={
"name":"sk nehal","city":"bhubaneswar",
"condition":"true",
"color":["red","yellow","orange","blue"]
	};

document.write( ' '+str.color[1]);

 function func(){

window.location="m.php?x=" +JSON.stringify(str);
}

let pp='{"name":"sknehal","city":"dehli","state":"odisha"}';
let u=JSON.parse(pp);
 
document.write(' '+u.state);

</script>

<script type="text/javascript">
	
var string={'name':"sknehal",'age':23,'rollno':34,'branch':'mca'};

"students":['name':'sk nehal','age':34]
['name':'sk tanbir','age':33]
['name':'sk washoim','age':44]




function post(){

window.location="m.php?hello="+JSON.stringify(string);


}
document.write(string.name);

</script>
