function checkForm() {
    fetch("check.php")
        .then((response) => {
            if(!response.ok){ // Before parsing (i.e. decoding) the JSON data,
                              // check for any errors.
                // In case of an error, throw.
                throw new Error("Something went wrong!");
            }

            return response.json(); // Parse the JSON data.
        })
        .then((data) => {
             // This is where you handle what to do with the response.
             alert(data); // Will alert: 42
        })
        .catch((error) => {
             // This is where you handle errors.
        });
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