<?php

namespace EB\ImagineBundle\Filter;

use Avalanche\Bundle\ImagineBundle\Imagine\Filter\Loader\LoaderInterface;
use EB\ImagineBundle\Filter\RotateFilter;
use Symfony\Component\HttpFoundation\ParameterBag;

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
        $conf = new ParameterBag($options);
        $angle = $conf->get('angle');
        $bg = $conf->get('bg');
        $size = $conf->get('size');

        return new RotateFilter($angle, $bg, $size);
    }
}
