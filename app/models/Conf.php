<?php
// +----------------------------------------------------------------------
// | Conf.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Models;

use App\Models\Collections\Mongo;
use App\Utils\Mongo as MongoUtil;

class Conf extends Mongo
{
    public $key;

    public $val;

    public $version;

    public $created_at;

    public $updated_at;

    public function getSource()
    {
        return 'conf';
    }

    protected function beforeSave()
    {
        MongoUtil::update('conf');
    }
}
