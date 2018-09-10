<?php
namespace app;

use Illuminate\Database\Eloquent\Model as mdl;

class ImageTableModel extends mdl
{
    protected $table = 'images';
    public $timestamps = false;
}
