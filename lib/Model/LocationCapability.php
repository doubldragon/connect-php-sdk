<?php
/**
 * LocationCapability
 *
 * PHP version 5
 *
 * @category Class
 * @package  SquareConnect
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Square Connect API
 *
 * Client library for accessing the Square Connect APIs
 *
 * OpenAPI spec version: 2.0
 * Contact: developers@squareup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

/**
 * LocationCapability Class Doc Comment
 *
 * @category    Class
 * @description Indicates account capabilities that a business&#39;s location might or might not have enabled.
 * @package     SquareConnect
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LocationCapability
{
    /**
     * Possible values of this enum
     */
    const PROCESSING = 'CREDIT_CARD_PROCESSING';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PROCESSING,
        ];
    }
}


