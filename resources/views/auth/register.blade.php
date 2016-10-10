@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <div class="panel-heading"><h3>Register to WhatUsersDo</h3></div>
                <div class="panel-body">
                  <form class="form-vertical" id="val-form" role="form" method="post" action="{{ route('auth.register') }}">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <!--<label for="username" class="control-label">Choose a username</label>-->
                        <input type="text" name="name" class="form-control check_val" id="name" value="{{ old('name') ?: '' }}" placeholder="name">
                        @if ($errors->has('name'))
                            <span class="help-block">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <!--<label for="username" class="control-label">Choose a username</label>-->
                        <input type="email" name="email" class="form-control check_val" id="email" value="{{ old('surname') ?: '' }}" placeholder="email">
                        @if ($errors->has('email'))
                            <span class="help-block">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <!--<label for="password" class="control-label">Choose a password</label>-->
                        <input type="password" name="password" class="form-control check_val" id="password" placeholder="password">
                        @if ($errors->has('password'))
                            <span class="help-block">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('confirm_password') ? ' has-error' : '' }}">
                        <!--<label for="password" class="control-label">Choose a password</label>-->
                        <input type="password" name="confirm_password" class="form-control check_val" id="confirm_password" placeholder="confirm password">
                        @if ($errors->has('confirm_password'))
                            <span class="help-block">{{ $errors->first('confirm_password') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" id="submit" class="btn btn-primary">Sign up</button>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 </form>
                </div>
            </div>
        </div>
		<div class="modal fade" id="your-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">CornerStone</h4>
					</div>
					<div class="modal-body">

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	</div>
@stop

