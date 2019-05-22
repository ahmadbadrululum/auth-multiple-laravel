@if(Auth::guard('web')->check())
    <p class="text-success">
        you are loggin as user
    </p>
    @else 
    <p class="text-danger">
        you are logout as user
    </p>
@endif


@if(Auth::guard('admin')->check())
    <p class="text-success">
        you are loggin as Admin
    </p>
    @else 
    <p class="text-danger">
        you are logout as Admin
    </p>
@endif
