function validatingForm(){
    
    const temps = document.getElementById("temps").value;
    const verbe = document.getElementById("verbe").value;
    const temps_error = document.querySelector("#temps-erreur");
    const verbe_error = document.querySelector("#verbe-erreur");
    if(temps == ""){
        temps_error.innerText = "Veuillez sélectionner un temps";
        return false;
    }else if(verbe == ""){
        verbe_error.innerText = "Veuillez sélectionner un verbe";
        return false;
    }
}