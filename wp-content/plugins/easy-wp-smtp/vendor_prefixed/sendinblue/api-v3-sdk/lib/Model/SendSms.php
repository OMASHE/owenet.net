<?php

/**
 * SendSms
 *
 * PHP version 5
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/sendinblue  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |   | 406  | Error. Not Acceptable  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */
namespace EasyWPSMTP\Vendor\SendinBlue\Client\Model;

use ArrayAccess;
use EasyWPSMTP\Vendor\SendinBlue\Client\ObjectSerializer;
/**
 * SendSms Class Doc Comment
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SendSms implements \EasyWPSMTP\Vendor\SendinBlue\Client\Model\ModelInterface, \ArrayAccess
{
    const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'sendSms';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = ['reference' => 'string', 'messageId' => 'int', 'smsCount' => 'int', 'usedCredits' => 'float', 'remainingCredits' => 'float'];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = ['reference' => null, 'messageId' => 'int64', 'smsCount' => 'int64', 'usedCredits' => 'float', 'remainingCredits' => 'float'];
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
    protected static $attributeMap = ['reference' => 'reference', 'messageId' => 'messageId', 'smsCount' => 'smsCount', 'usedCredits' => 'usedCredits', 'remainingCredits' => 'remainingCredits'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = ['reference' => 'setReference', 'messageId' => 'setMessageId', 'smsCount' => 'setSmsCount', 'usedCredits' => 'setUsedCredits', 'remainingCredits' => 'setRemainingCredits'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = ['reference' => 'getReference', 'messageId' => 'getMessageId', 'smsCount' => 'getSmsCount', 'usedCredits' => 'getUsedCredits', 'remainingCredits' => 'getRemainingCredits'];
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
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['messageId'] = isset($data['messageId']) ? $data['messageId'] : null;
        $this->container['smsCount'] = isset($data['smsCount']) ? $data['smsCount'] : null;
        $this->container['usedCredits'] = isset($data['usedCredits']) ? $data['usedCredits'] : null;
        $this->container['remainingCredits'] = isset($data['remainingCredits']) ? $data['remainingCredits'] : null;
    }
    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ($this->container['messageId'] === null) {
            $invalidProperties[] = "'messageId' can't be null";
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
        return \count($this->listInvalidProperties()) === 0;
    }
    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }
    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;
        return $this;
    }
    /**
     * Gets messageId
     *
     * @return int
     */
    public function getMessageId()
    {
        return $this->container['messageId'];
    }
    /**
     * Sets messageId
     *
     * @param int $messageId messageId
     *
     * @return $this
     */
    public function setMessageId($messageId)
    {
        $this->container['messageId'] = $messageId;
        return $this;
    }
    /**
     * Gets smsCount
     *
     * @return int
     */
    public function getSmsCount()
    {
        return $this->container['smsCount'];
    }
    /**
     * Sets smsCount
     *
     * @param int $smsCount Count of SMS's to send multiple text messages
     *
     * @return $this
     */
    public function setSmsCount($smsCount)
    {
        $this->container['smsCount'] = $smsCount;
        return $this;
    }
    /**
     * Gets usedCredits
     *
     * @return float
     */
    public function getUsedCredits()
    {
        return $this->container['usedCredits'];
    }
    /**
     * Sets usedCredits
     *
     * @param float $usedCredits SMS credits used per text message
     *
     * @return $this
     */
    public function setUsedCredits($usedCredits)
    {
        $this->container['usedCredits'] = $usedCredits;
        return $this;
    }
    /**
     * Gets remainingCredits
     *
     * @return float
     */
    public function getRemainingCredits()
    {
        return $this->container['remainingCredits'];
    }
    /**
     * Sets remainingCredits
     *
     * @param float $remainingCredits Remaining SMS credits of the user
     *
     * @return $this
     */
    public function setRemainingCredits($remainingCredits)
    {
        $this->container['remainingCredits'] = $remainingCredits;
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
        if (\is_null($offset)) {
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
        if (\defined('JSON_PRETTY_PRINT')) {
            // use JSON pretty print
            return \json_encode(\EasyWPSMTP\Vendor\SendinBlue\Client\ObjectSerializer::sanitizeForSerialization($this), \JSON_PRETTY_PRINT);
        }
        return \json_encode(\EasyWPSMTP\Vendor\SendinBlue\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
