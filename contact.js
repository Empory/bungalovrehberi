
const form = document.querySelector(".contact");
form.addEventListener("input", () => {
    const submitBtn = document.querySelector("#submitBtn");
    submitBtn.disabled = !form.checkValidity();
});
window.onload=()=>{
    const $ = document.querySelector.bind(document);
    const $All = document.querySelectorAll.bind(document);
    
    $('#menu').onclick=()=>{  
        $(".next").classList.toggle("disabled")           
        $('#menu').classList.toggle('rotate')
        $('.nav-page1').classList.toggle('transform')
        $('.nav-page2').classList.toggle('transform')
        $('.menu-line1').classList.toggle('rotate1')
        $('.menu-line2').classList.toggle('rotate2')
    }
}
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

const phone_input = document.querySelector(".tel")

phone_input.addEventListener("input",()=>{
    phone_input.setCustomValidity("");
    phone_input.checkValidity();
})
if(phone_input.checkValidity()){
    phone_input.style.borderColor = "red";
}
phone_input.addEventListener("invalid",()=>{
    if (phone_input.value === "") {
        phone_input.setCustomValidity("Lütfen telefon numaranızı giriniz");

    } else {
        phone_input.setCustomValidity("telefon numaranızı bu formatta olacak şekilde giriniz 123-456-7890")
    }
})
// function validate(){
//     const inputs = document.querySelector(".contact input")
//     inputs.foreach((input)=>{
//         if (input.value=="") {
//             return false;
//         } else {
//             return true
//         }
//     })
// }


// function validateForm(event){
//     var demo = document.querySelectorAll(".demo").value;
//     demo.foreach((demos)=>{
//         if (validateForm) {
//             document.querySelectorAll(".demo").classList.remove("hidden")
//         } else {
//             document.querySelectorAll(".demo").classList.add("hidden");
//             alert("geçerli giriş")
//         }
//         event.preventDefault();


//     }) 
//     document.querySelector('.contact').addEventListener('submit', validateForm);
// }
