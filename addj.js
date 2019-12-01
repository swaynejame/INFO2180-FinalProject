function validate(){
	function clickButton() {
		var button = document.getElementById("submitButton");
	    //Add event listener
	    button.addEventListener("click", function(e){
	    	e.preventDefault();
	    	var xmlhttp = new XMLHttpRequest();
	    	var firstname = document.getElementById("fname").value;
		    var lastname = document.getElementById("lname").value;
		    var email = document.getElementById("email").value;
		    var password = document.getElementById("pass").value;
	  
	    	xmlhttp.open("POST", "addp.php");
	    	xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	    	xmlhttp.send("firstname="+firstname+"&lastname="+lastname+"&email="+email+"&password="+password);
	      
	    	xmlhttp.onreadystatechange = function() {
	        	if (this.readyState === 4 && this.status === 200) {
	        	console.log(this.responseText);
	        	}
	    	}
	    });//End of click button
	}
	clickButton();
}
window.onload=validate;