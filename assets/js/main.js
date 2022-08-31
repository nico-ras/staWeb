import FormValues from './formChecking.js';


let sendBtn = document.getElementById('formSubmit');

sendBtn.addEventListener("click", () => {

    let name = document.getElementById('formName').value;
    let company = document.getElementById('formCompany').value;
    let email = document.getElementById('formEmail').value;
    let subject = document.getElementById('formSubject').value;
    let message = document.getElementById('formMessage').value;

    
    let checked = new FormValues(name, company, email, subject, message);
    let checkValue = checked.check()
    if ( checkValue != true ) {
        checkValue.forEach((e) => alert(`Debes completar el campo ${e}`)     
        )
    }
})

    




