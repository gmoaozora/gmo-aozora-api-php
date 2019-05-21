<?php
/**
 * UnableDetailInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ganb\Personal\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GMO Aozora Net Bank Open API
 *
 * <p>オープンAPI仕様書（PDF版）は下記リンクをご参照ください</p> <div>   <div style='display:inline-block;'><a style='text-decoration:none; font-weight:bold; color:#00b8d4;' href='https://gmo-aozora.com/business/service/api-specification.html' target='_blank'>オープンAPI仕様書</a></div><div style='display:inline-block; margin-left:2px; left:2px; width:10px; height:10px; border-top:2px solid #00b8d4; border-right:2px solid #00b8d4; transparent;-webkit-transform:rotate(45deg); transform: rotate(45deg);'></div> </div> <h4 style='margin-top:30px; border-left: solid 4px #1B2F48; padding: 0.1em 0.5em; color:#1B2F48;'>共通仕様</h4> <div style='width:100%; margin:10px;'>   <p style='font-weight:bold; color:#616161;'>＜HTTPリクエストヘッダ＞</p>   <div style='display:table; margin-left:10px; background-color:#29659b;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff;'>項目</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; color:#fff;'>仕様</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>プロトコル</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>HTTP1.1/HTTPS</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>charset</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>UTF-8</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>content-type</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>application/json</div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>domain_name</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       本番環境：api.gmo-aozora.com</br>       開発環境：stg-api.gmo-aozora.com     </div>   </div>   <div style='display:table; margin-left:10px;'>     <div style='display:table-cell; min-width:130px; padding:9px; border:1px solid #fff; color:#fff; background-color:#29659b;'>メインURL</div>     <div style='display:table-cell; width:85%; padding:9px; border:1px solid #fff; background-color:#f8f8f8;'>       https://{domain_name}/ganb/api/personal/{version}</br>       <span style='border-bottom:solid 1px;'>Version:1.x.x</span> の場合</br>       　https://api.gmo-aozora.com/ganb/api/personal/<span style='border-bottom:solid 1px;'>v1</span>     </div>   </div> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜リクエスト共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <p style='padding-left:40px;'>パラメータの値が空の場合、またはパラメータ自体が設定されていない場合、どちらもNULLとして扱います</p> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜レスポンス共通仕様＞</p>   <p style='padding-left:20px; font-weight:bold; color:#616161;'>NULLデータの扱い</p>   <ul>     <li>レスポンスデータ</li>       <ul>         <li style='list-style-type:none;'>レスポンスデータの値が空の場合または、レスポンスデータ自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>     <li>配列</li>       <ul>         <li style='list-style-type:none;'>配列の要素の値が空の場合は「空のリスト」と記載</li>         <li style='list-style-type:none;'>配列自体が設定されない場合は「項目自体を設定しません」と記載</li>       </ul>   </ul> </div> <div style='margin:20px 10px;'>   <p style='font-weight:bold; color:#616161;'>＜更新系APIに関する注意事項＞</p>   <ul>     <li style='list-style-type:none;'>更新系処理がタイムアウトとなった場合、処理自体は実行されている可能性がありますので、</li>     <li style='list-style-type:none;'>再実行を行う必要がある場合は必ず照会系の処理で実行状況を確認してから再実行を行ってください</li>   </ul> </div>
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

namespace Ganb\Personal\Client\Model;

use \ArrayAccess;
use \Ganb\Personal\Client\ObjectSerializer;

/**
 * UnableDetailInfo Class Doc Comment
 *
 * @category Class
 * @package  Ganb\Personal\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UnableDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UnableDetailInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transfer_detail_status' => 'string',
        'refund_status' => 'string',
        'is_repayment' => 'bool',
        'repayment_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transfer_detail_status' => null,
        'refund_status' => null,
        'is_repayment' => null,
        'repayment_date' => null
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
        'transfer_detail_status' => 'transferDetailStatus',
        'refund_status' => 'refundStatus',
        'is_repayment' => 'isRepayment',
        'repayment_date' => 'repaymentDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transfer_detail_status' => 'setTransferDetailStatus',
        'refund_status' => 'setRefundStatus',
        'is_repayment' => 'setIsRepayment',
        'repayment_date' => 'setRepaymentDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transfer_detail_status' => 'getTransferDetailStatus',
        'refund_status' => 'getRefundStatus',
        'is_repayment' => 'getIsRepayment',
        'repayment_date' => 'getRepaymentDate'
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
        $this->container['transfer_detail_status'] = isset($data['transfer_detail_status']) ? $data['transfer_detail_status'] : null;
        $this->container['refund_status'] = isset($data['refund_status']) ? $data['refund_status'] : null;
        $this->container['is_repayment'] = isset($data['is_repayment']) ? $data['is_repayment'] : null;
        $this->container['repayment_date'] = isset($data['repayment_date']) ? $data['repayment_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['transfer_detail_status']) && (mb_strlen($this->container['transfer_detail_status']) > 1)) {
            $invalidProperties[] = "invalid value for 'transfer_detail_status', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['transfer_detail_status']) && (mb_strlen($this->container['transfer_detail_status']) < 1)) {
            $invalidProperties[] = "invalid value for 'transfer_detail_status', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['refund_status']) && (mb_strlen($this->container['refund_status']) > 1)) {
            $invalidProperties[] = "invalid value for 'refund_status', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['refund_status']) && (mb_strlen($this->container['refund_status']) < 1)) {
            $invalidProperties[] = "invalid value for 'refund_status', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['repayment_date']) && (mb_strlen($this->container['repayment_date']) > 10)) {
            $invalidProperties[] = "invalid value for 'repayment_date', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['repayment_date']) && (mb_strlen($this->container['repayment_date']) < 10)) {
            $invalidProperties[] = "invalid value for 'repayment_date', the character length must be bigger than or equal to 10.";
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
     * Gets transfer_detail_status
     *
     * @return string
     */
    public function getTransferDetailStatus()
    {
        return $this->container['transfer_detail_status'];
    }

    /**
     * Sets transfer_detail_status
     *
     * @param string $transfer_detail_status 振込詳細ステータス 半角数字 1：手続済、2：手続不成立 手続中より前は該当する情報無しとみなし項目自体を設定しません
     *
     * @return $this
     */
    public function setTransferDetailStatus($transfer_detail_status)
    {
        if (!is_null($transfer_detail_status) && (mb_strlen($transfer_detail_status) > 1)) {
            throw new \InvalidArgumentException('invalid length for $transfer_detail_status when calling UnableDetailInfo., must be smaller than or equal to 1.');
        }
        if (!is_null($transfer_detail_status) && (mb_strlen($transfer_detail_status) < 1)) {
            throw new \InvalidArgumentException('invalid length for $transfer_detail_status when calling UnableDetailInfo., must be bigger than or equal to 1.');
        }

        $this->container['transfer_detail_status'] = $transfer_detail_status;

        return $this;
    }

    /**
     * Gets refund_status
     *
     * @return string
     */
    public function getRefundStatus()
    {
        return $this->container['refund_status'];
    }

    /**
     * Sets refund_status
     *
     * @param string $refund_status 組戻ステータス 半角数字 1：組戻手続中、2：組戻済、3：組戻不成立 組み戻しなし、および該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setRefundStatus($refund_status)
    {
        if (!is_null($refund_status) && (mb_strlen($refund_status) > 1)) {
            throw new \InvalidArgumentException('invalid length for $refund_status when calling UnableDetailInfo., must be smaller than or equal to 1.');
        }
        if (!is_null($refund_status) && (mb_strlen($refund_status) < 1)) {
            throw new \InvalidArgumentException('invalid length for $refund_status when calling UnableDetailInfo., must be bigger than or equal to 1.');
        }

        $this->container['refund_status'] = $refund_status;

        return $this;
    }

    /**
     * Gets is_repayment
     *
     * @return bool
     */
    public function getIsRepayment()
    {
        return $this->container['is_repayment'];
    }

    /**
     * Sets is_repayment
     *
     * @param bool $is_repayment 資金返却フラグ true=あり 無し、および該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setIsRepayment($is_repayment)
    {
        $this->container['is_repayment'] = $is_repayment;

        return $this;
    }

    /**
     * Gets repayment_date
     *
     * @return string
     */
    public function getRepaymentDate()
    {
        return $this->container['repayment_date'];
    }

    /**
     * Sets repayment_date
     *
     * @param string $repayment_date 資金返却日 半角文字 YYYY-MM-DD形式 総合振込のみ表示 該当する情報が無い場合は項目自体を設定しません
     *
     * @return $this
     */
    public function setRepaymentDate($repayment_date)
    {
        if (!is_null($repayment_date) && (mb_strlen($repayment_date) > 10)) {
            throw new \InvalidArgumentException('invalid length for $repayment_date when calling UnableDetailInfo., must be smaller than or equal to 10.');
        }
        if (!is_null($repayment_date) && (mb_strlen($repayment_date) < 10)) {
            throw new \InvalidArgumentException('invalid length for $repayment_date when calling UnableDetailInfo., must be bigger than or equal to 10.');
        }

        $this->container['repayment_date'] = $repayment_date;

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

