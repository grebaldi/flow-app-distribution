<?php

/*
 * This file is part of the Vendor.App package.
 */

namespace Vendor\App\Application\Controller;

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\Controller\ActionController;

#[Flow\Scope("singleton")]
class IndexController extends ActionController
{
    public function indexAction(): string
    {
        return 'Hello World!';
    }
}
