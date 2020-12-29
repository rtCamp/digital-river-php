<?php
/**
 * PayoutAmounts
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
 * PayoutAmounts Class Doc Comment
 *
 * @category Class
 * @package  DigitalRiver\ApiSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayoutAmounts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayoutAmounts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currency' => 'string',
        'exchange_rate' => 'double',
        'amount' => 'double',
        'tax' => 'double',
        'shipping' => 'double',
        'regulatory_fees' => 'double',
        'landed_cost' => 'double',
        'product_price' => 'double',
        'digital_river_share' => 'double',
        'distributor_share' => 'double',
        'transaction_fees' => 'double',
        'shipping_discount' => 'double',
        'regulatory_fee_discount' => 'double',
        'remit_shipping' => 'double',
        'payout_amount' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'currency' => null,
        'exchange_rate' => 'double',
        'amount' => 'double',
        'tax' => 'double',
        'shipping' => 'double',
        'regulatory_fees' => 'double',
        'landed_cost' => 'double',
        'product_price' => 'double',
        'digital_river_share' => 'double',
        'distributor_share' => 'double',
        'transaction_fees' => 'double',
        'shipping_discount' => 'double',
        'regulatory_fee_discount' => 'double',
        'remit_shipping' => 'double',
        'payout_amount' => 'double'
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
        'currency' => 'currency',
        'exchange_rate' => 'exchangeRate',
        'amount' => 'amount',
        'tax' => 'tax',
        'shipping' => 'shipping',
        'regulatory_fees' => 'regulatoryFees',
        'landed_cost' => 'landedCost',
        'product_price' => 'productPrice',
        'digital_river_share' => 'digitalRiverShare',
        'distributor_share' => 'distributorShare',
        'transaction_fees' => 'transactionFees',
        'shipping_discount' => 'shippingDiscount',
        'regulatory_fee_discount' => 'regulatoryFeeDiscount',
        'remit_shipping' => 'remitShipping',
        'payout_amount' => 'payoutAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency' => 'setCurrency',
        'exchange_rate' => 'setExchangeRate',
        'amount' => 'setAmount',
        'tax' => 'setTax',
        'shipping' => 'setShipping',
        'regulatory_fees' => 'setRegulatoryFees',
        'landed_cost' => 'setLandedCost',
        'product_price' => 'setProductPrice',
        'digital_river_share' => 'setDigitalRiverShare',
        'distributor_share' => 'setDistributorShare',
        'transaction_fees' => 'setTransactionFees',
        'shipping_discount' => 'setShippingDiscount',
        'regulatory_fee_discount' => 'setRegulatoryFeeDiscount',
        'remit_shipping' => 'setRemitShipping',
        'payout_amount' => 'setPayoutAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency' => 'getCurrency',
        'exchange_rate' => 'getExchangeRate',
        'amount' => 'getAmount',
        'tax' => 'getTax',
        'shipping' => 'getShipping',
        'regulatory_fees' => 'getRegulatoryFees',
        'landed_cost' => 'getLandedCost',
        'product_price' => 'getProductPrice',
        'digital_river_share' => 'getDigitalRiverShare',
        'distributor_share' => 'getDistributorShare',
        'transaction_fees' => 'getTransactionFees',
        'shipping_discount' => 'getShippingDiscount',
        'regulatory_fee_discount' => 'getRegulatoryFeeDiscount',
        'remit_shipping' => 'getRemitShipping',
        'payout_amount' => 'getPayoutAmount'
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
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['exchange_rate'] = isset($data['exchange_rate']) ? $data['exchange_rate'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['regulatory_fees'] = isset($data['regulatory_fees']) ? $data['regulatory_fees'] : null;
        $this->container['landed_cost'] = isset($data['landed_cost']) ? $data['landed_cost'] : null;
        $this->container['product_price'] = isset($data['product_price']) ? $data['product_price'] : null;
        $this->container['digital_river_share'] = isset($data['digital_river_share']) ? $data['digital_river_share'] : null;
        $this->container['distributor_share'] = isset($data['distributor_share']) ? $data['distributor_share'] : null;
        $this->container['transaction_fees'] = isset($data['transaction_fees']) ? $data['transaction_fees'] : null;
        $this->container['shipping_discount'] = isset($data['shipping_discount']) ? $data['shipping_discount'] : null;
        $this->container['regulatory_fee_discount'] = isset($data['regulatory_fee_discount']) ? $data['regulatory_fee_discount'] : null;
        $this->container['remit_shipping'] = isset($data['remit_shipping']) ? $data['remit_shipping'] : null;
        $this->container['payout_amount'] = isset($data['payout_amount']) ? $data['payout_amount'] : null;
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
     * @param string|null $currency Three-letter ISO currency code representing the payout currency.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return double|null
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param double|null $exchange_rate The exchange rate used to convert the sales amount into the payout currency sales amount.
     *
     * @return $this
     */
    public function setExchangeRate($exchange_rate)
    {
        $this->container['exchange_rate'] = $exchange_rate;

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
     * @param double|null $amount The sales transaction amount.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return double|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param double|null $tax Tax amount.
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

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
     * Gets regulatory_fees
     *
     * @return double|null
     */
    public function getRegulatoryFees()
    {
        return $this->container['regulatory_fees'];
    }

    /**
     * Sets regulatory_fees
     *
     * @param double|null $regulatory_fees Regulatory fees amount.
     *
     * @return $this
     */
    public function setRegulatoryFees($regulatory_fees)
    {
        $this->container['regulatory_fees'] = $regulatory_fees;

        return $this;
    }

    /**
     * Gets landed_cost
     *
     * @return double|null
     */
    public function getLandedCost()
    {
        return $this->container['landed_cost'];
    }

    /**
     * Sets landed_cost
     *
     * @param double|null $landed_cost Landed costs amount.
     *
     * @return $this
     */
    public function setLandedCost($landed_cost)
    {
        $this->container['landed_cost'] = $landed_cost;

        return $this;
    }

    /**
     * Gets product_price
     *
     * @return double|null
     */
    public function getProductPrice()
    {
        return $this->container['product_price'];
    }

    /**
     * Sets product_price
     *
     * @param double|null $product_price Product price.
     *
     * @return $this
     */
    public function setProductPrice($product_price)
    {
        $this->container['product_price'] = $product_price;

        return $this;
    }

    /**
     * Gets digital_river_share
     *
     * @return double|null
     */
    public function getDigitalRiverShare()
    {
        return $this->container['digital_river_share'];
    }

    /**
     * Sets digital_river_share
     *
     * @param double|null $digital_river_share Digital River share amount.
     *
     * @return $this
     */
    public function setDigitalRiverShare($digital_river_share)
    {
        $this->container['digital_river_share'] = $digital_river_share;

        return $this;
    }

    /**
     * Gets distributor_share
     *
     * @return double|null
     */
    public function getDistributorShare()
    {
        return $this->container['distributor_share'];
    }

    /**
     * Sets distributor_share
     *
     * @param double|null $distributor_share Distributor amount.
     *
     * @return $this
     */
    public function setDistributorShare($distributor_share)
    {
        $this->container['distributor_share'] = $distributor_share;

        return $this;
    }

    /**
     * Gets transaction_fees
     *
     * @return double|null
     */
    public function getTransactionFees()
    {
        return $this->container['transaction_fees'];
    }

    /**
     * Sets transaction_fees
     *
     * @param double|null $transaction_fees Transaction fees amount.
     *
     * @return $this
     */
    public function setTransactionFees($transaction_fees)
    {
        $this->container['transaction_fees'] = $transaction_fees;

        return $this;
    }

    /**
     * Gets shipping_discount
     *
     * @return double|null
     */
    public function getShippingDiscount()
    {
        return $this->container['shipping_discount'];
    }

    /**
     * Sets shipping_discount
     *
     * @param double|null $shipping_discount Shipping discount amount.
     *
     * @return $this
     */
    public function setShippingDiscount($shipping_discount)
    {
        $this->container['shipping_discount'] = $shipping_discount;

        return $this;
    }

    /**
     * Gets regulatory_fee_discount
     *
     * @return double|null
     */
    public function getRegulatoryFeeDiscount()
    {
        return $this->container['regulatory_fee_discount'];
    }

    /**
     * Sets regulatory_fee_discount
     *
     * @param double|null $regulatory_fee_discount Regulatory fee discount amount.
     *
     * @return $this
     */
    public function setRegulatoryFeeDiscount($regulatory_fee_discount)
    {
        $this->container['regulatory_fee_discount'] = $regulatory_fee_discount;

        return $this;
    }

    /**
     * Gets remit_shipping
     *
     * @return double|null
     */
    public function getRemitShipping()
    {
        return $this->container['remit_shipping'];
    }

    /**
     * Sets remit_shipping
     *
     * @param double|null $remit_shipping Shipping remittance amount.
     *
     * @return $this
     */
    public function setRemitShipping($remit_shipping)
    {
        $this->container['remit_shipping'] = $remit_shipping;

        return $this;
    }

    /**
     * Gets payout_amount
     *
     * @return double|null
     */
    public function getPayoutAmount()
    {
        return $this->container['payout_amount'];
    }

    /**
     * Sets payout_amount
     *
     * @param double|null $payout_amount Payout amount.
     *
     * @return $this
     */
    public function setPayoutAmount($payout_amount)
    {
        $this->container['payout_amount'] = $payout_amount;

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


