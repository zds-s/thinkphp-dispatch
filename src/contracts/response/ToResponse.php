<?php
/**
 * @author    : Death-Satan
 * @date      : 2021/9/3
 * @createTime: 17:18
 * @company   : Death撒旦
 * @link      https://www.cnblogs.com/death-satan
 */

namespace think\contracts\response;

use think\Response;

/**
 * 生成Response方法
 */
interface toResponse
{
    /**
     * 必须返回response实例
     * @return Response
     */
    public function toResponse():Response;
}