<?php
namespace app;

use Illuminate\Database\Eloquent\Model as mdl;

class UserTableModel extends mdl
{
    protected $table = 'users';
    protected $guarded = ['id'];
    public $timestamps = false;
}
