// Document is ready
$(document).ready(function () {

    $(".login-btn-list").hover(function () {
        $(this).toggleClass("btn_hover");
    });
  
    $('.ham_icon').on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('toggled');
      })
      $('.ham_icon').on('click', function(e) {
        e.preventDefault();
        $(this).parent().parent().toggleClass('menu_active');
        if($('.header-nav').hasClass('menu_active')){
            $('body').css('overflow-y', 'hidden');
          }
          else{
            $('body').css('overflow-y', 'auto');
          }
      })

      $('.radio-btn-plot p label').click(function () {
       $('.svg-arrow-img').css('display', 'none');
       $('.both-forms').css({
        'opacity' : '1',
        'cursor' : 'auto',
        'pointer-events' : 'auto',
        'user-select' : 'auto'
     });
    });

     $('.lender-rb label').click(function () {
        $('.borrower-form.documents-wrap').css('display', 'none');
        $('.lender-form.documents-wrap').css('display', 'flex');
    }); 
    $('.borrower-rb label').click(function () {
        $('.borrower-form.documents-wrap').css('display', 'flex');
        $('.lender-form.documents-wrap').css('display', 'none');
    }); 
   


    // Validate Username
    // $("#usercheck").hide();
    // let usernameError = true;
    // $("#usernames").keyup(function () {
    //     validateUsername();
    // });
    
         // element scroll top in view
         var winTop, winBottom;
         var $animation_elements = $(".contain-wrap");
         var $window = $(window);
         stayScroll = false;
         getScroll = false;
    
         function check_if_in_view() {
             var d = $window.height();
             var f = $window.scrollTop();
             var e = f + d;
             $.each($animation_elements, function () {
                 var c = $(this);
                 var a = c.outerHeight();
                 var b = c.offset().top;
                 var h = b + a;
                 if (h >= f && b <= e) {
                     c.addClass("in-view");
                 }
             });
         }
         $window.on("scroll resize", check_if_in_view);
         $window.trigger("scroll");

    // function validateUsername() {
    //     let usernameValue = $("#usernames").val();
    //     if (usernameValue.length == "") {
    //     $("#usercheck").show();
    //     usernameError = false;
    //     return false;
    //     } else if (usernameValue.length < 3 || usernameValue.length > 10) {
    //     $("#usercheck").show();
    //     $("#usercheck").html("length of username must be between 3 and 10");
    //     usernameError = false;
    //     return false;
    //     } else {
    //     $("#usercheck").hide();
    //     }
    // }
    
    // Validate Email
    // const email = document.getElementById("email");
    // email.addEventListener("blur", () => {
    //     let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
    //     let s = email.value;
    //     if (regex.test(s)) {
    //     email.classList.remove("is-invalid");
    //     emailError = true;
    //     } else {
    //     email.classList.add("is-invalid");
    //     emailError = false;
    //     }
    // });
    
    // Validate Password
    $("#passcheck").hide();
    let passwordError = true;
    $("#password").keyup(function () {
        validatePassword();
    });
    function validatePassword() {
        let passwordValue = $("#password").val();
        if (passwordValue.length == "") {
        $("#passcheck").show();
        passwordError = false;
        return false;
        }
        if (passwordValue.length < 3 || passwordValue.length > 10) {
        $("#passcheck").show();
        $("#passcheck").html(
            "length of your password must be between 3 and 10"
        );
        $("#passcheck").css("color", "red");
        passwordError = false;
        return false;
        } else {
        $("#passcheck").hide();
        }
    }
    
    // Validate Confirm Password
    $("#conpasscheck").hide();
    let confirmPasswordError = true;
    $("#conpassword").keyup(function () {
        validateConfirmPassword();
    });
    function validateConfirmPassword() {
        let confirmPasswordValue = $("#conpassword").val();
        let passwordValue = $("#password").val();
        if (passwordValue != confirmPasswordValue) {
        $("#conpasscheck").show();
        $("#conpasscheck").html("**Password didn't Match");
        $("#conpasscheck").css("color", "red");
        confirmPasswordError = false;
        return false;
        } else {
        $("#conpasscheck").hide();
        }
    }
    
    // Submit button
    // $("#submitbtn").click(function () {
    //     validateUsername();
    //     validatePassword();
    //     validateConfirmPassword();
    //     validateEmail();
    //     if (
    //     usernameError == true &&
    //     passwordError == true &&
    //     confirmPasswordError == true &&
    //     emailError == true
    //     ) {
    //     return true;
    //     } else {
    //     return false;
    //     }
    // });

