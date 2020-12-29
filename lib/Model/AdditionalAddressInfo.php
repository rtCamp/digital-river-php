<?php
/**
 * AdditionalAddressInfo
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
 * AdditionalAddressInfo Class Doc Comment
 *
 * @category Class
 * @description Captures [any information that&#39;s not included](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/shared-properties/providing-address-information#additional-address-information) in the [basic address](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/shared-properties/providing-address-information#basic-address-information).
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdditionalAddressInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalAddressInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'neighborhood' => 'string',
        'division' => 'string',
        'phonetic_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'neighborhood' => null,
        'division' => null,
        'phonetic_name' => null
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
        'neighborhood' => 'neighborhood',
        'division' => 'division',
        'phonetic_name' => 'phoneticName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'neighborhood' => 'setNeighborhood',
        'division' => 'setDivision',
        'phonetic_name' => 'setPhoneticName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'neighborhood' => 'getNeighborhood',
        'division' => 'getDivision',
        'phonetic_name' => 'getPhoneticName'
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
        $this->container['neighborhood'] = isset($data['neighborhood']) ? $data['neighborhood'] : null;
        $this->container['division'] = isset($data['division']) ? $data['division'] : null;
        $this->container['phonetic_name'] = isset($data['phonetic_name']) ? $data['phonetic_name'] : null;
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
     * Gets neighborhood
     *
     * @return string|null
     */
    public function getNeighborhood()
    {
        return $this->container['neighborhood'];
    }

    /**
     * Sets neighborhood
     *
     * @param string|null $neighborhood The [neighborhood](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/shared-properties/providing-address-information#brazilian-neighborhoods) of the address.
     *
     * @return $this
     */
    public function setNeighborhood($neighborhood)
    {
        $this->container['neighborhood'] = $neighborhood;

        return $this;
    }

    /**
     * Gets division
     *
     * @return string|null
     */
    public function getDivision()
    {
        return $this->container['division'];
    }

    /**
     * Sets division
     *
     * @param string|null $division A [division within an organization](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/shared-properties/providing-address-information#japanese-phonetics-and-divisions).
     *
     * @return $this
     */
    public function setDivision($division)
    {
        $this->container['division'] = $division;

        return $this;
    }

    /**
     * Gets phonetic_name
     *
     * @return string|null
     */
    public function getPhoneticName()
    {
        return $this->container['phonetic_name'];
    }

    /**
     * Sets phonetic_name
     *
     * @param string|null $phonetic_name The [phonetic spelling of a name](https://docs.digitalriver.com/digital-river-api/checkouts-and-orders/shared-properties/providing-address-information#japanese-phonetics-and-divisions).
     *
     * @return $this
     */
    public function setPhoneticName($phonetic_name)
    {
        $this->container['phonetic_name'] = $phonetic_name;

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


