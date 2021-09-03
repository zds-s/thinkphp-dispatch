<?php
/**
 * @author    : Death-Satan
 * @date      : 2021/9/3
 * @createTime: 17:19
 * @company   : Death撒旦
 * @link      https://www.cnblogs.com/death-satan
 */

namespace think\contracts\response;

use think\Response;

/**
 * 生成方法
 */
interface Generator
{
    /**
     * @return string|mixed|Response|ToResponse
     */
    public function render();
}