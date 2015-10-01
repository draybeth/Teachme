<?php
/**
 * Created by PhpStorm.
 * User: avid
 * Date: 01/10/15
 * Time: 11:12 AM
 */

namespace TeachMe\Components;

use Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;

class HtmlBuilder extends CollectiveHtmlBuilder
{
    public function menu()
    {
        return view('partials/menu');
    }
}