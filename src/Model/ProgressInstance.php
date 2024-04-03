<?php
/**
 * ProgressInstance
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

use \ArrayAccess;
use DocuSign\Maestro\ObjectSerializer;

/**
 * ProgressInstance Class Doc Comment
 *
 * @category    Class
 * @description The progress information for a workflow instance
 * @package     DocuSign\Maestro
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProgressInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProgressInstance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'completed_steps' => 'float',
        'current_completed_step_name' => '?string',
        'total_steps' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'completed_steps' => null,
        'current_completed_step_name' => null,
        'total_steps' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'completed_steps' => 'completedSteps',
        'current_completed_step_name' => 'currentCompletedStepName',
        'total_steps' => 'totalSteps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'completed_steps' => 'setCompletedSteps',
        'current_completed_step_name' => 'setCurrentCompletedStepName',
        'total_steps' => 'setTotalSteps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'completed_steps' => 'getCompletedSteps',
        'current_completed_step_name' => 'getCurrentCompletedStepName',
        'total_steps' => 'getTotalSteps'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['completed_steps'] = isset($data['completed_steps']) ? $data['completed_steps'] : null;
        $this->container['current_completed_step_name'] = isset($data['current_completed_step_name']) ? $data['current_completed_step_name'] : null;
        $this->container['total_steps'] = isset($data['total_steps']) ? $data['total_steps'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets completed_steps
     *
     * @return float
     */
    public function getCompletedSteps()
    {
        return $this->container['completed_steps'];
    }

    /**
     * Sets completed_steps
     *
     * @param float $completed_steps The number of completed steps for this workflow instance
     *
     * @return $this
     */
    public function setCompletedSteps($completed_steps)
    {
        $this->container['completed_steps'] = $completed_steps;

        return $this;
    }

    /**
     * Gets current_completed_step_name
     *
     * @return ?string
     */
    public function getCurrentCompletedStepName()
    {
        return $this->container['current_completed_step_name'];
    }

    /**
     * Sets current_completed_step_name
     *
     * @param ?string $current_completed_step_name The last completed step name
     *
     * @return $this
     */
    public function setCurrentCompletedStepName($current_completed_step_name)
    {
        $this->container['current_completed_step_name'] = $current_completed_step_name;

        return $this;
    }

    /**
     * Gets total_steps
     *
     * @return float
     */
    public function getTotalSteps()
    {
        return $this->container['total_steps'];
    }

    /**
     * Sets total_steps
     *
     * @param float $total_steps The total number of steps for this workflow instance
     *
     * @return $this
     */
    public function setTotalSteps($total_steps)
    {
        $this->container['total_steps'] = $total_steps;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
