function validarPassword(pass,rpass){
    if(inputs[pass].value!=inputs[rpass].value){
        alert("Las contraseñas no coinciden.");
        inputs[rpass].value="";
    }
}