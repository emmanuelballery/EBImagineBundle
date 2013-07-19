<?php

namespace EB\ImagineBundle\Filter;

use Avalanche\Bundle\ImagineBundle\Imagine\Filter\LoaderInterface;
use EB\ImagineBundle\Configuration\Collection;
use EB\ImagineBundle\Filter\BorderFilter;

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
        $conf = new Collection($options);
        $size = $conf->get('size', null);
        $width = $conf->get('width', null);
        $color = $conf->get('color', null);
        $angle = $conf->get('angle', null);

        return new BorderFilter($size, $width, $color, $angle);
    }
}
