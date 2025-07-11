<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/dish.proto

namespace SpaceX\API\Device;

use UnexpectedValueException;

/**
 * Protobuf type <code>SpaceX.API.Device.DishState</code>
 */
class DishState
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;

    /**
     * Generated from protobuf enum <code>CONNECTED = 1;</code>
     */
    const CONNECTED = 1;

    /**
     * Generated from protobuf enum <code>SEARCHING = 2;</code>
     */
    const SEARCHING = 2;

    /**
     * Generated from protobuf enum <code>BOOTING = 3;</code>
     */
    const BOOTING = 3;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::CONNECTED => 'CONNECTED',
        self::SEARCHING => 'SEARCHING',
        self::BOOTING => 'BOOTING',
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
