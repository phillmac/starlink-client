<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/wifi.proto

namespace SpaceX\API\Device\WifiSelfTest;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.WifiSelfTest.TestResult</code>
 */
class TestResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string name = 1 [json_name = "name"];</code>
     */
    protected $name = null;

    /**
     * Generated from protobuf field <code>optional bool success = 2 [json_name = "success"];</code>
     */
    protected $success = null;

    /**
     * Generated from protobuf field <code>optional string failure_reason = 3 [json_name = "failureReason"];</code>
     */
    protected $failure_reason = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $name
     * @type bool $success
     * @type string $failure_reason
     *              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Wifi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string name = 1 [json_name = "name"];</code>
     *
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Generated from protobuf field <code>optional string name = 1 [json_name = "name"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, true);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool success = 2 [json_name = "success"];</code>
     *
     * @return bool
     */
    public function getSuccess()
    {
        return isset($this->success) ? $this->success : false;
    }

    public function hasSuccess()
    {
        return isset($this->success);
    }

    public function clearSuccess()
    {
        unset($this->success);
    }

    /**
     * Generated from protobuf field <code>optional bool success = 2 [json_name = "success"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string failure_reason = 3 [json_name = "failureReason"];</code>
     *
     * @return string
     */
    public function getFailureReason()
    {
        return isset($this->failure_reason) ? $this->failure_reason : '';
    }

    public function hasFailureReason()
    {
        return isset($this->failure_reason);
    }

    public function clearFailureReason()
    {
        unset($this->failure_reason);
    }

    /**
     * Generated from protobuf field <code>optional string failure_reason = 3 [json_name = "failureReason"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setFailureReason($var)
    {
        GPBUtil::checkString($var, true);
        $this->failure_reason = $var;

        return $this;
    }
}
