<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/dish.proto

namespace SpaceX\API\Device\DishOutage;

use UnexpectedValueException;

/**
 * Protobuf type <code>SpaceX.API.Device.DishOutage.Cause</code>
 */
class Cause
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;

    /**
     * Generated from protobuf enum <code>BOOTING = 1;</code>
     */
    const BOOTING = 1;

    /**
     * Generated from protobuf enum <code>STOWED = 2;</code>
     */
    const STOWED = 2;

    /**
     * Generated from protobuf enum <code>THERMAL_SHUTDOWN = 3;</code>
     */
    const THERMAL_SHUTDOWN = 3;

    /**
     * Generated from protobuf enum <code>NO_SCHEDULE = 4;</code>
     */
    const NO_SCHEDULE = 4;

    /**
     * Generated from protobuf enum <code>NO_SATS = 5;</code>
     */
    const NO_SATS = 5;

    /**
     * Generated from protobuf enum <code>OBSTRUCTED = 6;</code>
     */
    const OBSTRUCTED = 6;

    /**
     * Generated from protobuf enum <code>NO_DOWNLINK = 7;</code>
     */
    const NO_DOWNLINK = 7;

    /**
     * Generated from protobuf enum <code>NO_PINGS = 8;</code>
     */
    const NO_PINGS = 8;

    /**
     * Generated from protobuf enum <code>ACTUATOR_ACTIVITY = 9;</code>
     */
    const ACTUATOR_ACTIVITY = 9;

    /**
     * Generated from protobuf enum <code>CABLE_TEST = 10;</code>
     */
    const CABLE_TEST = 10;

    /**
     * Generated from protobuf enum <code>SLEEPING = 11;</code>
     */
    const SLEEPING = 11;

    /**
     * Generated from protobuf enum <code>MOVING_WHILE_NOT_ALLOWED = 12;</code>
     */
    const MOVING_WHILE_NOT_ALLOWED = 12;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::BOOTING => 'BOOTING',
        self::STOWED => 'STOWED',
        self::THERMAL_SHUTDOWN => 'THERMAL_SHUTDOWN',
        self::NO_SCHEDULE => 'NO_SCHEDULE',
        self::NO_SATS => 'NO_SATS',
        self::OBSTRUCTED => 'OBSTRUCTED',
        self::NO_DOWNLINK => 'NO_DOWNLINK',
        self::NO_PINGS => 'NO_PINGS',
        self::ACTUATOR_ACTIVITY => 'ACTUATOR_ACTIVITY',
        self::CABLE_TEST => 'CABLE_TEST',
        self::SLEEPING => 'SLEEPING',
        self::MOVING_WHILE_NOT_ALLOWED => 'MOVING_WHILE_NOT_ALLOWED',
    ];

    public static function name($value)
    {
        if (! isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no name defined for value %s', __CLASS__, $value));
        }

        return self::$valueToName[$value];
    }

    public static function value($name)
    {
        $const = __CLASS__.'::'.strtoupper($name);
        if (! defined($const)) {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no value defined for name %s', __CLASS__, $name));
        }

        return constant($const);
    }
}
