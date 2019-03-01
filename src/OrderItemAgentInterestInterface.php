<?php

namespace Fiscal\OFD;

/**
 * Interface OrderItemAgentInterestInterface
 *
 * Apply this interface to your Order item class (i.e. model) if you have any agent interest.
 */
interface OrderItemAgentInterestInterface
{
    /**
     * Interest type (e.g. "agentPercent").
     *
     * @return string|null
     */
    public function getInterestType(): string;

    /**
     * Returns discount value.
     *
     * @return int|float|null
     */
    public function getInterestValue(): float;
}
