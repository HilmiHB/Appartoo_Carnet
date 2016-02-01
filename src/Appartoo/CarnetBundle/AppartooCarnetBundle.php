<?php

namespace Appartoo\CarnetBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppartooCarnetBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
