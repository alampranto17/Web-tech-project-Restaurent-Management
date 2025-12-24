
function validation(){

    const gmail=document.getElementById("email");
    const password=document.getElementById("password");
    let gmailValue=gmail.value.trim();
    let passwordValue=password.value.trim();

  if(!validation(gmailValue, passwordValue)){
    return;
  }

if (gmailValue === "" || passwordValue === "") {
        return false;
    }
    if (!/^[A-Za-z0-9]+@[a-z]+\.[a-z]{3,}$/.test(gmailValue)){
        console.log("Email is not valid");
        return false;
    }
    if(!/[A-Za-z0-9]{6,}/.test(passwordValue)){
        return false;
    }
    return true;
}




