<?php

namespace engelstube\Containers;

use Plenty\Plugin\Templates\Twig;

class engelstubeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('engelstube::Stylesheet');
    }
}