<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/device.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.GetNetworkInterfacesResponse</code>
 */
class GetNetworkInterfacesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.NetworkInterface network_interfaces = 1006 [json_name = "networkInterfaces"];</code>
     */
    private $network_interfaces;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type array<\SpaceX\API\Device\NetworkInterface>|\Google\Protobuf\Internal\RepeatedField $network_interfaces
     *                                                                                          }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.NetworkInterface network_interfaces = 1006 [json_name = "networkInterfaces"];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworkInterfaces()
    {
        return $this->network_interfaces;
    }

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.NetworkInterface network_interfaces = 1006 [json_name = "networkInterfaces"];</code>
     *
     * @param  array<\SpaceX\API\Device\NetworkInterface>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setNetworkInterfaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \SpaceX\API\Device\NetworkInterface::class);
        $this->network_interfaces = $arr;

        return $this;
    }
}
