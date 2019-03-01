<?php

namespace Fiscal\OFD;

/**
 * Interface OrderItemInterface
 *
 * Apply this interface to your Order item class (i.e. model).
 */
interface OrderItemInterface
{
    public const DISCOUNT_TYPE_VALUE = 'value';
    public const DISCOUNT_TYPE_PERCENT = 'percent';

    /**
     * Order item id. It must be Unique among order items.
     *
     * @return int
     */
    public function getPositionId(): int;

    /**
     * Product name.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Quantity measure
     *
     * @return string
     */
    public function getMeasure(): string;

    /**
     * Quantity value
     *
     * @return int|float
     */
    public function getQuantity(): float;

    /**
     * Product code. (i.e. id inside your system or article)
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * Single product price.
     *
     * @return float
     */
    public function getPrice(): float;

    /**
     * Single product price multiply by quantity
     *
     * Not required if getPrice is specified
     *
     * @return float
     */
    public function getAmount(): ?float;

    /**
     * Product currency in ISO-4217 format.
     *
     * @return string|null
     */
    public function getCurrency(): ?string;
}
