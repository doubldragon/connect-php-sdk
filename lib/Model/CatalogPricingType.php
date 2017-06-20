<?php
/**
 * CatalogPricingType
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
 * CatalogPricingType Class Doc Comment
 *
 * @category    Class
 * @description Indicates whether the price of a [CatalogItemVariation](#type-catalogitemvariation) should be entered manually at the time of sale.
 * @package     SquareConnect
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CatalogPricingType
{
    /**
     * Possible values of this enum
     */
    const FIXED_PRICING = 'FIXED_PRICING';
    const VARIABLE_PRICING = 'VARIABLE_PRICING';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIXED_PRICING,
            self::VARIABLE_PRICING,
        ];
    }
}


