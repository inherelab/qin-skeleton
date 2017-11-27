<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017/11/27
 * Time: 下午11:51
 */

namespace App\Providers;

use Inhere\Library\DI\Container;
use Inhere\Library\DI\ServiceProviderInterface;

/**
 * Class WebServiceProvider
 * @package App\Providers
 */
class WebServiceProvider implements ServiceProviderInterface
{
    /**
     * 注册一项服务(可能含有多个服务)提供者到容器中
     * @param Container $di
     */
    public function register(Container $di)
    {
        // TODO: Implement register() method.
    }
}