<?php

namespace Fiscal\OFD;

/**
 * Interface OrderInterface
 *
 * Apply this interface to your Order (i.e. model)
 */
interface OrderInterface
{
    /**
     * Order's cart.
     *
     * @return array|\Fiscal\OFD\OrderItemInterface[]
     */
    public function getItems(): array;

    /**
     * Check if there is order items
     *
     * @return bool
     */
    public function hasItems(): bool;

    /**
     * Order's customer.
     *
     * @return CustomerInterface|null
     */
    public function getCustomer(): ?CustomerInterface;

    /**
     * Order's creation date
     *
     * @return \DateTimeImmutable|null
     */
    public function getCreationDate(): ?\DateTimeImmutable;

    /**
     * Loyalties
     *
     * @return iterable|LoyaltiesInterface[]|null
     */
    public function getLoyalties(): ?iterable;
}
