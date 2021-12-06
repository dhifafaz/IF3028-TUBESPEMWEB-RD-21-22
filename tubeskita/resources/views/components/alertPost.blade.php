@if(session('success'))
    <div class="alert-success">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong>{!! session('success') !!}</strong>
    </div>
    @elseif(session('danger'))
    <div class="alert-danger">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong>{!! session('danger') !!}</strong>
    </div>
@endif