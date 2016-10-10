<div class="container">
    <div class="col-md-12">
        @if(Session::has('success'))
            <div class="alert alert-success fade in">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Success!</strong> submitted successfully.
            </div><br>
        @endif
        @if ( session()->has('info'))
            <div class="alert alert-info" role-"alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ session()->get('info') }}
            </div>
        @endif

        @if ( session()->has('warning'))
            <div class="alert alert-danger" role-"alert">
            {{ session()->get('warning') }}
            </div>
        @endif
    </div>
</div>