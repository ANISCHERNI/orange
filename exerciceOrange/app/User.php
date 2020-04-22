<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getTableColumns() 
{

    $sqr="SELECT column_name
    FROM information_schema.columns
    WHERE table_name = 'users'
    AND table_schema = 'formdborange'";
    $result=DB::select($sqr);
    $result= $this->transposeData($result);
    return $result;
  
}

public function transposeData($data){
$result=array();
foreach($data as $row=>$columns){

    foreach($columns as $row2=>$column2){

        $result[$row2][$row]=$column2;
    }
}
return $result ;

}
public function getAll(){
    return collect(DB::select('select * from '.$this->getTable()));
}


}
