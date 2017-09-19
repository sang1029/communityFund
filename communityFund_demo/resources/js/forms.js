function formhash(form, password) {
	// Create a new element input, this will be our hashed password field. 
	var p = document.createElement("input");

	// Add the new element to our form. 
	form.appendChild(p);
	p.name = "p";
	p.type = "hidden";
	p.value = hex_sha512(password.value);

	// Make sure the plaintext password doesn't get sent. 
	password.value = "";

	// Finally submit the form. 
	form.submit();
}

function regformhash(form, email, password, conf) {
	// Check each field has a value
	if (email.value == '' ||
		password.value == '' ||
		conf.value == '') {

		alert('You must provide all the requested details. Please try again');
		return false;
	}


	// Check that the password is sufficiently long (min 6 chars)
	// The check is duplicated below, but this is included to give more
	// specific guidance to the user
	if (password.value.length < 6) {
		alert('Passwords must be at least 6 characters long.  Please try again');
		form.password.focus();
		return false;
	}

	// At least one number, one lowercase and one uppercase letter 
	// At least six characters 

	var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
	if (!re.test(password.value)) {
		alert('Passwords must contain at least one number, one lowercase and one uppercase letter.  Please try again');
		return false;
	}

	// Check password and confirmation are the same
	if (password.value != conf.value) {
		alert('Your password and confirmation do not match. Please try again');
		form.password.focus();
		return false;
	}

	// Create a new element input, this will be our hashed password field. 
	var p = document.createElement("input");

	// Add the new element to our form. 
	form.appendChild(p);
	p.name = "p";
	p.type = "hidden";
	p.value = hex_sha512(password.value);

	// Make sure the plaintext password doesn't get sent. 
	password.value = "";
	conf.value = "";

	// Finally submit the form. 
	form.submit();
	return true;
}

$(document).ready(function () {
	$('[data-toggle="tooltip"]').tooltip()
	$('#signup_password').tooltip({
		'trigger': 'hover click',
		'title': "Passwords must be at least 6 characters long and must contain:<li>At least one uppercase letter (A..Z)</li><li>At least one lower case letter (a..z)</li><li>At least one number (0..9)</li>",
		'html': true,
		'placement': 'right',
		'container': 'body'
	})
	$('#signup_password_confirmation').tooltip({
		'trigger': 'hover click',
		'title': "Your password and confirmation must match exactly.",
		'html': true,
		'placement': 'right',
		'container': 'body'
	})
});