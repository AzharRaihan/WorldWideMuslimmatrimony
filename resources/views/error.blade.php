@if(count($errors)  > 0 )

<div>
    <ul style="padding-left: 0px">
        @foreach($errors->all() as $error)
            <li style="list-style-type: none;" class="alert alert-danger mb-0">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


@if(Session::has('success'))
<div class="alert alert-success">
    <p style=" margin-bottom: 0px; ">{{ Session::get('success') }}</p>
</div>

@endif

@if(Session::has('update'))
<div class="alert alert-info">
    <p style=" margin-bottom: 0px; ">{{ Session::get('update') }}</p>
</div>
@endif

@if(Session::has('delete'))
<div class="alert alert-danger">
    <p style=" margin-bottom: 0px; ">{{ Session::get('delete') }}</p>
</div>

@endif
