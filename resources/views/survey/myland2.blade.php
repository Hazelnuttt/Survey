@extends('common.layoutmyland')


@section('content')
    <div class="col-lg-4 container4">
    <div class="row">
        <div class="col-lg-10">
            <h4>聚餐活动</h4>
        </div>
        <div class="col-lg-2">
            <a href="{{url('survey/myland1')}}"><span class="glyphicon glyphicon-minus"></span></a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-8">
            基本信息
        </div>
        <div class="col-lg-4">
            共一页
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-8">
            ID
        </div>
        <div class="col-lg-4">
            {{ Auth::user()->id }}
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-8">
            问卷状态
        </div>
        <div class="col-lg-4">
            ing
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-8">
            修改时间
        </div>
        <div class="col-lg-4">
            {{ Auth::user()->updated_at }}
        </div>
    </div>
    <hr>
    <nav class="navbar bottom">
        <div class="">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">详情</a>
            </div>
            <span class="pull-right">Hello,{{ Auth::user()->name }}</span>
        </div>
    </nav>
    </div>
@stop







