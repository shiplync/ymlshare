<html lang="en" class="no-js">
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	
		
Click on button:
<button name="subject" id="page1" onclick="sendRequestTopage1()"  value="HTML">page</button>
<button name="subject" id="page2" onclick="sendRequestTopage2()" value="CSS">page2</button>
<h2 id="result" > </h2>

<script>


function sendRequestTopage1(){

	var formData={"request":"page1"};

	$.ajax({
		url: "http://mytestapp-be-service:80",
		type: 'POST',
		data: formData,
		success: function(data)
		{
				$("#result").html(data);
		}, 
		error: function(jqXHR, textStatus, errorThrown)
		{
			console.log(textStatus);
			console.log(errorThrown);
			console.log(jqXHR);
		}
	});
	
}


function sendRequestTopage2(){

	var formData={"request":"page2"};

	$.ajax({
		url: "http://mytestapp-be-service:80",
		type: 'POST',
		data: formData,
		success: function(data)
		{
			$("#result").html(data);
			
		}, 
		error: function(jqXHR, textStatus, errorThrown)
		{
			console.log(textStatus);
			console.log(errorThrown);
			console.log(jqXHR);
		}
	});
}

</script>


</body>
</html>
