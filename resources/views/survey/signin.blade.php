<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WELCOME!</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/settings.css')}}">
</head>
<body>
<div class="container1">
    <form class="signin col-lg-3 col-lg-offset-4">
        <h2 class="signin-heading">Please sign in</h2>
        <label for="inputEmail">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address">
        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password">
        <div class="checkbox">
            <label>
                <input type="checkbox"> Remember me
            </label>
        </div>
        <a href="{{url('survey/myland1')}}" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</a>
        <h3 class="pull-right"><a href="{{url('survey/signup')}}">sign up</a></h3>
    </form>
</div>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

</body>
</html>