function checkForm() {
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
	return true;
}

let openHam = document.querySelector('#openHam');
let closeHam = document.querySelector('#closeHam');
let navigationItems = document.querySelector('#nav-items');

const hamburgerEvent = (navigation, close, open) => {
    navigationItems.style.display = navigation;
    closeHam.style.display = close;
    openHam.style.display = open;
};

openHam.addEventListener('click', () => hamburgerEvent("flex", "block", "none"));
closeHam.addEventListener('click', () => hamburgerEvent("none", "none", "block"));

/* 

Developed by AdityaKrCodes
GitHub: https://github.com/adityakrcodes
Repo: https://github.com/adityakrcodes/School-Bus-Booking-System
Instagram: https://instagram.com/adityakrcodes
X: https://x.com/adityakrcodes

NOTE: You are free to copy the code but credits will be appreciated.
*/