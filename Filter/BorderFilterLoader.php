<?php

namespace EB\ImagineBundle\Filter;

use Avalanche\Bundle\ImagineBundle\Imagine\Filter\Loader\LoaderInterface;
use EB\ImagineBundle\Filter\BorderFilter;
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
    public function load(array $options = array())
    {
        $conf = new ParameterBag($options);
        $size = $conf->get('size', array());
        $width = $conf->get('width', null);
        $color = $conf->get('color', null);
        $angle = $conf->get('angle', null);

        return new BorderFilter($size, $width, $color, $angle);
    }
}
