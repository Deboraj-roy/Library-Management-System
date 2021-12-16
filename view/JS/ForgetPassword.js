	
	function isValid(Registration) {
		const email = Registration.email.value;
		const password = Registration.password.value;
		const confirm_password = Registration.confirm_password.value;


		if (email === "" || password === "" || confirm_password === "" ) {
			document.getElementById("message").innerHTML = "Please fill up the password change form properly;"
			return false;
		}

		return true;
	}