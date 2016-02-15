<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\ResolutionCaseManagement\Types;

/**
 *
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\NotificationEventNameType $NotificationEventName
 * @property string $RecipientUserID
 * @property string $ExternalUserData
 * @property string $CaseId
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\CaseType $CaseType
 * @property string $ItemId
 * @property string $TransactionId
 * @property \DateTime $CreationDate
 * @property string $OtherPartyId
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\CaseUserRoleType $OtherPartyRole
 * @property string $CaseStatus
 * @property string $CaseGlobalId
 */
class NotificationEventType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'NotificationEventName' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NotificationEventName'
        ],
        'RecipientUserID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RecipientUserID'
        ],
        'ExternalUserData' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalUserData'
        ],
        'CaseId' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CaseId'
        ],
        'CaseType' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CaseType'
        ],
        'ItemId' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemId'
        ],
        'TransactionId' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionId'
        ],
        'CreationDate' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CreationDate'
        ],
        'OtherPartyId' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OtherPartyId'
        ],
        'OtherPartyRole' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OtherPartyRole'
        ],
        'CaseStatus' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CaseStatus'
        ],
        'CaseGlobalId' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CaseGlobalId'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/resolution/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}