<?php

namespace EB\ImagineBundle\Configuration;

/**
 * Class Collection
 *
 * @author "Emmanuel BALLERY" <emmanuel.ballery@gmail.com>
 */
class Collection
{
    /**
     * @var array
     */
    private $configuration;

    /**
     * @param array $configuration
     */
    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @param string|int     $key
     * @param mixed          $default
     *
     * @return mixed
     */
    public function get($key, $default = null)
    {
        return array_key_exists($key, $this->configuration) ? $this->configuration[$key] : $default;
    }
}