<?php
/**
 * ESignTabs
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
 * ESignTabs Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\Maestro
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ESignTabs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ESignTabs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'anchor_string' => '?string',
        'bold' => '?string',
        'document_id' => '?string',
        'font' => '?string',
        'font_color' => '?string',
        'font_size' => '?string',
        'height' => '?string',
        'italic' => '?string',
        'locale_policy' => 'map[string,object]',
        'name' => '?string',
        'optional' => '?string',
        'page_number' => '?string',
        'recipient_id' => '?string',
        'scale_value' => '?string',
        'stamp_type' => '?string',
        'tab_id' => '?string',
        'tab_label' => '?string',
        'tab_type' => '?string',
        'template_locked' => '?string',
        'template_required' => '?string',
        'tooltip' => '?string',
        'underline' => '?string',
        'value' => 'object',
        'width' => '?string',
        'x_position' => '?string',
        'y_position' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'anchor_string' => null,
        'bold' => null,
        'document_id' => null,
        'font' => null,
        'font_color' => null,
        'font_size' => null,
        'height' => null,
        'italic' => null,
        'locale_policy' => null,
        'name' => null,
        'optional' => null,
        'page_number' => null,
        'recipient_id' => null,
        'scale_value' => null,
        'stamp_type' => null,
        'tab_id' => null,
        'tab_label' => null,
        'tab_type' => null,
        'template_locked' => null,
        'template_required' => null,
        'tooltip' => null,
        'underline' => null,
        'value' => null,
        'width' => null,
        'x_position' => null,
        'y_position' => null
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
        'anchor_string' => 'anchorString',
        'bold' => 'bold',
        'document_id' => 'documentId',
        'font' => 'font',
        'font_color' => 'fontColor',
        'font_size' => 'fontSize',
        'height' => 'height',
        'italic' => 'italic',
        'locale_policy' => 'localePolicy',
        'name' => 'name',
        'optional' => 'optional',
        'page_number' => 'pageNumber',
        'recipient_id' => 'recipientId',
        'scale_value' => 'scaleValue',
        'stamp_type' => 'stampType',
        'tab_id' => 'tabId',
        'tab_label' => 'tabLabel',
        'tab_type' => 'tabType',
        'template_locked' => 'templateLocked',
        'template_required' => 'templateRequired',
        'tooltip' => 'tooltip',
        'underline' => 'underline',
        'value' => 'value',
        'width' => 'width',
        'x_position' => 'xPosition',
        'y_position' => 'yPosition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'anchor_string' => 'setAnchorString',
        'bold' => 'setBold',
        'document_id' => 'setDocumentId',
        'font' => 'setFont',
        'font_color' => 'setFontColor',
        'font_size' => 'setFontSize',
        'height' => 'setHeight',
        'italic' => 'setItalic',
        'locale_policy' => 'setLocalePolicy',
        'name' => 'setName',
        'optional' => 'setOptional',
        'page_number' => 'setPageNumber',
        'recipient_id' => 'setRecipientId',
        'scale_value' => 'setScaleValue',
        'stamp_type' => 'setStampType',
        'tab_id' => 'setTabId',
        'tab_label' => 'setTabLabel',
        'tab_type' => 'setTabType',
        'template_locked' => 'setTemplateLocked',
        'template_required' => 'setTemplateRequired',
        'tooltip' => 'setTooltip',
        'underline' => 'setUnderline',
        'value' => 'setValue',
        'width' => 'setWidth',
        'x_position' => 'setXPosition',
        'y_position' => 'setYPosition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'anchor_string' => 'getAnchorString',
        'bold' => 'getBold',
        'document_id' => 'getDocumentId',
        'font' => 'getFont',
        'font_color' => 'getFontColor',
        'font_size' => 'getFontSize',
        'height' => 'getHeight',
        'italic' => 'getItalic',
        'locale_policy' => 'getLocalePolicy',
        'name' => 'getName',
        'optional' => 'getOptional',
        'page_number' => 'getPageNumber',
        'recipient_id' => 'getRecipientId',
        'scale_value' => 'getScaleValue',
        'stamp_type' => 'getStampType',
        'tab_id' => 'getTabId',
        'tab_label' => 'getTabLabel',
        'tab_type' => 'getTabType',
        'template_locked' => 'getTemplateLocked',
        'template_required' => 'getTemplateRequired',
        'tooltip' => 'getTooltip',
        'underline' => 'getUnderline',
        'value' => 'getValue',
        'width' => 'getWidth',
        'x_position' => 'getXPosition',
        'y_position' => 'getYPosition'
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
        $this->container['anchor_string'] = isset($data['anchor_string']) ? $data['anchor_string'] : null;
        $this->container['bold'] = isset($data['bold']) ? $data['bold'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['font_color'] = isset($data['font_color']) ? $data['font_color'] : null;
        $this->container['font_size'] = isset($data['font_size']) ? $data['font_size'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['italic'] = isset($data['italic']) ? $data['italic'] : null;
        $this->container['locale_policy'] = isset($data['locale_policy']) ? $data['locale_policy'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['optional'] = isset($data['optional']) ? $data['optional'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
        $this->container['recipient_id'] = isset($data['recipient_id']) ? $data['recipient_id'] : null;
        $this->container['scale_value'] = isset($data['scale_value']) ? $data['scale_value'] : null;
        $this->container['stamp_type'] = isset($data['stamp_type']) ? $data['stamp_type'] : null;
        $this->container['tab_id'] = isset($data['tab_id']) ? $data['tab_id'] : null;
        $this->container['tab_label'] = isset($data['tab_label']) ? $data['tab_label'] : null;
        $this->container['tab_type'] = isset($data['tab_type']) ? $data['tab_type'] : null;
        $this->container['template_locked'] = isset($data['template_locked']) ? $data['template_locked'] : null;
        $this->container['template_required'] = isset($data['template_required']) ? $data['template_required'] : null;
        $this->container['tooltip'] = isset($data['tooltip']) ? $data['tooltip'] : null;
        $this->container['underline'] = isset($data['underline']) ? $data['underline'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['x_position'] = isset($data['x_position']) ? $data['x_position'] : null;
        $this->container['y_position'] = isset($data['y_position']) ? $data['y_position'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tab_id'] === null) {
            $invalidProperties[] = "'tab_id' can't be null";
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
     * Gets anchor_string
     *
     * @return ?string
     */
    public function getAnchorString()
    {
        return $this->container['anchor_string'];
    }

    /**
     * Sets anchor_string
     *
     * @param ?string $anchor_string anchor_string
     *
     * @return $this
     */
    public function setAnchorString($anchor_string)
    {
        $this->container['anchor_string'] = $anchor_string;

        return $this;
    }

    /**
     * Gets bold
     *
     * @return ?string
     */
    public function getBold()
    {
        return $this->container['bold'];
    }

    /**
     * Sets bold
     *
     * @param ?string $bold bold
     *
     * @return $this
     */
    public function setBold($bold)
    {
        $this->container['bold'] = $bold;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return ?string
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param ?string $document_id document_id
     *
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets font
     *
     * @return ?string
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
     * Sets font
     *
     * @param ?string $font font
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

        return $this;
    }

    /**
     * Gets font_color
     *
     * @return ?string
     */
    public function getFontColor()
    {
        return $this->container['font_color'];
    }

    /**
     * Sets font_color
     *
     * @param ?string $font_color font_color
     *
     * @return $this
     */
    public function setFontColor($font_color)
    {
        $this->container['font_color'] = $font_color;

        return $this;
    }

    /**
     * Gets font_size
     *
     * @return ?string
     */
    public function getFontSize()
    {
        return $this->container['font_size'];
    }

    /**
     * Sets font_size
     *
     * @param ?string $font_size font_size
     *
     * @return $this
     */
    public function setFontSize($font_size)
    {
        $this->container['font_size'] = $font_size;

        return $this;
    }

    /**
     * Gets height
     *
     * @return ?string
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param ?string $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets italic
     *
     * @return ?string
     */
    public function getItalic()
    {
        return $this->container['italic'];
    }

    /**
     * Sets italic
     *
     * @param ?string $italic italic
     *
     * @return $this
     */
    public function setItalic($italic)
    {
        $this->container['italic'] = $italic;

        return $this;
    }

    /**
     * Gets locale_policy
     *
     * @return map[string,object]
     */
    public function getLocalePolicy()
    {
        return $this->container['locale_policy'];
    }

    /**
     * Sets locale_policy
     *
     * @param map[string,object] $locale_policy locale_policy
     *
     * @return $this
     */
    public function setLocalePolicy($locale_policy)
    {
        $this->container['locale_policy'] = $locale_policy;

        return $this;
    }

    /**
     * Gets name
     *
     * @return ?string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param ?string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets optional
     *
     * @return ?string
     */
    public function getOptional()
    {
        return $this->container['optional'];
    }

    /**
     * Sets optional
     *
     * @param ?string $optional optional
     *
     * @return $this
     */
    public function setOptional($optional)
    {
        $this->container['optional'] = $optional;

        return $this;
    }

    /**
     * Gets page_number
     *
     * @return ?string
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     *
     * @param ?string $page_number page_number
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

        return $this;
    }

    /**
     * Gets recipient_id
     *
     * @return ?string
     */
    public function getRecipientId()
    {
        return $this->container['recipient_id'];
    }

    /**
     * Sets recipient_id
     *
     * @param ?string $recipient_id recipient_id
     *
     * @return $this
     */
    public function setRecipientId($recipient_id)
    {
        $this->container['recipient_id'] = $recipient_id;

        return $this;
    }

    /**
     * Gets scale_value
     *
     * @return ?string
     */
    public function getScaleValue()
    {
        return $this->container['scale_value'];
    }

    /**
     * Sets scale_value
     *
     * @param ?string $scale_value scale_value
     *
     * @return $this
     */
    public function setScaleValue($scale_value)
    {
        $this->container['scale_value'] = $scale_value;

        return $this;
    }

    /**
     * Gets stamp_type
     *
     * @return ?string
     */
    public function getStampType()
    {
        return $this->container['stamp_type'];
    }

    /**
     * Sets stamp_type
     *
     * @param ?string $stamp_type stamp_type
     *
     * @return $this
     */
    public function setStampType($stamp_type)
    {
        $this->container['stamp_type'] = $stamp_type;

        return $this;
    }

    /**
     * Gets tab_id
     *
     * @return ?string
     */
    public function getTabId()
    {
        return $this->container['tab_id'];
    }

    /**
     * Sets tab_id
     *
     * @param ?string $tab_id tab_id
     *
     * @return $this
     */
    public function setTabId($tab_id)
    {
        $this->container['tab_id'] = $tab_id;

        return $this;
    }

    /**
     * Gets tab_label
     *
     * @return ?string
     */
    public function getTabLabel()
    {
        return $this->container['tab_label'];
    }

    /**
     * Sets tab_label
     *
     * @param ?string $tab_label tab_label
     *
     * @return $this
     */
    public function setTabLabel($tab_label)
    {
        $this->container['tab_label'] = $tab_label;

        return $this;
    }

    /**
     * Gets tab_type
     *
     * @return ?string
     */
    public function getTabType()
    {
        return $this->container['tab_type'];
    }

    /**
     * Sets tab_type
     *
     * @param ?string $tab_type tab_type
     *
     * @return $this
     */
    public function setTabType($tab_type)
    {
        $this->container['tab_type'] = $tab_type;

        return $this;
    }

    /**
     * Gets template_locked
     *
     * @return ?string
     */
    public function getTemplateLocked()
    {
        return $this->container['template_locked'];
    }

    /**
     * Sets template_locked
     *
     * @param ?string $template_locked template_locked
     *
     * @return $this
     */
    public function setTemplateLocked($template_locked)
    {
        $this->container['template_locked'] = $template_locked;

        return $this;
    }

    /**
     * Gets template_required
     *
     * @return ?string
     */
    public function getTemplateRequired()
    {
        return $this->container['template_required'];
    }

    /**
     * Sets template_required
     *
     * @param ?string $template_required template_required
     *
     * @return $this
     */
    public function setTemplateRequired($template_required)
    {
        $this->container['template_required'] = $template_required;

        return $this;
    }

    /**
     * Gets tooltip
     *
     * @return ?string
     */
    public function getTooltip()
    {
        return $this->container['tooltip'];
    }

    /**
     * Sets tooltip
     *
     * @param ?string $tooltip tooltip
     *
     * @return $this
     */
    public function setTooltip($tooltip)
    {
        $this->container['tooltip'] = $tooltip;

        return $this;
    }

    /**
     * Gets underline
     *
     * @return ?string
     */
    public function getUnderline()
    {
        return $this->container['underline'];
    }

    /**
     * Sets underline
     *
     * @param ?string $underline underline
     *
     * @return $this
     */
    public function setUnderline($underline)
    {
        $this->container['underline'] = $underline;

        return $this;
    }

    /**
     * Gets value
     *
     * @return object
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param object $value Reference of #/definitions/StringOrVariableOrTransformation. Object stands for a String or a Variable or a Transformation. This object should be any of the following object models or types: [string, #/definitions/DSWorkflowVariable, #/definitions/DSWorkflowTransformationExpression]
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets width
     *
     * @return ?string
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param ?string $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets x_position
     *
     * @return ?string
     */
    public function getXPosition()
    {
        return $this->container['x_position'];
    }

    /**
     * Sets x_position
     *
     * @param ?string $x_position x_position
     *
     * @return $this
     */
    public function setXPosition($x_position)
    {
        $this->container['x_position'] = $x_position;

        return $this;
    }

    /**
     * Gets y_position
     *
     * @return ?string
     */
    public function getYPosition()
    {
        return $this->container['y_position'];
    }

    /**
     * Sets y_position
     *
     * @param ?string $y_position y_position
     *
     * @return $this
     */
    public function setYPosition($y_position)
    {
        $this->container['y_position'] = $y_position;

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

