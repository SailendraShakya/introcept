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
        <th>Nationality</th>
        <th>DoB</th>
        <th>Education</th>
        <th>Contact</th>
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
        <td>{{ $record[5] }}</td>
        <td>{{ $record[6] }}</td>
        <td>{{ $record[7] }}</td>
        <td>{{ $record[8] }}</td>
      </tr>
@endif
@endforeach
<!-- ... -->
    </tbody>
  </table>
@endsection


