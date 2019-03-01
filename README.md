# Fiscal OFD Library

This library contains all necessary interfaces for E-commerce order receipt.
Simplify integration with payment providers witch support fiscal data operators. Compatible with current OFD `v1.05`

[Russian readme](README.ru.md) 

## Requirements
`php ^7.1`

## Minimum interfaces implementation required  
* [`Fiscal\OFD\OrderInterface`](src/OrderInterface.php)
* [`Fiscal\OFD\OrderItemInterface`](src/OrderItemInterface.php)

## Interfaces
* [`Fiscal\OFD\OrderInterface`](src/OrderInterface.php) - Base order interface
* [`Fiscal\OFD\OrderDeliverableInterface`](src/OrderDeliverableInterface.php) - Apply this interface to your Order class (i.e. model) if you provide any delivery information.
* [`Fiscal\OFD\CustomerInterface`](src/CustomerInterface.php) - Apply this interface to your Customer class (i.e. model).
* [`Fiscal\OFD\LoyaltiesInterface`](src/LoyaltiesInterface.php) - Apply this interface to your Loyalties class (i.e. model).
* [`Fiscal\OFD\OrderItemInterface`](src/OrderItemInterface.php) - Apply this interface to your Order item class (i.e. model).
* [`Fiscal\OFD\OrderItemNomenclatureInterface`](src/OrderItemNomenclatureInterface.php) - Apply this interface to your Order item class (i.e. model) if you want to provide order item nomenclature data.
* [`Fiscal\OFD\OrderItemPaymentInterface`](src/OrderItemPaymentInterface.php) - Apply this interface to your Order item class (i.e. model). If you want to provide payment method and payment object data.
* [`Fiscal\OFD\OrderItemAgentInfoInterface`](src/OrderItemAgentInfoInterface.php) - Apply this interface to your Order item class (i.e. model) if you have any agent payments.
* [`Fiscal\OFD\OrderItemAgentInterestInterface`](src/OrderItemAgentInterestInterface.php) - Apply this interface to your Order item class (i.e. model) if you have any agent interest.
* [`Fiscal\OFD\OrderItemDetailsInterface`](src/OrderItemDetailsInterface.php) - Apply this interface to your Order item class (i.e. model) if you want to provide any order item details.
* [`Fiscal\OFD\OrderItemDiscountInterface`](src/OrderItemDetailsInterface.php) - Apply this interface to your Order item class (i.e. model) if you have any discount programs.
* [`Fiscal\OFD\OrderItemTaxableInterface`](src/OrderItemTaxableInterface.php) - Apply this interface to your Order item class (i.e. model). If you want to provide any taxable data.
* [`Fiscal\OFD\OrderItemUserDataInterface`](src/OrderItemUserDataInterface.php) - Apply this interface to your Order item class (i.e. model). If you want to provide any user data.
 
