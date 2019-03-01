# Fiscal OFD Library

Эта библиотека содержит весь неолбходимый набор интерфейсов для создания фискального чека. Облегчает интеграцию с платежными шлюзами, которые поддерживают передачу данных в ОФД (оператор фискальных данных).
Совместима с ФФД `v1.05` 

[English readme](README.md)

## Минимальные требования
`php ^7.1`

## Минимальный набор интерфейсов для реализации  
* [`Fiscal\OFD\OrderInterface`](src/OrderInterface.php)
* [`Fiscal\OFD\OrderItemInterface`](src/OrderItemInterface.php)

## Интерфейсы
* [`Fiscal\OFD\OrderInterface`](src/OrderInterface.php) - Базовый интерфейс заказа
* [`Fiscal\OFD\OrderDeliverableInterface`](src/OrderDeliverableInterface.php) - Интрерфейс заказа с доставкой.
* [`Fiscal\OFD\CustomerInterface`](src/CustomerInterface.php) - Интрфейс данных покупателя
* [`Fiscal\OFD\LoyaltiesInterface`](src/LoyaltiesInterface.php) - Интерфейс для описания бонусных програм
* [`Fiscal\OFD\OrderItemInterface`](src/OrderItemInterface.php) - Интерфейс позиции заказа
* [`Fiscal\OFD\OrderItemNomenclatureInterface`](src/OrderItemNomenclatureInterface.php) - Интрфейс номенклатуры позиции заказа 
* [`Fiscal\OFD\OrderItemPaymentInterface`](src/OrderItemPaymentInterface.php) - Интрфейс описывающий метод и тип платежа по позиции заказа
* [`Fiscal\OFD\OrderItemAgentInfoInterface`](src/OrderItemAgentInfoInterface.php) - Интрфейс описывающий агентские отчисления по позиции заказа
* [`Fiscal\OFD\OrderItemAgentInterestInterface`](src/OrderItemAgentInterestInterface.php) - Интрфейс описывающий агентский интерес по позиции заказа 
* [`Fiscal\OFD\OrderItemDetailsInterface`](src/OrderItemDetailsInterface.php) - Интерфейс описывающий дополнительные параметры позиции заказа 
* [`Fiscal\OFD\OrderItemDiscountInterface`](src/OrderItemDiscountInterface.php) - Интерфейс описывающий скидки по позиции заказа
* [`Fiscal\OFD\OrderItemTaxableInterface`](src/OrderItemTaxableInterface.php) - Интерфейс описывающий налоги по позиции заказа
* [`Fiscal\OFD\OrderItemUserDataInterface`](src/OrderItemUserDataInterface.php) - Интерфейс описывающий значение реквизита пользователя
 
