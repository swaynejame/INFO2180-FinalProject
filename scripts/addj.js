function validate(){
	function clickButton() {
		var button = document.getElementById("submitButton");
	    //Add event listener
	    button.addEventListener("click", function(event){
	    	var xmlhttp = new XMLHttpRequest();
	    	var firstname = document.getElementById("fname").value;
		    var lastname = document.getElementById("lname").value;
		    var email = document.getElementById("email").value;
		    var password = document.getElementById("pass").value;
		    
		    var emailcheck=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		    var passcheck=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
		    
		    if(firstname != ""){
		    	var validf = true;
		    	// document.getElementById("fname").className='null';
		    }
		    else{
		    	validf=false;
		    	document.getElementById("p1").innerHTML="Invaild firstname";
		    	// document.getElementById("fname").className='check';
		    }
		    
		    if(lastname != ""){
		    	var validl = true;
		    	// document.getElementById("lname").className='null';
		    }
		    else{
		    	validl=false;
		    	document.getElementById("p2").innerHTML="Invaild lastname";
		    	// document.getElementById("lname").className='check';
		    }
		    
		    if(password != ""){
		    	if(password.match(passcheck)){
		    		var validp = true;
		    		// document.getElementById("pass").className='null';
		    		// document.getElementById("passcon").className='null';
		    	//var validp = true;
		    	}
		    	
		    }
		    else{
		    	validp=false;
		    	document.getElementById("p3").innerHTML="Invaild password";
		    	// document.getElementById("pass").className='check';
		    	// document.getElementById("passcon").className='check';
		    }
		    
		    if(email != ""){
		    	if(email.match(emailcheck)){
		    		var valide = true;
		    		// document.getElementById("email").className='null';
		    	}
		    }
		    else{
		    	valide=false;
		    	document.getElementById("p4").innerHTML="Invaild email";
		    	// document.getElementById("email").className='check';
		    }
	 
	    	 function myValid(){
		    	if(validf == true && validl == true && valide == true && validp == true){
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
		    	xmlhttp.open("POST", "scripts/addp.php");
		    	xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		    	xmlhttp.send("firstname="+firstname+"&lastname="+lastname+"&email="+email+"&password="+password);
		      
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