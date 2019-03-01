<?php

namespace Fiscal\OFD;

/**
 * Interface OrderItemAgentInfoInterface
 *
 * Apply this interface to your Order item class (i.e. model) if you have any agent payments.
 */
interface OrderItemAgentInfoInterface
{
    /**
     * Bank payment agent.
     */
    public const TYPE_BANK_PAYMENT_AGENT = 1;

    /**
     * Bank payment subagent.
     */
    public const TYPE_BANK_PAYMENT_SUBAGENT = 2;

    /**
     * Payment agent.
     */
    public const TYPE_PAYMENT_AGENT = 3;

    /**
     * Payment subagent.
     */
    public const TYPE_PAYMENT_SUBAGENT = 4;

    /**
     * Attorney.
     */
    public const TYPE_ATTORNEY = 5;

    /**
     * Commission agent.
     */
    public const TYPE_COMMISSION_AGENT = 6;

    /**
     * Another agent
     */
    public const TYPE_ANOTHER = 7;

    /**
     * Agent type
     *
     * @return int
     */
    public function getType(): int;

    /**
     * Payment agent operation name
     *
     * @return string|null
     */
    public function getPayingOperation(): ?string;

    /**
     * Paying agent phone list
     *
     * @return array|null
     */
    public function getPayingPhones(): ?array;

    /**
     * Payments operator phone list
     *
     * @return array|null
     */
    public function getPaymentsOperatorPhones(): ?array;

    /**
     * Transfer operator phone list
     *
     * @return array|null
     */
    public function getMTOOperatorPhones(): ?array;

    /**
     * Transfer operator name
     *
     * @return array|null
     */
    public function getMTOOperatorName(): ?string;

    /**
     * Transfer operator post address
     *
     * @return array|null
     */
    public function getMTOOperatorPostAddress(): ?string;

    /**
     * Transfer operator INN
     *
     * @return array|null
     */
    public function getMTOOperatorINN(): ?string;

    /**
     * Supplier phone list
     *
     * @return array|null
     */
    public function getSupplierPhones(): ?array;

    /**
     * Supplier name
     *
     * @return array|null
     */
    public function getSupplierName(): ?string;

    /**
     * Supplier INN
     *
     * @return array|null
     */
    public function getSupplierINN(): ?string;
}
