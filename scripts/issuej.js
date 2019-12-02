function validate(){
	function clickButton() {
		var button = document.getElementById("submitButton");
	    //Add event listener
	    button.addEventListener("click", function(event){
	    	var xmlhttp = new XMLHttpRequest();
	    	var title = document.getElementById("title").value;
		    var description = document.getElementById("des").value;
		    var assign = document.getElementById("assign").value;
		    var type = document.getElementById("ty").value;
		    var priority = document.getElementById("pri").value;
		    
		    if(title != ""){
		    	var validt = true;
		    	// document.getElementById("fname").className='null';
		    }
		    else{
		    	validt=false;
		    	document.getElementById("p1").innerHTML="Invaild title";
		    	// document.getElementById("fname").className='check';
		    }
		    
		    if(description != ""){
		    	var validd = true;
		    	// document.getElementById("lname").className='null';
		    }
		    else{
		    	validd=false;
		    	document.getElementById("p2").innerHTML="Invaild description";
		    	// document.getElementById("lname").className='check';
		    }
		    
		    if(assign != ""){
		    	var valida = true;
		    }
		    else{
		    	valida=false;
		    	document.getElementById("p3").innerHTML="Invaild assignment";
		    	document.getElementById("assign").focus();
		    	// document.getElementById("pass").className='check';
		    	// document.getElementById("passcon").className='check';
		    }
		    
		    
		    if(type != ""){
		    	var validty = true;
		    }
		    else{
		    	validty=false;
		    	document.getElementById("p4").innerHTML="Invaild type";
		    	document.getElementById("ty").focus();
		    	// document.getElementById("pass").className='check';
		    	// document.getElementById("passcon").className='check';
		    }
		    
		     if(priority != ""){
		    	var validp = true;
		    }
		    else{
		    	validp=false;
		    	document.getElementById("p5").innerHTML="Invaild priority";
		    	document.getElementById("pri").focus();
		    	// document.getElementById("pass").className='check';
		    	// document.getElementById("passcon").className='check';
		    }
	 
	    	 function myValid(){
		    	if(validt == true && validd == true && valida == true && validty == true && validp == true){
			    	return true;
			    }
			    else{
			    	return false;
			    }
		    }
		    
		    
		    if(myValid()==false){
		    	event.preventDefault();
		    }
		    else{
		    	event.preventDefault();
		    	xmlhttp.open("POST", "../scripts/issuep.php");
		    	xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		    	xmlhttp.send("title="+title+"&description="+description+"&assigned="+assign+"&type="+type+"&priority="+priority);
		      
		    	xmlhttp.onreadystatechange = function() {
		        	if (this.readyState === 4 && this.status === 200) {
		        	console.log(this.responseText);
		        	}
		    	}
		    }
	    });//End of click button
	}
	clickButton();
}
window.onload=validate;