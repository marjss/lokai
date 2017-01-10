<div class="footer-wrap">
			<footer>
		<div class="container">
		<div class="footer-left">
		<ul>
			<li>©2016 &nbsp; Lokai</li>
			<li><a href="#" class="" data-toggle="modal" data-target="#terms">Terms of use</a></li>
			<li><a href="#" class="" data-toggle="modal" data-target="#privacy">Privacy Policy</a></li>
			<div class="clearfix"></div>
		</ul>
		<small>Disclaimer :  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. </small>
		</div>
		<div class="footer-right">
		<ul>
		    <li><a href="#" target="_blank" class="tw-icon"><img src="images/tw-icon.png" alt=""></a></li>
			<li><a href="#" target="_blank" class="insta-icon"><img src="images/insta-icon.png" alt=""></a></li>
		</ul>
		</div>
		</div>	
		</footer>
			</div>
		</div>
		<div class="footer-wrap-clone"></div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
                
		<script src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/jquery.pagepiling.min.js"></script>
		<script src="js/common.js"></script>
                <div id="login" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title " style="color:#000">Login</h4>
                        </div>
                        <div class="modal-body">
                            <div id ="genericButton">
                           <a href="<?php echo $loginUrl; ?>" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-link"></span> Sign in with Instagram</a>
                           <a href="process.php" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-retweet"></span> Sign in with Twitter</a>
                           <a href="javascript:void(0)" onClick="showForm('OtpForm','genericButton');" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-envelope"></span> Sign in with OTP</a>
                           </div>
                            <form class="form" id="OtpForm" style='display: none;'>
                                <div class="form-group" id="email-group">
                                    <label class="sr-only" for="email">Email</label>
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                      <div class="input-group-addon">@</div>
                                      <input type="email" class="form-control" name="email" id="email" placeholder="Email address" required="required">
                                    </div>
                                </div>

                                
                                    <div class="form-group">
                                        <a href="javascript:void(0)" class="btn btn-primary btn-primary" id="backButton" onclick="showForm('genericButton','OtpForm');"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
                                        <button type="submit" id="submitButton" class="btn btn-primary">Get OTP</button>
                                        
                                    </div>
                                <div class="time" id="timer" style="color:#000"></div>
                              </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                    </div>
                </div>
	</body>
