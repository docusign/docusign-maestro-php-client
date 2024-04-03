<?php
/**
 * WorkflowStepHistory
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
 * WorkflowStepHistory Class Doc Comment
 *
 * @category    Class
 * @description Details (history) of a Workflow Instance Step
 * @package     DocuSign\Maestro
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class WorkflowStepHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorkflowStepHistory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => '?string',
        'dac_id' => '?string',
        'ds_step_id' => '?string',
        'end_date' => '?string',
        'error' => '\DocuSign\Maestro\Model\WorkflowStepError',
        'output_module_properties' => 'object',
        'start_date' => '?string',
        'step_id' => '?string',
        'step_name' => '?string',
        'step_state' => '\DocuSign\Maestro\Model\WorkflowStepHistoryState',
        'user_id' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => null,
        'dac_id' => null,
        'ds_step_id' => null,
        'end_date' => null,
        'error' => null,
        'output_module_properties' => null,
        'start_date' => null,
        'step_id' => null,
        'step_name' => null,
        'step_state' => null,
        'user_id' => null
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
        'account_id' => 'accountId',
        'dac_id' => 'dacId',
        'ds_step_id' => 'dsStepId',
        'end_date' => 'endDate',
        'error' => 'error',
        'output_module_properties' => 'outputModuleProperties',
        'start_date' => 'startDate',
        'step_id' => 'stepId',
        'step_name' => 'stepName',
        'step_state' => 'stepState',
        'user_id' => 'userId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'dac_id' => 'setDacId',
        'ds_step_id' => 'setDsStepId',
        'end_date' => 'setEndDate',
        'error' => 'setError',
        'output_module_properties' => 'setOutputModuleProperties',
        'start_date' => 'setStartDate',
        'step_id' => 'setStepId',
        'step_name' => 'setStepName',
        'step_state' => 'setStepState',
        'user_id' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'dac_id' => 'getDacId',
        'ds_step_id' => 'getDsStepId',
        'end_date' => 'getEndDate',
        'error' => 'getError',
        'output_module_properties' => 'getOutputModuleProperties',
        'start_date' => 'getStartDate',
        'step_id' => 'getStepId',
        'step_name' => 'getStepName',
        'step_state' => 'getStepState',
        'user_id' => 'getUserId'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['dac_id'] = isset($data['dac_id']) ? $data['dac_id'] : null;
        $this->container['ds_step_id'] = isset($data['ds_step_id']) ? $data['ds_step_id'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['output_module_properties'] = isset($data['output_module_properties']) ? $data['output_module_properties'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['step_id'] = isset($data['step_id']) ? $data['step_id'] : null;
        $this->container['step_name'] = isset($data['step_name']) ? $data['step_name'] : null;
        $this->container['step_state'] = isset($data['step_state']) ? $data['step_state'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['dac_id'] === null) {
            $invalidProperties[] = "'dac_id' can't be null";
        }
        if ($this->container['step_name'] === null) {
            $invalidProperties[] = "'step_name' can't be null";
        }
        if ($this->container['step_state'] === null) {
            $invalidProperties[] = "'step_state' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
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
     * Gets account_id
     *
     * @return ?string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param ?string $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets dac_id
     *
     * @return ?string
     */
    public function getDacId()
    {
        return $this->container['dac_id'];
    }

    /**
     * Sets dac_id
     *
     * @param ?string $dac_id dac_id
     *
     * @return $this
     */
    public function setDacId($dac_id)
    {
        $this->container['dac_id'] = $dac_id;

        return $this;
    }

    /**
     * Gets ds_step_id
     *
     * @return ?string
     */
    public function getDsStepId()
    {
        return $this->container['ds_step_id'];
    }

    /**
     * Sets ds_step_id
     *
     * @param ?string $ds_step_id ds_step_id
     *
     * @return $this
     */
    public function setDsStepId($ds_step_id)
    {
        $this->container['ds_step_id'] = $ds_step_id;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return ?string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param ?string $end_date Track the End time of the Workflow Step
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \DocuSign\Maestro\Model\WorkflowStepError
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \DocuSign\Maestro\Model\WorkflowStepError $error error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets output_module_properties
     *
     * @return object
     */
    public function getOutputModuleProperties()
    {
        return $this->container['output_module_properties'];
    }

    /**
     * Sets output_module_properties
     *
     * @param object $output_module_properties output_module_properties
     *
     * @return $this
     */
    public function setOutputModuleProperties($output_module_properties)
    {
        $this->container['output_module_properties'] = $output_module_properties;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return ?string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param ?string $start_date Track the Start time of the Workflow Step
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets step_id
     *
     * @return ?string
     */
    public function getStepId()
    {
        return $this->container['step_id'];
    }

    /**
     * Sets step_id
     *
     * @param ?string $step_id The Step Id of the workflow step in the workflow instance
     *
     * @return $this
     */
    public function setStepId($step_id)
    {
        $this->container['step_id'] = $step_id;

        return $this;
    }

    /**
     * Gets step_name
     *
     * @return ?string
     */
    public function getStepName()
    {
        return $this->container['step_name'];
    }

    /**
     * Sets step_name
     *
     * @param ?string $step_name Name of the workflow step (DS Scope)
     *
     * @return $this
     */
    public function setStepName($step_name)
    {
        $this->container['step_name'] = $step_name;

        return $this;
    }

    /**
     * Gets step_state
     *
     * @return \DocuSign\Maestro\Model\WorkflowStepHistoryState
     */
    public function getStepState()
    {
        return $this->container['step_state'];
    }

    /**
     * Sets step_state
     *
     * @param \DocuSign\Maestro\Model\WorkflowStepHistoryState $step_state step_state
     *
     * @return $this
     */
    public function setStepState($step_state)
    {
        $this->container['step_state'] = $step_state;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return ?string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param ?string $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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
