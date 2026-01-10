function validationUser()
{
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let roleSelected = document.querySelector('input[name="role"]:checked');
    
    if(!name || name.trim() === "") {
        alert("Please enter a name");
        return false;
    }

    if(!/^[a-z0-9]+@[a-z]+\.[a-z]{3,}$/.test(email)) {
        alert("Please enter a valid email");
        return false;
    }
    
    if(password.length < 6) {
        alert("Password must be at least 6 characters");
        return false;
    }
    
    if(!roleSelected) {
        alert("Please select a role");
        return false;
    }
    
    return true;
}

function reset(){

    document.getElementById("UserFrom").reset();

}