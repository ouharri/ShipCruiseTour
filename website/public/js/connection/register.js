class FormValidation {
    formValues = {
        firstname: "",
        lastname: "",
        email: "",
        password: "",
        confirmpassword: ""
    }
    formInput = {
        firstname: "",
        lastname: "",
        email: "",
        password: "",
        confirmpassword: ""
    }
    errorValues = {
        firstnameErr: "",
        lastnameErr: "",
        emailErr: "",
        passwordErr: "",
        confirmpasswordErr: ""
    }

    showErrorMsg(index, msg) {
        const form_group = document.getElementsByClassName('form-group')[index]
        form_group.classList.add('error')
        form_group.getElementsByTagName('span')[0].textContent = msg
    }

    showSuccessMsg(index) {
        const form_group = document.getElementsByClassName('form-group')[index]
        form_group.classList.remove('error')
        form_group.classList.add('success')
    }

    getInputs() {
        this.formInput.firstname = document.getElementById('firstName')
        this.formInput.lastname = document.getElementById('lastName')
        this.formInput.email = document.getElementById('email')
        this.formInput.password = document.getElementById('password')
        this.formInput.confirmpassword = document.getElementById('confirmPassword')
    }

    getInputsValue() {
        this.formValues.firstname = document.getElementById('firstName').value.trim()
        this.formValues.lastname = document.getElementById('lastName').value.trim()
        this.formValues.email = document.getElementById('email').value.trim()
        // this.formValues.phonenumber = document.getElementById('phonenumber').value.trim()
        this.formValues.password = document.getElementById('password').value.trim()
        this.formValues.confirmpassword = document.getElementById('confirmPassword').value.trim()
    }

    validateFirstname() {
        if (this.formValues.firstname === "") {
            this.errorValues.firstnameErr = "* Please Enter Your First Name"
            this.showErrorMsg(0, this.errorValues.firstnameErr)
        } else if (this.formValues.firstname.length <= 4) {
            this.errorValues.firstnameErr = "* Username must be atleast 5 Characters"
            this.showErrorMsg(0, this.errorValues.firstnameErr)
        } else if (this.formValues.firstname.length > 14) {
            this.errorValues.firstnameErr = "* Username should not exceeds 14 Characters"
            this.showErrorMsg(0, this.errorValues.firstnameErr)
        } else {
            this.errorValues.firstnameErr = ""
            this.showSuccessMsg(0)
        }
    }

    validateLastname() {
        if (this.formValues.lastname === "") {
            this.errorValues.lastnameErr = "* Please Enter Your Last Name"
            this.showErrorMsg(1, this.errorValues.lastnameErr)
        } else if (this.formValues.lastname.length <= 4) {
            this.errorValues.lastnameErr = "* Username must be atleast 5 Characters"
            this.showErrorMsg(1, this.errorValues.lastnameErr)
        } else if (this.formValues.lastname.length > 14) {
            this.errorValues.lastnameErr = "* Username should not exceeds 14 Characters"
            this.showErrorMsg(1, this.errorValues.lastnameErr)
        } else {
            this.errorValues.lastnameErr = ""
            this.showSuccessMsg(1)
        }
    }

    validateEmail() {
        //abc@gmail.co.in
        const regExp = /^([a-zA-Z0-9-_\.]+)@([a-zA-Z0-9]+)\.([a-zA-Z]{2,10})(\.[a-zA-Z]{2,8})?$/
        if (this.formValues.email === "") {
            this.errorValues.emailErr = "* Please Enter Valid Email"
            this.showErrorMsg(2, this.errorValues.emailErr)
        } else if (!(regExp.test(this.formValues.email))) {
            this.errorValues.emailErr = "* Invalid Email"
            this.showErrorMsg(2, this.errorValues.emailErr)
        } else {
            this.errorValues.emailErr = ""
            this.showSuccessMsg(2)
        }
    }

    validatePassword() {
        if (this.formValues.password === "") {
            this.errorValues.passwordErr = "* Please Provide a Password"
            this.showErrorMsg(3, this.errorValues.passwordErr)
        } else if (this.formValues.password.length <= 4) {
            this.errorValues.passwordErr = "* Password must be atleast 5 Characters"
            this.showErrorMsg(3, this.errorValues.passwordErr)
        } else if (this.formValues.password.length > 10) {
            this.errorValues.passwordErr = "* Password should not exceeds 10 Characters"
            this.showErrorMsg(3, this.errorValues.passwordErr)
        } else {
            this.errorValues.passwordErr = ""
            this.showSuccessMsg(3)
        }
    }

    validateConfirmpassword() {
        if (this.formValues.confirmpassword === "") {
            this.errorValues.confirmpasswordErr = "* Invalid Confirm Password"
            this.showErrorMsg(4, this.errorValues.confirmpasswordErr)
        } else if (this.formValues.confirmpassword === this.formValues.password && this.errorValues.passwordErr === "") {
            this.errorValues.confirmpasswordErr = ""
            this.showSuccessMsg(4)
        } else if (this.errorValues.passwordErr) {
            this.errorValues.confirmpasswordErr = "* An error occurred in Password Field"
            this.showErrorMsg(4, this.errorValues.confirmpasswordErr)
        } else {
            this.errorValues.confirmpasswordErr = "* Password Must Match"
            this.showErrorMsg(4, this.errorValues.confirmpasswordErr)
        }
    }

    alertMessage() {
        const {firstnameErr, lastnameErr, emailErr, passwordErr, confirmpasswordErr} = this.errorValues
        if (firstnameErr === "" && lastnameErr === "" && emailErr === "" && passwordErr === "" && confirmpasswordErr === "") {
            document.forms['form'].submit();
        } else {
            // swal("Give Valid Inputs","Click ok to Continue" ,"error")
        }
    }

    removeInputs() {
        const form_groups = document.getElementsByClassName('form-group')
        Array.from(form_groups).forEach(element => {
            element.getElementsByTagName('input')[0].value = ""
            element.getElementsByTagName('span')[0].textContent = ""
            element.classList.remove('success')
        })
    }
}

