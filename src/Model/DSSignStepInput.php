<?php
/**
 * DSSignStepInput
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
 * DSSignStepInput Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Maestro
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DSSignStepInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DSSignStep_input';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'documents' => 'object[]',
        'email_blurb' => 'object',
        'email_subject' => 'object',
        'is_embedded_sign' => '?bool',
        'signers' => '\DocuSign\Maestro\Model\ESignSigner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'documents' => null,
        'email_blurb' => null,
        'email_subject' => null,
        'is_embedded_sign' => null,
        'signers' => null
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
        'documents' => 'documents',
        'email_blurb' => 'emailBlurb',
        'email_subject' => 'emailSubject',
        'is_embedded_sign' => 'isEmbeddedSign',
        'signers' => 'signers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'documents' => 'setDocuments',
        'email_blurb' => 'setEmailBlurb',
        'email_subject' => 'setEmailSubject',
        'is_embedded_sign' => 'setIsEmbeddedSign',
        'signers' => 'setSigners'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'documents' => 'getDocuments',
        'email_blurb' => 'getEmailBlurb',
        'email_subject' => 'getEmailSubject',
        'is_embedded_sign' => 'getIsEmbeddedSign',
        'signers' => 'getSigners'
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
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
        $this->container['email_blurb'] = isset($data['email_blurb']) ? $data['email_blurb'] : null;
        $this->container['email_subject'] = isset($data['email_subject']) ? $data['email_subject'] : null;
        $this->container['is_embedded_sign'] = isset($data['is_embedded_sign']) ? $data['is_embedded_sign'] : null;
        $this->container['signers'] = isset($data['signers']) ? $data['signers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['documents'] === null) {
            $invalidProperties[] = "'documents' can't be null";
        }
        if ($this->container['is_embedded_sign'] === null) {
            $invalidProperties[] = "'is_embedded_sign' can't be null";
        }
        if ($this->container['signers'] === null) {
            $invalidProperties[] = "'signers' can't be null";
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
     * Gets documents
     *
     * @return object[]
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param object[] $documents A list of #/definitions/ESignDocuments. Each element is: ESignDocument Object. This object should be any of the following object models: [#/definitions/ESignDocumentFromPreviousStep, #/definitions/ESignDocumentFromESignTemplate]
     *
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets email_blurb
     *
     * @return object
     */
    public function getEmailBlurb()
    {
        return $this->container['email_blurb'];
    }

    /**
     * Sets email_blurb
     *
     * @param object $email_blurb Reference of #/definitions/StringOrVariableOrTransformation. Object stands for a String or a Variable or a Transformation. This object should be any of the following object models or types: [string, #/definitions/DSWorkflowVariable, #/definitions/DSWorkflowTransformationExpression]
     *
     * @return $this
     */
    public function setEmailBlurb($email_blurb)
    {
        $this->container['email_blurb'] = $email_blurb;

        return $this;
    }

    /**
     * Gets email_subject
     *
     * @return object
     */
    public function getEmailSubject()
    {
        return $this->container['email_subject'];
    }

    /**
     * Sets email_subject
     *
     * @param object $email_subject Reference of #/definitions/StringOrVariableOrTransformation. Object stands for a String or a Variable or a Transformation. This object should be any of the following object models or types: [string, #/definitions/DSWorkflowVariable, #/definitions/DSWorkflowTransformationExpression]
     *
     * @return $this
     */
    public function setEmailSubject($email_subject)
    {
        $this->container['email_subject'] = $email_subject;

        return $this;
    }

    /**
     * Gets is_embedded_sign
     *
     * @return ?bool
     */
    public function getIsEmbeddedSign()
    {
        return $this->container['is_embedded_sign'];
    }

    /**
     * Sets is_embedded_sign
     *
     * @param ?bool $is_embedded_sign is_embedded_sign
     *
     * @return $this
     */
    public function setIsEmbeddedSign($is_embedded_sign)
    {
        $this->container['is_embedded_sign'] = $is_embedded_sign;

        return $this;
    }

    /**
     * Gets signers
     *
     * @return \DocuSign\Maestro\Model\ESignSigner[]
     */
    public function getSigners()
    {
        return $this->container['signers'];
    }

    /**
     * Sets signers
     *
     * @param \DocuSign\Maestro\Model\ESignSigner[] $signers signers
     *
     * @return $this
     */
    public function setSigners($signers)
    {
        $this->container['signers'] = $signers;

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
