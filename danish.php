<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jquery</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	 <h1>I asdlaskd;aslkdl;ksdl;asdam Danish</h1> <button type="button" id="danish" >Click</button>
	 <br /> <br />
	 <img src="images/c.png" id="one" height="100px"> <br />
	 <button id="clicker">Toggle Asad</button>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#clicker").mouseover(function(){
				$("#one").fadeToggle(2000);
			});
			$("#danish").click(function(){
				$("h1").text("Text IS Changed");
				//alert(v);
			});
		});
	</script>
</body>
</html>