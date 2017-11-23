<?php

namespace KarhabtyBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class KarhabtyBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
