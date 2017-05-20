

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
/*	            		if(currTeam === preTeam){
	            		}else{
	            			preTeam = currTeam;
	            			teamName = "<option disabled>---"+currTeam+"---</option>";
		            		$('#bat1').append(teamName);
		            		$('#bat2').append(teamName);
		            		$('#bat3').append(teamName);
	            		}*/
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
	});
});



var objLength = function(obj){    
    var key,len=0;
    for(key in obj){
        len += Number( obj.hasOwnProperty(key) );
    }
    return len;
};