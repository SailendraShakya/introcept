@extends('main')
@section('content')
{!! Form::open(array('url' => 'forms/create','clsss' => 'form-control')) !!}
<div class="form-group">
  {{ Form::label('name', 'Name:') }}
  {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('gender', 'Gender:') }}
  {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('phone', 'Phone:') }}
  {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('email', 'Email:') }}
  {{ Form::text('email', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('address', 'Address:') }}
  {{ Form::text('address', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('nationality', 'Nationality:') }}
  {{ Form::text('nationality', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('date_of_birth', 'Date of birth:') }}
  {{ Form::text('date_of_birth', null, ['class' => 'datepicker form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('education', 'Education background:') }}
  {{ Form::textarea('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('contact', 'Preferred mode of contact:') }}
  {{ Form::select('size', array('email' => 'Email', 'phone' => 'Phone','none' => 'None'), null, ['class'=>'form-control','style'=>'']) }}

</div>
  {{ Form::submit('Submit Form', ['class' => 'btn btn-default']) }}
{!! Form::close() !!}
@endsection
