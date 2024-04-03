<?php
/**
 * DeploymentStatus
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
 * DeploymentStatus Class Doc Comment
 *
 * @category    Class
 * @description The workflow deployment status
 * @package     DocuSign\Maestro
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DeploymentStatus
{
    /**
     * Possible values of this enum
     */
    const DEPLOYMENT_IN_PROGRESS = 'Deployment In Progress';
    const DEPLOYED = 'Deployed';
    const FAILED = 'Failed';
    const DELETE_IN_PROGRESS = 'Delete in Progress';
    const DELETED = 'Deleted';
    const NOT_DEPLOYED = 'Not Deployed';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DEPLOYMENT_IN_PROGRESS,
            self::DEPLOYED,
            self::FAILED,
            self::DELETE_IN_PROGRESS,
            self::DELETED,
            self::NOT_DEPLOYED,
        ];
    }
}

