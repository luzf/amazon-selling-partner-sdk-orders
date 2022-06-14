<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Order information.
 */
class Order extends AbstractModel
{
    /**
     * An Amazon-defined order identifier, in 3-7-7 format.
     *
     * @var string
     */
    public $AmazonOrderId = null;

    /**
     * A seller-defined order identifier.
     *
     * @var string
     */
    public $SellerOrderId = null;

    /**
     * The date when the order was created.
     *
     * @var string
     */
    public $PurchaseDate = null;

    /**
     * The date when the order was last updated.
     *
     * Note: LastUpdateDate is returned with an incorrect date for orders that were
     * last updated before 2009-04-01.
     *
     * @var string
     */
    public $LastUpdateDate = null;

    /**
     * The current order status.
     *
     * @var string
     */
    public $OrderStatus = null;

    /**
     * Whether the order was fulfilled by Amazon (AFN) or by the seller (MFN).
     *
     * @var string
     */
    public $FulfillmentChannel = null;

    /**
     * The sales channel of the first item in the order.
     *
     * @var string
     */
    public $SalesChannel = null;

    /**
     * The order channel of the first item in the order.
     *
     * @var string
     */
    public $OrderChannel = null;

    /**
     * The shipment service level of the order.
     *
     * @var string
     */
    public $ShipServiceLevel = null;

    /**
     * The total charge for this order.
     *
     * @var \Amz\Orders\Model\Money
     */
    public $OrderTotal = null;

    /**
     * The number of items shipped.
     *
     * @var int
     */
    public $NumberOfItemsShipped = null;

    /**
     * The number of items unshipped.
     *
     * @var int
     */
    public $NumberOfItemsUnshipped = null;

    /**
     * Information about sub-payment methods for a Cash On Delivery (COD) order.
     *
     * Note: For a COD order that is paid for using one sub-payment method, one
     * PaymentExecutionDetailItem object is returned, with
     * PaymentExecutionDetailItem/PaymentMethod = COD. For a COD order that is paid for
     * using multiple sub-payment methods, two or more PaymentExecutionDetailItem
     * objects are returned.
     *
     * @var \Amz\Orders\Model\PaymentExecutionDetailItemList
     */
    public $PaymentExecutionDetail = null;

    /**
     * The payment method for the order. This property is limited to Cash On Delivery
     * (COD) and Convenience Store (CVS) payment methods. Unless you need the specific
     * COD payment information provided by the PaymentExecutionDetailItem object, we
     * recommend using the PaymentMethodDetails property to get payment method
     * information.
     *
     * @var string
     */
    public $PaymentMethod = null;

    /**
     * A list of payment methods for the order.
     *
     * @var \Amz\Orders\Model\PaymentMethodDetailItemList
     */
    public $PaymentMethodDetails = null;

    /**
     * The identifier for the marketplace where the order was placed.
     *
     * @var string
     */
    public $MarketplaceId = null;

    /**
     * The shipment service level category of the order.
     *
     * Possible values: Expedited, FreeEconomy, NextDay, SameDay, SecondDay, Scheduled,
     * Standard.
     *
     * @var string
     */
    public $ShipmentServiceLevelCategory = null;

    /**
     * The status of the Amazon Easy Ship order. This property is included only for
     * Amazon Easy Ship orders.
     *
     * Possible values: PendingPickUp, LabelCanceled, PickedUp, OutForDelivery,
     * Damaged, Delivered, RejectedByBuyer, Undeliverable, ReturnedToSeller,
     * ReturningToSeller.
     *
     * @var string
     */
    public $EasyShipShipmentStatus = null;

    /**
     * Custom ship label for Checkout by Amazon (CBA).
     *
     * @var string
     */
    public $CbaDisplayableShippingLabel = null;

    /**
     * The type of the order.
     *
     * @var string
     */
    public $OrderType = null;

    /**
     * The start of the time period within which you have committed to ship the order.
     * In ISO 8601 date time format. Returned only for seller-fulfilled orders.
     *
     * Note: EarliestShipDate might not be returned for orders placed before February
     * 1, 2013.
     *
     * @var string
     */
    public $EarliestShipDate = null;

    /**
     * The end of the time period within which you have committed to ship the order. In
     * ISO 8601 date time format. Returned only for seller-fulfilled orders.
     *
     * Note: LatestShipDate might not be returned for orders placed before February 1,
     * 2013.
     *
     * @var string
     */
    public $LatestShipDate = null;

    /**
     * The start of the time period within which you have committed to fulfill the
     * order. In ISO 8601 date time format. Returned only for seller-fulfilled orders.
     *
     * @var string
     */
    public $EarliestDeliveryDate = null;

