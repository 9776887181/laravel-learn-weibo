@extends('layouts.default')

@section('title', '注册')

@section('content')
	<div class="offset-md-2 col-md-8">
		<div class="card">
			<div class="card-header">
				<h5>注册</h5>
			</div>

			<div class="card-body">

				@include('shared._errors')
				
				<form action="{{ route('users.store') }}" method="POST">

					{{ csrf_field() }}
					
					<div class="form-group">
						<label for="name">姓名：</label>
						<input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
					</div>					


					<div class="form-group">
						<label for="email">邮箱：</label>
						<input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
					</div>

					<div class="form-group">
						<label for="password">密码：</label>
						<input type="password" name="password" id="password" class="form-control">
					</div>

					<div class="form-group">
						<label for="password_confirmation">确认密码：</label>
						<input type="text" name="password_confirmation" id="password_confirmation" class="form-control">
					</div>

					<button class="btn btn-primary" type="submit">注册</button>

				</form>

			</div>
		</div>
	</div>
@stop
