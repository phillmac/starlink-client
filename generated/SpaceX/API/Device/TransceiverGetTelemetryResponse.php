<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/transceiver.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.TransceiverGetTelemetryResponse</code>
 */
class TransceiverGetTelemetryResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional uint32 antenna_pointing_mode = 1001 [json_name = "antennaPointingMode"];</code>
     */
    protected $antenna_pointing_mode = null;

    /**
     * Generated from protobuf field <code>optional float antenna_pitch = 1002 [json_name = "antennaPitch"];</code>
     */
    protected $antenna_pitch = null;

    /**
     * Generated from protobuf field <code>optional float antenna_roll = 1003 [json_name = "antennaRoll"];</code>
     */
    protected $antenna_roll = null;

    /**
     * Generated from protobuf field <code>optional float antenna_rx_theta = 1004 [json_name = "antennaRxTheta"];</code>
     */
    protected $antenna_rx_theta = null;

    /**
     * Generated from protobuf field <code>optional float antenna_true_heading = 1005 [json_name = "antennaTrueHeading"];</code>
     */
    protected $antenna_true_heading = null;

    /**
     * Generated from protobuf field <code>optional uint32 rx_channel = 1006 [json_name = "rxChannel"];</code>
     */
    protected $rx_channel = null;

    /**
     * Generated from protobuf field <code>optional uint32 current_cell_id = 1007 [json_name = "currentCellId"];</code>
     */
    protected $current_cell_id = null;

    /**
     * Generated from protobuf field <code>optional float seconds_until_slot_end = 1008 [json_name = "secondsUntilSlotEnd"];</code>
     */
    protected $seconds_until_slot_end = null;

    /**
     * Generated from protobuf field <code>optional float wb_rssi_peak_mag_db = 1009 [json_name = "wbRssiPeakMagDb"];</code>
     */
    protected $wb_rssi_peak_mag_db = null;

    /**
     * Generated from protobuf field <code>optional float pop_ping_drop_rate = 1010 [json_name = "popPingDropRate"];</code>
     */
    protected $pop_ping_drop_rate = null;

    /**
     * Generated from protobuf field <code>optional float snr_db = 1011 [json_name = "snrDb"];</code>
     */
    protected $snr_db = null;

    /**
     * Generated from protobuf field <code>optional float l1_snr_avg_db = 1012 [json_name = "l1SnrAvgDb"];</code>
     */
    protected $l1_snr_avg_db = null;

    /**
     * Generated from protobuf field <code>optional float l1_snr_min_db = 1013 [json_name = "l1SnrMinDb"];</code>
     */
    protected $l1_snr_min_db = null;

    /**
     * Generated from protobuf field <code>optional float l1_snr_max_db = 1014 [json_name = "l1SnrMaxDb"];</code>
     */
    protected $l1_snr_max_db = null;

    /**
     * Generated from protobuf field <code>optional uint32 lmac_satellite_id = 1015 [json_name = "lmacSatelliteId"];</code>
     */
    protected $lmac_satellite_id = null;

    /**
     * Generated from protobuf field <code>optional uint32 target_satellite_id = 1016 [json_name = "targetSatelliteId"];</code>
     */
    protected $target_satellite_id = null;

    /**
     * Generated from protobuf field <code>optional uint32 grant_mcs = 1017 [json_name = "grantMcs"];</code>
     */
    protected $grant_mcs = null;

    /**
     * Generated from protobuf field <code>optional float grant_symbols_avg = 1018 [json_name = "grantSymbolsAvg"];</code>
     */
    protected $grant_symbols_avg = null;

    /**
     * Generated from protobuf field <code>optional uint32 ded_grant = 1019 [json_name = "dedGrant"];</code>
     */
    protected $ded_grant = null;

    /**
     * Generated from protobuf field <code>optional uint32 mobility_proactive_slot_change = 1020 [json_name = "mobilityProactiveSlotChange"];</code>
     */
    protected $mobility_proactive_slot_change = null;

    /**
     * Generated from protobuf field <code>optional uint32 mobility_reactive_slot_change = 1021 [json_name = "mobilityReactiveSlotChange"];</code>
     */
    protected $mobility_reactive_slot_change = null;

    /**
     * Generated from protobuf field <code>optional uint32 rfp_total_syn_failed = 1022 [json_name = "rfpTotalSynFailed"];</code>
     */
    protected $rfp_total_syn_failed = null;

    /**
     * Generated from protobuf field <code>optional uint32 num_out_of_seq = 1023 [json_name = "numOutOfSeq"];</code>
     */
    protected $num_out_of_seq = null;

    /**
     * Generated from protobuf field <code>optional uint32 num_ulmap_drop = 1024 [json_name = "numUlmapDrop"];</code>
     */
    protected $num_ulmap_drop = null;

    /**
     * Generated from protobuf field <code>optional float current_seconds_of_schedule = 1025 [json_name = "currentSecondsOfSchedule"];</code>
     */
    protected $current_seconds_of_schedule = null;

    /**
     * Generated from protobuf field <code>optional uint32 send_label_switch_to_ground_failed_calls = 1026 [json_name = "sendLabelSwitchToGroundFailedCalls"];</code>
     */
    protected $send_label_switch_to_ground_failed_calls = null;

    /**
     * Generated from protobuf field <code>optional double ema_velocity_x = 1027 [json_name = "emaVelocityX"];</code>
     */
    protected $ema_velocity_x = null;

    /**
     * Generated from protobuf field <code>optional double ema_velocity_y = 1028 [json_name = "emaVelocityY"];</code>
     */
    protected $ema_velocity_y = null;

    /**
     * Generated from protobuf field <code>optional double ema_velocity_z = 1029 [json_name = "emaVelocityZ"];</code>
     */
    protected $ema_velocity_z = null;

    /**
     * Generated from protobuf field <code>optional float ce_rssi_db = 1030 [json_name = "ceRssiDb"];</code>
     */
    protected $ce_rssi_db = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type int $antenna_pointing_mode
     * @type float $antenna_pitch
     * @type float $antenna_roll
     * @type float $antenna_rx_theta
     * @type float $antenna_true_heading
     * @type int $rx_channel
     * @type int $current_cell_id
     * @type float $seconds_until_slot_end
     * @type float $wb_rssi_peak_mag_db
     * @type float $pop_ping_drop_rate
     * @type float $snr_db
     * @type float $l1_snr_avg_db
     * @type float $l1_snr_min_db
     * @type float $l1_snr_max_db
     * @type int $lmac_satellite_id
     * @type int $target_satellite_id
     * @type int $grant_mcs
     * @type float $grant_symbols_avg
     * @type int $ded_grant
     * @type int $mobility_proactive_slot_change
     * @type int $mobility_reactive_slot_change
     * @type int $rfp_total_syn_failed
     * @type int $num_out_of_seq
     * @type int $num_ulmap_drop
     * @type float $current_seconds_of_schedule
     * @type int $send_label_switch_to_ground_failed_calls
     * @type float $ema_velocity_x
     * @type float $ema_velocity_y
     * @type float $ema_velocity_z
     * @type float $ce_rssi_db
     *             }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Transceiver::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional uint32 antenna_pointing_mode = 1001 [json_name = "antennaPointingMode"];</code>
     *
     * @return int
     */
    public function getAntennaPointingMode()
    {
        return isset($this->antenna_pointing_mode) ? $this->antenna_pointing_mode : 0;
    }

    public function hasAntennaPointingMode()
    {
        return isset($this->antenna_pointing_mode);
    }

    public function clearAntennaPointingMode()
    {
        unset($this->antenna_pointing_mode);
    }

    /**
     * Generated from protobuf field <code>optional uint32 antenna_pointing_mode = 1001 [json_name = "antennaPointingMode"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setAntennaPointingMode($var)
    {
        GPBUtil::checkUint32($var);
        $this->antenna_pointing_mode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float antenna_pitch = 1002 [json_name = "antennaPitch"];</code>
     *
     * @return float
     */
    public function getAntennaPitch()
    {
        return isset($this->antenna_pitch) ? $this->antenna_pitch : 0.0;
    }

    public function hasAntennaPitch()
    {
        return isset($this->antenna_pitch);
    }

    public function clearAntennaPitch()
    {
        unset($this->antenna_pitch);
    }

    /**
     * Generated from protobuf field <code>optional float antenna_pitch = 1002 [json_name = "antennaPitch"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setAntennaPitch($var)
    {
        GPBUtil::checkFloat($var);
        $this->antenna_pitch = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float antenna_roll = 1003 [json_name = "antennaRoll"];</code>
     *
     * @return float
     */
    public function getAntennaRoll()
    {
        return isset($this->antenna_roll) ? $this->antenna_roll : 0.0;
    }

    public function hasAntennaRoll()
    {
        return isset($this->antenna_roll);
    }

    public function clearAntennaRoll()
    {
        unset($this->antenna_roll);
    }

    /**
     * Generated from protobuf field <code>optional float antenna_roll = 1003 [json_name = "antennaRoll"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setAntennaRoll($var)
    {
        GPBUtil::checkFloat($var);
        $this->antenna_roll = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float antenna_rx_theta = 1004 [json_name = "antennaRxTheta"];</code>
     *
     * @return float
     */
    public function getAntennaRxTheta()
    {
        return isset($this->antenna_rx_theta) ? $this->antenna_rx_theta : 0.0;
    }

    public function hasAntennaRxTheta()
    {
        return isset($this->antenna_rx_theta);
    }

    public function clearAntennaRxTheta()
    {
        unset($this->antenna_rx_theta);
    }

    /**
     * Generated from protobuf field <code>optional float antenna_rx_theta = 1004 [json_name = "antennaRxTheta"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setAntennaRxTheta($var)
    {
        GPBUtil::checkFloat($var);
        $this->antenna_rx_theta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float antenna_true_heading = 1005 [json_name = "antennaTrueHeading"];</code>
     *
     * @return float
     */
    public function getAntennaTrueHeading()
    {
        return isset($this->antenna_true_heading) ? $this->antenna_true_heading : 0.0;
    }

    public function hasAntennaTrueHeading()
    {
        return isset($this->antenna_true_heading);
    }

    public function clearAntennaTrueHeading()
    {
        unset($this->antenna_true_heading);
    }

    /**
     * Generated from protobuf field <code>optional float antenna_true_heading = 1005 [json_name = "antennaTrueHeading"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setAntennaTrueHeading($var)
    {
        GPBUtil::checkFloat($var);
        $this->antenna_true_heading = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 rx_channel = 1006 [json_name = "rxChannel"];</code>
     *
     * @return int
     */
    public function getRxChannel()
    {
        return isset($this->rx_channel) ? $this->rx_channel : 0;
    }

    public function hasRxChannel()
    {
        return isset($this->rx_channel);
    }

    public function clearRxChannel()
    {
        unset($this->rx_channel);
    }

    /**
     * Generated from protobuf field <code>optional uint32 rx_channel = 1006 [json_name = "rxChannel"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setRxChannel($var)
    {
        GPBUtil::checkUint32($var);
        $this->rx_channel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 current_cell_id = 1007 [json_name = "currentCellId"];</code>
     *
     * @return int
     */
    public function getCurrentCellId()
    {
        return isset($this->current_cell_id) ? $this->current_cell_id : 0;
    }

    public function hasCurrentCellId()
    {
        return isset($this->current_cell_id);
    }

    public function clearCurrentCellId()
    {
        unset($this->current_cell_id);
    }

    /**
     * Generated from protobuf field <code>optional uint32 current_cell_id = 1007 [json_name = "currentCellId"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setCurrentCellId($var)
    {
        GPBUtil::checkUint32($var);
        $this->current_cell_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float seconds_until_slot_end = 1008 [json_name = "secondsUntilSlotEnd"];</code>
     *
     * @return float
     */
    public function getSecondsUntilSlotEnd()
    {
        return isset($this->seconds_until_slot_end) ? $this->seconds_until_slot_end : 0.0;
    }

    public function hasSecondsUntilSlotEnd()
    {
        return isset($this->seconds_until_slot_end);
    }

    public function clearSecondsUntilSlotEnd()
    {
        unset($this->seconds_until_slot_end);
    }

    /**
     * Generated from protobuf field <code>optional float seconds_until_slot_end = 1008 [json_name = "secondsUntilSlotEnd"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setSecondsUntilSlotEnd($var)
    {
        GPBUtil::checkFloat($var);
        $this->seconds_until_slot_end = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float wb_rssi_peak_mag_db = 1009 [json_name = "wbRssiPeakMagDb"];</code>
     *
     * @return float
     */
    public function getWbRssiPeakMagDb()
    {
        return isset($this->wb_rssi_peak_mag_db) ? $this->wb_rssi_peak_mag_db : 0.0;
    }

    public function hasWbRssiPeakMagDb()
    {
        return isset($this->wb_rssi_peak_mag_db);
    }

    public function clearWbRssiPeakMagDb()
    {
        unset($this->wb_rssi_peak_mag_db);
    }

    /**
     * Generated from protobuf field <code>optional float wb_rssi_peak_mag_db = 1009 [json_name = "wbRssiPeakMagDb"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setWbRssiPeakMagDb($var)
    {
        GPBUtil::checkFloat($var);
        $this->wb_rssi_peak_mag_db = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float pop_ping_drop_rate = 1010 [json_name = "popPingDropRate"];</code>
     *
     * @return float
     */
    public function getPopPingDropRate()
    {
        return isset($this->pop_ping_drop_rate) ? $this->pop_ping_drop_rate : 0.0;
    }

    public function hasPopPingDropRate()
    {
        return isset($this->pop_ping_drop_rate);
    }

    public function clearPopPingDropRate()
    {
        unset($this->pop_ping_drop_rate);
    }

    /**
     * Generated from protobuf field <code>optional float pop_ping_drop_rate = 1010 [json_name = "popPingDropRate"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setPopPingDropRate($var)
    {
        GPBUtil::checkFloat($var);
        $this->pop_ping_drop_rate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float snr_db = 1011 [json_name = "snrDb"];</code>
     *
     * @return float
     */
    public function getSnrDb()
    {
        return isset($this->snr_db) ? $this->snr_db : 0.0;
    }

    public function hasSnrDb()
    {
        return isset($this->snr_db);
    }

    public function clearSnrDb()
    {
        unset($this->snr_db);
    }

    /**
     * Generated from protobuf field <code>optional float snr_db = 1011 [json_name = "snrDb"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setSnrDb($var)
    {
        GPBUtil::checkFloat($var);
        $this->snr_db = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float l1_snr_avg_db = 1012 [json_name = "l1SnrAvgDb"];</code>
     *
     * @return float
     */
    public function getL1SnrAvgDb()
    {
        return isset($this->l1_snr_avg_db) ? $this->l1_snr_avg_db : 0.0;
    }

    public function hasL1SnrAvgDb()
    {
        return isset($this->l1_snr_avg_db);
    }

    public function clearL1SnrAvgDb()
    {
        unset($this->l1_snr_avg_db);
    }

    /**
     * Generated from protobuf field <code>optional float l1_snr_avg_db = 1012 [json_name = "l1SnrAvgDb"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setL1SnrAvgDb($var)
    {
        GPBUtil::checkFloat($var);
        $this->l1_snr_avg_db = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float l1_snr_min_db = 1013 [json_name = "l1SnrMinDb"];</code>
     *
     * @return float
     */
    public function getL1SnrMinDb()
    {
        return isset($this->l1_snr_min_db) ? $this->l1_snr_min_db : 0.0;
    }

    public function hasL1SnrMinDb()
    {
        return isset($this->l1_snr_min_db);
    }

    public function clearL1SnrMinDb()
    {
        unset($this->l1_snr_min_db);
    }

    /**
     * Generated from protobuf field <code>optional float l1_snr_min_db = 1013 [json_name = "l1SnrMinDb"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setL1SnrMinDb($var)
    {
        GPBUtil::checkFloat($var);
        $this->l1_snr_min_db = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float l1_snr_max_db = 1014 [json_name = "l1SnrMaxDb"];</code>
     *
     * @return float
     */
    public function getL1SnrMaxDb()
    {
        return isset($this->l1_snr_max_db) ? $this->l1_snr_max_db : 0.0;
    }

    public function hasL1SnrMaxDb()
    {
        return isset($this->l1_snr_max_db);
    }

    public function clearL1SnrMaxDb()
    {
        unset($this->l1_snr_max_db);
    }

    /**
     * Generated from protobuf field <code>optional float l1_snr_max_db = 1014 [json_name = "l1SnrMaxDb"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setL1SnrMaxDb($var)
    {
        GPBUtil::checkFloat($var);
        $this->l1_snr_max_db = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 lmac_satellite_id = 1015 [json_name = "lmacSatelliteId"];</code>
     *
     * @return int
     */
    public function getLmacSatelliteId()
    {
        return isset($this->lmac_satellite_id) ? $this->lmac_satellite_id : 0;
    }

    public function hasLmacSatelliteId()
    {
        return isset($this->lmac_satellite_id);
    }

    public function clearLmacSatelliteId()
    {
        unset($this->lmac_satellite_id);
    }

    /**
     * Generated from protobuf field <code>optional uint32 lmac_satellite_id = 1015 [json_name = "lmacSatelliteId"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setLmacSatelliteId($var)
    {
        GPBUtil::checkUint32($var);
        $this->lmac_satellite_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 target_satellite_id = 1016 [json_name = "targetSatelliteId"];</code>
     *
     * @return int
     */
    public function getTargetSatelliteId()
    {
        return isset($this->target_satellite_id) ? $this->target_satellite_id : 0;
    }

    public function hasTargetSatelliteId()
    {
        return isset($this->target_satellite_id);
    }

    public function clearTargetSatelliteId()
    {
        unset($this->target_satellite_id);
    }

    /**
     * Generated from protobuf field <code>optional uint32 target_satellite_id = 1016 [json_name = "targetSatelliteId"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setTargetSatelliteId($var)
    {
        GPBUtil::checkUint32($var);
        $this->target_satellite_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 grant_mcs = 1017 [json_name = "grantMcs"];</code>
     *
     * @return int
     */
    public function getGrantMcs()
    {
        return isset($this->grant_mcs) ? $this->grant_mcs : 0;
    }

    public function hasGrantMcs()
    {
        return isset($this->grant_mcs);
    }

    public function clearGrantMcs()
    {
        unset($this->grant_mcs);
    }

    /**
     * Generated from protobuf field <code>optional uint32 grant_mcs = 1017 [json_name = "grantMcs"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setGrantMcs($var)
    {
        GPBUtil::checkUint32($var);
        $this->grant_mcs = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float grant_symbols_avg = 1018 [json_name = "grantSymbolsAvg"];</code>
     *
     * @return float
     */
    public function getGrantSymbolsAvg()
    {
        return isset($this->grant_symbols_avg) ? $this->grant_symbols_avg : 0.0;
    }

    public function hasGrantSymbolsAvg()
    {
        return isset($this->grant_symbols_avg);
    }

    public function clearGrantSymbolsAvg()
    {
        unset($this->grant_symbols_avg);
    }

    /**
     * Generated from protobuf field <code>optional float grant_symbols_avg = 1018 [json_name = "grantSymbolsAvg"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setGrantSymbolsAvg($var)
    {
        GPBUtil::checkFloat($var);
        $this->grant_symbols_avg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 ded_grant = 1019 [json_name = "dedGrant"];</code>
     *
     * @return int
     */
    public function getDedGrant()
    {
        return isset($this->ded_grant) ? $this->ded_grant : 0;
    }

    public function hasDedGrant()
    {
        return isset($this->ded_grant);
    }

    public function clearDedGrant()
    {
        unset($this->ded_grant);
    }

    /**
     * Generated from protobuf field <code>optional uint32 ded_grant = 1019 [json_name = "dedGrant"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setDedGrant($var)
    {
        GPBUtil::checkUint32($var);
        $this->ded_grant = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 mobility_proactive_slot_change = 1020 [json_name = "mobilityProactiveSlotChange"];</code>
     *
     * @return int
     */
    public function getMobilityProactiveSlotChange()
    {
        return isset($this->mobility_proactive_slot_change) ? $this->mobility_proactive_slot_change : 0;
    }

    public function hasMobilityProactiveSlotChange()
    {
        return isset($this->mobility_proactive_slot_change);
    }

    public function clearMobilityProactiveSlotChange()
    {
        unset($this->mobility_proactive_slot_change);
    }

    /**
     * Generated from protobuf field <code>optional uint32 mobility_proactive_slot_change = 1020 [json_name = "mobilityProactiveSlotChange"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setMobilityProactiveSlotChange($var)
    {
        GPBUtil::checkUint32($var);
        $this->mobility_proactive_slot_change = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 mobility_reactive_slot_change = 1021 [json_name = "mobilityReactiveSlotChange"];</code>
     *
     * @return int
     */
    public function getMobilityReactiveSlotChange()
    {
        return isset($this->mobility_reactive_slot_change) ? $this->mobility_reactive_slot_change : 0;
    }

    public function hasMobilityReactiveSlotChange()
    {
        return isset($this->mobility_reactive_slot_change);
    }

    public function clearMobilityReactiveSlotChange()
    {
        unset($this->mobility_reactive_slot_change);
    }

    /**
     * Generated from protobuf field <code>optional uint32 mobility_reactive_slot_change = 1021 [json_name = "mobilityReactiveSlotChange"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setMobilityReactiveSlotChange($var)
    {
        GPBUtil::checkUint32($var);
        $this->mobility_reactive_slot_change = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 rfp_total_syn_failed = 1022 [json_name = "rfpTotalSynFailed"];</code>
     *
     * @return int
     */
    public function getRfpTotalSynFailed()
    {
        return isset($this->rfp_total_syn_failed) ? $this->rfp_total_syn_failed : 0;
    }

    public function hasRfpTotalSynFailed()
    {
        return isset($this->rfp_total_syn_failed);
    }

    public function clearRfpTotalSynFailed()
    {
        unset($this->rfp_total_syn_failed);
    }

    /**
     * Generated from protobuf field <code>optional uint32 rfp_total_syn_failed = 1022 [json_name = "rfpTotalSynFailed"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setRfpTotalSynFailed($var)
    {
        GPBUtil::checkUint32($var);
        $this->rfp_total_syn_failed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 num_out_of_seq = 1023 [json_name = "numOutOfSeq"];</code>
     *
     * @return int
     */
    public function getNumOutOfSeq()
    {
        return isset($this->num_out_of_seq) ? $this->num_out_of_seq : 0;
    }

    public function hasNumOutOfSeq()
    {
        return isset($this->num_out_of_seq);
    }

    public function clearNumOutOfSeq()
    {
        unset($this->num_out_of_seq);
    }

    /**
     * Generated from protobuf field <code>optional uint32 num_out_of_seq = 1023 [json_name = "numOutOfSeq"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setNumOutOfSeq($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_out_of_seq = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 num_ulmap_drop = 1024 [json_name = "numUlmapDrop"];</code>
     *
     * @return int
     */
    public function getNumUlmapDrop()
    {
        return isset($this->num_ulmap_drop) ? $this->num_ulmap_drop : 0;
    }

    public function hasNumUlmapDrop()
    {
        return isset($this->num_ulmap_drop);
    }

    public function clearNumUlmapDrop()
    {
        unset($this->num_ulmap_drop);
    }

    /**
     * Generated from protobuf field <code>optional uint32 num_ulmap_drop = 1024 [json_name = "numUlmapDrop"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setNumUlmapDrop($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_ulmap_drop = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float current_seconds_of_schedule = 1025 [json_name = "currentSecondsOfSchedule"];</code>
     *
     * @return float
     */
    public function getCurrentSecondsOfSchedule()
    {
        return isset($this->current_seconds_of_schedule) ? $this->current_seconds_of_schedule : 0.0;
    }

    public function hasCurrentSecondsOfSchedule()
    {
        return isset($this->current_seconds_of_schedule);
    }

    public function clearCurrentSecondsOfSchedule()
    {
        unset($this->current_seconds_of_schedule);
    }

    /**
     * Generated from protobuf field <code>optional float current_seconds_of_schedule = 1025 [json_name = "currentSecondsOfSchedule"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setCurrentSecondsOfSchedule($var)
    {
        GPBUtil::checkFloat($var);
        $this->current_seconds_of_schedule = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 send_label_switch_to_ground_failed_calls = 1026 [json_name = "sendLabelSwitchToGroundFailedCalls"];</code>
     *
     * @return int
     */
    public function getSendLabelSwitchToGroundFailedCalls()
    {
        return isset($this->send_label_switch_to_ground_failed_calls) ? $this->send_label_switch_to_ground_failed_calls : 0;
    }

    public function hasSendLabelSwitchToGroundFailedCalls()
    {
        return isset($this->send_label_switch_to_ground_failed_calls);
    }

    public function clearSendLabelSwitchToGroundFailedCalls()
    {
        unset($this->send_label_switch_to_ground_failed_calls);
    }

    /**
     * Generated from protobuf field <code>optional uint32 send_label_switch_to_ground_failed_calls = 1026 [json_name = "sendLabelSwitchToGroundFailedCalls"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setSendLabelSwitchToGroundFailedCalls($var)
    {
        GPBUtil::checkUint32($var);
        $this->send_label_switch_to_ground_failed_calls = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional double ema_velocity_x = 1027 [json_name = "emaVelocityX"];</code>
     *
     * @return float
     */
    public function getEmaVelocityX()
    {
        return isset($this->ema_velocity_x) ? $this->ema_velocity_x : 0.0;
    }

    public function hasEmaVelocityX()
    {
        return isset($this->ema_velocity_x);
    }

    public function clearEmaVelocityX()
    {
        unset($this->ema_velocity_x);
    }

    /**
     * Generated from protobuf field <code>optional double ema_velocity_x = 1027 [json_name = "emaVelocityX"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setEmaVelocityX($var)
    {
        GPBUtil::checkDouble($var);
        $this->ema_velocity_x = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional double ema_velocity_y = 1028 [json_name = "emaVelocityY"];</code>
     *
     * @return float
     */
    public function getEmaVelocityY()
    {
        return isset($this->ema_velocity_y) ? $this->ema_velocity_y : 0.0;
    }

    public function hasEmaVelocityY()
    {
        return isset($this->ema_velocity_y);
    }

    public function clearEmaVelocityY()
    {
        unset($this->ema_velocity_y);
    }

    /**
     * Generated from protobuf field <code>optional double ema_velocity_y = 1028 [json_name = "emaVelocityY"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setEmaVelocityY($var)
    {
        GPBUtil::checkDouble($var);
        $this->ema_velocity_y = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional double ema_velocity_z = 1029 [json_name = "emaVelocityZ"];</code>
     *
     * @return float
     */
    public function getEmaVelocityZ()
    {
        return isset($this->ema_velocity_z) ? $this->ema_velocity_z : 0.0;
    }

    public function hasEmaVelocityZ()
    {
        return isset($this->ema_velocity_z);
    }

    public function clearEmaVelocityZ()
    {
        unset($this->ema_velocity_z);
    }

    /**
     * Generated from protobuf field <code>optional double ema_velocity_z = 1029 [json_name = "emaVelocityZ"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setEmaVelocityZ($var)
    {
        GPBUtil::checkDouble($var);
        $this->ema_velocity_z = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional float ce_rssi_db = 1030 [json_name = "ceRssiDb"];</code>
     *
     * @return float
     */
    public function getCeRssiDb()
    {
        return isset($this->ce_rssi_db) ? $this->ce_rssi_db : 0.0;
    }

    public function hasCeRssiDb()
    {
        return isset($this->ce_rssi_db);
    }

    public function clearCeRssiDb()
    {
        unset($this->ce_rssi_db);
    }

    /**
     * Generated from protobuf field <code>optional float ce_rssi_db = 1030 [json_name = "ceRssiDb"];</code>
     *
     * @param  float  $var
     * @return $this
     */
    public function setCeRssiDb($var)
    {
        GPBUtil::checkFloat($var);
        $this->ce_rssi_db = $var;

        return $this;
    }
}
