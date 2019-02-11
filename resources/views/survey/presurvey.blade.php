@include('common.head1')

<div class="container">
    <h1>聚餐吗</h1>
    <div class="survey-main">
        <h3>鉴于，，，，，，，我们有了聚餐这个想法，，，，，，，但是还是要征求大家的想法，，，，，，，，如果你觉得这个活动有意义，可以<strong>报名</strong>，，，，，，，我们最终会根据人数，决定是否开展这次活动。。。。。。。。</h3>

            <div class="panel panel-default">
                <div class="panel-heading">活动信息</div>
                <table class="table table-striped table-hover table-responsive table-bordered">
                    @foreach($infos as $info)
                    <tr>
                        <th>活动内容</th>
                        <td>{{$info ->content}}</td>
                    </tr>
                    <tr>
                        <th>活动面向对象</th>
                        <td>{{$info ->object}}</td>
                    </tr>
                    <tr>
                        <th>策划人</th>
                        <td>{{$info ->plotter}}</td>
                    </tr>
                    <tr>
                        <th>赞助商</th>
                        <td>{{$info ->sponsor}}</td>
                    </tr>
                    <tr>
                        <th>活动地点</th>
                        <td>{{$info ->locale}}</td>
                    </tr>

            @endforeach

                </table>
            </div>

            <div class="col-lg-2 col-lg-offset-10">
            <a class="btn btn-success" href="{{url('survey/survey')}}">去报名</a>
        </div>

</div>

