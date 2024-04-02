
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
/* 

Developed by AdityaKrCodes
GitHub: https://github.com/adityakrcodes
Repo: https://github.com/adityakrcodes/School-Bus-Booking-System
Instagram: https://instagram.com/adityakrcodes
X: https://x.com/adityakrcodes

NOTE: You are free to copy the code but credits will be appreciated.
*/