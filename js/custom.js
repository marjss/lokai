/* 
 * Custom Javascript for America elements
 * 
 * @author  Sudhanshu saxena
 * @version Initial 1.0
 * @revision 0
 */







function doLogout() {
    $.ajax({
        url: "logout.php",
        success: function () {
            var url = removeURLParameter(window.location.href, 'code')
            window.location.href = url;
            location.reload();
        }
    })
}
function showForm(id, hide) {
    $("#" + id).toggle();
    $("#" + hide).toggle();
}
function removeURLParameter(url, parameter) {

    //prefer to use l.search if you have a location/link object
    var urlparts = url.split('?');
    if (urlparts.length >= 2) {

        var prefix = encodeURIComponent(parameter) + '=';
        var pars = urlparts[1].split(/[&;]/g);

        //reverse iteration as may be destructive
        for (var i = pars.length; i-- > 0; ) {
            //idiom for string.startsWith
            if (pars[i].lastIndexOf(prefix, 0) !== -1) {
                pars.splice(i, 1);
            }
        }

        url = urlparts[0] + '?' + pars.join('&');
        return url;
    } else {
        return url;
    }
}

$(document).ready(function () {
    var cartobj;
    $("[type='number']").keypress(function (evt) {
        evt.preventDefault();
    });
    $('#login').on('hidden.bs.modal', function () {

        $(this).find('form')[0].reset();
    });

    //validation for login

    $("#OtpForm").validate({
        rules: {
            email: {
                required: true,
                emailValidate: true
            }
        },
        messages: {
            email: "Please enter a valid email address",
        },
        submitHandler: function () {
            var email = $("#email").val();
            $.ajax({
                type: 'POST',
                url: "otp.php",
                data: {email: email},
                success: function (success) {
                    $("#backButton").remove();
                    $("#submitButton").remove();
                    var count = 300;
                    var counter = setInterval(timer, 1000); //1000 will  run it every 1 second
                    function timer()
                    {
                        count = count - 1;
                        if (count <= 0)
                        {
                            clearInterval(counter);
                            $("#otpButton").replaceWith('<a href="javascript:void(0)" data-email="' + email + '" class="btn btn-primary btn-primary" id="regenotpButton"><span class="glyphicon glyphicon-log-in"></span> Regenerate OTP</a>')
                            return;
                        }
                        var content = '<div class="form-group" id="otp-group"><label class="sr-only" for="otp">OTP</label><div class="input-group mb-2 mr-sm-2 mb-sm-0"><input type="text" class="form-control" name="otp" id="otp" placeholder="OTP" required="required"></div></div><a href="javascript:void(0)" class="btn btn-primary btn-primary" id="otpButton" ><span class="glyphicon glyphicon-log-in"></span> Submit OTP</a>';

                        $("#email-group").replaceWith(content);
                        $("#timer").html(count + " Seconds left to input OTP")
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            })
        }
    });

    $(document).on('click', "#otpButton", function () {
        $("#otp").rules("remove", "checkotp");
        if ($("#otp").valid()) {
            var otp = $("#otp").val();
            $.ajax({
                type: 'POST',
                url: "loginOTP.php",
                data: {otp: otp},
                success: function (success) {
                    if (success == "success") {
                        location.reload();
                    } else {
                        $("#otp").rules('add', {checkotp: true});
                        $("#otp").valid();
                        return
                    }
                },
                error: function (error) {}
            });
        }
    });
    $(document).on('click', "#cart_icon", function () {
        $.ajax({
            type: 'POST',
            data: {show: 1},
            url: "addTocart.php",
            success: function (success) {
                cartObj = $.parseJSON(success)
                if (cartObj.status && cartObj.qty != 0) {

                    $("#buynow").attr("data-session", cartObj.qty);
                    $("#editqty").val(cartObj.qty);
                    $("td#price_sub").text(cartObj.price);
                    $("th#subtotal").text(cartObj.price);
                    $("th#shipping").text(cartObj.shipping);
                    $("th#total").text(cartObj.gtotal);
                    $("#cart").modal("show");
                } else {
                    $("#cart_empty").modal("show");
                }
            },
            error: function (error) {}
        });
    })
    $(document).on('click', "#regenotpButton", function () {
        var email = $(this).data("email");
        $(this).replaceWith('<a href="javascript:void(0)" class="btn btn-primary btn-primary" id="otpButton" ><span class="glyphicon glyphicon-log-in"></span> Submit OTP</a>');
        $.ajax({
            type: 'POST',
            url: "otp.php",
            data: {email: email},
            success: function (success) {
                if (success == 'true') {
                    var count = 300;
                    var counter = setInterval(timer, 1000);
                    function timer()
                    {
                        count = count - 1;
                        if (count <= 0)
                        {
                            clearInterval(counter);
                            $("#otpButton").replaceWith('<a href="javascript:void(0)" data-email="' + email + '" class="btn btn-primary btn-primary" id="regenotpButton"><span class="glyphicon glyphicon-log-in"></span> Regenerate OTP</a>')
                            return;
                        }

                        $("#timer").html(count + " Seconds left to input OTP")
                    }
                } else {
                    alert("Problem in generating OTP")
                }

            },
            error: function (error) {}
        })
    });
    $(document).on('click', "#buynow", function () {
        var cart = $(this).attr('data-session');
        $.ajax({
            type: 'POST',
            data: {add: cart},
            url: "addTocart.php",
            success: function (success) {
                cartObj = $.parseJSON(success)
                if (cartObj.status) {
                    $("#buynow").attr("data-session", cartObj.qty);
                    $("#editqty").val(cartObj.qty);
                    $("td#price_sub").text(cartObj.price);
                    $("th#subtotal").text(cartObj.price);
                    $("th#shipping").text(cartObj.shipping);
                    $("th#total").text(cartObj.gtotal);
                    $("#cart").modal("show");
                } else {
                    location.reload();
                    return
                }
            },
            error: function (error) {}
        });
    });
    var carQty = $("#editqty").val();
    $("#editqty").on('keyup change click', function () {
        if (this.value !== carQty) {

            $.ajax({
                type: 'POST',
                data: {add: this.value},
                url: "addTocart.php",
                success: function (success) {
                    cartObj = $.parseJSON(success);

                    if (cartObj.status) {

                        $("#buynow").attr("data-session", cartObj.qty);
                        $("#editqty").val(cartObj.qty);
                        $("td#price_sub").text(cartObj.price);
                        $("th#subtotal").text(cartObj.price);
                        $("th#shipping").text(cartObj.shipping);
                        $("th#total").text(cartObj.gtotal);
                        $("#cart").modal("show");
                    } else {
                        location.reload();
                        return
                    }
                },
                error: function (error) {}
            });
//              value = this.value;
        } else {
            emptyCart();
        }
    });
    $(document).on('click', "#checkout", function () {
        $.ajax({
            type: 'POST',
            async: true,

            url: "checkSession.php",
            success: function (success) {
                cartobj = $.parseJSON(success);
                if (cartobj.status) {
                    $("#cart").modal("hide");
                    $("#checkout_model").modal("show");
                } else {
                    $("#cart").modal("hide");
                    $("#login").modal("show");
                }

            },
            error: function (error) {}
        });
    });

    $('#cart').on('show.bs.modal', function () {


    });
    /*Payment form*/
//    Stripe.setPublishableKey("pk_test_6pRNASCoBOKtIshFeQd4XMUh");
    $("#exp_month").change(function(){
            $("#exp_month" ).rules("remove","checkmonth" );
        });
        $("#exp_year").change(function(){
            $("#exp_month" ).rules("remove","checkmonth" );
        });
        $("#cardnumber").keyup(function(){
            $("#cardnumber" ).rules("remove","checkcard" );
        });
        Stripe.setPublishableKey(STRIPE_TEST_PUB_KEY);
    $("#payment_form").validate({
//        ignore: ":disabled",
        rules: {
            name_card : {
                required: true,
                alpha:true,
                maxlength: 50,
                minlength:1
            },
            cardnumber : {
                required: true,
                maxlength: 19,
                minlength: 14,
                validateNumber: true
            },
            exp_month : {
                required: true
            },
            exp_year : {
                required: true,
            },
            cvv : {
                required: true,
                maxlength: 4,
                minlength: 3,
                validateNumber: true
            },
            
        },
        messages: {
            name_card : {
                required: "Name is required",
                maxlength: "Maximum required character is 50 for Card holder name.",
            },
            cardnumber : {
                required: "Card number is required",
                maxlength: "Maximum required character is 19 for Card number.",
                minlength: "Minimum required character is 14 for Card number.",
                validateNumber: "Please use numeric digits."
            },
            exp_month : {
                required: "Expiration month is required.",
            },
            exp_year : {
                required: "Expiration year is required.",
            },
            cvv : {
                required: "CVV is required",
                maxlength: "Maximum required character is 4 for CVV",
                validateNumber: "Please use numeric digits."
            },
            
        },
        submitHandler: function(validator, form, submitButton) {
            form.preventDefault();
                Stripe.card.createToken({
                        number: $('#cardnumber').val(),
                        cvc: $('#cvv').val(),
                        exp_month: $('#exp_month').val(),
                        exp_year: $('#exp_year').val(),
			name: $('#name_card').val(),
                    }, stripeResponseHandler);
            
                    // createToken returns immediately - the supplied callback submits the form if there are no errors
                    
                    return false; // submit from callback
        }
    }); 
    $("#address_form").validate({
//        ignore: ":disabled",
        rules: {
            email : {
                required: true,
                emailValidate:true,
            },
            fname : {
                required: true,
                maxlength: 100,
                validateHtml: true,
                regExCheckName: true
            },
            lname : {
                required: true,
                maxlength: 100,
                validateHtml: true,
                regExCheckName: true
            },
            phone : {
                required: true,
                maxlength: 20,
                validateNumber: true
            },
            address : {
                required: true,
                maxlength: 200,
                validateHtml: true
            },
            country : {
                required: true,
            },
            state : {
                required: true,
                maxlength: 50,
                validateHtml: true
            },
            city : {
                required: true,
                maxlength: 50,
                validateHtml: true
            },
            zipcode : {
                required: true,
                maxlength: 10,
                validateNumber: true
            },
            
        },
        messages: {
            fname : {
                required: "First name is required",
                maxlength: "Maximum character limit is 100.",
            },
            lname : {
                required: "Last name is required",
                maxlength: "Maximum character limit is 100.",
            },
            phone : {
                required: "Phone number is required",
                maxlength: "Maximum character limit is 20.",
                validateNumber: "Please use numeric digits."
            },
            address : {
                required: "Address is required.",
                maxlength: "Maximum character limit is 200."
            },
            country : {
                required: "Country is required.",
                
            },
            state : {
                required: "State is required",
                maxlength: "Maximum character limit is 50."
            },
            city : {
                required: "City is required",
                maxlength: "Maximum character limit is 50."
            },
            zipcode : {
                required: "City is required",
                maxlength: "Maximum character limit is 10.",
                validateNumber: "Please use numeric digits."
            }
            
        },
        submitHandler: function(validator, form, submitButton) {
            form.preventDefault();
                
                    return false; // submit from callback
        }
    }); 
    /**Wizard script*/
var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

allWells.hide();

navListItems.click(function (e) {

    e.preventDefault();
    var $target = $($(this).attr('href')),
            $item = $(this);
//            console.log(!$item.hasClass('disabled'))
    if (!$item.hasClass('disabled')) {



        //navListItems.removeClass('btn-primary').addClass('btn-default');
        if ($item.attr('id') != $(navListItems[1]).attr('id'))
        {
            $(navListItems[1]).removeClass('btn-danger').addClass('btn-success');
        }
        //$('#item3').addClass('btn-success');
        $item.addClass('btn-primary');
        allWells.hide();
        $target.show();
        $target.find('input:eq(0)').focus();
    }
});

allNextBtn.click(function () {
var  isValid = $("#address_form").valid(),
    curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url'], input[type='password'],input[type='number'], input[type='email']");
            
    if (isValid){
         $.ajax({
                type: 'POST',
                data: $("#address_form").serialize(),
                url: "saveAddress.php",
                success: function (success) {
                    console.log(success)
                    var Obj = $.parseJSON(success);
                    return
                },
            error: function (error) {
                console.log(error)
            }
                });
        nextStepWizard.removeAttr('disabled').trigger('click');
        $("#rqty").text(cartobj.qty)
        $("#rqty").text(cartobj.qty)
        $("td#rprice_sub").text(cartObj.price);
        $("th#rsubtotal").text(cartObj.price);
        $("th#rshipping").text(cartObj.shipping);
        $("th#rtotal").text(cartObj.gtotal);
    }
});

$('div.setup-panel div a#AddressSetup-step-1').trigger('click');
    /**Stripe*/
    
function stripeResponseHandler(status, response) {
    // Grab the form:
      var $form = $('#payment_form');
      if (response.error) { // Problem!
    // Show the errors on the form
        if(response.error.param == 'exp_month'){
            $("#exp_month").rules('add', {checkmonth: true});
            $("#exp_month").valid();
            return
        }
        if(response.error.param == 'number'){
            $("#cardnumber").rules('add', {checkcard: true});
            $("#cardnumber").valid();
            return
        }
//        $form.find('.payment-errors').text(response.error.message);
        
        $form.find('button').prop('disabled', false); // Re-enable submission
        } else { // Token was created!
        // Get the token ID:
        var token = response.id;
        // Insert the token into the form so it gets submitted to the server:
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));
        console.log($form)
        $form.get(0).submit();

      }
    }
    function emptyCart() {
        $.ajax({
            type: 'POST',
            data: {add: 0},
            url: "addTocart.php",
            success: function (success) {
                cartObj = $.parseJSON(success);
//                            $("#buynow").attr("data-session",0);
                $("#editqty").val(0);
                $("td#price_sub").text(0);
                $("th#subtotal").text(0);
                $("th#shipping").text(0);
                $("th#total").text(0);
                $("#cart").modal("hide");
                $("#cart_empty").modal("show");
                return

            },
            error: function (error) {}
        });
    }


});