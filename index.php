<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<center>
		<button id="my-btn">Return JSON</button>
	</center>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	<script>
		$(document).ready(function(){
			$("#my-btn").click(function(){

              
              $.ajax({
              	contentType: 'application/json',
              	url: './json.php',
              	
              	success: function(data){
                    console.log(data);
              	},
              	error: function(e){
              		console.log(e);
              	}
              });

			})
		})
	</script>
</body>
</html>