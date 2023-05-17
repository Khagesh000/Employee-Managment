$(document).ready(function(){
	$error = $('<center><h2 class = "text-danger">You Are Not a Student Here...<h2></center>');
	$error1 = $('<center><h2 class = "text-danger">Please Scan Your Barcode ID<h2></center>');
	$('search').click(function(){
		$error.remove();
		$error1.remove();
		$student = $('student').val();
		if($student == ""){
			$error1.appendTo('#error');
		}else{	
			$.post('check.php', {student: $student},
				function(show){
					if(show == 'Success'){
						$.ajax({
							type: 'POST',
							url: 'login.php',
							data: {
								student: $student
							},
							success: function(result){
								$result = $('<h2 class = "text-warning">You have been login:</h2>' + result).appendTo('#result');
								$('#student').val('');
								setTimeout(function(){
									$result.remove();
								}, 5000);
							}
						});
					}else{
						$('#student').val('');
						$error.appendTo('#error');
					}
				}
			)
		}	
	});
});