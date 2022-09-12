document.forms[0].addEventListener("submit", function(e) {
    
    if ((parseFloat(document.getElementById("iSalario").value) <= 0) || document.getElementById("iSalario").value === "") {
        window.alert("Salário deve ser informado e maior que zero!");
        document.getElementById("iSalario").focus();
        e.preventDefault();

    }
});