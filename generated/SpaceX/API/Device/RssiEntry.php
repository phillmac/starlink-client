<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/rssi_scan.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.RssiEntry</code>
 */
class RssiEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional double theta_degree = 1 [json_name = "thetaDegree"];</code>
     */
    protected $theta_degree = null;

    /**
     * Generated from protobuf field <code>optional double phi_degree = 2 [json_name = "phiDegree"];</code>
     */
    protected $phi_degree = null;

    /**
     * Generated from protobuf field <code>optional double rssi_dbf = 3 [json_name = "rssiDbf"];</code>
     */
    protected $rssi_dbf = null;

    /**
     * Generated from protobuf field <code>optional uint64 scan_timestamp_ms = 4 [json_name = "scanTimestampMs"];</code>
     */
    protected $scan_timestamp_ms = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type float $theta_degree
     * @type float $phi_degree
     * @type float $rssi_dbf
     * @type int|string $scan_timestamp_ms
     *                  }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\RssiScan::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional double theta_degree = 1 [json_name = "thetaDegree"];</code>
     *
     * @return float
     */
    public function getThetaDegree()
    {
        return isset($this->theta_degree) ? $this->theta_degree : 0.0;
    }

    public function hasThetaDegree()
    {
        return isset($this->theta_degree);
    }

    public function clearThetaDegree()
    {
        unset($this->theta_degree);
    }

    /**
     * Generated from protobuf field <code>optional double theta_degree = 1 [json_name = "thetaDegree"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setThetaDegree($var)
    {
        GPBUtil::checkDouble($var);
        $this->theta_degree = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional double phi_degree = 2 [json_name = "phiDegree"];</code>
     *
     * @return float
     */
    public function getPhiDegree()
    {
        return isset($this->phi_degree) ? $this->phi_degree : 0.0;
    }

    public function hasPhiDegree()
    {
        return isset($this->phi_degree);
    }

    public function clearPhiDegree()
    {
        unset($this->phi_degree);
    }

    /**
     * Generated from protobuf field <code>optional double phi_degree = 2 [json_name = "phiDegree"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setPhiDegree($var)
    {
        GPBUtil::checkDouble($var);
        $this->phi_degree = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional double rssi_dbf = 3 [json_name = "rssiDbf"];</code>
     *
     * @return float
     */
    public function getRssiDbf()
    {
        return isset($this->rssi_dbf) ? $this->rssi_dbf : 0.0;
    }

    public function hasRssiDbf()
    {
        return isset($this->rssi_dbf);
    }

    public function clearRssiDbf()
    {
        unset($this->rssi_dbf);
    }

    /**
     * Generated from protobuf field <code>optional double rssi_dbf = 3 [json_name = "rssiDbf"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setRssiDbf($var)
    {
        GPBUtil::checkDouble($var);
        $this->rssi_dbf = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint64 scan_timestamp_ms = 4 [json_name = "scanTimestampMs"];</code>
     *
     * @return int|string
     */
    public function getScanTimestampMs()
    {
        return isset($this->scan_timestamp_ms) ? $this->scan_timestamp_ms : 0;
    }

    public function hasScanTimestampMs()
    {
        return isset($this->scan_timestamp_ms);
    }

    public function clearScanTimestampMs()
    {
        unset($this->scan_timestamp_ms);
    }

    /**
     * Generated from protobuf field <code>optional uint64 scan_timestamp_ms = 4 [json_name = "scanTimestampMs"];</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setScanTimestampMs($var)
    {
        GPBUtil::checkUint64($var);
        $this->scan_timestamp_ms = $var;

        return $this;
    }
}
