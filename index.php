<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" id="myform" method="post" enctype="multipart/form-data">
		First Name:
        <input type="text" value="first name" name="fname">
		<br>
        Last Name :
        <input type="text" value="last name" name="lname">
        <br>
        Email :
        <input type="text" value="email@mail.com"  name="email">
		<br>
        
        <div id="result"> </div>

		<input type="button" value="Send" id="sendData">
	</form>
</body>
</html>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery.form.min.js"></script>
<script>
	$(document).ready(function(){
		$("#sendData").click(function(){
            // here put id of your form.
			var formData = new FormData($("#myform")[0]);
        $.ajax({
            // put the your php file link.
            url: 'php/send_data.php',
            type: 'post',
            data: formData,
           
        processData: false,
         contentType: false,
            crossDomain: true,
        }).done(function(response) {
         alert(response);
          $("#result").html(response);  
        }).fail(function() {
            console.log('Failed');
        });

        return false;

		});
	
    });

	
</script>