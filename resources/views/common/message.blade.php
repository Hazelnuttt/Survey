@if(Session::has('success'))
<div class="alert alert-success alert-dismissable" role="alert">
    <button type="button" class="close" data-dismiss="alert" alert-label="Close">
        <span aria-hidden="ture">&times;</span>
    </button>
    <strong>成功！</strong>{{Session::get('success')}}
</div>
@endif
@if(Session::has('fail'))
<div class="alert alert-danger alert-dismissable" role="alert">
    <button type="button" class="close" data-dismiss="alert" alert-label="Close">
        <span aria-hidden="ture">&times;</span>
    </button>
    <strong>失败！</strong>{{Session::get('fail')}}
</div>
@endif