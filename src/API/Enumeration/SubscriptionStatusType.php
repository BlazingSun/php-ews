<?php
/**
 * Contains \garethp\ews\API\Enumeration\SubscriptionStatusType.
 */

namespace garethp\ews\API\Enumeration;

use \garethp\ews\API\Enumeration;

/**
 * Describes the status of a push subscription.
 *
 * @package php-ews\Enumeration
 */
class SubscriptionStatusType extends Enumeration
{
    /**
     * Indicates that the notification has been received and the subscription is
     * to continue.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OK = 'OK';

    /**
     * Indicates that push notifications from the subscription should be ceased.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const UNSUBSCRIBE = 'Unsubscribe';
}
