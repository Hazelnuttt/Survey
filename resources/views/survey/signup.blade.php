<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank you for registering</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/settings.css')}}">
</head>
<body>
<div class="container1">
    <form class="signin col-lg-3 col-lg-offset-4">
        <h2 class="signin-heading">Thank you for registering</h2>
        <label for="inputEmail">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address">
        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password">
        <label for="Passwordvalidation">Password validation</label>
        <input type="password" id="Passwordvalidation" class="form-control" placeholder="Password validation">
        <div class="checkbox">
            <label>
                <input type="checkbox"> Remember me
            </label>
        </div>
        <a href="{{url('survey/myland1')}}" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</a>
    </form>
</div>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>