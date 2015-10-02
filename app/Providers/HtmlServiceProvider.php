<?php
/**
 * Created by PhpStorm.
 * User: avid
 * Date: 01/10/15
 * Time: 11:21 AM
 */

namespace TeachMe\Providers;


use Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;
use TeachMe\Components\HtmlBuilder;

class HtmlServiceProvider extends CollectiveHtmlServiceProvider
{

    protected function registerHtmlBuilder()
    {
        $this->app->bindShared('html', function($app)
        {
            return new HtmlBuilder($app['config'],$app['view'],$app['url']);
        });
    }

}