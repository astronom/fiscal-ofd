<?php

namespace Fiscal\OFD;

/**
 * Interface OrderItemDetailsInterface
 *
 * Apply this interface to your Order item class (i.e. model) if you want to provide any order item details.
 */
interface OrderItemDetailsInterface
{
    /**
     * Returns an key-value array of additional item parameters.
     *
     * @return array|null
     */
    public function getDetailParams(): array;
}
