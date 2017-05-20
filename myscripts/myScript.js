$(document).ready(function() {
	$.ajax({
		type: "GET", 
		url: "../fantasy/complist.php",
		dataType:'json',                   
        success : function(data) {
            if (data.success) {
            	$('#compDropDown').append(data.options);
            }
            else {
                // Handle error
                console.log('Error Occured')
            }
        }
    });
});

/*
function showAlert(){
	alert = '<div class="alert alert-success"><strong>Success!</strong> This alert box could indicate a successful or positive action.</div>';
	$('#main-top').prepend(alert);
	$('.alert-success').delay(5000).fadeOut();
}
*/