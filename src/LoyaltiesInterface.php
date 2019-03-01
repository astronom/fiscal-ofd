<?php

namespace Fiscal\OFD;

/**
 * Interface LoyaltiesInterface
 *
 * Apply this interface to your Loyalties class (i.e. model).
 */
interface LoyaltiesInterface
{
    /**
     * Loyalty program name
     *
     * @return string
     */
    public function getLoyaltyProgramName(): string;

    /**
     * Order item position id
     *
     * @return int
     */
    public function getPositionId(): int;

    /**
     * Debit bonus amount for order item
     *
     * @return float
     */
    public function getBonusAmountForDebit(): float;

    /**
     * Credit bonus amount for order item
     *
     * @return float
     */
    public function getBonusAmountForCredit(): ?float;
}
