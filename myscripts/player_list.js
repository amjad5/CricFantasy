$(document).ready(function() {
	$.ajax({type: "GET", url: "../fantasy/getPlayerList.php",
		dataType:'json',                   
        success : function(data) {
            if (data.success) {
            	newdata = JSON.parse(data.options);
            	currTeam = "";
            	preTeam = "Gujrat Lions";
	        	for (var key in newdata) {
					innerObj = JSON.parse(newdata[key]);
	            	play_option = '<option value="'+innerObj.p_id+'">'+innerObj.p_name+'</option>';
	            	
	            	currTeam = innerObj.p_team; 
	            	

	            	if( innerObj.p_spec == "Bat" || innerObj.p_spec == "Mix"){
	            		$('#bat1').append(play_option);
	            		$('#bat2').append(play_option);
	            		$('#bat3').append(play_option);
	            	}

	           	 	if(innerObj.p_spec == "WK"){
	            		$('#wk').append(play_option);
	            	}

	            	if(innerObj.p_spec == "Bowl" || innerObj.p_spec == "Mix"){
	            		$('#bowl1').append(play_option);
	        			$('#bowl2').append(play_option);
	        			$('#bowl3').append(play_option);
	        		}

        			$('#mix1').append(play_option);
        			$('#mix2').append(play_option);
        			$('#mix3').append(play_option);
        			$('#mix4').append(play_option);
				}
            }
            else {
                // Handle error
                console.log('Error Occured');
        	}
    	}	
	}); //End Ajax Player list

	$.ajax({type: "GET", url: "../fantasy/show_points.php",
		dataType:'json',                   
	    success : function(data) {
	        if (data.success) {
	        	console.log(data);

	        	$('#dash_plr_points').append(data.options);
	        }
	        else {
	            console.log('Error Occured');
	    	}
		}	
	}); //End Ajax Player list


});