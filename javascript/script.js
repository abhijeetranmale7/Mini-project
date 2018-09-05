function userid_validation(fname,mx,my)
	{
		var fn_len = fname.value.length;
		if (fn_len == 0 || fn_len >= my || fn_len < mx)
		{
			alert("User Id should not be empty / length be between "+mx+" to "+my);
			fname.focus();
			return false;
		}
		return true;
	}

	function userid_validation(lname,mx,my)
	{
		var ln_len = fname.value.length;
		if (ln_len == 0 || ln_len >= my || ln_len < mx)
		{
			alert("User Id should not be empty / length be between "+mx+" to "+my);
			lname.focus();
			return false;
		}
		return true;
	}

	function passid_validation(passid,mx,my)
	{
		var passid_len = passid.value.length;
		if (passid_len == 0 ||passid_len >= my || passid_len < mx)
		{
			alert("Password should not be empty / length be between "+mx+" to "+my);
			passid.focus();
			return false;
		}
		return true;
	}



	function formValidation()
	{
		alert('hi');
		var uid = document.registration.userid;
		var passid = document.registration.passid;
		var uname = document.registration.username;
		var uadd = document.registration.address;
		var ucountry = document.registration.country;
		var uzip = document.registration.zip;
		var uemail = document.registration.email;
		var umsex = document.registration.msex;
		var ufsex = document.registration.fsex; 
		if(userid_validation(uid,5,12))
		{
			if(passid_validation(passid,7,12))
			{
				if(allLetter(uname))
				{
					if(alphanumeric(uadd))
					{ 
						if(countryselect(ucountry))
						{
							if(allnumeric(uzip))
							{
							if(ValidateEmail(uemail))
							{
							if(validsex(umsex,ufsex))
							{
							}
						} 
					}
				} 
			}
		}
	}
}
return false;
}

//Copy
//JavaScript function for validating userid

function userid_validation(uid,mx,my)
{
	var uid_len = uid.value.length;
	if (uid_len == 0 || uid_len >= my || uid_len < mx)
	{
		alert("User Id should not be empty / length be between "+mx+" to "+my);
		uid.focus();
		return false;
	}
	return true;
}