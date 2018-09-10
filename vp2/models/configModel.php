<?php
namespace app;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Capsule\Manager as Capsule;

class ConfigModel
{
    public static function configDb()
    {
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'vp2',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }

    public static function migrationExample()
    {
        if (Capsule::schema()->hasTable('goods')) {
            Capsule::schema()->table('goods', function (Blueprint $table) {
                $table->dropForeign('goods_category_id_foreign');
            });
        }
        Capsule::schema()->dropIfExists('categories');
        Capsule::schema()->create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });
        Capsule::schema()->dropIfExists('goods');
        Capsule::schema()->create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('name');
            $table->string('description');
            $table->integer('price');
        });
    }
}
