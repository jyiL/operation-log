<?php

namespace Dcat\Admin\OperationLog;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class OperationLogServiceProvider extends ServiceProvider
{
    protected $middleware = [
        'middle' => [ // 注册中间件
            \Dcat\Admin\OperationLog\Http\Middleware\LogOperation::class,
        ],
    ];

    // 定义菜单
    protected $menu = [
        [
            'title' => 'Operation Log',
            'uri'   => '',
            'icon'  => 'feather icon-list',
        ],
        [
            'parent' => 'Operation Log', // 指定父级菜单
            'title'  => 'List',
            'uri'    => 'auth/operation-logs',
        ],
    ];

    public function settingForm()
    {
        return new Setting($this);
    }

	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//

	}
}
