<?php

namespace EB\ImagineBundle\Filter;

use Avalanche\Bundle\ImagineBundle\Imagine\Filter\LoaderInterface;
use EB\ImagineBundle\Configuration\Collection;
use EB\ImagineBundle\Filter\HeightFilter;

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
        $conf = new Collection($options);
        $height = $conf->get('height', 10);

        return new HeightFilter($height);
    }
}
