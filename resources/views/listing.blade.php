@extends('main')
@section('content')
<h1>listing</h1>
  <table id="listing_table" class="table">
    <thead class="thead-inverse">
      <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>View</th>
      </tr>
    </thead>
    <tbody>
@foreach($records as $record)
@if (count($record) > 1)
      <tr>
        <td>{{ $record[0] }}</td>
        <td>{{ $record[1] }}</td>
        <td>{{ $record[2] }}</td>
        <td>{{ $record[3] }}</td>
        <td>{{ $record[4] }}</td>
        <td><a href="#" data-mfp-src="#client_detail" class="open-popup-link"
         data-name="{{ $record[0] }}"
         data-gender="{{ $record[1] }}" 
         data-phone="{{ $record[2] }}" 
         data-email="{{ $record[3] }}" 
         data-address="{{ $record[4]}}" 
         data-nationality="{{ $record[5]}}" 
         data-dob="{{ $record[6]}}"
         data-education="{{ $record[7]}}"
         data-contact="{{ $record[8]}}"
         >Detail</a></td>
      </tr>
@endif
@endforeach
<!-- ... -->
    </tbody>
  </table>

  <div id="client_detail" class="white-popup mfp-hide">
  <h3 class="client-name">Client details</h3>
  <div><label class="w150">Gender:</label> <span id="gender_value"></span></div>
  <div><label class="w150">Email:</label> <span id="email_value"></span></div>
  <div><label class="w150">Phone:</label> <span id="phone_value"></span></div>
  <div><label class="w150">Address:</label> <span id="address_value"></span></div>
  <div><label class="w150">Nationality:</label> <span id="nationality_value"></span></div>
  <div><label class="w150">Dob:</label> <span id="dob_value"></span></div>
  <div><label class="w150">Education:</label> <span id="education_value"></span></div>
  <div><label class="w150">Contact Medium:</label> <span id="contact_value"></span></div>
</div>
@endsection


