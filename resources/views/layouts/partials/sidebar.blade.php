<div class="col-sm-3 col-md-2 sidebar" >
    <ul class="nav nav-sidebar">
        <li style="margin-left:20px;">
            <img src="{{ Auth::user()->getAvatarUrl() }}" height="50" width="50" style="border-radius:25px;" />
        </li>
        <li><a href="{{ url('/') }}"> @ {{ Auth::user()->name }}</a></li>
        <li class="active"><a href="#">V_Tracker<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Graph</a></li>
        
    </ul>
    <ul class="nav nav-sidebar">
        <li><a href="">Help</a></li>
        <li><a href="{{ route('auth.logout') }}">Sign Out</a></li>
    </ul>
</div>