<?php
// +----------------------------------------------------------------------
// | Conf.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Models;

use App\Common\Enums\ErrorCode;
use App\Common\Exceptions\BizException;
use App\Models\Collections\Mongo;
use MongoDB\BSON\UTCDateTime;
use MongoDB\Driver\BulkWrite;

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
        /** @var \MongoDB\Driver\Manager $manager */
        $manager = di('mongoManager');
        $bulk = new BulkWrite();
        $time = new UTCDateTime(microtime(true) * 1000 + 3600 * 8 * 1000);
        $bulk->update(['key' => 'version'], ['$inc' => ['val' => 1], '$set' => ['updated_at' => $time]]);
        $res = $manager->executeBulkWrite('conf.conf', $bulk);
        if ($res->getModifiedCount() === 0) {
            throw new BizException(ErrorCode::$ENUM_CONF_VERSION_UPDATE_FAIL);
        }
    }
}
