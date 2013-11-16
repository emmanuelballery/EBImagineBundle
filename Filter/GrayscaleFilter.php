<?php

namespace EB\ImagineBundle\Filter;

use Imagine\Image\ManipulatorInterface;
use Imagine\Filter\FilterInterface;
use Imagine\Image\ImageInterface;
use Imagine\Image\Color;
use Imagine\Image\Point;
use Imagine\Image\Box;
use Imagine\Image\BoxInterface;
use Imagine\Draw\DrawerInterface;

/**
 * Class GrayscaleFilter
 *
 * @author "Emmanuel BALLERY" <emmanuel.ballery@gmail.com>
 */
class GrayscaleFilter implements FilterInterface
{
    /**
     * @var Box
     */
    private $size = null;

    /**
     * @param array $size [optional]
     */
    public function __construct(array $size = null)
    {
        if ($size) {
            $this->size = new Box($size[0], $size[1]);
        }
    }

    /**
     * @param ImageInterface $image
     *
     * @return ImageInterface|ManipulatorInterface
     */
    public function apply(ImageInterface $image)
    {
        // Change size before, go faster if size is smaller
        if ($this->size) {
            $image = $image->thumbnail($this->size, ManipulatorInterface::THUMBNAIL_OUTBOUND);
        }
        /** @var BoxInterface $size */
        $size = $image->getSize();
        /** @var DrawerInterface $draw */
        $draw = $image->draw();
        for ($w = 0; $w < $size->getWidth(); $w++) {
            for ($h = 0; $h < $size->getHeight(); $h++) {
                $point = new Point($w, $h);
                /** @var Color $color */
                $color = $image->getColorAt($point);
                $luminance = (int)round(0.2126 * $color->getRed() + 0.7152 * $color->getGreen() + 0.0722 * $color->getBlue());
                $colorLuminance = new Color(array($luminance, $luminance, $luminance));
                $draw->dot($point, $colorLuminance);
            }
        }

        return $image;
    }
}
