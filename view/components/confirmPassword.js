let validatePass = () => {
    let pass = document.getElementById("password");
    let confPass = document.getElementById("conf-password");
    if (pass.value != confPass.value && pass.value != "") {
        document.getElementById("cadastrar").disabled = true;
        document.getElementById("conf-pass-lbl").innerHTML = "As senhas não são iguais";
        document.getElementById("conf-pass-lbl").style.color = "rgb(255,0,0)";
    } else {
        document.getElementById("conf-pass-lbl").innerHTML = "";
        document.getElementById("cadastrar").disabled = false;
        confPass.minLength = 8;
    }
}
let showPass = (inpfield, btn) => {
    document.getElementById(inpfield).type = (document.getElementById(inpfield).type == "text") ? "password" : "text";
    document.getElementById(btn).getElementsByClassName("bi")[0].classList.toggle("bi-eye");
    document.getElementById(btn).getElementsByClassName("bi")[0].classList.toggle("bi-eye-slash");
}