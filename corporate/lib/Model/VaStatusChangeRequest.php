<?php
/**
 * VaStatusChangeRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ganb\Corporate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GMO Aozora Net Bank Open API
 *
 * <p>オープンAPI仕様書（PDF版）は下記リンクをご参照ください</p> <div>   <div style='display:inline-block;'><a style='text-decoration:none; font-weight:bold; color:#00b8d4;' href='https://gmo-aozora.com/business/service/api-specification.html' target='_blank'>オープンAPI仕様書</a></div><div style='display:inline-block; margin-left:2px; left:2px; width:10px; height:10px; border-top:2px solid #00b8d4; border-right:2px solid #00b8d4; transparent;-webkit-transform:rotate(45deg); transform: rotate(45deg);'></div> </div> <h4 style='margin-top:30px; border-left: solid 4px #1B2F48; padding: 0.1em 0.5em; color:#1B2F48;'>共通仕様</h4> <div style='width:100%; margin:10px;'>   <p style='font-weight:bold; color:#616161;'>＜HTTPリクエストヘッダ＞</p>   <div style='display:table; margin-left:10px; background-color:#29659b;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff;'>項目</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; color:#fff;'>仕様</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>プロトコル</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>HTTP1.1/HTTPS</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>charset</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>UTF-8</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>content-type</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>application/json</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>domain_name</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       本番環境：api.gmo-aozora.com</br>       開発環境：stg-api.gmo-aozora.com     </div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>メインURL</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       https://{domain_name}/ganb/api/corporation/{version}</br>       <span style='border-bottom:solid 1px;'>Version:1.x.x</span> の場合</br>       　https://api.gmo-aozora.com/ganb/api/corporation/<span style='border-bottom:solid 1px;'>v1</span>     </div>   </div> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜リクエスト共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <p style='padding-left:40px;'>パラメータの値が空の場合、またはパラメータ自体が設定されていない場合、どちらもNULLとして扱います</p> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜レスポンス共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <ul>     <li>レスポンスデータ</li>       <ul>         <li style='list-style-type:none;'>レスポンスデータの値が空の場合または、レスポンスデータ自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>     <li>配列</li>       <ul>         <li style='list-style-type:none;'>配列の要素の値が空の場合は「空のリスト」と記載</li>         <li style='list-style-type:none;'>配列自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>   </ul> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜更新系APIに関する注意事項＞</p>   <ul>     <li style='list-style-type:none;'>更新系処理がタイムアウトとなった場合、処理自体は実行されている可能性がありますので、</li>     <li style='list-style-type:none;'>再実行を行う必要がある場合は必ず照会系の処理で実行状況を確認してから再実行を行ってください</li>   </ul> </div>
 *
 * OpenAPI spec version: 1.1.12
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ganb\Corporate\Client\Model;

use \ArrayAccess;
use \Ganb\Corporate\Client\ObjectSerializer;

/**
 * VaStatusChangeRequest Class Doc Comment
 *
 * @category Class
 * @package  Ganb\Corporate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VaStatusChangeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VaStatusChangeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'va_contract_auth_key' => 'string',
        'va_status_change_code' => 'string',
        'va_id_list' => '\Ganb\Corporate\Client\Model\VaId[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'va_contract_auth_key' => null,
        'va_status_change_code' => null,
        'va_id_list' => null
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
        'va_contract_auth_key' => 'vaContractAuthKey',
        'va_status_change_code' => 'vaStatusChangeCode',
        'va_id_list' => 'vaIdList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'va_contract_auth_key' => 'setVaContractAuthKey',
        'va_status_change_code' => 'setVaStatusChangeCode',
        'va_id_list' => 'setVaIdList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'va_contract_auth_key' => 'getVaContractAuthKey',
        'va_status_change_code' => 'getVaStatusChangeCode',
        'va_id_list' => 'getVaIdList'
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
        $this->container['va_contract_auth_key'] = isset($data['va_contract_auth_key']) ? $data['va_contract_auth_key'] : null;
        $this->container['va_status_change_code'] = isset($data['va_status_change_code']) ? $data['va_status_change_code'] : null;
        $this->container['va_id_list'] = isset($data['va_id_list']) ? $data['va_id_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['va_contract_auth_key']) && (mb_strlen($this->container['va_contract_auth_key']) > 400)) {
            $invalidProperties[] = "invalid value for 'va_contract_auth_key', the character length must be smaller than or equal to 400.";
        }

        if (!is_null($this->container['va_contract_auth_key']) && (mb_strlen($this->container['va_contract_auth_key']) < 1)) {
            $invalidProperties[] = "invalid value for 'va_contract_auth_key', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['va_status_change_code'] === null) {
            $invalidProperties[] = "'va_status_change_code' can't be null";
        }
        if ((mb_strlen($this->container['va_status_change_code']) > 1)) {
            $invalidProperties[] = "invalid value for 'va_status_change_code', the character length must be smaller than or equal to 1.";
        }

        if ((mb_strlen($this->container['va_status_change_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'va_status_change_code', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['va_id_list'] === null) {
            $invalidProperties[] = "'va_id_list' can't be null";
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
     * Gets va_contract_auth_key
     *
     * @return string
     */
    public function getVaContractAuthKey()
    {
        return $this->container['va_contract_auth_key'];
    }

    /**
     * Sets va_contract_auth_key
     *
     * @param string $va_contract_auth_key 振込入金口座API認証情報 半角英数字 銀行契約の方はNULLを設定 提携企業の方が、契約された顧客の状態変更を依頼される場合は必須 提携企業以外の方が値を設定されている場合は「400 Bad Request」を返却
     *
     * @return $this
     */
    public function setVaContractAuthKey($va_contract_auth_key)
    {
        if (!is_null($va_contract_auth_key) && (mb_strlen($va_contract_auth_key) > 400)) {
            throw new \InvalidArgumentException('invalid length for $va_contract_auth_key when calling VaStatusChangeRequest., must be smaller than or equal to 400.');
        }
        if (!is_null($va_contract_auth_key) && (mb_strlen($va_contract_auth_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $va_contract_auth_key when calling VaStatusChangeRequest., must be bigger than or equal to 1.');
        }

        $this->container['va_contract_auth_key'] = $va_contract_auth_key;

        return $this;
    }

    /**
     * Gets va_status_change_code
     *
     * @return string
     */
    public function getVaStatusChangeCode()
    {
        return $this->container['va_status_change_code'];
    }

    /**
     * Sets va_status_change_code
     *
     * @param string $va_status_change_code 振込入金口座状態変更依頼コード 半角数字 以下の変更したコード値を設定 ・1=停止 ・2=再開 ・3=削除
     *
     * @return $this
     */
    public function setVaStatusChangeCode($va_status_change_code)
    {
        if ((mb_strlen($va_status_change_code) > 1)) {
            throw new \InvalidArgumentException('invalid length for $va_status_change_code when calling VaStatusChangeRequest., must be smaller than or equal to 1.');
        }
        if ((mb_strlen($va_status_change_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $va_status_change_code when calling VaStatusChangeRequest., must be bigger than or equal to 1.');
        }

        $this->container['va_status_change_code'] = $va_status_change_code;

        return $this;
    }

    /**
     * Gets va_id_list
     *
     * @return \Ganb\Corporate\Client\Model\VaId[]
     */
    public function getVaIdList()
    {
        return $this->container['va_id_list'];
    }

    /**
     * Sets va_id_list
     *
     * @param \Ganb\Corporate\Client\Model\VaId[] $va_id_list 振込入金口座IDリスト 上限は100件
     *
     * @return $this
     */
    public function setVaIdList($va_id_list)
    {
        $this->container['va_id_list'] = $va_id_list;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


