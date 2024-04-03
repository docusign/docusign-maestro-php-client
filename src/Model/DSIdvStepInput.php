<?php
/**
 * DSIdvStepInput
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
 * DSIdvStepInput Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Maestro
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DSIdvStepInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DSIdvStep_input';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'background_color_branding' => 'object',
        'expected_full_name' => 'object',
        'retry_limit' => 'object',
        'text_color_branding' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'background_color_branding' => null,
        'expected_full_name' => null,
        'retry_limit' => null,
        'text_color_branding' => null
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
        'background_color_branding' => 'backgroundColorBranding',
        'expected_full_name' => 'expectedFullName',
        'retry_limit' => 'retryLimit',
        'text_color_branding' => 'textColorBranding'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'background_color_branding' => 'setBackgroundColorBranding',
        'expected_full_name' => 'setExpectedFullName',
        'retry_limit' => 'setRetryLimit',
        'text_color_branding' => 'setTextColorBranding'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'background_color_branding' => 'getBackgroundColorBranding',
        'expected_full_name' => 'getExpectedFullName',
        'retry_limit' => 'getRetryLimit',
        'text_color_branding' => 'getTextColorBranding'
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
        $this->container['background_color_branding'] = isset($data['background_color_branding']) ? $data['background_color_branding'] : null;
        $this->container['expected_full_name'] = isset($data['expected_full_name']) ? $data['expected_full_name'] : null;
        $this->container['retry_limit'] = isset($data['retry_limit']) ? $data['retry_limit'] : null;
        $this->container['text_color_branding'] = isset($data['text_color_branding']) ? $data['text_color_branding'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['background_color_branding'] === null) {
            $invalidProperties[] = "'background_color_branding' can't be null";
        }
        if ($this->container['expected_full_name'] === null) {
            $invalidProperties[] = "'expected_full_name' can't be null";
        }
        if ($this->container['retry_limit'] === null) {
            $invalidProperties[] = "'retry_limit' can't be null";
        }
        if ($this->container['text_color_branding'] === null) {
            $invalidProperties[] = "'text_color_branding' can't be null";
        }
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
     * Gets background_color_branding
     *
     * @return object
     */
    public function getBackgroundColorBranding()
    {
        return $this->container['background_color_branding'];
    }

    /**
     * Sets background_color_branding
     *
     * @param object $background_color_branding Reference of #/definitions/StringOrVariableOrTransformation. Object stands for a String or a Variable or a Transformation. This object should be any of the following object models or types: [string, #/definitions/DSWorkflowVariable, #/definitions/DSWorkflowTransformationExpression]
     *
     * @return $this
     */
    public function setBackgroundColorBranding($background_color_branding)
    {
        $this->container['background_color_branding'] = $background_color_branding;

        return $this;
    }

    /**
     * Gets expected_full_name
     *
     * @return object
     */
    public function getExpectedFullName()
    {
        return $this->container['expected_full_name'];
    }

    /**
     * Sets expected_full_name
     *
     * @param object $expected_full_name Reference of #/definitions/StringOrVariableOrTransformation. Object stands for a String or a Variable or a Transformation. This object should be any of the following object models or types: [string, #/definitions/DSWorkflowVariable, #/definitions/DSWorkflowTransformationExpression]
     *
     * @return $this
     */
    public function setExpectedFullName($expected_full_name)
    {
        $this->container['expected_full_name'] = $expected_full_name;

        return $this;
    }

    /**
     * Gets retry_limit
     *
     * @return object
     */
    public function getRetryLimit()
    {
        return $this->container['retry_limit'];
    }

    /**
     * Sets retry_limit
     *
     * @param object $retry_limit This object should be any of the following object models or types: [number, #/definitions/DSWorkflowVariable, #/definitions/DSWorkflowTransformationExpression]
     *
     * @return $this
     */
    public function setRetryLimit($retry_limit)
    {
        $this->container['retry_limit'] = $retry_limit;

        return $this;
    }

    /**
     * Gets text_color_branding
     *
     * @return object
     */
    public function getTextColorBranding()
    {
        return $this->container['text_color_branding'];
    }

    /**
     * Sets text_color_branding
     *
     * @param object $text_color_branding Reference of #/definitions/StringOrVariableOrTransformation. Object stands for a String or a Variable or a Transformation. This object should be any of the following object models or types: [string, #/definitions/DSWorkflowVariable, #/definitions/DSWorkflowTransformationExpression]
     *
     * @return $this
     */
    public function setTextColorBranding($text_color_branding)
    {
        $this->container['text_color_branding'] = $text_color_branding;

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
