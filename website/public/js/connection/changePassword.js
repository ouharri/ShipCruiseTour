class FormValidation {
    formValues = {
        password: "",
        confirmpassword: ""
    }
    formInput = {
        password: "",
        confirmpassword: ""
    }
    errorValues = {
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
        this.formInput.password = document.getElementById('password')
        this.formInput.confirmpassword = document.getElementById('confirmPassword')
    }

    getInputsValue() {
        this.formValues.password = document.getElementById('password').value.trim()
        this.formValues.confirmpassword = document.getElementById('confirmPassword').value.trim()
    }

    validatePassword() {
        if (this.formValues.password === "") {
            this.errorValues.passwordErr = "* Please Provide a Password"
            this.showErrorMsg(0, this.errorValues.passwordErr)
        } else if (this.formValues.password.length <= 4) {
            this.errorValues.passwordErr = "* Password must be atleast 5 Characters"
            this.showErrorMsg(0, this.errorValues.passwordErr)
        } else if (this.formValues.password.length > 10) {
            this.errorValues.passwordErr = "* Password should not exceeds 10 Characters"
            this.showErrorMsg(0, this.errorValues.passwordErr)
        } else {
            this.errorValues.passwordErr = ""
            this.showSuccessMsg(0)
        }
    }

    validateConfirmpassword() {
        if (this.formValues.confirmpassword === "") {
            this.errorValues.confirmpasswordErr = "* Invalid Confirm Password"
            this.showErrorMsg(1, this.errorValues.confirmpasswordErr)
        } else if (this.formValues.confirmpassword === this.formValues.password && this.errorValues.passwordErr === "") {
            this.errorValues.confirmpasswordErr = ""
            this.showSuccessMsg(1)
        } else if (this.errorValues.passwordErr) {
            this.errorValues.confirmpasswordErr = "* An error occurred in Password Field"
            this.showErrorMsg(1, this.errorValues.confirmpasswordErr)
        } else {
            this.errorValues.confirmpasswordErr = "* Password Must Match"
            this.showErrorMsg(1, this.errorValues.confirmpasswordErr)
        }
    }

    alertMessage() {
        const {passwordErr, confirmpasswordErr} = this.errorValues
        if (passwordErr === "" && confirmpasswordErr === "") {
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
    ValidateUserInputs.validatePassword()
    ValidateUserInputs.validateConfirmpassword()
    ValidateUserInputs.alertMessage()

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
        $('.main-mockup').fadeOut('slow', function (c) {
            $('.main-mockup').remove();
        });
    });
});

