@extends('main')
@section('content')
@include('errors')
{!! Form::open(array('url' => 'client/create','clsss' => 'form-control','id'=> 'enq_form')) !!}
<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4 {{ $errors->has('name') ? 'has-error':'' }}">
  {{ Form::label('name', 'Name :*') }}
  {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4 {{ $errors->has('gender') ? 'has-error':'' }}">
  {{ Form::label('gender', 'Gender :*') }}
  <div class="radio">
  <label>{{ Form::radio('gender', 'Male') }} Male</label>
  </div>
  <div class="radio">
  <label>{{ Form::radio('gender', 'Female') }} Female</label>
  </div>
  <div class="radio">
  <label>{{ Form::radio('gender', 'Other') }} Others</label>
</div>
<label id="gender-error" class="error" for="gender" style="display: none;">Please enter your gender</label>
</div>
<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4 {{ $errors->has('phone') ? 'has-error':'' }}">
  {{ Form::label('phone', 'Phone :*') }}
  {{ Form::text('phone', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4 {{ $errors->has('email') ? 'has-error':'' }}">
  {{ Form::label('email', 'Email :*') }}
  {{ Form::text('email', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4 {{ $errors->has('address') ? 'has-error':'' }}">
  {{ Form::label('address', 'Address :*') }}
  {{ Form::text('address', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4 {{ $errors->has('nationality') ? 'has-error':'' }}">
  {{ Form::label('nationality', 'Nationality :*') }}
  {{ Form::text('nationality', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4 {{ $errors->has('date_of_birth') ? 'has-error':'' }}">
  {{ Form::label('date_of_birth', 'Date of birth :*') }}
  {{ Form::text('date_of_birth', null, ['class' => 'datepicker form-control']) }}
</div>
<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4 {{ $errors->has('education') ? 'has-error':'' }}">
  {{ Form::label('education', 'Education background :*') }}
  {{ Form::textarea('education', null, ['class' => 'form-control']) }}
</div>
<div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4 {{ $errors->has('contact') ? 'has-error':'' }}">
  {{ Form::label('contact', 'Preferred mode of contact :*') }}
  {{ Form::select('contact', array('email' => 'Email', 'phone' => 'Phone','none' => 'None'), null, ['class'=>'form-control','style'=>'']) }}

</div>
<div class="clearfix"></div>
        <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">
  {{ Form::submit('Submit Form', ['class' => 'btn btn-primary']) }}
  </div>
{!! Form::close() !!}
@endsection
