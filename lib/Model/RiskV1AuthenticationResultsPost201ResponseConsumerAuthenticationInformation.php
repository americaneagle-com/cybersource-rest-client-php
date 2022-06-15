<?php
/**
 * RiskV1AuthenticationResultsPost201ResponseConsumerAuthenticationInformation
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
 * RiskV1AuthenticationResultsPost201ResponseConsumerAuthenticationInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RiskV1AuthenticationResultsPost201ResponseConsumerAuthenticationInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskV1AuthenticationResultsPost201Response_consumerAuthenticationInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'acsRenderingType' => 'string',
        'acsTransactionId' => 'string',
        'authenticationResult' => 'string',
        'authenticationStatusMsg' => 'string',
        'authenticationTransactionId' => 'string',
        'authenticationTransactionContextId' => 'string',
        'transactionToken' => 'string',
        'authorizationPayload' => 'string',
        'cavv' => 'string',
        'cavvAlgorithm' => 'string',
        'directoryServerErrorCode' => 'string',
        'directoryServerErrorDescription' => 'string',
        'indicator' => 'string',
        'interactionCounter' => 'string',
        'eci' => 'string',
        'eciRaw' => 'string',
        'paresStatus' => 'string',
        'sdkTransactionId' => 'string',
        'specificationVersion' => 'string',
        'threeDSServerTransactionId' => 'string',
        'ucafAuthenticationData' => 'string',
        'ucafCollectionIndicator' => 'string',
        'whiteListStatus' => 'string',
        'whiteListStatusSource' => 'string',
        'xid' => 'string',
        'directoryServerTransactionId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'acsRenderingType' => null,
        'acsTransactionId' => null,
        'authenticationResult' => null,
        'authenticationStatusMsg' => null,
        'authenticationTransactionId' => null,
        'authenticationTransactionContextId' => null,
        'transactionToken' => null,
        'authorizationPayload' => null,
        'cavv' => null,
        'cavvAlgorithm' => null,
        'directoryServerErrorCode' => null,
        'directoryServerErrorDescription' => null,
        'indicator' => null,
        'interactionCounter' => null,
        'eci' => null,
        'eciRaw' => null,
        'paresStatus' => null,
        'sdkTransactionId' => null,
        'specificationVersion' => null,
        'threeDSServerTransactionId' => null,
        'ucafAuthenticationData' => null,
        'ucafCollectionIndicator' => null,
        'whiteListStatus' => null,
        'whiteListStatusSource' => null,
        'xid' => null,
        'directoryServerTransactionId' => null
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
        'acsRenderingType' => 'acsRenderingType',
        'acsTransactionId' => 'acsTransactionId',
        'authenticationResult' => 'authenticationResult',
        'authenticationStatusMsg' => 'authenticationStatusMsg',
        'authenticationTransactionId' => 'authenticationTransactionId',
        'authenticationTransactionContextId' => 'authenticationTransactionContextId',
        'transactionToken' => 'transactionToken',
        'authorizationPayload' => 'authorizationPayload',
        'cavv' => 'cavv',
        'cavvAlgorithm' => 'cavvAlgorithm',
        'directoryServerErrorCode' => 'directoryServerErrorCode',
        'directoryServerErrorDescription' => 'directoryServerErrorDescription',
        'indicator' => 'indicator',
        'interactionCounter' => 'interactionCounter',
        'eci' => 'eci',
        'eciRaw' => 'eciRaw',
        'paresStatus' => 'paresStatus',
        'sdkTransactionId' => 'sdkTransactionId',
        'specificationVersion' => 'specificationVersion',
        'threeDSServerTransactionId' => 'threeDSServerTransactionId',
        'ucafAuthenticationData' => 'ucafAuthenticationData',
        'ucafCollectionIndicator' => 'ucafCollectionIndicator',
        'whiteListStatus' => 'whiteListStatus',
        'whiteListStatusSource' => 'whiteListStatusSource',
        'xid' => 'xid',
        'directoryServerTransactionId' => 'directoryServerTransactionId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'acsRenderingType' => 'setAcsRenderingType',
        'acsTransactionId' => 'setAcsTransactionId',
        'authenticationResult' => 'setAuthenticationResult',
        'authenticationStatusMsg' => 'setAuthenticationStatusMsg',
        'authenticationTransactionId' => 'setAuthenticationTransactionId',
        'authenticationTransactionContextId' => 'setAuthenticationTransactionContextId',
        'transactionToken' => 'setTransactionToken',
        'authorizationPayload' => 'setAuthorizationPayload',
        'cavv' => 'setCavv',
        'cavvAlgorithm' => 'setCavvAlgorithm',
        'directoryServerErrorCode' => 'setDirectoryServerErrorCode',
        'directoryServerErrorDescription' => 'setDirectoryServerErrorDescription',
        'indicator' => 'setIndicator',
        'interactionCounter' => 'setInteractionCounter',
        'eci' => 'setEci',
        'eciRaw' => 'setEciRaw',
        'paresStatus' => 'setParesStatus',
        'sdkTransactionId' => 'setSdkTransactionId',
        'specificationVersion' => 'setSpecificationVersion',
        'threeDSServerTransactionId' => 'setThreeDSServerTransactionId',
        'ucafAuthenticationData' => 'setUcafAuthenticationData',
        'ucafCollectionIndicator' => 'setUcafCollectionIndicator',
        'whiteListStatus' => 'setWhiteListStatus',
        'whiteListStatusSource' => 'setWhiteListStatusSource',
        'xid' => 'setXid',
        'directoryServerTransactionId' => 'setDirectoryServerTransactionId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'acsRenderingType' => 'getAcsRenderingType',
        'acsTransactionId' => 'getAcsTransactionId',
        'authenticationResult' => 'getAuthenticationResult',
        'authenticationStatusMsg' => 'getAuthenticationStatusMsg',
        'authenticationTransactionId' => 'getAuthenticationTransactionId',
        'authenticationTransactionContextId' => 'getAuthenticationTransactionContextId',
        'transactionToken' => 'getTransactionToken',
        'authorizationPayload' => 'getAuthorizationPayload',
        'cavv' => 'getCavv',
        'cavvAlgorithm' => 'getCavvAlgorithm',
        'directoryServerErrorCode' => 'getDirectoryServerErrorCode',
        'directoryServerErrorDescription' => 'getDirectoryServerErrorDescription',
        'indicator' => 'getIndicator',
        'interactionCounter' => 'getInteractionCounter',
        'eci' => 'getEci',
        'eciRaw' => 'getEciRaw',
        'paresStatus' => 'getParesStatus',
        'sdkTransactionId' => 'getSdkTransactionId',
        'specificationVersion' => 'getSpecificationVersion',
        'threeDSServerTransactionId' => 'getThreeDSServerTransactionId',
        'ucafAuthenticationData' => 'getUcafAuthenticationData',
        'ucafCollectionIndicator' => 'getUcafCollectionIndicator',
        'whiteListStatus' => 'getWhiteListStatus',
        'whiteListStatusSource' => 'getWhiteListStatusSource',
        'xid' => 'getXid',
        'directoryServerTransactionId' => 'getDirectoryServerTransactionId'
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
        $this->container['acsRenderingType'] = isset($data['acsRenderingType']) ? $data['acsRenderingType'] : null;
        $this->container['acsTransactionId'] = isset($data['acsTransactionId']) ? $data['acsTransactionId'] : null;
        $this->container['authenticationResult'] = isset($data['authenticationResult']) ? $data['authenticationResult'] : null;
        $this->container['authenticationStatusMsg'] = isset($data['authenticationStatusMsg']) ? $data['authenticationStatusMsg'] : null;
        $this->container['authenticationTransactionId'] = isset($data['authenticationTransactionId']) ? $data['authenticationTransactionId'] : null;
        $this->container['authenticationTransactionContextId'] = isset($data['authenticationTransactionContextId']) ? $data['authenticationTransactionContextId'] : null;
        $this->container['transactionToken'] = isset($data['transactionToken']) ? $data['transactionToken'] : null;
        $this->container['authorizationPayload'] = isset($data['authorizationPayload']) ? $data['authorizationPayload'] : null;
        $this->container['cavv'] = isset($data['cavv']) ? $data['cavv'] : null;
        $this->container['cavvAlgorithm'] = isset($data['cavvAlgorithm']) ? $data['cavvAlgorithm'] : null;
        $this->container['directoryServerErrorCode'] = isset($data['directoryServerErrorCode']) ? $data['directoryServerErrorCode'] : null;
        $this->container['directoryServerErrorDescription'] = isset($data['directoryServerErrorDescription']) ? $data['directoryServerErrorDescription'] : null;
        $this->container['indicator'] = isset($data['indicator']) ? $data['indicator'] : null;
        $this->container['interactionCounter'] = isset($data['interactionCounter']) ? $data['interactionCounter'] : null;
        $this->container['eci'] = isset($data['eci']) ? $data['eci'] : null;
        $this->container['eciRaw'] = isset($data['eciRaw']) ? $data['eciRaw'] : null;
        $this->container['paresStatus'] = isset($data['paresStatus']) ? $data['paresStatus'] : null;
        $this->container['sdkTransactionId'] = isset($data['sdkTransactionId']) ? $data['sdkTransactionId'] : null;
        $this->container['specificationVersion'] = isset($data['specificationVersion']) ? $data['specificationVersion'] : null;
        $this->container['threeDSServerTransactionId'] = isset($data['threeDSServerTransactionId']) ? $data['threeDSServerTransactionId'] : null;
        $this->container['ucafAuthenticationData'] = isset($data['ucafAuthenticationData']) ? $data['ucafAuthenticationData'] : null;
        $this->container['ucafCollectionIndicator'] = isset($data['ucafCollectionIndicator']) ? $data['ucafCollectionIndicator'] : null;
        $this->container['whiteListStatus'] = isset($data['whiteListStatus']) ? $data['whiteListStatus'] : null;
        $this->container['whiteListStatusSource'] = isset($data['whiteListStatusSource']) ? $data['whiteListStatusSource'] : null;
        $this->container['xid'] = isset($data['xid']) ? $data['xid'] : null;
        $this->container['directoryServerTransactionId'] = isset($data['directoryServerTransactionId']) ? $data['directoryServerTransactionId'] : null;
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
     * Gets acsRenderingType
     * @return string
     */
    public function getAcsRenderingType()
    {
        return $this->container['acsRenderingType'];
    }

    /**
     * Sets acsRenderingType
     * @param string $acsRenderingType Identifies the UI Type the ACS will use to complete the challenge. **NOTE**: Only available for App transactions using the Cardinal Mobile SDK.
     * @return $this
     */
    public function setAcsRenderingType($acsRenderingType)
    {
        $this->container['acsRenderingType'] = $acsRenderingType;

        return $this;
    }

    /**
     * Gets acsTransactionId
     * @return string
     */
    public function getAcsTransactionId()
    {
        return $this->container['acsTransactionId'];
    }

    /**
     * Sets acsTransactionId
     * @param string $acsTransactionId Unique transaction identifier assigned by the ACS to identify a single transaction.
     * @return $this
     */
    public function setAcsTransactionId($acsTransactionId)
    {

        $this->container['acsTransactionId'] = $acsTransactionId;

        return $this;
    }

    /**
     * Gets authenticationResult
     * @return string
     */
    public function getAuthenticationResult()
    {
        return $this->container['authenticationResult'];
    }

    /**
     * Sets authenticationResult
     * @param string $authenticationResult Raw authentication data that comes from the cardissuing bank. Primary authentication field that indicates if authentication was successful and if liability shift occurred. You should examine first the result of this field. This field contains one of these values: - `-1`: Invalid PARes. - `0`: Successful validation. - `1`: Cardholder is not participating, but the attempt to authenticate was recorded. - `6`: Issuer unable to perform authentication. - `9`: Cardholder did not complete authentication.
     * @return $this
     */
    public function setAuthenticationResult($authenticationResult)
    {
        $this->container['authenticationResult'] = $authenticationResult;

        return $this;
    }

    /**
     * Gets authenticationStatusMsg
     * @return string
     */
    public function getAuthenticationStatusMsg()
    {
        return $this->container['authenticationStatusMsg'];
    }

    /**
     * Sets authenticationStatusMsg
     * @param string $authenticationStatusMsg Message that explains the authenticationResult reply field.
     * @return $this
     */
    public function setAuthenticationStatusMsg($authenticationStatusMsg)
    {
        $this->container['authenticationStatusMsg'] = $authenticationStatusMsg;

        return $this;
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
     * @param string $authenticationTransactionId Payer authentication transaction identifier is used to link the check enrollment and validate authentication messages. For Rupay, this field should be passed as request only for Resend OTP use case.
     * @return $this
     */
    public function setAuthenticationTransactionId($authenticationTransactionId)
    {

        $this->container['authenticationTransactionId'] = $authenticationTransactionId;

        return $this;
    }

    /**
     * Gets authenticationTransactionContextId
     * @return string
     */
    public function getAuthenticationTransactionContextId()
    {
        return $this->container['authenticationTransactionContextId'];
    }

    /**
     * Sets authenticationTransactionContextId
     * @param string $authenticationTransactionContextId Payer authentication transaction identifier passed to link the validation and authorization calls.
     * @return $this
     */
    public function setAuthenticationTransactionContextId($authenticationTransactionContextId)
    {

        $this->container['authenticationTransactionContextId'] = $authenticationTransactionContextId;

        return $this;
    }

    /**
     * Gets transactionToken
     * @return string
     */
    public function getTransactionToken()
    {
        return $this->container['transactionToken'];
    }

    /**
     * Sets transactionToken
     * @param string $transactionToken Web based token used to authenticate consumer with Rupay authentication provider.
     * @return $this
     */
    public function setTransactionToken($transactionToken)
    {

        $this->container['transactionToken'] = $transactionToken;

        return $this;
    }

    /**
     * Gets authorizationPayload
     * @return string
     */
    public function getAuthorizationPayload()
    {
        return $this->container['authorizationPayload'];
    }

    /**
     * Sets authorizationPayload
     * @param string $authorizationPayload The Base64 encoded JSON Payload of CB specific Authorization Values returned in the challenge Flow
     * @return $this
     */
    public function setAuthorizationPayload($authorizationPayload)
    {
        $this->container['authorizationPayload'] = $authorizationPayload;

        return $this;
    }

    /**
     * Gets cavv
     * @return string
     */
    public function getCavv()
    {
        return $this->container['cavv'];
    }

    /**
     * Sets cavv
     * @param string $cavv Unique identifier generated by the card-issuing bank for Visa, American Express, JCB, Diners Club, and Discover transactions after the customer is authenticated. The value is in base64. When you request the card authorization service, CyberSource automatically converts the value, not the field name, to the format required by your payment processor.
     * @return $this
     */
    public function setCavv($cavv)
    {

        $this->container['cavv'] = $cavv;

        return $this;
    }

    /**
     * Gets cavvAlgorithm
     * @return string
     */
    public function getCavvAlgorithm()
    {
        return $this->container['cavvAlgorithm'];
    }

    /**
     * Sets cavvAlgorithm
     * @param string $cavvAlgorithm Field that is returned only when the CAVV is generated, which occurs when paresStatus contains the values Y (successful authentication) or A (attempted authentication). If you use the ATOS processor, send the value of this field in the `cavv_algorithm` request field of the authorization service. This field contains one of these values: - `2`: Visa, American Express, JCB, Diners Club, and Discover - `3`: Mastercard
     * @return $this
     */
    public function setCavvAlgorithm($cavvAlgorithm)
    {

        $this->container['cavvAlgorithm'] = $cavvAlgorithm;

        return $this;
    }

    /**
     * Gets directoryServerErrorCode
     * @return string
     */
    public function getDirectoryServerErrorCode()
    {
        return $this->container['directoryServerErrorCode'];
    }

    /**
     * Sets directoryServerErrorCode
     * @param string $directoryServerErrorCode The directory server error code indicating a problem with this transaction. Note - Max Length of this field is typically 3 characters.
     * @return $this
     */
    public function setDirectoryServerErrorCode($directoryServerErrorCode)
    {
        $this->container['directoryServerErrorCode'] = $directoryServerErrorCode;

        return $this;
    }

    /**
     * Gets directoryServerErrorDescription
     * @return string
     */
    public function getDirectoryServerErrorDescription()
    {
        return $this->container['directoryServerErrorDescription'];
    }

    /**
     * Sets directoryServerErrorDescription
     * @param string $directoryServerErrorDescription Directory server text and additional detail about the error for this transaction.
     * @return $this
     */
    public function setDirectoryServerErrorDescription($directoryServerErrorDescription)
    {

        $this->container['directoryServerErrorDescription'] = $directoryServerErrorDescription;

        return $this;
    }

    /**
     * Gets indicator
     * @return string
     */
    public function getIndicator()
    {
        return $this->container['indicator'];
    }

    /**
     * Sets indicator
     * @param string $indicator Indicator used to differentiate Internet transactions from other types. The authentication failed if this field is not returned. For Visa, if your payment processor is Streamline, Barclays, AIBMS, or FDC Germany, you receive the value vbv_failure instead of internet when eci is 07. The value of this field is passed automatically to the authorization service if you request the services together. This field contains one of these values: - `aesk`: American Express SafeKey authentication verified successfully. - `aesk_attempted`: Card not enrolled in American Express SafeKey, but the attempt to authenticate was recorded. - `dipb`: Discover ProtectBuy authentication verified successfully. - `dipb_attempted`: Card not enrolled in Discover ProtectBuy, but the attempt to authenticate was recorded. - `internet`: Authentication was not verified successfully. - `js`: J/Secure authentication verified successfully. - `js_attempted`: Card not enrolled in J/Secure, but the attempt to authenticate was recorded. - `moto`: Mail or telephone order. - `pb_attempted`: Card not enrolled in Diners Club ProtectBuy, but the attempt to authenticate was recorded. - `recurring`: Recurring transaction. - `spa`: Mastercard Identity Check authentication verified successfully. - `spa_failure`: Mastercard Identity Check failed authentication. - `vbv`: Visa Secure authentication verified successfully. - `vbv_attempted`: Card not enrolled in Visa Secure, but the attempt to authenticate was recorded. - `vbv_failure`: Visa Secure authentication unavailable.
     * @return $this
     */
    public function setIndicator($indicator)
    {
        $this->container['indicator'] = $indicator;

        return $this;
    }

    /**
     * Gets interactionCounter
     * @return string
     */
    public function getInteractionCounter()
    {
        return $this->container['interactionCounter'];
    }

    /**
     * Sets interactionCounter
     * @param string $interactionCounter Indicates the number of authentication cycles attempted by the cardholder and is tracked by the Issuing Banks ACS.Example: if customer gets the challenge window and enter in their one time password and hit submit then that interaction counter should just be 1. When customer gets the challenge window and the bank asks if they want to have the one time password  sent to their phone or their email and they have to choose before going to the next screen to enter in their one time password then this interaction count would be 2. One for the selection of how they want the one time password delivered and another with them actually entering in the one time password and hitting the submit button.
     * @return $this
     */
    public function setInteractionCounter($interactionCounter)
    {

        $this->container['interactionCounter'] = $interactionCounter;

        return $this;
    }

    /**
     * Gets eci
     * @return string
     */
    public function getEci()
    {
        return $this->container['eci'];
    }

    /**
     * Sets eci
     * @param string $eci Note This field applies only to non-U.S-issued cards.  For enroll, Numeric electronic commerce indicator (ECI) returned only for Visa, American Express, JCB, Diners Club, and Discover transactions when the card is not enrolled. For more information, see \"Interpreting the Reply,\" page 22.  If you are not using the CyberSource payment services, you must send this value to your payment processor in the subsequent request for card authorization. This field contains one of these values: - `06`: The card can be enrolled. Liability shift. - `07`: The card cannot be enrolled. No liability shift.  For validate, Numeric electronic commerce indicator (ECI) returned only for Visa, American Express, JCB, Diners Club, and Discover transactions. The field is absent when authentication fails. You must send this value to your payment processor in the subsequent request for card authorization. This field contains one of these values: - `05`: Successful authentication - `06`: Authentication attempted - `07`: Failed authentication (No response from the merchant because of a problem.)
     * @return $this
     */
    public function setEci($eci)
    {
        $this->container['eci'] = $eci;

        return $this;
    }

    /**
     * Gets eciRaw
     * @return string
     */
    public function getEciRaw()
    {
        return $this->container['eciRaw'];
    }

    /**
     * Sets eciRaw
     * @param string $eciRaw ECI value that can be returned for Visa, Mastercard, American Express, JCB, Diners Club, and Discover. The field is absent when authentication fails. If your payment processor is Streamline, you must pass the value of this field instead of the value of `eci` or `ucafCollectionIndicator`.  This field can contain one of these values: - `01`: Authentication attempted (Mastercard) - `02`: Successful authentication (Mastercard) - `05`: Successful authentication (Visa, American Express, JCB, Diners Club, and Discover) - `06`: Authentication attempted (Visa, American Express, JCB, Diners Club, and Discover)
     * @return $this
     */
    public function setEciRaw($eciRaw)
    {
        $this->container['eciRaw'] = $eciRaw;

        return $this;
    }

    /**
     * Gets paresStatus
     * @return string
     */
    public function getParesStatus()
    {
        return $this->container['paresStatus'];
    }

    /**
     * Sets paresStatus
     * @param string $paresStatus Raw result of the authentication check. If you are configured for Asia, Middle East, and Africa Gateway Processing, you need to send the value of this field in your authorization request. This field can contain one of these values: - `A`: Proof of authentication attempt was generated. - `N`: Customer failed or canceled authentication. Transaction denied. - `U`: Authentication not completed regardless of the reason. - `Y`: Customer was successfully authenticated.
     * @return $this
     */
    public function setParesStatus($paresStatus)
    {
        $this->container['paresStatus'] = $paresStatus;

        return $this;
    }

    /**
     * Gets sdkTransactionId
     * @return string
     */
    public function getSdkTransactionId()
    {
        return $this->container['sdkTransactionId'];
    }

    /**
     * Sets sdkTransactionId
     * @param string $sdkTransactionId SDK unique transaction identifier that is generated on each new transaction.
     * @return $this
     */
    public function setSdkTransactionId($sdkTransactionId)
    {

        $this->container['sdkTransactionId'] = $sdkTransactionId;

        return $this;
    }

    /**
     * Gets specificationVersion
     * @return string
     */
    public function getSpecificationVersion()
    {
        return $this->container['specificationVersion'];
    }

    /**
     * Sets specificationVersion
     * @param string $specificationVersion This field contains the 3D Secure version that was used to process the transaction. For example, 1.0.2 or 2.0.0.
     * @return $this
     */
    public function setSpecificationVersion($specificationVersion)
    {
        $this->container['specificationVersion'] = $specificationVersion;

        return $this;
    }

    /**
     * Gets threeDSServerTransactionId
     * @return string
     */
    public function getThreeDSServerTransactionId()
    {
        return $this->container['threeDSServerTransactionId'];
    }

    /**
     * Sets threeDSServerTransactionId
     * @param string $threeDSServerTransactionId Unique transaction identifier assigned by the 3DS Server to identify a single transaction.
     * @return $this
     */
    public function setThreeDSServerTransactionId($threeDSServerTransactionId)
    {

        $this->container['threeDSServerTransactionId'] = $threeDSServerTransactionId;

        return $this;
    }

    /**
     * Gets ucafAuthenticationData
     * @return string
     */
    public function getUcafAuthenticationData()
    {
        return $this->container['ucafAuthenticationData'];
    }

    /**
     * Sets ucafAuthenticationData
     * @param string $ucafAuthenticationData AAV is a unique identifier generated by the card-issuing bank for Mastercard Identity Check transactions after the customer is authenticated. The value is in base64. Include the data in the card authorization request.
     * @return $this
     */
    public function setUcafAuthenticationData($ucafAuthenticationData)
    {
        $this->container['ucafAuthenticationData'] = $ucafAuthenticationData;

        return $this;
    }

    /**
     * Gets ucafCollectionIndicator
     * @return string
     */
    public function getUcafCollectionIndicator()
    {
        return $this->container['ucafCollectionIndicator'];
    }

    /**
     * Sets ucafCollectionIndicator
     * @param string $ucafCollectionIndicator For enroll, Returned only for Mastercard transactions. Indicates that authentication is not required because the customer is not enrolled. Add the value of this field to the authorization field ucaf_collection_indicator. This field can contain these values: 0, 1.  For validate, Numeric electronic commerce indicator (ECI) returned only for Mastercard Identity Check transactions. The field is absent when authentication fails. You must send this value to your payment processor in the request for card authorization. This field contain one of these values: - `0`: Authentication data not collected, and customer authentication was not completed. - `1`: Authentication data not collected because customer authentication was not completed. - `2`: Authentication data collected because customer completed authentication.
     * @return $this
     */
    public function setUcafCollectionIndicator($ucafCollectionIndicator)
    {
        $this->container['ucafCollectionIndicator'] = $ucafCollectionIndicator;

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
     * Gets whiteListStatusSource
     * @return string
     */
    public function getWhiteListStatusSource()
    {
        return $this->container['whiteListStatusSource'];
    }

    /**
     * Sets whiteListStatusSource
     * @param string $whiteListStatusSource This data element will be populated by the system setting Whitelist Status. Possible Values: 01 - 3DS/ Server/ 02 – DS/03 - ACS
     * @return $this
     */
    public function setWhiteListStatusSource($whiteListStatusSource)
    {

        $this->container['whiteListStatusSource'] = $whiteListStatusSource;

        return $this;
    }

    /**
     * Gets xid
     * @return string
     */
    public function getXid()
    {
        return $this->container['xid'];
    }

    /**
     * Sets xid
     * @param string $xid Transaction identifier generated by CyberSource for successful enrollment or validation checks. Use this value, which is in base64, to match an outgoing PAReq with an incoming PARes. CyberSource forwards the XID with the card authorization service to these payment processors in these cases: - Barclays - Streamline (when the **ecommerceIndicator**`=spa`)
     * @return $this
     */
    public function setXid($xid)
    {
        $this->container['xid'] = $xid;

        return $this;
    }

    /**
     * Gets directoryServerTransactionId
     * @return string
     */
    public function getDirectoryServerTransactionId()
    {
        return $this->container['directoryServerTransactionId'];
    }

    /**
     * Sets directoryServerTransactionId
     * @param string $directoryServerTransactionId The Directory Server Transaction ID is generated by the Mastercard Directory Server during the authentication transaction and passed back to the merchant with the authentication results. For Cybersource Through Visanet Gateway: The value for this field corresponds to the following data in the TC 33 capture file3: Record: CP01 TCR7, Position: 114-149, Field: MC AVV Verification—Directory Server Transaction ID
     * @return $this
     */
    public function setDirectoryServerTransactionId($directoryServerTransactionId)
    {

        $this->container['directoryServerTransactionId'] = $directoryServerTransactionId;

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