const ValidateUserInputs = new FormValidation()
ValidateUserInputs.getInputs();

document.getElementsByClassName('form')[0].addEventListener('submit', event => {
    event.preventDefault()
    ValidateUserInputs.getInputsValue()
    ValidateUserInputs.validateFirstname()
    ValidateUserInputs.validateLastname()
    ValidateUserInputs.validateEmail()
    ValidateUserInputs.validatePassword()
    ValidateUserInputs.validateConfirmpassword()
    ValidateUserInputs.alertMessage()

    $(ValidateUserInputs.formInput.firstname).on("change keyup paste", function(){
        ValidateUserInputs.getInputsValue()
        ValidateUserInputs.validateFirstname();
    })

    $(ValidateUserInputs.formInput.lastname).on("change keyup paste", function(){
        ValidateUserInputs.getInputsValue()
        ValidateUserInputs.validateLastname();
    })

    $(ValidateUserInputs.formInput.email).on("change keyup paste", function(){
        ValidateUserInputs.getInputsValue()
        ValidateUserInputs.validateEmail();
    })

    $(ValidateUserInputs.formInput.password).on("change keyup paste", function(){
        ValidateUserInputs.getInputsValue()
        ValidateUserInputs.validatePassword()
    })

    $(ValidateUserInputs.formInput.confirmpassword).on("change keyup paste", function(){
        ValidateUserInputs.getInputsValue()
        ValidateUserInputs.validateConfirmpassword()
    })
})

$(document).ready(function (c) {
    $('.alert-close')?.on('click', function (c) {
        $('.w3l-mockup-form').fadeOut('slow', function (c) {
            $('.w3l-mockup-form').remove();
        });
    });
});

