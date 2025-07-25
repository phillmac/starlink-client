<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/common.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.InitiateRemoteSshResponse</code>
 */
class InitiateRemoteSshResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional uint32 port = 1 [json_name = "port"];</code>
     */
    protected $port = null;

    /**
     * Generated from protobuf field <code>optional string address = 2 [json_name = "address"];</code>
     */
    protected $address = null;

    /**
     * Generated from protobuf field <code>optional bytes stsafe = 3 [json_name = "stsafe"];</code>
     */
    protected $stsafe = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type int $port
     * @type string $address
     * @type string $stsafe
     *              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional uint32 port = 1 [json_name = "port"];</code>
     *
     * @return int
     */
    public function getPort()
    {
        return isset($this->port) ? $this->port : 0;
    }

    public function hasPort()
    {
        return isset($this->port);
    }

    public function clearPort()
    {
        unset($this->port);
    }

    /**
     * Generated from protobuf field <code>optional uint32 port = 1 [json_name = "port"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkUint32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string address = 2 [json_name = "address"];</code>
     *
     * @return string
     */
    public function getAddress()
    {
        return isset($this->address) ? $this->address : '';
    }

    public function hasAddress()
    {
        return isset($this->address);
    }

    public function clearAddress()
    {
        unset($this->address);
    }

    /**
     * Generated from protobuf field <code>optional string address = 2 [json_name = "address"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, true);
        $this->address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bytes stsafe = 3 [json_name = "stsafe"];</code>
     *
     * @return string
     */
    public function getStsafe()
    {
        return isset($this->stsafe) ? $this->stsafe : '';
    }

    public function hasStsafe()
    {
        return isset($this->stsafe);
    }

    public function clearStsafe()
    {
        unset($this->stsafe);
    }

    /**
     * Generated from protobuf field <code>optional bytes stsafe = 3 [json_name = "stsafe"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setStsafe($var)
    {
        GPBUtil::checkString($var, false);
        $this->stsafe = $var;

        return $this;
    }
}
