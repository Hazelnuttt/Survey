@include('common.head2')

<div class="container">
    <h1>聚餐报名</h1>
    <div class="survey-main">
        <form action="{{url('survey/save')}}" method="post" class="form-group">
            {{ csrf_field() }}
            <div class="row">
                <div class="form-group col-lg-6 col-lg-offset-3">
                    <label for="name" class="col-lg-2 col-lg-offset-1"><span class="glyphicon glyphicon-asterisk"></span>姓名</label>
                    <div class="col-lg-8">
                        <input type="text" name="Student[name]" class="form-control" id="name"
                               value="{{old('Student')['name']}}"
                               placeholder="请输入姓名">
                    </div>
                </div>
                <div class="col-lg-2">
                    <p class="text-danger">{{$errors->first('Student.name')}}</p>
                </div>
            </div>
            <div class="row" >
                <div class="form-group col-lg-6 col-lg-offset-3">
                    <label for="age" class="col-lg-2 col-lg-offset-1"><span class="glyphicon glyphicon-asterisk"></span>年龄</label>
                    <div class="col-lg-8">
                        <input type="text" name="Student[age]" class="form-control" id="age"
                               value="{{old('Student')['age']}}"
                               placeholder="请输入年龄">
                    </div>
                </div>
                <div class="col-lg-2">
                    <p class="text-danger">{{$errors->first('Student.age')}}</p>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6 col-lg-offset-3" >
                    <label class="col-lg-2 col-lg-offset-1"><span class="glyphicon glyphicon-asterisk"></span>性别</label>
                    <div class="col-lg-8">
                        <label class="radio-inline">
                            <input type="radio" name="Student[gender]" value="M">男
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="Student[gender]" value="F">女
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6 col-lg-offset-3">
                    <label for="phone" class="col-lg-2 col-lg-offset-1"><span class="glyphicon glyphicon-asterisk"></span>手机号</label>
                    <div class="col-lg-8">
                        <input type="text" name="Student[phonenum]" class="form-control"
                               value="{{old('Student')['phonenum']}}"
                               id="phone" placeholder="请输入手机号">
                    </div>
                </div>
                <div class="col-lg-2">
                    <p class="text-danger">{{$errors->first('Student.phonenum')}}</p>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-7 col-lg-offset-3">
                    <label class="col-lg-2 col-lg-offset-1">聚餐方便时间</label>
                    <div class="col-lg-9">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="Time[time1]" value="9102-9-6"> 9102-9-6
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="Time[time2]" value="9102-9-7"> 9102-9-7
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="Time[time3]" value="9102-9-8"> 9102-9-8
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="Time[time4]" value="9102-9-9"> 9102-9-9
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-7 col-lg-offset-3">
                    <label class="col-lg-2 col-lg-offset-1">喜爱的餐馆</label>
                    <div class="col-lg-8">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="Restaurant[restaurant1]" value="A"> A
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="Restaurant[restaurant2]" value="B"> B
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="Restaurant[restaurant3]" value="C"> C
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="Restaurant[restaurant4]" value="D"> D
                        </label>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary col-lg-offset-6" type="submit">提交</button>
        </form>

        <div class="container5">
            @section('message')
            @show
        </div>

    </div>
</div>


@include('common.tail')

@section('message')
    @include('common.message')
@stop