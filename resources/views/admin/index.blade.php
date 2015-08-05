@extends('layouts.default')

@section('content')
	<h1><span>mess</span>X</h1>
	{!! Form::open() !!}

		<div class="row">
			<div class="col-sm-offset-2 col-sm-8">
				<div class="form-group">
					<div class="input-group input-group-lg">
					  <span class="input-group-addon" id="basic-addon1">User Name</span>
					  	{!! Form::text('user_name','',['class'=>'form-control', 'aria-describedby'=>'basic-addon1','placeholder'=>'Username']) !!}
					</div>
				</div>

				<div class="form-group">
					<div class="input-group input-group-lg">
					  <span class="input-group-addon" id="basic-addon1">Product Name</span>
					  	{!! Form::text('user_name','',['class'=>'form-control', 'aria-describedby'=>'basic-addon1','placeholder'=>'Product Name']) !!}
					</div>
				</div>

				<div class="form-group">
					<div class="input-group input-group-lg">
					  <span class="input-group-addon">Price: $ </span>
					  {!! Form::text('user_name','',['class'=>'form-control', 'aria-describedby'=>'basic-addon1','placeholder'=>'Product price']) !!}
					  <span class="input-group-addon">.00</span>
					</div>
				</div>

				<div class="form-group">
					<div class="input-group input-group-lg">
					  <span class="input-group-addon" id="basic-addon1">Date</span>
					  	{!! Form::text('user_name','',['class'=>'form-control', 'aria-describedby'=>'basic-addon1', 'placeholder'=>'Date']) !!}
					</div>
				</div>

				<div class="form-group">
				    <div class="col-sm-offset-5 col-sm-5">
				      <button type="submit" class="btn btn-success">Submit</button>
				    </div>
				</div>

			</div> <!-- column div -->
		</div> <!-- row div -->
		
	{!! Form::close() !!}
@stop