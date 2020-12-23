<?php

namespace Dcat\Admin\OperationLog;

use Dcat\Admin\Extend\Setting as Form;
use Dcat\Admin\OperationLog\Models\OperationLog;
use Dcat\Admin\Support\Helper;

class Setting extends Form
{
    // 返回表单弹窗标题
    public function title()
    {
        return $this->trans('log.title');
    }

    // 格式化待保存的配置参数值
    protected function formatInput(array $input)
    {
        // 转化为数组，注意如果这里保存的时候是数组，那么读取出来的时候也是数组
        $input['except'] = Helper::array($input['except']);
        $input['allowed_methods'] = Helper::array($input['allowed_methods']);

        return $input;
    }

    public function form()
    {
        // 定义表单字段
        $this->tags('except');
        $this->multipleSelect('allowed_methods')
            ->options(array_combine(OperationLog::$methods, OperationLog::$methods));
        $this->tags('secret_fields');
    }
}
