<?php
/**
 * Source
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
 * Source Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Source implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Source';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'client_secret' => 'string',
        'created_time' => '\DateTime',
        'type' => 'string',
        'currency' => 'string',
        'amount' => 'double',
        'reusable' => 'bool',
        'owner' => '\DigitalRiver\ApiSdk\Model\Owner',
        'credit_card' => '\DigitalRiver\ApiSdk\Model\CreditCard',
        'google_pay' => '\DigitalRiver\ApiSdk\Model\GooglePay',
        'pay_pal' => '\DigitalRiver\ApiSdk\Model\PayPal',
        'pay_pal_billing' => '\DigitalRiver\ApiSdk\Model\PayPal',
        'direct_debit' => '\DigitalRiver\ApiSdk\Model\DirectDebit',
        'wire_transfer' => '\DigitalRiver\ApiSdk\Model\WireTransfer',
        'pay_co' => '\DigitalRiver\ApiSdk\Model\PaycoResponse',
        'flow' => 'string',
        'state' => 'string',
        'metadata' => 'map[string,AnyType]',
        'customer_id' => 'string',
        'payment_session_id' => 'string',
        'live_mode' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'client_secret' => null,
        'created_time' => 'date-time',
        'type' => null,
        'currency' => null,
        'amount' => 'double',
        'reusable' => null,
        'owner' => null,
        'credit_card' => null,
        'google_pay' => null,
        'pay_pal' => null,
        'pay_pal_billing' => null,
        'direct_debit' => null,
        'wire_transfer' => null,
        'pay_co' => null,
        'flow' => null,
        'state' => null,
        'metadata' => null,
        'customer_id' => null,
        'payment_session_id' => null,
        'live_mode' => null
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
        'client_secret' => 'clientSecret',
        'created_time' => 'createdTime',
        'type' => 'type',
        'currency' => 'currency',
        'amount' => 'amount',
        'reusable' => 'reusable',
        'owner' => 'owner',
        'credit_card' => 'creditCard',
        'google_pay' => 'googlePay',
        'pay_pal' => 'payPal',
        'pay_pal_billing' => 'payPalBilling',
        'direct_debit' => 'directDebit',
        'wire_transfer' => 'wireTransfer',
        'pay_co' => 'payCo',
        'flow' => 'flow',
        'state' => 'state',
        'metadata' => 'metadata',
        'customer_id' => 'customerId',
        'payment_session_id' => 'paymentSessionId',
        'live_mode' => 'liveMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'client_secret' => 'setClientSecret',
        'created_time' => 'setCreatedTime',
        'type' => 'setType',
        'currency' => 'setCurrency',
        'amount' => 'setAmount',
        'reusable' => 'setReusable',
        'owner' => 'setOwner',
        'credit_card' => 'setCreditCard',
        'google_pay' => 'setGooglePay',
        'pay_pal' => 'setPayPal',
        'pay_pal_billing' => 'setPayPalBilling',
        'direct_debit' => 'setDirectDebit',
        'wire_transfer' => 'setWireTransfer',
        'pay_co' => 'setPayCo',
        'flow' => 'setFlow',
        'state' => 'setState',
        'metadata' => 'setMetadata',
        'customer_id' => 'setCustomerId',
        'payment_session_id' => 'setPaymentSessionId',
        'live_mode' => 'setLiveMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'client_secret' => 'getClientSecret',
        'created_time' => 'getCreatedTime',
        'type' => 'getType',
        'currency' => 'getCurrency',
        'amount' => 'getAmount',
        'reusable' => 'getReusable',
        'owner' => 'getOwner',
        'credit_card' => 'getCreditCard',
        'google_pay' => 'getGooglePay',
        'pay_pal' => 'getPayPal',
        'pay_pal_billing' => 'getPayPalBilling',
        'direct_debit' => 'getDirectDebit',
        'wire_transfer' => 'getWireTransfer',
        'pay_co' => 'getPayCo',
        'flow' => 'getFlow',
        'state' => 'getState',
        'metadata' => 'getMetadata',
        'customer_id' => 'getCustomerId',
        'payment_session_id' => 'getPaymentSessionId',
        'live_mode' => 'getLiveMode'
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

    const TYPE_CREDIT_CARD = 'creditCard';
    const TYPE_DIRECT_DEBIT = 'directDebit';
    const TYPE_GOOGLE_PAY = 'googlePay';
    const TYPE_APPLE_PAY = 'applePay';
    const TYPE_PAY_PAL = 'payPal';
    const TYPE_WIRE_TRANSFER = 'wireTransfer';
    const TYPE_CUSTOMER_CREDIT = 'customerCredit';
    const FLOW_STANDARD = 'standard';
    const FLOW_REDIRECT = 'redirect';
    const FLOW_RECEIVER = 'receiver';
    const STATE_PENDING_FUNDS = 'pending_funds';
    const STATE_PENDING_REDIRECT = 'pending_redirect';
    const STATE_REQUIRES_ACTION = 'requires_action';
    const STATE_CHARGEABLE = 'chargeable';
    const STATE_CONSUMED = 'consumed';
    const STATE_CANCELLED = 'cancelled';
    const STATE_FAILED = 'failed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
       $allowable = [
            self::TYPE_CREDIT_CARD,
            self::TYPE_DIRECT_DEBIT,
            self::TYPE_GOOGLE_PAY,
            self::TYPE_APPLE_PAY,
            self::TYPE_PAY_PAL,
            self::TYPE_WIRE_TRANSFER,
            self::TYPE_CUSTOMER_CREDIT,
        ];

        $allowableAllCase = array_unique(array_merge(array_map('strtolower', $allowable), $allowable));
        return $allowableAllCase;
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlowAllowableValues()
    {
       $allowable = [
            self::FLOW_STANDARD,
            self::FLOW_REDIRECT,
            self::FLOW_RECEIVER,
        ];

        $allowableAllCase = array_unique(array_merge(array_map('strtolower', $allowable), $allowable));
        return $allowableAllCase;
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
       $allowable = [
            self::STATE_PENDING_FUNDS,
            self::STATE_PENDING_REDIRECT,
            self::STATE_REQUIRES_ACTION,
            self::STATE_CHARGEABLE,
            self::STATE_CONSUMED,
            self::STATE_CANCELLED,
            self::STATE_FAILED,
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
        $this->container['client_secret'] = isset($data['client_secret']) ? $data['client_secret'] : null;
        $this->container['created_time'] = isset($data['created_time']) ? $data['created_time'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['reusable'] = isset($data['reusable']) ? $data['reusable'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['credit_card'] = isset($data['credit_card']) ? $data['credit_card'] : null;
        $this->container['google_pay'] = isset($data['google_pay']) ? $data['google_pay'] : null;
        $this->container['pay_pal'] = isset($data['pay_pal']) ? $data['pay_pal'] : null;
        $this->container['pay_pal_billing'] = isset($data['pay_pal_billing']) ? $data['pay_pal_billing'] : null;
        $this->container['direct_debit'] = isset($data['direct_debit']) ? $data['direct_debit'] : null;
        $this->container['wire_transfer'] = isset($data['wire_transfer']) ? $data['wire_transfer'] : null;
        $this->container['pay_co'] = isset($data['pay_co']) ? $data['pay_co'] : null;
        $this->container['flow'] = isset($data['flow']) ? $data['flow'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['payment_session_id'] = isset($data['payment_session_id']) ? $data['payment_session_id'] : null;
        $this->container['live_mode'] = isset($data['live_mode']) ? $data['live_mode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
       
        if (!is_null($this->container['type']) && !in_array(strtolower($this->container['type']), $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFlowAllowableValues();
       
        if (!is_null($this->container['flow']) && !in_array(strtolower($this->container['flow']), $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'flow', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * @param string|null $id Unique identifier for the source.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets client_secret
     *
     * @return string|null
     */
    public function getClientSecret()
    {
        return $this->container['client_secret'];
    }

    /**
     * Sets client_secret
     *
     * @param string|null $client_secret Used for client-side retrieval using a public key.
     *
     * @return $this
     */
    public function setClientSecret($client_secret)
    {
        $this->container['client_secret'] = $client_secret;

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
     * @param \DateTime|null $created_time Time when the source was created.
     *
     * @return $this
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The payment type of the source. The payment type will correspond to another element in the source response that contains detailed information specific to the type. For example, a type of creditCard indicates that there is an object in the response named creditCard.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * Gets amount
     *
     * @return double|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double|null $amount Amount associated with the source. Once ready, the source will be charged this amount. Required for single_use sources.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets reusable
     *
     * @return bool|null
     */
    public function getReusable()
    {
        return $this->container['reusable'];
    }

    /**
     * Sets reusable
     *
     * @param bool|null $reusable If true, you can reuse this source, if false, only once.
     *
     * @return $this
     */
    public function setReusable($reusable)
    {
        $this->container['reusable'] = $reusable;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \DigitalRiver\ApiSdk\Model\Owner|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \DigitalRiver\ApiSdk\Model\Owner|null $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets credit_card
     *
     * @return \DigitalRiver\ApiSdk\Model\CreditCard|null
     */
    public function getCreditCard()
    {
        return $this->container['credit_card'];
    }

    /**
     * Sets credit_card
     *
     * @param \DigitalRiver\ApiSdk\Model\CreditCard|null $credit_card credit_card
     *
     * @return $this
     */
    public function setCreditCard($credit_card)
    {
        $this->container['credit_card'] = $credit_card;

        return $this;
    }

    /**
     * Gets google_pay
     *
     * @return \DigitalRiver\ApiSdk\Model\GooglePay|null
     */
    public function getGooglePay()
    {
        return $this->container['google_pay'];
    }

    /**
     * Sets google_pay
     *
     * @param \DigitalRiver\ApiSdk\Model\GooglePay|null $google_pay google_pay
     *
     * @return $this
     */
    public function setGooglePay($google_pay)
    {
        $this->container['google_pay'] = $google_pay;

        return $this;
    }

    /**
     * Gets pay_pal
     *
     * @return \DigitalRiver\ApiSdk\Model\PayPal|null
     */
    public function getPayPal()
    {
        return $this->container['pay_pal'];
    }

    /**
     * Sets pay_pal
     *
     * @param \DigitalRiver\ApiSdk\Model\PayPal|null $pay_pal pay_pal
     *
     * @return $this
     */
    public function setPayPal($pay_pal)
    {
        $this->container['pay_pal'] = $pay_pal;

        return $this;
    }

    /**
     * Gets pay_pal_billing
     *
     * @return \DigitalRiver\ApiSdk\Model\PayPal|null
     */
    public function getPayPalBilling()
    {
        return $this->container['pay_pal_billing'];
    }

    /**
     * Sets pay_pal_billing
     *
     * @param \DigitalRiver\ApiSdk\Model\PayPal|null $pay_pal_billing pay_pal_billing
     *
     * @return $this
     */
    public function setPayPalBilling($pay_pal_billing)
    {
        $this->container['pay_pal_billing'] = $pay_pal_billing;

        return $this;
    }

    /**
     * Gets direct_debit
     *
     * @return \DigitalRiver\ApiSdk\Model\DirectDebit|null
     */
    public function getDirectDebit()
    {
        return $this->container['direct_debit'];
    }

    /**
     * Sets direct_debit
     *
     * @param \DigitalRiver\ApiSdk\Model\DirectDebit|null $direct_debit direct_debit
     *
     * @return $this
     */
    public function setDirectDebit($direct_debit)
    {
        $this->container['direct_debit'] = $direct_debit;

        return $this;
    }

    /**
     * Gets wire_transfer
     *
     * @return \DigitalRiver\ApiSdk\Model\WireTransfer|null
     */
    public function getWireTransfer()
    {
        return $this->container['wire_transfer'];
    }

    /**
     * Sets wire_transfer
     *
     * @param \DigitalRiver\ApiSdk\Model\WireTransfer|null $wire_transfer wire_transfer
     *
     * @return $this
     */
    public function setWireTransfer($wire_transfer)
    {
        $this->container['wire_transfer'] = $wire_transfer;

        return $this;
    }

    /**
     * Gets pay_co
     *
     * @return \DigitalRiver\ApiSdk\Model\PaycoResponse|null
     */
    public function getPayCo()
    {
        return $this->container['pay_co'];
    }

    /**
     * Sets pay_co
     *
     * @param \DigitalRiver\ApiSdk\Model\PaycoResponse|null $pay_co pay_co
     *
     * @return $this
     */
    public function setPayCo($pay_co)
    {
        $this->container['pay_co'] = $pay_co;

        return $this;
    }

    /**
     * Gets flow
     *
     * @return string|null
     */
    public function getFlow()
    {
        return $this->container['flow'];
    }

    /**
     * Sets flow
     *
     * @param string|null $flow The authentication flow of the source.
     *
     * @return $this
     */
    public function setFlow($flow)
    {
        $allowedValues = $this->getFlowAllowableValues();
        if (!is_null($flow) && !in_array(strtolower($flow), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'flow', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['flow'] = $flow;

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
     * @param string|null $state The status of the source, one of pending_funds, pending_redirect, requires_action, cancelled, chargeable, consumed or failed. You can only use chargeable sources to create a charge.
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
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id Unique identifier of a customer.
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets payment_session_id
     *
     * @return string|null
     */
    public function getPaymentSessionId()
    {
        return $this->container['payment_session_id'];
    }

    /**
     * Sets payment_session_id
     *
     * @param string|null $payment_session_id Tracks the process of collecting a payment.
     *
     * @return $this
     */
    public function setPaymentSessionId($payment_session_id)
    {
        $this->container['payment_session_id'] = $payment_session_id;

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
     * @param bool|null $live_mode Has the value true if the object exists in live mode or the value false if the object exists in test mode.
     *
     * @return $this
     */
    public function setLiveMode($live_mode)
    {
        $this->container['live_mode'] = $live_mode;

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


