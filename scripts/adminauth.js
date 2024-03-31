
function checkAdminForm() {
    errorText = document.getElementById("errorText");
    if (
		document.getElementById("password").value !=
		document.getElementById("confirm_password").value
	) {
		console.log("The password is not the same");
        errorText.style.display = "block";
        errorText.innerHTML = "The passwords are not the same";
		return false;
	}
    let inputPasskey = document.getElementById("passkey").value;
    let passkey = "akcisadmin@sbbs"; 

    if (inputPasskey != passkey) {
        console.log("The passkey is wrong");
        errorText.style.display = "block";
        errorText.innerHTML = "The passkey is wrong";
        return false;
    }

	return true;
}