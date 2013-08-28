<?php

namespace EB\ImagineBundle\Filter;

use Avalanche\Bundle\ImagineBundle\Imagine\Filter\Loader\LoaderInterface;
use EB\ImagineBundle\Filter\HeightFilter;
use Symfony\Component\HttpFoundation\ParameterBag;

/**
 * Class HeightFilterLoader
 *
 * @author "Emmanuel BALLERY" <emmanuel.ballery@gmail.com>
 */
class HeightFilterLoader implements LoaderInterface
{
    /**
     * @param array $options
     *
     * @return HeightFilter
     */
    public function load(array $options = array())
    {
        $conf = new ParameterBag($options);
        $height = $conf->get('height', 10);

        return new HeightFilter($height);
    }
}
