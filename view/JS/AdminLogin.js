	
	function isValid(Registration) {
		const email = Registration.email.value;
		const password = Registration.password.value;


		if (email === "" || password === "") {
			document.getElementById("message").innerHTML = "Please fill up the Login form properly"
			return false;
		}

		return true;
	}