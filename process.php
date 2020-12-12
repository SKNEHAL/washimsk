<?php
$arr=array("a"=>1,"b"=>2,"c"=>3);
 echo json_encode($arr);

?>
<!DOCTYPE html>
<html>
<head>
	 

	<title></title>
	
<script src=https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js></script>

				</head>
		<body><br><br>
	<form action="#">
	
		<label>skdskld</label>
     <input title="check" type="text" id="uv" onfocus="http(this)" onblur="ht(this)" />
       <button type="submit" onclick="c()";>click</button>
      
 
       
       
    
</form>

<script>


function c(){
var st="nehal";
let yz=document.getElementById("uv").value;
      
 if(yz==st){
 	swal("sdsd","sdb","success");
 }
 else if(yz=="")
 {
 swal("sdsd","sdb","warning");
 }
 else
 {
 	swal("sdsd","sdb","error");
 }
 }

function http(v){
v.style.backgroundColor="blue";
v.style.fontSize="29px";
v.style.color="yellow";

}
function ht(g){
g.style.backgroundColor="";

g.style.color="blue";
}


</script>

</body>
</html>