//kyc Form submit

$("#rd1 input:radio").click(function() {
    alert("rd1");
$("#kyctype").val("lender");
});
$("#rd2 input:radio").click(function() {
    alert("rd2");
$("#kyctype").val("borrower");
});

$.validator.addMethod(
    "regex",
    function(value, element, regexp) {
        return this.optional(element) || regexp.test(value);
    },
    "Please check your input."
);
  
if ($("#kycForm").length > 0) {
$("#kycForm").validate({
rules: {
pan:{
        required: true,
        regex: /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/
    },
gender:{
        required: true,
    },
married_status:{
        required: true,
    },
occupation:{
        required: true,
    },
address:{
        required: true,
    },
city:{
        required: true,
    },
pincode:{
        required: true,
        digits: true
    },
},
messages: {
pan: {
required: 'Pan number is missing',
regex: 'Please enter pan number format correct'
},
gender: {
required: 'Please choose your gender',
},
married_status: {
required: 'Please choose your Married Status',
},
occupation: {
required: 'Please enter your occupation',
},
address: {
required: 'Please enter your address',
},
city: {
required: 'Please enter your city',
},
pincode: {
required: 'Please enter your pincode',
digits: 'Pincode should be in number format'
},
},
submitHandler: function(form) {
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$('#kycsubmitbtn').html('Please Wait...');
$("#kycsubmitbtn"). attr("disabled", true);
$.ajax({
url: '/kyc_create',
type: "POST",
data: $('#kycForm').serialize(),
success: function( response ) {
        $('#kycsubmitbtn').html('Submit');
        $("#kycsubmitbtn"). attr("disabled", false);
        alert('Ajax form has been submitted successfully');
        document.getElementById("kycForm").reset();
        location.reload();
    },
    error: function(response) {
              console.log(response);
          }
});
}
})
}

  
if ($("#msme_form").length > 0) {
$("#msme_form").validate({
rules: {
myfile: { required: true, extension: "png|jpeg|jpg|gif", filesize: 1048576  }
},
messages: {
myfile: "File must be JPG, GIF or PNG, less than 1MB",
},
submitHandler: function(form) {
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$.ajax({
url: '/kyc_msme_submit',
type: "POST",
data: $('#msme_form').serialize(),
success: function( response ) {
        document.getElementById("msme_form").reset();
        location.reload();
    },
    error: function(response) {
              console.log(response);
          }
});
}
})
}


    }); 

//KYC type get
function handleClick(myRadio) {
    $("#kyctype").val(myRadio.value);
}
    
    const heading = document.querySelector("#heading");

function triggerAnimationSequence(element) {
  const lettersArray = element.innerHTML.trim().split("");
  let delay = 0;

  element.innerHTML = "";
  lettersArray.forEach((letter) => {
    let span = document.createElement("SPAN");
    let attr = document.createAttribute("data-animate");

    span.setAttributeNode(attr);
    span.innerHTML = letter;
    // span.style.transitionDelay = `${delay}ms`;
    element.appendChild(span);

    void span.offsetWidth;
    span.classList.add("text-animated");
    delay += 0;
  });

  element.removeAttribute("data-animate");
}

setTimeout(() => {
  triggerAnimationSequence(heading);
}, 500);

    