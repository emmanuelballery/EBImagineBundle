<?php

namespace EB\ImagineBundle\Filter;

use Avalanche\Bundle\ImagineBundle\Imagine\Filter\Loader\LoaderInterface;
use Symfony\Component\HttpFoundation\ParameterBag;

/**
 * Class BorderFilterLoader
 *
 * @author "Emmanuel BALLERY" <emmanuel.ballery@gmail.com>
 */
class BorderFilterLoader implements LoaderInterface
{
    /**
     * @param array $options
     *
     * @return BorderFilter
     */
    public function load(array $options = [])
    {
        $conf = new ParameterBag($options);
        $size = $conf->get('size', []);
        $width = $conf->get('width', null);
        $color = $conf->get('color', null);
        $angle = $conf->get('angle', null);

        return new BorderFilter($size, $width, $color, $angle);
    }
}
