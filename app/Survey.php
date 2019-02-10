<?php
namespace App;

use Illuminate\Database\Eloquent\Model;



class Survey extends Model
{
    //手动连接表名
    protected $table= 'survey';
    protected $primaryKey = 'id';
    //如果不是id，也需要手动


//   这个东西它不买账，默认的就好
//    public $timestamps = ture;



    public function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($value)
    {
        return $value;
    }

    public function fromDateTime($value)
    {
        return empty($value) ? $value : $this->getDateFormat();
    }

const boy = 'M',
    girl = 'F';


    public function gender($ind = null)
    {
        $arr = [
            self::boy => '男',
            self::girl => '女',
        ];

        if($arr !== null){
            return array_key_exists($ind,$arr) ? $arr[$ind] : $arr[self::boy];
        }

        return $arr;
    }

    public function fav_reataurant()
    {
        return $this -> hasMany('App\Fav_restaurant','s_id','id');
    }

    public function  fav_time()
    {
        return $this -> hasMany('App\Fav_time','s_id','id');
    }




}