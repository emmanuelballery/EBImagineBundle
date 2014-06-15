<?php

namespace EB\ImagineBundle\Filter;

use Avalanche\Bundle\ImagineBundle\Imagine\Filter\Loader\LoaderInterface;
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
    public function load(array $options = [])
    {
        $conf = new ParameterBag($options);
        $height = $conf->get('height', 10);

        return new HeightFilter($height);
    }
}
