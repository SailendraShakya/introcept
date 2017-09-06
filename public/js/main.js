$(function() {
  // Fill client detail page with its value
  $('.open-popup-link').click(function(){
    $('h3.client-name').html($(this).data('name'));
    $('#gender_value').html($(this).data('gender'));
    $('#phone_value').html($(this).data('phone'));
    $('#address_value').html($(this).data('address'));
    $('#nationality_value').html($(this).data('nationality'));
    $('#education_value').html($(this).data('education'));
    $('#dob_value').html($(this).data('dob'));
    $('#contact_value').html($(this).data('contact'));
    $('#email_value').html($(this).data('email'));
  });
  // Magnific popup for client detail page
  $('.open-popup-link').magnificPopup({
    type:'inline',
    midClick: true
  });
  // Pagination in client listing page
  $('#listing_table').paginate({ limit: 5 });
  // Date picker for dob field
  $( ".datepicker" ).datepicker({
    changeMonth: true, changeYear: true, yearRange: '1900:+0'
  });
  // Disable enter key in education field
  $("#education").keypress(function(event) {
    if(event.which == '13') {
      return false;
    }
  });
  // Custom validation method for phone number
  $.validator.addMethod('customphone', function (value, element) {
    return this.optional(element) || /^(\+91-|\+91|0)?\d{10}$/.test(value);
  }, "Please enter a valid phone number");

  // Front end validation for client form
  $("#enq_form").validate({
    rules: {
      name: "required",
      gender: "required",
      phone: {
        required: true,
        customphone: true
      },
      email: {
        required: true,
        email: true
      },
      address: "required",
      nationality: "required",
      date_of_birth: "required",
      education: "required",
      contact: "required"
    },
    messages: {
      name: "Please enter your name",
      gender: "Please enter your gender",
      phone: "Please enter your phone number",
      email: "Please enter a valid email address",
      address: "Please enter your address",
      nationality: "Please enter your nationality",
      date_of_birth: "Please enter your date of birth",
      education: "Please enter your eductional detail",
      contact: "Please enter mean of contact"
    },
    submitHandler: function(form) {
      form.submit();
    }
  });

});