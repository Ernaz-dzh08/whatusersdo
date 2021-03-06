@extends('layouts.master')

@section('content')
<div class="col-md-5">

   <form class="form-vertical" id="val-form" role="form" method="post" action="{{ route('user_api') }}">
		<div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
			<!--<label for="username" class="control-label">Choose a username</label>-->
			<input type="text" name="firstname" class="form-control check_val" id="firstname" value="{{ old('firstname') ?: '' }}" placeholder="firstname">
			@if ($errors->has('firstname'))
				<span class="help-block">{{ $errors->first('firstname') }}</span>
			@endif
		</div>
		<div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
			<!--<label for="username" class="control-label">Choose a username</label>-->
			<input type="text" name="lastname" class="form-control check_val" id="lastname" value="{{ old('lastname') ?: '' }}" placeholder="lastname">
			@if ($errors->has('lastname'))
				<span class="help-block">{{ $errors->first('lastname') }}</span>
			@endif
		</div>
		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			<!--<label for="username" class="control-label">Choose a username</label>-->
			<input type="email" name="email" class="form-control check_val" id="email" value="{{ old('email') ?: '' }}" placeholder="email">
			@if ($errors->has('email'))
				<span class="help-block">{{ $errors->first('email') }}</span>
			@endif
		</div>
		<div class="form-group">
			<button type="submit" id="submit" class="btn btn-primary">Submit</button>
		</div>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
</div>				 
<div class="col-md-5">

    <div class="row">
        <div class="box box-info">
                <div class="box-body">
                @if($users->count())

                    <table class="table table-bordered table-striped">
                    @foreach($users as $user)
                        <thead>
                        <tr>
							<th>user #</th>
                            <th>user name</th>
                            <th>email</th>
                        </tr>
                        </thead>
                        <tbody>

						<tr>
							<td>{{$user->id}}</td>
							<td>{{$user->first_name}}</td>
							<td>{{$user->email}}</td>
                        </tr>

                        </tbody>
                    @endforeach
                    </table>
					@else
					   <div class="alert alert-info col-md-4" style="margin-top: 15px;">
							No users are found.
					   </div>
	            @endif
                </div>
            </div>
    </div>
</div>
    @include('partials.master-footer')
@stop

