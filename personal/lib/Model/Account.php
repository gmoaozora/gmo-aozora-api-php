<?php
/**
 * Account
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
 * Account Class Doc Comment
 *
 * @category Class
 * @package  Ganb\Personal\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Account implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'string',
        'branch_code' => 'string',
        'branch_name' => 'string',
        'account_type_code' => 'string',
        'account_type_name' => 'string',
        'account_number' => 'string',
        'primary_account_code' => 'string',
        'primary_account_code_name' => 'string',
        'account_name' => 'string',
        'account_name_kana' => 'string',
        'currency_code' => 'string',
        'currency_name' => 'string',
        'transfer_limit_amount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => null,
        'branch_code' => null,
        'branch_name' => null,
        'account_type_code' => null,
        'account_type_name' => null,
        'account_number' => null,
        'primary_account_code' => null,
        'primary_account_code_name' => null,
        'account_name' => null,
        'account_name_kana' => null,
        'currency_code' => null,
        'currency_name' => null,
        'transfer_limit_amount' => null
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
        'account_id' => 'accountId',
        'branch_code' => 'branchCode',
        'branch_name' => 'branchName',
        'account_type_code' => 'accountTypeCode',
        'account_type_name' => 'accountTypeName',
        'account_number' => 'accountNumber',
        'primary_account_code' => 'primaryAccountCode',
        'primary_account_code_name' => 'primaryAccountCodeName',
        'account_name' => 'accountName',
        'account_name_kana' => 'accountNameKana',
        'currency_code' => 'currencyCode',
        'currency_name' => 'currencyName',
        'transfer_limit_amount' => 'transferLimitAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'branch_code' => 'setBranchCode',
        'branch_name' => 'setBranchName',
        'account_type_code' => 'setAccountTypeCode',
        'account_type_name' => 'setAccountTypeName',
        'account_number' => 'setAccountNumber',
        'primary_account_code' => 'setPrimaryAccountCode',
        'primary_account_code_name' => 'setPrimaryAccountCodeName',
        'account_name' => 'setAccountName',
        'account_name_kana' => 'setAccountNameKana',
        'currency_code' => 'setCurrencyCode',
        'currency_name' => 'setCurrencyName',
        'transfer_limit_amount' => 'setTransferLimitAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'branch_code' => 'getBranchCode',
        'branch_name' => 'getBranchName',
        'account_type_code' => 'getAccountTypeCode',
        'account_type_name' => 'getAccountTypeName',
        'account_number' => 'getAccountNumber',
        'primary_account_code' => 'getPrimaryAccountCode',
        'primary_account_code_name' => 'getPrimaryAccountCodeName',
        'account_name' => 'getAccountName',
        'account_name_kana' => 'getAccountNameKana',
        'currency_code' => 'getCurrencyCode',
        'currency_name' => 'getCurrencyName',
        'transfer_limit_amount' => 'getTransferLimitAmount'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['branch_code'] = isset($data['branch_code']) ? $data['branch_code'] : null;
        $this->container['branch_name'] = isset($data['branch_name']) ? $data['branch_name'] : null;
        $this->container['account_type_code'] = isset($data['account_type_code']) ? $data['account_type_code'] : null;
        $this->container['account_type_name'] = isset($data['account_type_name']) ? $data['account_type_name'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['primary_account_code'] = isset($data['primary_account_code']) ? $data['primary_account_code'] : null;
        $this->container['primary_account_code_name'] = isset($data['primary_account_code_name']) ? $data['primary_account_code_name'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['account_name_kana'] = isset($data['account_name_kana']) ? $data['account_name_kana'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['currency_name'] = isset($data['currency_name']) ? $data['currency_name'] : null;
        $this->container['transfer_limit_amount'] = isset($data['transfer_limit_amount']) ? $data['transfer_limit_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ((mb_strlen($this->container['account_id']) > 29)) {
            $invalidProperties[] = "invalid value for 'account_id', the character length must be smaller than or equal to 29.";
        }

        if ((mb_strlen($this->container['account_id']) < 12)) {
            $invalidProperties[] = "invalid value for 'account_id', the character length must be bigger than or equal to 12.";
        }

        if (!is_null($this->container['branch_code']) && (mb_strlen($this->container['branch_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'branch_code', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['branch_code']) && (mb_strlen($this->container['branch_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'branch_code', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['branch_name']) && (mb_strlen($this->container['branch_name']) > 30)) {
            $invalidProperties[] = "invalid value for 'branch_name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['branch_name']) && (mb_strlen($this->container['branch_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'branch_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['account_type_code'] === null) {
            $invalidProperties[] = "'account_type_code' can't be null";
        }
        if ((mb_strlen($this->container['account_type_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'account_type_code', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['account_type_code']) < 2)) {
            $invalidProperties[] = "invalid value for 'account_type_code', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['account_type_name'] === null) {
            $invalidProperties[] = "'account_type_name' can't be null";
        }
        if ((mb_strlen($this->container['account_type_name']) > 10)) {
            $invalidProperties[] = "invalid value for 'account_type_name', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['account_type_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'account_type_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['account_number']) && (mb_strlen($this->container['account_number']) > 7)) {
            $invalidProperties[] = "invalid value for 'account_number', the character length must be smaller than or equal to 7.";
        }

        if (!is_null($this->container['account_number']) && (mb_strlen($this->container['account_number']) < 7)) {
            $invalidProperties[] = "invalid value for 'account_number', the character length must be bigger than or equal to 7.";
        }

        if (!is_null($this->container['primary_account_code']) && (mb_strlen($this->container['primary_account_code']) > 1)) {
            $invalidProperties[] = "invalid value for 'primary_account_code', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['primary_account_code']) && (mb_strlen($this->container['primary_account_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'primary_account_code', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['primary_account_code_name']) && (mb_strlen($this->container['primary_account_code_name']) > 4)) {
            $invalidProperties[] = "invalid value for 'primary_account_code_name', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['primary_account_code_name']) && (mb_strlen($this->container['primary_account_code_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'primary_account_code_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['account_name']) && (mb_strlen($this->container['account_name']) > 48)) {
            $invalidProperties[] = "invalid value for 'account_name', the character length must be smaller than or equal to 48.";
        }

        if (!is_null($this->container['account_name']) && (mb_strlen($this->container['account_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'account_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['account_name_kana']) && (mb_strlen($this->container['account_name_kana']) > 48)) {
            $invalidProperties[] = "invalid value for 'account_name_kana', the character length must be smaller than or equal to 48.";
        }

        if (!is_null($this->container['account_name_kana']) && (mb_strlen($this->container['account_name_kana']) < 1)) {
            $invalidProperties[] = "invalid value for 'account_name_kana', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ((mb_strlen($this->container['currency_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency_code', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['currency_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'currency_code', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['currency_name'] === null) {
            $invalidProperties[] = "'currency_name' can't be null";
        }
        if ((mb_strlen($this->container['currency_name']) > 10)) {
            $invalidProperties[] = "invalid value for 'currency_name', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['currency_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'currency_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['transfer_limit_amount']) && (mb_strlen($this->container['transfer_limit_amount']) > 12)) {
            $invalidProperties[] = "invalid value for 'transfer_limit_amount', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['transfer_limit_amount']) && (mb_strlen($this->container['transfer_limit_amount']) < 1)) {
            $invalidProperties[] = "invalid value for 'transfer_limit_amount', the character length must be bigger than or equal to 1.";
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id 口座ID 半角英数字 口座を識別するID
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        if ((mb_strlen($account_id) > 29)) {
            throw new \InvalidArgumentException('invalid length for $account_id when calling Account., must be smaller than or equal to 29.');
        }
        if ((mb_strlen($account_id) < 12)) {
            throw new \InvalidArgumentException('invalid length for $account_id when calling Account., must be bigger than or equal to 12.');
        }

        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets branch_code
     *
     * @return string
     */
    public function getBranchCode()
    {
        return $this->container['branch_code'];
    }

    /**
     * Sets branch_code
     *
     * @param string $branch_code 支店コード 半角数字 科目コードが以下の場合のみ設定されます 該当しない場合は項目自体を設定しません ・01=普通預金（有利息） ・02=普通預金（決済用）
     *
     * @return $this
     */
    public function setBranchCode($branch_code)
    {
        if (!is_null($branch_code) && (mb_strlen($branch_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $branch_code when calling Account., must be smaller than or equal to 3.');
        }
        if (!is_null($branch_code) && (mb_strlen($branch_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $branch_code when calling Account., must be bigger than or equal to 3.');
        }

        $this->container['branch_code'] = $branch_code;

        return $this;
    }

    /**
     * Gets branch_name
     *
     * @return string
     */
    public function getBranchName()
    {
        return $this->container['branch_name'];
    }

    /**
     * Sets branch_name
     *
     * @param string $branch_name 支店名 全角文字 科目コードが以下の場合のみ設定されます 該当しない場合は項目自体を設定しません ・01=普通預金（有利息） ・02=普通預金（決済用）
     *
     * @return $this
     */
    public function setBranchName($branch_name)
    {
        if (!is_null($branch_name) && (mb_strlen($branch_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $branch_name when calling Account., must be smaller than or equal to 30.');
        }
        if (!is_null($branch_name) && (mb_strlen($branch_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $branch_name when calling Account., must be bigger than or equal to 1.');
        }

        $this->container['branch_name'] = $branch_name;

        return $this;
    }

    /**
     * Gets account_type_code
     *
     * @return string
     */
    public function getAccountTypeCode()
    {
        return $this->container['account_type_code'];
    }

    /**
     * Sets account_type_code
     *
     * @param string $account_type_code 科目コード 半角数字 ・01=普通預金（有利息） ・02=普通預金（決済用） ・11=円定期預金 ・51=外貨普通預金 ・81=証券コネクト口座
     *
     * @return $this
     */
    public function setAccountTypeCode($account_type_code)
    {
        if ((mb_strlen($account_type_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $account_type_code when calling Account., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($account_type_code) < 2)) {
            throw new \InvalidArgumentException('invalid length for $account_type_code when calling Account., must be bigger than or equal to 2.');
        }

        $this->container['account_type_code'] = $account_type_code;

        return $this;
    }

    /**
     * Gets account_type_name
     *
     * @return string
     */
    public function getAccountTypeName()
    {
        return $this->container['account_type_name'];
    }

    /**
     * Sets account_type_name
     *
     * @param string $account_type_name 科目名 全角文字 科目コードの名称
     *
     * @return $this
     */
    public function setAccountTypeName($account_type_name)
    {
        if ((mb_strlen($account_type_name) > 10)) {
            throw new \InvalidArgumentException('invalid length for $account_type_name when calling Account., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($account_type_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $account_type_name when calling Account., must be bigger than or equal to 1.');
        }

        $this->container['account_type_name'] = $account_type_name;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string $account_number 口座番号 半角数字 科目コードが以下の場合のみ設定されます 該当しない場合は項目自体を設定しません ・01=普通預金（有利息） ・02=普通預金（決済用）
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        if (!is_null($account_number) && (mb_strlen($account_number) > 7)) {
            throw new \InvalidArgumentException('invalid length for $account_number when calling Account., must be smaller than or equal to 7.');
        }
        if (!is_null($account_number) && (mb_strlen($account_number) < 7)) {
            throw new \InvalidArgumentException('invalid length for $account_number when calling Account., must be bigger than or equal to 7.');
        }

        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets primary_account_code
     *
     * @return string
     */
    public function getPrimaryAccountCode()
    {
        return $this->container['primary_account_code'];
    }

    /**
     * Sets primary_account_code
     *
     * @param string $primary_account_code 代表口座コード 半角数字 ・1=代表口座 ・2=追加口座 科目コードが以下の場合のみ設定されます 該当しない場合は項目自体を設定しません ・01=普通預金（有利息） ・02=普通預金（決済用）
     *
     * @return $this
     */
    public function setPrimaryAccountCode($primary_account_code)
    {
        if (!is_null($primary_account_code) && (mb_strlen($primary_account_code) > 1)) {
            throw new \InvalidArgumentException('invalid length for $primary_account_code when calling Account., must be smaller than or equal to 1.');
        }
        if (!is_null($primary_account_code) && (mb_strlen($primary_account_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $primary_account_code when calling Account., must be bigger than or equal to 1.');
        }

        $this->container['primary_account_code'] = $primary_account_code;

        return $this;
    }

    /**
     * Gets primary_account_code_name
     *
     * @return string
     */
    public function getPrimaryAccountCodeName()
    {
        return $this->container['primary_account_code_name'];
    }

    /**
     * Sets primary_account_code_name
     *
     * @param string $primary_account_code_name 代表口座コード名 全角文字 科目コードが以下の場合のみ設定されます 該当しない場合は項目自体を設定しません ・01=普通預金（有利息） ・02=普通預金（決済用）
     *
     * @return $this
     */
    public function setPrimaryAccountCodeName($primary_account_code_name)
    {
        if (!is_null($primary_account_code_name) && (mb_strlen($primary_account_code_name) > 4)) {
            throw new \InvalidArgumentException('invalid length for $primary_account_code_name when calling Account., must be smaller than or equal to 4.');
        }
        if (!is_null($primary_account_code_name) && (mb_strlen($primary_account_code_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $primary_account_code_name when calling Account., must be bigger than or equal to 1.');
        }

        $this->container['primary_account_code_name'] = $primary_account_code_name;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string $account_name 口座名義 全角文字 科目コードが以下の場合のみ設定されます 該当しない場合は項目自体を設定しません ・01=普通預金（有利息） ・02=普通預金（決済用）
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {
        if (!is_null($account_name) && (mb_strlen($account_name) > 48)) {
            throw new \InvalidArgumentException('invalid length for $account_name when calling Account., must be smaller than or equal to 48.');
        }
        if (!is_null($account_name) && (mb_strlen($account_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $account_name when calling Account., must be bigger than or equal to 1.');
        }

        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets account_name_kana
     *
     * @return string
     */
    public function getAccountNameKana()
    {
        return $this->container['account_name_kana'];
    }

    /**
     * Sets account_name_kana
     *
     * @param string $account_name_kana 口座名義カナ 半角文字 科目コードが以下の場合のみ設定されます 該当しない場合は項目自体を設定しません ・01=普通預金（有利息） ・02=普通預金（決済用）
     *
     * @return $this
     */
    public function setAccountNameKana($account_name_kana)
    {
        if (!is_null($account_name_kana) && (mb_strlen($account_name_kana) > 48)) {
            throw new \InvalidArgumentException('invalid length for $account_name_kana when calling Account., must be smaller than or equal to 48.');
        }
        if (!is_null($account_name_kana) && (mb_strlen($account_name_kana) < 1)) {
            throw new \InvalidArgumentException('invalid length for $account_name_kana when calling Account., must be bigger than or equal to 1.');
        }

        $this->container['account_name_kana'] = $account_name_kana;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code 通貨コード 半角文字 ISO4217に準拠した通貨コード
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        if ((mb_strlen($currency_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency_code when calling Account., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($currency_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currency_code when calling Account., must be bigger than or equal to 3.');
        }

        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets currency_name
     *
     * @return string
     */
    public function getCurrencyName()
    {
        return $this->container['currency_name'];
    }

    /**
     * Sets currency_name
     *
     * @param string $currency_name 通貨名 全角文字 ISO4217に準拠した通貨コードの当行での名称
     *
     * @return $this
     */
    public function setCurrencyName($currency_name)
    {
        if ((mb_strlen($currency_name) > 10)) {
            throw new \InvalidArgumentException('invalid length for $currency_name when calling Account., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($currency_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $currency_name when calling Account., must be bigger than or equal to 1.');
        }

        $this->container['currency_name'] = $currency_name;

        return $this;
    }

    /**
     * Gets transfer_limit_amount
     *
     * @return string
     */
    public function getTransferLimitAmount()
    {
        return $this->container['transfer_limit_amount'];
    }

    /**
     * Sets transfer_limit_amount
     *
     * @param string $transfer_limit_amount 振込限度額 半角数字 科目コードが以下の場合のみ設定されます 該当しない場合は項目自体を設定しません ・01=普通預金（有利息） ・02=普通預金（決済用）
     *
     * @return $this
     */
    public function setTransferLimitAmount($transfer_limit_amount)
    {
        if (!is_null($transfer_limit_amount) && (mb_strlen($transfer_limit_amount) > 12)) {
            throw new \InvalidArgumentException('invalid length for $transfer_limit_amount when calling Account., must be smaller than or equal to 12.');
        }
        if (!is_null($transfer_limit_amount) && (mb_strlen($transfer_limit_amount) < 1)) {
            throw new \InvalidArgumentException('invalid length for $transfer_limit_amount when calling Account., must be bigger than or equal to 1.');
        }

        $this->container['transfer_limit_amount'] = $transfer_limit_amount;

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


