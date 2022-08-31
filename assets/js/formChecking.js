export default class FormValues {
    constructor(name, company, email, subject, message) {
        this.name = name;
        this.company = company;
        this.email = email;
        this.subject = subject;
        this.message = message;
    }

    check () {
        let inputsObj = {'nombre': this.name, 'email': this.email, 'asunto': this.subject, 'mensaje': this.message};
        let incompleteInputs = []
        if (this.name && this.email && this.subject && this.message) {
            return true;
        } else {
            Object.entries(inputsObj).forEach(([key, value]) => {
                if(value == "") {
                incompleteInputs.push(key);
                }
            })
            return incompleteInputs;
        }
    }

} 