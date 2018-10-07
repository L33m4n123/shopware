<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Cloud\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Description of the information type (infoType).
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.InfoTypeDescription</code>
 */
class InfoTypeDescription extends \Google\Protobuf\Internal\Message
{
    /**
     * Internal name of the infoType.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Human readable form of the infoType name.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * List of categories this infoType belongs to.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.CategoryDescription categories = 3;</code>
     */
    private $categories;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Internal name of the infoType.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Internal name of the infoType.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Human readable form of the infoType name.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Human readable form of the infoType name.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * List of categories this infoType belongs to.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.CategoryDescription categories = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * List of categories this infoType belongs to.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.CategoryDescription categories = 3;</code>
     * @param \Google\Cloud\Dlp\V2beta1\CategoryDescription[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCategories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2beta1\CategoryDescription::class);
        $this->categories = $arr;

        return $this;
    }

}