<script>
    // override jquery validate plugin defaults
    $.validator.setDefaults({
    highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function(error, element) {
        if(element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }
});
    jQuery.validator.addMethod("validEmail", function(value, element) 
    {
    if(value == '') 
        return true;
    var temp1;
    temp1 = true;
    var ind = value.indexOf('@');
    var str2=value.substr(ind+1);
    var str3=str2.substr(0,str2.indexOf('.'));
    if(str3.lastIndexOf('-')==(str3.length-1)||(str3.indexOf('-')!=str3.lastIndexOf('-')))
        return false;
    var str1=value.substr(0,ind);
    if((str1.lastIndexOf('_')==(str1.length-1))||(str1.lastIndexOf('.')==(str1.length-1))||(str1.lastIndexOf('-')==(str1.length-1)))
        return false;
    str = /(^[a-zA-Z0-9]+[\._-]{0,1})+([a-zA-Z0-9]+[_]{0,1})*@([a-zA-Z0-9]+[-]{0,1})+(\.[a-zA-Z0-9]+)*(\.[a-zA-Z]{2,6})$/;
    temp1 = str.test(value);
    return temp1;
}, "Please enter valid email.");
    function doLogout(){
           $.ajax({
               url:"logout.php",
               success:function(){
                   var url = removeURLParameter(window.location.href, 'code')
                   window.location.href = url;
                   
               }
           })
       } 
    function showForm(id,hide){
           $("#"+id).toggle();
           $("#"+hide).toggle();
       } 
    function removeURLParameter(url, parameter) {
        
    //prefer to use l.search if you have a location/link object
    var urlparts= url.split('?');   
    if (urlparts.length>=2) {

        var prefix= encodeURIComponent(parameter)+'=';
        var pars= urlparts[1].split(/[&;]/g);

        //reverse iteration as may be destructive
        for (var i= pars.length; i-- > 0;) {    
            //idiom for string.startsWith
            if (pars[i].lastIndexOf(prefix, 0) !== -1) {  
                pars.splice(i, 1);
            }
        }

        url= urlparts[0]+'?'+pars.join('&');
        return url;
    } else {
        return url;
    }
}
    
    $(document).ready(function(){
        $('#login').on('hidden.bs.modal', function () {
           
            $(this).find('form')[0].reset();
        });
        //validation for login
        
        $("#OtpForm").validate({
			rules: {
                            email: {
                                required: true,
                                validEmail: true
                            }
                        },
                            messages: {
                                email: "Please enter a valid email address",
			},
                        submitHandler: function() {
                            var email = $("#email").val();
                          $.ajax({
                                type: 'POST',
                                url:"otp.php",
                                data:{email:email},
                                success:function(success){
                                    $("#backButton").remove();
                                    $("#submitButton").remove();
                                    var count=300;
                                    var counter=setInterval(timer, 1000); //1000 will  run it every 1 second
                                    function timer()
                                    {
                                      count=count-1;
                                      if (count <= 0)
                                      {
                                         clearInterval(counter);
                                         $("#otpButton").replaceWith('<a href="javascript:void(0)" data-email="'+email+'" class="btn btn-primary btn-primary" id="regenotpButton"><span class="glyphicon glyphicon-log-in"></span> Regenerate OTP</a>')
                                         return;
                                      }
                                      var content = '<div class="form-group" id="otp-group"><label class="sr-only" for="otp">OTP</label><div class="input-group mb-2 mr-sm-2 mb-sm-0"><input type="text" class="form-control" name="otp" id="otp" placeholder="OTP" required="required"></div></div><a href="javascript:void(0)" class="btn btn-primary btn-primary" id="otpButton" ><span class="glyphicon glyphicon-log-in"></span> Submit OTP</a>';
                                    
                                      $("#email-group").replaceWith(content);
                                      $("#timer").html(count+" Seconds left to input OTP")
                                    }
                                },
                                error:function(error){
                                    console.log(error);
                                }
                            })
                         }
		});
                $(document).on('click',"#otpButton",function(){
                    if($("#otp").valid()){
                        var otp = $("#otp").val();
                        $.ajax({
                            type: 'POST',
                                    url:"loginOTP.php",
                                    data:{otp:otp},
                                    success:function(success){
                                        if(success){
                                            var url = removeURLParameter(window.location.href, 'code')
                                            window.location.href = url;
                                        }
                                    },
                                    error:function(error){}
                        });
                    }
                });
                $(document).on('click',"#regenotpButton",function(){
                    var email = $(this).data("email");
                    $(this).replaceWith('<a href="javascript:void(0)" class="btn btn-primary btn-primary" id="otpButton" ><span class="glyphicon glyphicon-log-in"></span> Submit OTP</a>');
                    $.ajax({
                                type: 'POST',
                                url:"otp.php",
                                data:{email:email},
                                success:function(success){
                                    if(success == 'true'){
                                        var count=300;
                                        var counter=setInterval(timer, 1000);
                                        function timer()
                                        {
                                          count=count-1;
                                          if (count <= 0)
                                          {
                                             clearInterval(counter);
                                             $("#otpButton").replaceWith('<a href="javascript:void(0)" data-email="'+email+'" class="btn btn-primary btn-primary" id="regenotpButton"><span class="glyphicon glyphicon-log-in"></span> Regenerate OTP</a>')
                                             return;
                                          }

                                          $("#timer").html(count+" Seconds left to input OTP")
                                        }
                                    } else {
                                        alert("Problem in generating OTP")
                                    }
                                    
                                },
                                error:function(error){}
                    })
                });
                
                
    });
</script>
</html>