<?php
/**
 * Riskv1authenticationresultsConsumerAuthenticationInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Riskv1authenticationresultsConsumerAuthenticationInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Riskv1authenticationresultsConsumerAuthenticationInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskv1authenticationresults_consumerAuthenticationInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authenticationTransactionId' => 'string',
        'authenticationTransactionContext' => 'string',
        'otpToken' => 'string',
        'authenticationType' => 'string',
        'effectiveAuthenticationType' => 'string',
        'responseAccessToken' => 'string',
        'signedParesStatusReason' => 'string',
        'signedPares' => 'string',
        'whiteListStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authenticationTransactionId' => null,
        'authenticationTransactionContext' => null,
        'otpToken' => null,
        'authenticationType' => null,
        'effectiveAuthenticationType' => null,
        'responseAccessToken' => null,
        'signedParesStatusReason' => null,
        'signedPares' => null,
        'whiteListStatus' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'authenticationTransactionId' => 'authenticationTransactionId',
        'authenticationTransactionContext' => 'authenticationTransactionContext',
        'otpToken' => 'otpToken',
        'authenticationType' => 'authenticationType',
        'effectiveAuthenticationType' => 'effectiveAuthenticationType',
        'responseAccessToken' => 'responseAccessToken',
        'signedParesStatusReason' => 'signedParesStatusReason',
        'signedPares' => 'signedPares',
        'whiteListStatus' => 'whiteListStatus'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'authenticationTransactionId' => 'setAuthenticationTransactionId',
        'authenticationTransactionContext' => 'setAuthenticationTransactionContext',
        'otpToken' => 'setOtpToken',
        'authenticationType' => 'setAuthenticationType',
        'effectiveAuthenticationType' => 'setEffectiveAuthenticationType',
        'responseAccessToken' => 'setResponseAccessToken',
        'signedParesStatusReason' => 'setSignedParesStatusReason',
        'signedPares' => 'setSignedPares',
        'whiteListStatus' => 'setWhiteListStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'authenticationTransactionId' => 'getAuthenticationTransactionId',
        'authenticationTransactionContext' => 'getAuthenticationTransactionContext',
        'otpToken' => 'getOtpToken',
        'authenticationType' => 'getAuthenticationType',
        'effectiveAuthenticationType' => 'getEffectiveAuthenticationType',
        'responseAccessToken' => 'getResponseAccessToken',
        'signedParesStatusReason' => 'getSignedParesStatusReason',
        'signedPares' => 'getSignedPares',
        'whiteListStatus' => 'getWhiteListStatus'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['authenticationTransactionId'] = isset($data['authenticationTransactionId']) ? $data['authenticationTransactionId'] : null;
        $this->container['authenticationTransactionContext'] = isset($data['authenticationTransactionContext']) ? $data['authenticationTransactionContext'] : null;
        $this->container['otpToken'] = isset($data['otpToken']) ? $data['otpToken'] : null;
        $this->container['authenticationType'] = isset($data['authenticationType']) ? $data['authenticationType'] : null;
        $this->container['effectiveAuthenticationType'] = isset($data['effectiveAuthenticationType']) ? $data['effectiveAuthenticationType'] : null;
        $this->container['responseAccessToken'] = isset($data['responseAccessToken']) ? $data['responseAccessToken'] : null;
        $this->container['signedParesStatusReason'] = isset($data['signedParesStatusReason']) ? $data['signedParesStatusReason'] : null;
        $this->container['signedPares'] = isset($data['signedPares']) ? $data['signedPares'] : null;
        $this->container['whiteListStatus'] = isset($data['whiteListStatus']) ? $data['whiteListStatus'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets authenticationTransactionId
     * @return string
     */
    public function getAuthenticationTransactionId()
    {
        return $this->container['authenticationTransactionId'];
    }

    /**
     * Sets authenticationTransactionId
     * @param string $authenticationTransactionId Payer authentication transaction identifier passed to link the check enrollment and validate authentication messages.For Rupay,this is passed only in Re-Send OTP usecase. **Note**: Required for Standard integration, Rupay Seamless server to server integration for enroll service. Required for Hybrid integration for validate service.
     * @return $this
     */
    public function setAuthenticationTransactionId($authenticationTransactionId)
    {

        $this->container['authenticationTransactionId'] = $authenticationTransactionId;

        return $this;
    }

    /**
     * Gets authenticationTransactionContext
     * @return string
     */
    public function getAuthenticationTransactionContext()
    {
        return $this->container['authenticationTransactionContext'];
    }

    /**
     * Sets authenticationTransactionContext
     * @param string $authenticationTransactionContext Authentication transaction context is used as a unique identifier to link enroll and validate call.
     * @return $this
     */
    public function setAuthenticationTransactionContext($authenticationTransactionContext)
    {

        $this->container['authenticationTransactionContext'] = $authenticationTransactionContext;

        return $this;
    }

    /**
     * Gets otpToken
     * @return string
     */
    public function getOtpToken()
    {
        return $this->container['otpToken'];
    }

    /**
     * Sets otpToken
     * @param string $otpToken OTP entered by the card holder.
     * @return $this
     */
    public function setOtpToken($otpToken)
    {

        $this->container['otpToken'] = $otpToken;

        return $this;
    }

    /**
     * Gets authenticationType
     * @return string
     */
    public function getAuthenticationType()
    {
        return $this->container['authenticationType'];
    }

    /**
     * Sets authenticationType
     * @param string $authenticationType Indicates the type of authentication that will be used to challenge the card holder.  Possible Values:  01 - Static  02 - Dynamic  03 - OOB (Out of Band)  04 - Decoupled  20 - OTP hosted at merchant end. (Rupay S2S flow) **NOTE**:  EMV 3-D Secure version 2.1.0 supports values 01-03.  Version 2.2.0 supports values 01-04.  Decoupled authentication is not supported at this time.
     * @return $this
     */
    public function setAuthenticationType($authenticationType)
    {

        $this->container['authenticationType'] = $authenticationType;

        return $this;
    }

    /**
     * Gets effectiveAuthenticationType
     * @return string
     */
    public function getEffectiveAuthenticationType()
    {
        return $this->container['effectiveAuthenticationType'];
    }

    /**
     * Sets effectiveAuthenticationType
     * @param string $effectiveAuthenticationType This field describes the type of 3DS transaction flow that took place.  It can be one of three possible flows; CH - Challenge FR - Frictionless FD - Frictionless with delegation, (challenge not generated by the issuer but by the scheme on behalf of the issuer).
     * @return $this
     */
    public function setEffectiveAuthenticationType($effectiveAuthenticationType)
    {

        $this->container['effectiveAuthenticationType'] = $effectiveAuthenticationType;

        return $this;
    }

    /**
     * Gets responseAccessToken
     * @return string
     */
    public function getResponseAccessToken()
    {
        return $this->container['responseAccessToken'];
    }

    /**
     * Sets responseAccessToken
     * @param string $responseAccessToken JWT returned by the 3D Secure provider when the authentication is complete. Required for Hybrid integration if you use the Cybersource-generated access token. Note: Max. length of this field is 2048 characters.
     * @return $this
     */
    public function setResponseAccessToken($responseAccessToken)
    {
        $this->container['responseAccessToken'] = $responseAccessToken;

        return $this;
    }

    /**
     * Gets signedParesStatusReason
     * @return string
     */
    public function getSignedParesStatusReason()
    {
        return $this->container['signedParesStatusReason'];
    }

    /**
     * Sets signedParesStatusReason
     * @param string $signedParesStatusReason Provides additional information as to why the PAResStatus has a specific value.
     * @return $this
     */
    public function setSignedParesStatusReason($signedParesStatusReason)
    {

        $this->container['signedParesStatusReason'] = $signedParesStatusReason;

        return $this;
    }

    /**
     * Gets signedPares
     * @return string
     */
    public function getSignedPares()
    {
        return $this->container['signedPares'];
    }

    /**
     * Sets signedPares
     * @param string $signedPares Payer authentication result (PARes) message returned by the card-issuing bank. If you need to show proof of enrollment checking, you may need to decrypt and parse the string for the information required by the payment card company. For more information, see \"Storing Payer Authentication Data,\" page 160. Important The value is in base64. You must remove all carriage returns and line feeds before adding the PARes to the request.
     * @return $this
     */
    public function setSignedPares($signedPares)
    {
        $this->container['signedPares'] = $signedPares;

        return $this;
    }

    /**
     * Gets whiteListStatus
     * @return string
     */
    public function getWhiteListStatus()
    {
        return $this->container['whiteListStatus'];
    }

    /**
     * Sets whiteListStatus
     * @param string $whiteListStatus Enables the communication of trusted beneficiary/whitelist status between the ACS, the DS and the 3DS Requestor.  Possible Values:  Y - 3DS Requestor is whitelisted by cardholder  N - 3DS Requestor is not whitelisted by cardholder
     * @return $this
     */
    public function setWhiteListStatus($whiteListStatus)
    {

        $this->container['whiteListStatus'] = $whiteListStatus;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


