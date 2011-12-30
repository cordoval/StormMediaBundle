<?php

/**
 * Stormlabs
 *
 * (c) Ernesto Jose Vargas Paz <ejosvp@gmail.com>
 */

namespace Storm\MediaBundle\Media;

use Storm\MediaBundle\Entity\MediaInterface;

interface MediaManagerInterface
{
    function getProvider(MediaInterface $media);
}
