
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Statistics</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/settings.css')}}">
</head>
<body>
<div class="container">
    <h1>统计</h1>
    <div class="survey-main">
        <div class="panel panel-default">
            <div class="panel-heading">聚餐人员列表</div>
            <table class="table table-striped table-hover table-responsive table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>姓名</th>
                    <th>年龄</th>
                    <th>性别</th>
                    <th>电话号</th>
                    <th>添加时间</th>
                    <th>聚餐方便的时间</th>
                    <th>喜爱的餐馆</th>
                </tr>
                </thead>
                <tbody>
                @foreach($shows as $show)
                    <tr>
                        <td>{{$show -> getSid()}}</td>
                        <td>{{$show ->getName()}}</td>
                        <td>{{$show ->getAge()}}</td>
                        <td>{{$show ->gender($show ->getGender())}}</td>
                        <td>{{$show ->getPhonenum()}}</td>
                        <td>{{date('Y-m-d', $show ->getCreatedAt())}}</td>
                        <td>{{$show ->getTime()}}</td>
                        <td>{{$show -> getRestaurant()}}</td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{url('survey/update',['id' =>Auth::user()->id ])}}" class="btn btn-info pull-left">修改</a>


        <div class="pull-right">
            {{$students -> render()}}
        </div>
    </div>
</div>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>
</html>