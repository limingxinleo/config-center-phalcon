<?php
// +----------------------------------------------------------------------
// | ErrorCode.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Common\Enums;

use Xin\Phalcon\Enum\Enum;

class ErrorCode extends Enum
{

    /**
     * @Message('系统错误')
     */
    public static $ENUM_SYSTEM_ERROR = 400;

    /**
     * @Message('配置版本更新失败')
     */
    public static $ENUM_CONF_VERSION_UPDATE_FAIL = 1000;
}
