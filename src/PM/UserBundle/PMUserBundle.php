<?php

namespace PM\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PMUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
