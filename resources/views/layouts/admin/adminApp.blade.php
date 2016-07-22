@include('layouts.admin.header')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.admin.left-menu')
        </div>
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</div>

@include('layouts.admin.footer')