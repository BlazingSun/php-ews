<?php
/**
 * Contains \garethp\ews\API\Enumeration\ResolveNamesSearchScopeType.
 */

namespace garethp\ews\API\Enumeration;

use \garethp\ews\API\Enumeration;

/**
 * Defines the order and scope for a ResolveNames search.
 *
 * @package php-ews\Enumeration
 */
class ResolveNamesSearchScopeType extends Enumeration
{
    /**
     * Only the Active Directory directory service is searched.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ACTIVE_DIRECTORY = 'ActiveDirectory';

    /**
     * Active Directory is searched first, and then the contact folders that are
     * specified in the ParentFolderIds property are searched.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ACTIVE_DIRECTORY_CONTACTS = 'ActiveDirectoryContacts';

    /**
     * Only the contact folders that are identified by the ParentFolderIds
     * property are searched.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS = 'Contacts';

    /**
     * Contact folders that are identified by the ParentFolderIds property are
     * searched first and then Active Directory is searched.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_ACTIVE_DIRECTORY = 'ContactsActiveDirectory';
}
