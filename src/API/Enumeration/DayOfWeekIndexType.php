<?php
/**
 * Contains \garethp\ews\API\Enumeration\DayOfWeekIndexType.
 */

namespace garethp\ews\API\Enumeration;

use \garethp\ews\API\Enumeration;

/**
 * Defines the type of a calendar item.
 *
 * @package php-ews\Enumeration
 */
class DayOfWeekIndexType extends Enumeration
{
    /**
     * Represents the first day of a week.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FIRST = 'First';

    /**
     * Represents the fourth day of a week.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOURTH = 'Fourth';

    /**
     * Represents the last day of a week.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const LAST = 'Last';

    /**
     * Represents the second day of a week.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SECOND = 'Second';

    /**
     * Represents the Third day of a week.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const THIRD = 'Third';
}
