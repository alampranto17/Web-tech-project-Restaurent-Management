console.log("LoginValidation.js loaded");

function validation(event){
    // Stop the browser's default submit so we control when to post
    event.preventDefault();
    console.log("validation function called");
    const gmail = document.getElementById("email");
    const password = document.getElementById("password");
    const gmailValue = gmail.value.trim();
    const passwordValue = password.value.trim();

    if (gmailValue === "" || passwordValue === "") {
        alert("Email and Password are required!");
        return false;
    }
    if (!/^[A-Za-z0-9]+@[a-z]+\.[a-z]{3,}$/.test(gmailValue)) {
        console.log("Email is not valid");
        alert("Please enter a valid email address!");
        return false;
    }
    if (!/[A-Za-z0-9]{6,}/.test(passwordValue)) {
        alert("Password must be at least 6 characters long!");
        return false;
    }

    // All good: submit the form manually without reloading on validation failure
    event.target.submit();
    return true;
}




