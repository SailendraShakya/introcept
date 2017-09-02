@extends('main')
@section('content')
@include('errors')
{!! Form::open(array('url' => 'forms/create','clsss' => 'form-control','id'=> 'enq_form')) !!}
<div class="form-group {{ $errors->has('name') ? 'has-error':'' }}">
  {{ Form::label('name', 'Name:') }}
  {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group {{ $errors->has('gender') ? 'has-error':'' }}">
  {{ Form::label('gender', 'Gender:') }}
  {{ Form::text('gender', null, ['class' => 'form-control']) }}
</div>
<div class="form-group {{ $errors->has('phone') ? 'has-error':'' }}">
  {{ Form::label('phone', 'Phone:') }}
  {{ Form::text('phone', null, ['class' => 'form-control']) }}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error':'' }}">
  {{ Form::label('email', 'Email:') }}
  {{ Form::text('email', null, ['class' => 'form-control']) }}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error':'' }}">
  {{ Form::label('address', 'Address:') }}
  {{ Form::text('address', null, ['class' => 'form-control']) }}
</div>
<div class="form-group {{ $errors->has('nationality') ? 'has-error':'' }}">
  {{ Form::label('nationality', 'Nationality:') }}
  {{ Form::text('nationality', null, ['class' => 'form-control']) }}
</div>
<div class="form-group {{ $errors->has('date_of_birth') ? 'has-error':'' }}">
  {{ Form::label('date_of_birth', 'Date of birth:') }}
  {{ Form::text('date_of_birth', null, ['class' => 'datepicker form-control']) }}
</div>
<div class="form-group {{ $errors->has('education') ? 'has-error':'' }}">
  {{ Form::label('education', 'Education background:') }}
  {{ Form::textarea('education', null, ['class' => 'form-control']) }}
</div>
<div class="form-group {{ $errors->has('contact') ? 'has-error':'' }}">
  {{ Form::label('contact', 'Preferred mode of contact:') }}
  {{ Form::select('contact', array('email' => 'Email', 'phone' => 'Phone','none' => 'None'), null, ['class'=>'form-control','style'=>'']) }}

</div>
  {{ Form::submit('Submit Form', ['class' => 'btn btn-default']) }}
{!! Form::close() !!}
@endsection
