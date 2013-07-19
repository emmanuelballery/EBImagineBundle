<?php

namespace EB\ImagineBundle\Filter;

use Avalanche\Bundle\ImagineBundle\Imagine\Filter\LoaderInterface;
use EB\ImagineBundle\Configuration\Collection;
use EB\ImagineBundle\Filter\GrayscaleFilter;

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
    public function load(array $options = array())
    {
        $conf = new Collection($options);
        $size = $conf->get('size');

        return new GrayscaleFilter($size);
    }
}
