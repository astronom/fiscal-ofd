<?php

namespace Fiscal\OFD;

/**
 * Interface CustomerInterface.
 *
 * Apply this interface to your Customer class (i.e. model).
 */
interface CustomerInterface
{
    /**
     * Customer's email.
     *
     * @return string|null
     */
    public function getEmail(): ?string;

    /**
     * Customer's phone.
     *
     * @return string|null
     */
    public function getPhone(): ?string;

    /**
     * Customer's another contact method.
     *
     * @return string|null
     */
    public function getContact(): ?string;
}
