<?php
/**
 * Contains \garethp\ews\API\Enumeration\AvailabilityProxyRequestType.
 */

namespace garethp\ews\API\Enumeration;

use \garethp\ews\API\Enumeration;

/**
 * Defines whether a proxy request is a cross-site or a cross-forest request.
 *
 * @package php-ews\Enumeration
 */
class AvailabilityProxyRequestType extends Enumeration
{
    /**
     * Indicates that this request is cross-forest.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CROSS_FOREST = 'CrossForest';

    /**
     * Indicates that this request is cross-site.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CROSS_SITE = 'CrossSite';
}
