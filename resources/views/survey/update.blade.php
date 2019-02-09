<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Survey</title>
    <link rel="stylesheet" href="{{asset('css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/glyphicons-halflings-regular.eot')}}">
</head>
<body>
<div class="container">
    <h1>聚餐报名</h1>
    <div class="survey-main">
        <form action="{{url('survey/update',['id' => Auth::user()->id])}}" method="post" class="form-group">
            {{ csrf_field() }}
         @include('common.layoutsurvey')
        </form>

        <div class="container5">
            @section('message')
            @show
        </div>

    </div>
</div>


<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>

@section('message')
@include('common.message')
@stop