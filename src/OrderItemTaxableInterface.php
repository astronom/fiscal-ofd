<?php

namespace Fiscal\OFD;

/**
 * Interface OrderItemTaxableInterface
 *
 * Apply this interface to your Order item class (i.e. model). If you want to provide any taxable data
 */
interface OrderItemTaxableInterface
{
    /**
     * Tax types.
     */
    public const TAX_TYPE_NO_VAT = 0;
    public const TAX_TYPE_VAT_0 = 1;
    public const TAX_TYPE_VAT_10 = 2;
    public const TAX_TYPE_VAT_18 = 3;
    public const TAX_TYPE_VAT_10_110 = 4;
    public const TAX_TYPE_VAT_18_118 = 5;
    public const TAX_TYPE_VAT_20 = 6;
    public const TAX_TYPE_VAT_20_120 = 7;

    /**
     * Tax type.
     *
     * @return int
     */
    public function getTaxType(): int;

    /**
     * Tax sum.
     *
     * @return float
     */
    public function getTaxSum(): float;
}
