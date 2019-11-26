function validate(){
	function clickButton() {
		var button = document.getElementById("submitButton");
	    //Add event listener
	    button.addEventListener("click", function(){
	    	var xmlhttp = new XMLHttpRequest();
	    	var firstname = document.getElementById("fname").value;
		    var lastname = document.getElementById("lname").value;
		    var email = document.getElementById("email").value;
		    var password = document.getElementById("pass").value;
	  
	    	xmlhttp.open("POST", "addp.php?firstname="+firstname+"&lastname="+lastname+"&email="+email+"&password="+password);
	    	xmlhttp.send();
	      
	    	xmlhttp.onreadystatechange = function() {
	        	if (this.readyState === 4 && this.status === 200) {
	        	// show.innerHTML=this.responseText;
	        	}
	    	}
	    });//End of click button
	}
	clickButton();
}
window.onload=validate;

// var firstname = document.getElementById("fname").value;
		    // var lastname = document.getElementById("lname").value;
		    // var email = document.getElementById("email").value;
		    // var password = document.getElementById("pass").value;

		    // var emailcheck=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		    // var passcheck=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

		    // if(firstname != "" && lastname != "" && lastname != "" && email != "" && password != ""){
		    // 	document.getElementById("p1").innerHTML = "";
		    	
		    // 	if(password.match(passcheck)){
		    // 		document.getElementById("p3").innerHTML="";
		    		
		    // 		if(email.match(emailcheck)){
		    // 			document.getElementById("p2").innerHTML = "";
		    // 			return true;
		    // 		}
		    // 		else{//password
		    // 			document.getElementById("p3").innerHTML = "Email incorrect";
		    // 		}
		    // 	}
		    // 	else{//password
		    // 		document.getElementById("p2").innerHTML = "Password incorrect";
		    // 	}
		    // }else{//everything
		    // 	document.getElementById("p1").innerHTML = "A field is empty";
		    // 	return false;
		    // }