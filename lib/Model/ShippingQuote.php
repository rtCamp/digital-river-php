<?php
/**
 * ShippingQuote
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DigitalRiver\ApiSdk\Model;

use \ArrayAccess;
use \DigitalRiver\ApiSdk\ObjectSerializer;

/**
 * ShippingQuote Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShippingQuote implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingQuote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'currency' => 'string',
        'service_level' => 'string',
        'shipping' => 'double',
        'handling' => 'double',
        'fees' => 'double',
        'total' => 'double',
        'signature_required_type' => 'string',
        'estimated_minimum_delivery_time' => 'float',
        'estimated_maximum_delivery_time' => 'float',
        'items' => '\DigitalRiver\ApiSdk\Model\ProductItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'currency' => null,
        'service_level' => null,
        'shipping' => 'double',
        'handling' => 'double',
        'fees' => 'double',
        'total' => 'double',
        'signature_required_type' => null,
        'estimated_minimum_delivery_time' => 'integer',
        'estimated_maximum_delivery_time' => 'integer',
        'items' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'currency' => 'currency',
        'service_level' => 'serviceLevel',
        'shipping' => 'shipping',
        'handling' => 'handling',
        'fees' => 'fees',
        'total' => 'total',
        'signature_required_type' => 'signatureRequiredType',
        'estimated_minimum_delivery_time' => 'estimatedMinimumDeliveryTime',
        'estimated_maximum_delivery_time' => 'estimatedMaximumDeliveryTime',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'currency' => 'setCurrency',
        'service_level' => 'setServiceLevel',
        'shipping' => 'setShipping',
        'handling' => 'setHandling',
        'fees' => 'setFees',
        'total' => 'setTotal',
        'signature_required_type' => 'setSignatureRequiredType',
        'estimated_minimum_delivery_time' => 'setEstimatedMinimumDeliveryTime',
        'estimated_maximum_delivery_time' => 'setEstimatedMaximumDeliveryTime',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'currency' => 'getCurrency',
        'service_level' => 'getServiceLevel',
        'shipping' => 'getShipping',
        'handling' => 'getHandling',
        'fees' => 'getFees',
        'total' => 'getTotal',
        'signature_required_type' => 'getSignatureRequiredType',
        'estimated_minimum_delivery_time' => 'getEstimatedMinimumDeliveryTime',
        'estimated_maximum_delivery_time' => 'getEstimatedMaximumDeliveryTime',
        'items' => 'getItems'
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
        return self::$openAPIModelName;
    }

    const SIGNATURE_REQUIRED_TYPE_STANDARD = 'standard';
    const SIGNATURE_REQUIRED_TYPE_ADULT = 'adult';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSignatureRequiredTypeAllowableValues()
    {
       $allowable = [
            self::SIGNATURE_REQUIRED_TYPE_STANDARD,
            self::SIGNATURE_REQUIRED_TYPE_ADULT,
        ];

        $allowableAllCase = array_unique(array_merge(array_map('strtolower', $allowable), $allowable));
        return $allowableAllCase;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['service_level'] = isset($data['service_level']) ? $data['service_level'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['handling'] = isset($data['handling']) ? $data['handling'] : null;
        $this->container['fees'] = isset($data['fees']) ? $data['fees'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['signature_required_type'] = isset($data['signature_required_type']) ? $data['signature_required_type'] : null;
        $this->container['estimated_minimum_delivery_time'] = isset($data['estimated_minimum_delivery_time']) ? $data['estimated_minimum_delivery_time'] : null;
        $this->container['estimated_maximum_delivery_time'] = isset($data['estimated_maximum_delivery_time']) ? $data['estimated_maximum_delivery_time'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSignatureRequiredTypeAllowableValues();
       
        if (!is_null($this->container['signature_required_type']) && !in_array(strtolower($this->container['signature_required_type']), $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'signature_required_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Three-letter ISO currency code.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets service_level
     *
     * @return string|null
     */
    public function getServiceLevel()
    {
        return $this->container['service_level'];
    }

    /**
     * Sets service_level
     *
     * @param string|null $service_level service_level
     *
     * @return $this
     */
    public function setServiceLevel($service_level)
    {
        $this->container['service_level'] = $service_level;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return double|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param double|null $shipping Shipping amount.
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets handling
     *
     * @return double|null
     */
    public function getHandling()
    {
        return $this->container['handling'];
    }

    /**
     * Sets handling
     *
     * @param double|null $handling Handling amount.
     *
     * @return $this
     */
    public function setHandling($handling)
    {
        $this->container['handling'] = $handling;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return double|null
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param double|null $fees Fee amount.
     *
     * @return $this
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets total
     *
     * @return double|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param double|null $total Total shipping and handling amount.
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets signature_required_type
     *
     * @return string|null
     */
    public function getSignatureRequiredType()
    {
        return $this->container['signature_required_type'];
    }

    /**
     * Sets signature_required_type
     *
     * @param string|null $signature_required_type signature_required_type
     *
     * @return $this
     */
    public function setSignatureRequiredType($signature_required_type)
    {
        $allowedValues = $this->getSignatureRequiredTypeAllowableValues();
        if (!is_null($signature_required_type) && !in_array(strtolower($signature_required_type), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'signature_required_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['signature_required_type'] = $signature_required_type;

        return $this;
    }

    /**
     * Gets estimated_minimum_delivery_time
     *
     * @return float|null
     */
    public function getEstimatedMinimumDeliveryTime()
    {
        return $this->container['estimated_minimum_delivery_time'];
    }

    /**
     * Sets estimated_minimum_delivery_time
     *
     * @param float|null $estimated_minimum_delivery_time Minimum estimated time until delivery (in minutes).
     *
     * @return $this
     */
    public function setEstimatedMinimumDeliveryTime($estimated_minimum_delivery_time)
    {
        $this->container['estimated_minimum_delivery_time'] = $estimated_minimum_delivery_time;

        return $this;
    }

    /**
     * Gets estimated_maximum_delivery_time
     *
     * @return float|null
     */
    public function getEstimatedMaximumDeliveryTime()
    {
        return $this->container['estimated_maximum_delivery_time'];
    }

    /**
     * Sets estimated_maximum_delivery_time
     *
     * @param float|null $estimated_maximum_delivery_time Maximum estimated time until delivery (in minutes).
     *
     * @return $this
     */
    public function setEstimatedMaximumDeliveryTime($estimated_maximum_delivery_time)
    {
        $this->container['estimated_maximum_delivery_time'] = $estimated_maximum_delivery_time;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \DigitalRiver\ApiSdk\Model\ProductItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \DigitalRiver\ApiSdk\Model\ProductItem[]|null $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

