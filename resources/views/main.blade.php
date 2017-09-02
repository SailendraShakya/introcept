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
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script>
  $(function() {
    $( ".datepicker" ).datepicker();
    $("#education").keypress(function(event) {
    if(event.which == '13') {
      return false;
    }
  });
  });

  </script> 

</script>
</head>
<body>
<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <span class="navbar-brand">Introcept Code Testing >></span>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">{{ HTML::link('/', 'Form', true)}}</li>
      <li>{{ HTML::link('forms/listing', 'Listing', true)}}</li>
      <li>{{ HTML::link('/about', 'About Us', true)}}</li>
      <li>{{ HTML::link('/contact', 'Contact Us', true)}}</li>
    </ul>
  </div>
</nav>
@yield('content')
</div>
</body>
</html>
