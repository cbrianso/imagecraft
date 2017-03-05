<?php

namespace Imagecraft\OptionPass;

/**
 * @author Xianghan Wang <coldume@gmail.com>
 * @since  1.0.0
 */
class JpegInterlaceOptionPass implements OptionPassInterface
{
    /**
     * @inheritDoc
     */
    public function process(array $options)
    {
        if (
            !isset($options['jpeg_interlace']) ||
            !is_bool($options['jpeg_interlace'])
        ) {
            $options['jpeg_interlace'] = false;
        }

        return $options;
    }
}
