<?php
class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email', 'name', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function Answers()
    {
        return $this->hasMany('App\Answer');
    }
}
