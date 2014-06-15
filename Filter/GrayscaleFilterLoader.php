<?php

namespace EB\ImagineBundle\Filter;

use Avalanche\Bundle\ImagineBundle\Imagine\Filter\Loader\LoaderInterface;
use Symfony\Component\HttpFoundation\ParameterBag;

/**
 * Class GrayscaleFilterLoader
 *
 * @author "Emmanuel BALLERY" <emmanuel.ballery@gmail.com>
 */
class GrayscaleFilterLoader implements LoaderInterface
{
    /**
     * @param array $options
     *
     * @return GrayscaleFilter
     */
    public function load(array $options = [])
    {
        $conf = new ParameterBag($options);
        $size = $conf->get('size');

        return new GrayscaleFilter($size);
    }
}
