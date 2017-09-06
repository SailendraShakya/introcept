<!DOCTYPE html>
<html lang="en">
<head>
  <title>Introcept Code Testing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="{{ url('css/magnific-popup.css') }}">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
  <script type="text/javascript" src="{{ url('js/jquery-paginate.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
  <script>
  $(function() {
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
    $('.open-popup-link').magnificPopup({
  type:'inline',
  midClick: true
});

    $('#listing_table').paginate({ limit: 5 });
    $( ".datepicker" ).datepicker({
           changeMonth: true, changeYear: true, yearRange: '1900:+0'
    });
    $("#education").keypress(function(event) {
    if(event.which == '13') {
      return false;
    }
  });

     $.validator.addMethod('customphone', function (value, element) {
        return this.optional(element) || /^(\+91-|\+91|0)?\d{10}$/.test(value);
    }, "Please enter a valid phone number");


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
  </script> 

</script>
<style type="text/css">
h3.client-name{
  text-transform: uppercase;
  color: #777;
}

#client_detail span{
  color: #777;
}

.w150{
    padding-left:26px;
    width:150px;
    display:inline-block
}

.white-popup {
  position: relative;
  background: #FFF;
  padding: 20px;
  width: auto;
  max-width: 500px;
  margin: 20px auto;
}
  .error{
    color: red;
  }
  .page-navigation a {
  margin: 0 2px;
  display: inline-block;
  padding: 3px 5px;
  color: #ffffff;
  background-color: #70b7ec;
  border-radius: 5px;
  text-decoration: none;
  font-weight: bold;
}
 
.page-navigation a[data-selected] {
  background-color: #3d9be0;
}
</style>
</head>
<body>
<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <span class="navbar-brand">Introcept Code Testing >></span>
    </div>
    <ul class="nav navbar-nav">
      <li class="{{ Request::segment(1) == '' ? 'active' : null }}">{{ HTML::link('/', 'Add Clients', true)}}</li>
      <li class="{{ Request::segment(1) == 'client' ? 'active' : null }}">{{ HTML::link('client/listing', 'Clients', true)}}</li>
      <li class="{{ Request::segment(1) == 'about' ? 'active' : null }}">{{ HTML::link('/about', 'About Us', true)}}</li>
      <li class="{{ Request::segment(1) == 'contact' ? 'active' : null }}">{{ HTML::link('/contact', 'Contact Us', true)}}</li>
    </ul>
  </div>
</nav>
@yield('content')
</div>
</body>
</html>