    /**
     * The end of the time period within which you have committed to fulfill the order.
     * In ISO 8601 date time format. Returned only for seller-fulfilled orders that do
     * not have a PendingAvailability, Pending, or Canceled status.
     *
     * @var string
     */
    public $LatestDeliveryDate = null;

    /**
     * When true, the order is an Amazon Business order. An Amazon Business order is an
     * order where the buyer is a Verified Business Buyer.
     *
     * @var bool
     */
    public $IsBusinessOrder = null;

    /**
     * When true, the order is a seller-fulfilled Amazon Prime order.
     *
     * @var bool
     */
    public $IsPrime = null;

    /**
     * When true, the order has a Premium Shipping Service Level Agreement. For more
     * information about Premium Shipping orders, see "Premium Shipping Options" in the
     * Seller Central Help for your marketplace.
     *
     * @var bool
     */
    public $IsPremiumOrder = null;

    /**
     * When true, the order is a GlobalExpress order.
     *
     * @var bool
     */
    public $IsGlobalExpressEnabled = null;

    /**
     * The order ID value for the order that is being replaced. Returned only if
     * IsReplacementOrder = true.
     *
     * @var string
     */
    public $ReplacedOrderId = null;

    /**
     * When true, this is a replacement order.
     *
     * @var bool
     */
    public $IsReplacementOrder = null;

    /**
     * Indicates the date by which the seller must respond to the buyer with an
     * estimated ship date. Returned only for Sourcing on Demand orders.
     *
     * @var string
     */
    public $PromiseResponseDueDate = null;

    /**
     * When true, the estimated ship date is set for the order. Returned only for
     * Sourcing on Demand orders.
     *
     * @var bool
     */
    public $IsEstimatedShipDateSet = null;

    /**
     * When true, the item within this order was bought and re-sold by Amazon Business
     * EU SARL (ABEU). By buying and instantly re-selling your items, ABEU becomes the
     * seller of record, making your inventory available for sale to customers who
     * would not otherwise purchase from a third-party seller.
     *
     * @var bool
     */
    public $IsSoldByAB = null;

    /**
     * When true, the item within this order was bought and re-sold by Amazon Business
     * EU SARL (ABEU). By buying and instantly re-selling your items, ABEU becomes the
     * seller of record, making your inventory available for sale to customers who
     * would not otherwise purchase from a third-party seller.
     *
     * @var bool
     */
    public $IsIBA = null;

    /**
     * The recommended location for the seller to ship the items from. It is calculated
     * at checkout. The seller may or may not choose to ship from this location.
     *
     * @var \Amz\Orders\Model\Address
     */
    public $DefaultShipFromLocationAddress = null;

    /**
     * The buyer's invoicing preference. Available only in the TR marketplace.
     *
     * @var string
     */
    public $BuyerInvoicePreference = null;

    /**
     * Contains the business invoice tax information.
     *
     * @var \Amz\Orders\Model\BuyerTaxInformation
     */
    public $BuyerTaxInformation = null;

    /**
     * Contains the instructions about the fulfillment like where should it be
     * fulfilled from.
     *
     * @var \Amz\Orders\Model\FulfillmentInstruction
     */
    public $FulfillmentInstruction = null;

    /**
     * When true, this order is marked to be picked up from a store rather than
     * delivered.
     *
     * @var bool
     */
    public $IsISPU = null;

    /**
     * When true, this order is marked to be delivered to an Access Point. The access
     * location is chosen by the customer. Access Points include Amazon Hub Lockers,
     * Amazon Hub Counters, and pickup points operated by carriers.
     *
     * @var bool
     */
    public $IsAccessPointOrder = null;

    /**
     * Tax information about the marketplace.
     *
     * @var \Amz\Orders\Model\MarketplaceTaxInfo
     */
    public $MarketplaceTaxInfo = null;

    /**
     * The seller’s friendly name registered in the marketplace.
     *
     * @var string
     */
    public $SellerDisplayName = null;

    /**
     * @var \Amz\Orders\Model\Address
     */
    public $ShippingAddress = null;

    /**
     * @var \Amz\Orders\Model\BuyerInfo
     */
    public $BuyerInfo = null;

    /**
     * Contains information regarding the Shipping Settings Automaton program, such as
     * whether the order's shipping settings were generated automatically, and what
     * those settings are.
     *
     * @var \Amz\Orders\Model\AutomatedShippingSettings
     */
    public $AutomatedShippingSettings = null;

    /**
     * Whether the order contains regulated items which may require additional approval
     * steps before being fulfilled.
     *
     * @var bool
     */
    public $HasRegulatedItems = null;
}
