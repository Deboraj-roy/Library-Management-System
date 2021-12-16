	
	function isValid(Registration) {
		const name = Registration.name.value;
		const birthday = Registration.birthday.value;
		const religion = Registration.religion.value;
		const email = Registration.email.value;
		const phone = Registration.phone.value;
		const gender = Registration.gender.value;
		const userType = Registration.userType.value;
		const username = Registration.username.value;
		const password = Registration.password.value;
		const confirm_password = Registration.confirm_password.value;


		if (name === "" || birthday === "" || religion === "" || email === "" || phone === "" || gender === "" || userType === "" || username === "" || password === "" || confirm_password === "" ) {
			document.getElementById("message").innerHTML = "Please fill up the form properly;"
			return false;
		}

		return true;
	}