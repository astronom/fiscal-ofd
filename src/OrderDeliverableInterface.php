<?php

namespace Fiscal\OFD;

/**
 * Interface OrderDeliverableInterface.
 *
 * Apply this interface to your Order class (i.e. model) if you can provide any delivery information.
 */
interface OrderDeliverableInterface
{
    public const DELIVERY_TYPE_COURIER = 'courier';
    public const DELIVERY_TYPE_PICKUP = 'pickup';

    /**
     * Delivery type.
     *
     * @return string|null
     */
    public function getDeliveryType(): ?string;

    /**
     * Delivery order item.
     * If delivery amount is greater than 0 it will be add as an additional order item
     *
     * @return OrderItemInterface|null
     */
    public function getDeliveryOrderItem(): ?OrderItemInterface;

    /**
     * 2-symbol country code.
     *
     * @return string|null
     */
    public function getCountry(): ?string;

    /**
     * City name.
     *
     * @return string|null
     */
    public function getCity(): ?string;

    /**
     * Address.
     *
     * @return string
     */
    public function getPostAddress(): ?string;
}
