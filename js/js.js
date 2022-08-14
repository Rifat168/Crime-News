function validateForm()
{
  var name = document.forms["post"]["username"];
  var pass = document.forms["post"]["passid"];
  
  if(name.value != "admin" && pass.value == "admin"){
		window.alert("Wrong Username!!");
		
		return false;
  }
  if(name.value == "admin" && pass.value != "admin"){
		window.alert("Wrong Passrowd!!");
		
		return false;
  }
  if(name.value != "admin" && pass.value != "admin"){
    window.alert("Wrong Username & Password!!");

		return false;
  }

  alert("Successfully Send The Registration Form");
	return true;

}