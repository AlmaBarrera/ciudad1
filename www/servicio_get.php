<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>READ JSON Example (getJSON)</title>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<!-- <script type="text/javascript">
 $(document).ready(function() {
 $.getJSON("http://192.168.1.80/index.php/welcome/getnews",function(result){
 $.each(result, function(i, field){
 $("#output").append("name: "+ field.name +"<br/>");
 });
 });
 });
 </script>-->
 
<!--FUNCION PARA CONSULTAR-->
<script type="text/javascript">
alert("hola");
 $(document).ready(function() {
 $.getJSON("http://192.168.1.80/index.php/welcome/getnews",function(result){
 $.each(result, function(i, field){
 $("#output").append("name: "+ field.name +"<br/><hr>");
  
 });
 });
 });
 </script>


  

</head>
<body>
 <div id="output"></div>
</body>
</html>