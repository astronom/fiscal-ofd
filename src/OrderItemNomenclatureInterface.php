<?php

namespace Fiscal\OFD;

/**
 * Class OrderItemNomenclatureInterface.
 *
 * Apply this interface to your Order item class (i.e. model) if you want to provide order item nomenclature data.
 */
interface OrderItemNomenclatureInterface
{
    /**
     * Product code in hexadecimal notation with spaces
     *
     * @return string
     */
    public function getNomenclature(): string;
}
