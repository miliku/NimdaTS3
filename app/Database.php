<?php
/**
 * Created by PhpStorm.
 * User: Jake
 * Date: 10/08/2016
 * Time: 01:07
 */

namespace App;

use Illuminate\Database\Capsule\Manager as Capsule;


class Database
{

    public $capsule;

    public function __construct()
    {
        $this->capsule = new Capsule;

        $this->capsule->addConnection((new \Config\Database)->config['connections'][(new \Config\Database)->config['default']]);

        $this->capsule->setAsGlobal();
        $this->capsule->bootEloquent();
    }

}