<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/common/criteria.proto

namespace Google\Ads\GoogleAds\V8\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an operating system version to be targeted.
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.common.OperatingSystemVersionInfo</code>
 */
class OperatingSystemVersionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The operating system version constant resource name.
     *
     * Generated from protobuf field <code>string operating_system_version_constant = 2;</code>
     */
    protected $operating_system_version_constant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $operating_system_version_constant
     *           The operating system version constant resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The operating system version constant resource name.
     *
     * Generated from protobuf field <code>string operating_system_version_constant = 2;</code>
     * @return string
     */
    public function getOperatingSystemVersionConstant()
    {
        return isset($this->operating_system_version_constant) ? $this->operating_system_version_constant : '';
    }

    public function hasOperatingSystemVersionConstant()
    {
        return isset($this->operating_system_version_constant);
    }

    public function clearOperatingSystemVersionConstant()
    {
        unset($this->operating_system_version_constant);
    }

    /**
     * The operating system version constant resource name.
     *
     * Generated from protobuf field <code>string operating_system_version_constant = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOperatingSystemVersionConstant($var)
    {
        GPBUtil::checkString($var, True);
        $this->operating_system_version_constant = $var;

        return $this;
    }

}

