<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\JaPasswordReset;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'base_users';
    /**
     * The attributes that are mass assignable.
        id 主 int(10)
        name varchar(128)
        password varchar(256)
        email varchar(255)
        uniqeid varchar(64)
        uniqehash varchar(64)
        remember_token varchar(100)
        description longtext
        role int(11)
        status int(11)
        delflag tinyint(3)
        created_at timestamp
        updated_at timestamp
     * @var array
     */

    protected $fillable = [
        'name',
        'password',
        'email',
        'uniqeid',
        'uniqehash',
        'remember_token',
        'description',
        'role',
        'status',
        'delflag',
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
    * 日本語のパスワードリセットメール 通知クラス
    *
    * @var $token
    */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new JaPasswordReset($token));
    }
}
