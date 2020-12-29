<?php
/**
 * ReturnResponse
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
 * ReturnResponse Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReturnResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReturnResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_time' => '\DateTime',
        'updated_time' => '\DateTime',
        'order_id' => 'string',
        'currency' => 'string',
        'items' => '\DigitalRiver\ApiSdk\Model\ReturnItem[]',
        'reason' => 'string',
        'failure_reason' => 'string',
        'state' => 'string',
        'location' => '\DigitalRiver\ApiSdk\Model\Location',
        'live_mode' => 'bool',
        'metadata' => 'map[string,AnyType]',
        'refund_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_time' => 'date-time',
        'updated_time' => 'date-time',
        'order_id' => null,
        'currency' => null,
        'items' => null,
        'reason' => null,
        'failure_reason' => null,
        'state' => null,
        'location' => null,
        'live_mode' => null,
        'metadata' => null,
        'refund_ids' => null
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
        'created_time' => 'createdTime',
        'updated_time' => 'updatedTime',
        'order_id' => 'orderId',
        'currency' => 'currency',
        'items' => 'items',
        'reason' => 'reason',
        'failure_reason' => 'failureReason',
        'state' => 'state',
        'location' => 'location',
        'live_mode' => 'liveMode',
        'metadata' => 'metadata',
        'refund_ids' => 'refundIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_time' => 'setCreatedTime',
        'updated_time' => 'setUpdatedTime',
        'order_id' => 'setOrderId',
        'currency' => 'setCurrency',
        'items' => 'setItems',
        'reason' => 'setReason',
        'failure_reason' => 'setFailureReason',
        'state' => 'setState',
        'location' => 'setLocation',
        'live_mode' => 'setLiveMode',
        'metadata' => 'setMetadata',
        'refund_ids' => 'setRefundIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_time' => 'getCreatedTime',
        'updated_time' => 'getUpdatedTime',
        'order_id' => 'getOrderId',
        'currency' => 'getCurrency',
        'items' => 'getItems',
        'reason' => 'getReason',
        'failure_reason' => 'getFailureReason',
        'state' => 'getState',
        'location' => 'getLocation',
        'live_mode' => 'getLiveMode',
        'metadata' => 'getMetadata',
        'refund_ids' => 'getRefundIds'
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

    const STATE_CREATED = 'created';
    const STATE_ACCEPTED = 'accepted';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
       $allowable = [
            self::STATE_CREATED,
            self::STATE_ACCEPTED,
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
        $this->container['created_time'] = isset($data['created_time']) ? $data['created_time'] : null;
        $this->container['updated_time'] = isset($data['updated_time']) ? $data['updated_time'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['failure_reason'] = isset($data['failure_reason']) ? $data['failure_reason'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['live_mode'] = isset($data['live_mode']) ? $data['live_mode'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['refund_ids'] = isset($data['refund_ids']) ? $data['refund_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStateAllowableValues();
       
        if (!is_null($this->container['state']) && !in_array(strtolower($this->container['state']), $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
     * @param string|null $id The unique identifier of the return.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return \DateTime|null
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param \DateTime|null $created_time The time at which the return was created.
     *
     * @return $this
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets updated_time
     *
     * @return \DateTime|null
     */
    public function getUpdatedTime()
    {
        return $this->container['updated_time'];
    }

    /**
     * Sets updated_time
     *
     * @param \DateTime|null $updated_time The time at which the return was updated.
     *
     * @return $this
     */
    public function setUpdatedTime($updated_time)
    {
        $this->container['updated_time'] = $updated_time;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id The unique identifier for the order
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

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
     * @param string|null $currency A three-letter ISO currency code.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \DigitalRiver\ApiSdk\Model\ReturnItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \DigitalRiver\ApiSdk\Model\ReturnItem[]|null $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason The reason for the return.
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets failure_reason
     *
     * @return string|null
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param string|null $failure_reason An enumeration indicating the reason for the return failure, if known.
     *
     * @return $this
     */
    public function setFailureReason($failure_reason)
    {
        $this->container['failure_reason'] = $failure_reason;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state An enumeration indicating the state of the return.
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array(strtolower($state), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \DigitalRiver\ApiSdk\Model\Location|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \DigitalRiver\ApiSdk\Model\Location|null $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets live_mode
     *
     * @return bool|null
     */
    public function getLiveMode()
    {
        return $this->container['live_mode'];
    }

    /**
     * Sets live_mode
     *
     * @param bool|null $live_mode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
     *
     * @return $this
     */
    public function setLiveMode($live_mode)
    {
        $this->container['live_mode'] = $live_mode;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return map[string,AnyType]|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,AnyType]|null $metadata Key-value pairs used to store additional data. Value can be string, boolean or integer types.
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets refund_ids
     *
     * @return string[]|null
     */
    public function getRefundIds()
    {
        return $this->container['refund_ids'];
    }

    /**
     * Sets refund_ids
     *
     * @param string[]|null $refund_ids refund_ids
     *
     * @return $this
     */
    public function setRefundIds($refund_ids)
    {
        $this->container['refund_ids'] = $refund_ids;

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


