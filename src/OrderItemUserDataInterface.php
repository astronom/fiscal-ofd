<?php

namespace Fiscal\OFD;

/**
 * Interface OrderItemUserDataInterface
 *
 * Apply this interface to your Order item class (i.e. model). If you want to provide any user data
 */
interface OrderItemUserDataInterface
{
    /**
     * User details value.
     *
     * @return string
     */
    public function getUserData(): string;
}
