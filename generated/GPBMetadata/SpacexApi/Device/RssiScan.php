<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/rssi_scan.proto

namespace GPBMetadata\SpacexApi\Device;

class RssiScan
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\xC7\x05\x0A!spacex_api/device/rssi_scan.proto\x12\x11SpaceX.API.Device\"\xEB\x01\x0A\x09RssiEntry\x12&\x0A\x0Ctheta_degree\x18\x01 \x01(\x01H\x00R\x0BthetaDegree\x88\x01\x01\x12\"\x0A\x0Aphi_degree\x18\x02 \x01(\x01H\x01R\x09phiDegree\x88\x01\x01\x12\x1E\x0A\x08rssi_dbf\x18\x03 \x01(\x01H\x02R\x07rssiDbf\x88\x01\x01\x12/\x0A\x11scan_timestamp_ms\x18\x04 \x01(\x04H\x03R\x0FscanTimestampMs\x88\x01\x01B\x0F\x0A\x0D_theta_degreeB\x0D\x0A\x0B_phi_degreeB\x0B\x0A\x09_rssi_dbfB\x14\x0A\x12_scan_timestamp_ms\"A\x0A\x14DishActivateRssiScan\x12\x1D\x0A\x07channel\x18\x01 \x01(\x0DH\x00R\x07channel\x88\x01\x01B\x0A\x0A\x08_channel\"\xBC\x02\x0A\x15DishGetRssiScanResult\x12\x1D\x0A\x07success\x18\x01 \x01(\x08H\x00R\x07success\x88\x01\x01\x12\x1D\x0A\x07channel\x18\x02 \x01(\x0DH\x01R\x07channel\x88\x01\x01\x120\x0A\x11request_timestamp\x18\x03 \x01(\x04H\x02R\x10requestTimestamp\x88\x01\x01\x12*\x0A\x0Enumber_samples\x18\x04 \x01(\x0DH\x03R\x0DnumberSamples\x88\x01\x01\x12F\x0A\x10rssi_scan_points\x18\x05 \x03(\x0B2\x1C.SpaceX.API.Device.RssiEntryR\x0ErssiScanPointsB\x0A\x0A\x08_successB\x0A\x0A\x08_channelB\x14\x0A\x12_request_timestampB\x11\x0A\x0F_number_samplesB\x17Z\x15spacex.com/api/deviceb\x06proto3", true);

        static::$is_initialized = true;
    }
}
