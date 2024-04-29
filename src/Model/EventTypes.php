<?php
/**
 * EventTypes
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\Maestro
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Maestro API
 *
 * Maestro authors and executes experiences that allow non-coders the ability to define Simple Business Process without having to write code and to deploy them seamlessly without having to have development expertise
 *
 * OpenAPI spec version: 1.0.0
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\Maestro\Model;
use DocuSign\Maestro\ObjectSerializer;

/**
 * EventTypes Class Doc Comment
 *
 * @category    Class
 * @description The Trigger Event types
 * @package     DocuSign\Maestro
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EventTypes
{
    /**
     * Possible values of this enum
     */
    const ENVELOPE_SENT = 'envelope-sent';
    const ENVELOPE_DELIVERED = 'envelope-delivered';
    const ENVELOPE_COMPLETED = 'envelope-completed';
    const ENVELOPE_DECLINED = 'envelope-declined';
    const ENVELOPE_VOIDED = 'envelope-voided';
    const ENVELOPE_CREATED = 'envelope-created';
    const ENVELOPE_RESENT = 'envelope-resent';
    const ENVELOPE_CORRECTED = 'envelope-corrected';
    const ENVELOPE_PURGE = 'envelope-purge';
    const ENVELOPE_DELETED = 'envelope-deleted';
    const ENVELOPE_DISCARD = 'envelope-discard';
    const DELIVERY_FAILED = 'Delivery Failed';
    const AUTHENTICATION_FAILED = 'Authentication Failed';
    const SENT = 'Sent';
    const DELIVERED = 'Delivered';
    const SIGNED = 'Signed';
    const COMPLETED = 'Completed';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ENVELOPE_SENT,
            self::ENVELOPE_DELIVERED,
            self::ENVELOPE_COMPLETED,
            self::ENVELOPE_DECLINED,
            self::ENVELOPE_VOIDED,
            self::ENVELOPE_CREATED,
            self::ENVELOPE_RESENT,
            self::ENVELOPE_CORRECTED,
            self::ENVELOPE_PURGE,
            self::ENVELOPE_DELETED,
            self::ENVELOPE_DISCARD,
            self::DELIVERY_FAILED,
            self::AUTHENTICATION_FAILED,
            self::SENT,
            self::DELIVERED,
            self::SIGNED,
            self::COMPLETED,
        ];
    }
}

