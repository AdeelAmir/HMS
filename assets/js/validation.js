//Number Validation code here...
function checkInput(ob)
{
    var invalidChars = /[^0-9]/gi;
    if(invalidChars.test(ob.value))
    {
        ob.value = ob.value.replace(invalidChars,"");
    }
}

function formValidator(ele) {
    let triggerEle = $(ele);
    triggerEle.find(".req-field").each(function() {
        if ($(this).val() === "" || $(this).val() === null || $(this).hasClass('email') && validateEmail($(this).val()) === false) {
            $(this).addClass('input-danger').focus();
        } else {
            $(this).removeClass('input-danger');
        }
    });

    return triggerEle.find(".input-danger").length;
}

function validateEmail(email) {
    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}