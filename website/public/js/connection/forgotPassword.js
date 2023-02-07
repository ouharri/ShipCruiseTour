class FormValidation {
    formValues = {
        email: "",
    }
    formInput = {
        email: "",
    }
    errorValues = {
        emailErr: "",
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
        this.formInput.email = document.getElementById('email')
    }

    getInputsValue() {
        this.formValues.email = document.getElementById('email').value.trim()
    }

    validateEmail() {
        //abc@gmail.co.in
        const regExp = /^([a-zA-Z0-9-_\.]+)@([a-zA-Z0-9]+)\.([a-zA-Z]{2,10})(\.[a-zA-Z]{2,8})?$/
        if (this.formValues.email === "") {
            this.errorValues.emailErr = "* Please Enter Valid Email"
            this.showErrorMsg(0, this.errorValues.emailErr)
        } else if (!(regExp.test(this.formValues.email))) {
            this.errorValues.emailErr = "* Invalid Email"
            this.showErrorMsg(0, this.errorValues.emailErr)
        } else {
            this.errorValues.emailErr = ""
            this.showSuccessMsg(0)
        }
    }

    alertMessage() {
        const {firstnameErr, lastnameErr, emailErr, passwordErr, confirmpasswordErr} = this.errorValues
        if (emailErr === "") {
            document.getElementsByClassName('form')[0].submit();
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
ValidateUserInputs.getInputs()

document.getElementsByClassName('form')[0].addEventListener('submit', event => {
    event.preventDefault()
    ValidateUserInputs.getInputsValue()
    ValidateUserInputs.validateEmail()
    ValidateUserInputs.alertMessage()

    $(ValidateUserInputs.formInput.email).on("change keyup paste", function () {
        ValidateUserInputs.getInputsValue();
        ValidateUserInputs.validateEmail();
    })
})

$(document).ready(function (c) {
    $('.alert-close')?.on('click', function (c) {
        $('.main-mockup').fadeOut('slow', function (c) {
            $('.main-mockup').remove();
        });
    });
});