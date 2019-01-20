<h1> Simple Contact us Form With Ajax and PHP PDO</h1>
<p>
1. download this repo.
2. extract files.
3. move : "jquery-3.2.1.min.js,jquery.form.min.js" from "js" folder to your js scripts folder.
then link them inside your code :
<br>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery.form.min.js"></script>
<br>
4. under them put these code and enjoy
<br>
	
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
	
</p>
