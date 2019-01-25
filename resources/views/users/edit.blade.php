@extends('layouts.default')

@section('title', '更新个人资料')

@section('content')
	<div class="offset-md-2 col-md-8">
		<div class="card">
			<div class="card-header">
				<h5>更新个人资料</h5>	
			</div>

			<div class="card-body">
				@include('shared._errors')	

				<div class="gravatar-edit">
					<a href="http://gravatar.com/emails" target="_blank">
						<img src="{{ $user->gravatar(200) }}" alt="{{ $user->name }}" class="gravatar">
					</a>
				</div>

				<form action="{{ route('users.update', $user) }}" method="POST">
					{{ csrf_field() }}	
					{{ method_field('PATCH') }}

					<div class="form-group">
						<label for="username">姓名：</label>
						<input type="text" name="name" id="username" value="{{ old('name', $user->name) }}" class="form-control">
					</div>

					<div class="form-group">
						<label for="email">邮箱：</label>
						<input type="text" class="form-control" name="email" id="email" value="{{ old('email', $user->email) }}" disabled />
					</div>

					<div class="form-group">
						<label for="password">密码：</label>
						<input type="password" name="password" id="password" value="{{ old('password') }}" class="form-control">
					</div>

					<div class="form-group">
						<label for="">确认密码：</label>
						<input type="text" class="form-control" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">
					</div>

					<button class="btn btn-primary" type="submit">更新</button>

				</form>

			</div>
		</div>
	</div>
@stop
