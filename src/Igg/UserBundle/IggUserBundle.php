<?php

namespace Igg\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class IggUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }	
}
