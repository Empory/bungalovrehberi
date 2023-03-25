
const form = document.querySelector(".contact");
form.addEventListener("input", () => {
    const submitBtn = document.querySelector("#submitBtn");
    submitBtn.disabled = !form.checkValidity();
});

function submitForm() {
    var frm = document.querySelector('.contact');
    frm.submit();
    if(form.checkValidity()){
    } 
    else{

        frm.reset();  
    }
    return false; 
}
const submitBtn = document.querySelector("#submitBtn");
submitBtn.addEventListener("click", (event) => {
    event.preventDefault();
    if (form.checkValidity()) {
        alert("Form başarıyla gönderildi.");
    
    } else {
        alert("Geçersiz giriş bilgisi. Lütfen bilgilerinizi kontrol edin ve tekrar deneyin.");
    }
});
 
        