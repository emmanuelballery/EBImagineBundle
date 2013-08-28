<?php

namespace EB\ImagineBundle\Filter;

use Avalanche\Bundle\ImagineBundle\Imagine\Filter\LoaderInterface;
use EB\ImagineBundle\Filter\WidthFilter;
use Symfony\Component\HttpFoundation\ParameterBag;

/**
 * Class WidthFilterLoader
 *
 * @author "Emmanuel BALLERY" <emmanuel.ballery@gmail.com>
 */
class WidthFilterLoader implements LoaderInterface
{
    /**
     * @param array $options
     *
     * @return WidthFilter
     */
    public function load(array $options = array())
    {
        $conf = new ParameterBag($options);
        $width = $conf->get('width', 10);

        return new WidthFilter($width);
    }
}
