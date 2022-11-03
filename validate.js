function chkEmail() {
  var email = document.getElementById("email").value;
  if (email.length > 0) { // check for non-empty string
	  var regexp = /^([\w\.-])+@([\w]+\.){1,3}([A-z]){2,3}$/;
	  if (regexp.test(email)) {
		  return true;
	  }
	  else {
		  alert("The email format you entered " + email + 
              " is incorrect.");
		  email.select();
		  email.focus();
		  return false;
	  }

  }
}
	
function chkPhone() {
  var phone = document.getElementById("tel").value;
  if (phone.length > 0) { // check for non-empty string
	  var regexp = /^[689]\d{7,7}$/;
	  if (regexp.test(phone)) {
		  return true;
	  }
	  else {
			alert("The number you entered has incorrect format. \nThe first digit should begin with either a 6, 8 or 9 and should contain 8 numbers.");
			phone.select();
			phone.focus();
			return false;
	  }
  }
}

function chkfirstName() {
    var name = document.getElementById("fname").value;
    if(name.length > 0){ // check for non-empty string
        var regexp = /^([A-z',.\s?]+)$/;
        if(regexp.test(name)){
            return true;
        }
        else{
            alert("First name has incorrect format, please enter alphabetical characters.");
			name.select();
			name.focus();
            return false;
        }
    }
}

function chklastName() {
    var name = document.getElementById("lname").value;
    if(name.length > 0){ // check for non-empty string
        var regexp = /^([A-z',.\s?]+)$/;
        if(regexp.test(name)){
            return true;
        }
        else{
            alert("Last name has incorrect format, please enter alphabetical characters.");
			name.select();
			name.focus();
            return false;
        }
    }
}

function chkName() {
    var name = document.getElementById("name").value;
    if(name.length > 0){ // check for non-empty string
        var regexp = /^([A-z',.\s?]+)$/;
        if(regexp.test(name)){
            return true;
        }
        else{
            alert("Name has incorrect format, please enter alphabetical characters.");
			name.select();
			name.focus();
            return false;
        }
    }
}

function chkPassword() {
    var password = document.getElementById("password").value;
    if(password.length > 0){ // check for non-empty string
        var regexp = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/;
        if(regexp.test(password)){
            return true;
        }
        else{
            alert("Password should contain min six characters, at least one letter, one number and one special character");
			password.select();
			password.focus();
            return false;
        }
    }
}