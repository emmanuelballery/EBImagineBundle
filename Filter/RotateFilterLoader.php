<?php

namespace EB\ImagineBundle\Filter;

use Avalanche\Bundle\ImagineBundle\Imagine\Filter\LoaderInterface;
use EB\ImagineBundle\Configuration\Collection;
use EB\ImagineBundle\Filter\RotateFilter;

/**
 * Class RotateFilterLoader
 *
 * @author "Emmanuel BALLERY" <emmanuel.ballery@gmail.com>
 */
class RotateFilterLoader implements LoaderInterface
{
    /**
     * @param array $options
     *
     * @return RotateFilter
     */
    public function load(array $options = array())
    {
        $conf = new Collection($options);
        $angle = $conf->get('angle');
        $bg = $conf->get('bg');
        $size = $conf->get('size');

        return new RotateFilter($angle, $bg, $size);
    }
}
