/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// override jquery validate plugin defaults
$.validator.setDefaults({
    highlight: function (element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function (element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function (error, element) {
        if (element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }
});
    $.validator.addMethod("checkotp",
            function (value, element) {
                return false;
            },
            'One time password is invalid.');
//$.validator.addMethod("extension", function(value, element, param) {
//    param = typeof param === "string" ? param.replace(/,/g, '|') : "png|jpe?g";
//    return this.optional(element) || value.match(new RegExp(".(" + param + ")$", "i"));
//}, $.format("Please upload image of JPG, JPEG or PNG format"));
$.validator.addMethod("alpha",
    function (value, element) {
        var reg = /^[a-zA-Z\s]+$/;
        return reg.test(value);
    },
'Please use only alphabetic characters.');

$.validator.addMethod("checkmonth",
    function (value, element) {
        return false;
    },
'Your card\'s expiration month is invalid.');
$.validator.addMethod("checkcard",
    function (value, element) {
        return false;
    },
'Your card number is invalid.');
$.validator.addMethod("emailValidate", function (value) {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,3})$/;
    return reg.test(value);
}, 'Please enter a valid email address');

$.validator.addMethod("validateHtml", function (value) {
    return !value.match(/([\<])([^\>]{1,})*([\>])/i);
}, 'HTML tags are not allowed');
$.validator.addMethod("validateNumber",
    function (value, element) {
        if (value == '') {
            return true;
        } else {
            var reg = /^([0-9])+$/;
            return reg.test(value);
        }
    },
'Please use only numeric');
$.validator.addMethod("regExCheckName",
        function (value, element) {
            return /^.*(?=.*[a-zA-Z]).*$/.test(value);
}, 'Please use atleast one alphabet');
$.validator.addMethod("alphabetNum",
        function (value, element) {
            return /^[a-zA-Z0-9\ ]+$/.test(value);
}, 'Only alphanumeric is allowed');
$.validator.addMethod("alphanumeric",
        function (value, element) {
            return /^(?=.*?[A-Za-z])[a-zA-Z0-9\ ]+$/.test(value);
}, 'Please use atleast one alphabet');
$.validator.addMethod("validateOneEach",
        function (value, element) {
            return /^(?=.*?[A-Za-z])(?=.*?[\d])[A-Za-z\d!@#$%^&*.()_+=]{8,23}$/.test(value);
}, 'Please enter a combination of 8-23 alphanumeric characters');