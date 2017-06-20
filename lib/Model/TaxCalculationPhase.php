<?php
/**
 * TaxCalculationPhase
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
 * TaxCalculationPhase Class Doc Comment
 *
 * @category    Class
 * @description When to calculate the taxes due on a cart.
 * @package     SquareConnect
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TaxCalculationPhase
{
    /**
     * Possible values of this enum
     */
    const SUBTOTAL_PHASE = 'TAX_SUBTOTAL_PHASE';
    const TOTAL_PHASE = 'TAX_TOTAL_PHASE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SUBTOTAL_PHASE,
            self::TOTAL_PHASE,
        ];
    }
}


