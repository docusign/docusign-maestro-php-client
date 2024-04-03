<?php
/**
 * ReplicationStatus
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
 * ReplicationStatus Class Doc Comment
 *
 * @category    Class
 * @description The workflow replication status
 * @package     DocuSign\Maestro
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReplicationStatus
{
    /**
     * Possible values of this enum
     */
    const DEPLOY_REPLICATION_IN_PROGRESS = 'Deploy Replication In Progress';
    const DEPLOY_REPLICATED = 'Deploy Replicated';
    const DEPLOY_REPLICATION_FAILED = 'Deploy Replication Failed';
    const NOT_REPLICATED = 'Not Replicated';
    const DELETE_REPLICATION_IN_PROGRESS = 'Delete Replication in Progress';
    const DELETE_REPLICATED = 'Delete Replicated';
    const DELETE_REPLICATION_FAILED = 'Delete Replication Failed';
    const UNPUBLISH_REPLICATION_IN_PROGRESS = 'Unpublish replication in Progress';
    const UNPUBLISH_REPLICATED = 'Unpublish Replicated';
    const UNPUBLISH_REPLICATION_FAILED = 'Unpublish Replication Failed';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DEPLOY_REPLICATION_IN_PROGRESS,
            self::DEPLOY_REPLICATED,
            self::DEPLOY_REPLICATION_FAILED,
            self::NOT_REPLICATED,
            self::DELETE_REPLICATION_IN_PROGRESS,
            self::DELETE_REPLICATED,
            self::DELETE_REPLICATION_FAILED,
            self::UNPUBLISH_REPLICATION_IN_PROGRESS,
            self::UNPUBLISH_REPLICATED,
            self::UNPUBLISH_REPLICATION_FAILED,
        ];
    }
}

