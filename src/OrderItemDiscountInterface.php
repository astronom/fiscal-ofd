<?php

namespace Fiscal\OFD;

/**
 * Interface OrderItemDiscountInterface
 *
 * Apply this interface to your Order item class (i.e. model) if you have any discount programs.
 */
interface OrderItemDiscountInterface
{
    public const TYPE_PERCENT = 'percent';
    public const TYPE_VALUE = 'value';

    /**
     * Discount type ("percent" or "value").
     *
     * @return string|null
     */
    public function getDiscountType(): string;

    /**
     * Discount value.
     *
     * @return int|float|null
     */
    public function getDiscountValue(): float;
}
