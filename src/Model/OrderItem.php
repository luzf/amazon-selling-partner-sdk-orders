<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A single order item.
 */
class OrderItem extends AbstractModel
{
    /**
     * The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @var string
     */
    public $ASIN = null;

    /**
     * The seller stock keeping unit (SKU) of the item.
     *
     * @var string
     */
    public $SellerSKU = null;

    /**
     * An Amazon-defined order item identifier.
     *
     * @var string
     */
    public $OrderItemId = null;

    /**
     * The name of the item.
     *
     * @var string
     */
    public $Title = null;

    /**
     * The number of items in the order.
     *
     * @var int
     */
    public $QuantityOrdered = null;

    /**
     * The number of items shipped.
     *
     * @var int
     */
    public $QuantityShipped = null;

    /**
     * Product information for the item.
     *
     * @var \Amz\Orders\Model\ProductInfoDetail
     */
    public $ProductInfo = null;

    /**
     * The number and value of Amazon Points granted with the purchase of an item.
     *
     * @var \Amz\Orders\Model\PointsGrantedDetail
     */
    public $PointsGranted = null;

    /**
     * The selling price of the order item. Note that an order item is an item and a
     * quantity. This means that the value of ItemPrice is equal to the selling price
     * of the item multiplied by the quantity ordered. Note that ItemPrice excludes
     * ShippingPrice and GiftWrapPrice.
     *
     * @var \Amz\Orders\Model\Money
     */
    public $ItemPrice = null;

    /**
     * The shipping price of the item.
     *
     * @var \Amz\Orders\Model\Money
     */
    public $ShippingPrice = null;

    /**
     * The tax on the item price.
     *
     * @var \Amz\Orders\Model\Money
     */
    public $ItemTax = null;

    /**
     * The tax on the shipping price.
     *
     * @var \Amz\Orders\Model\Money
     */
    public $ShippingTax = null;

    /**
     * The discount on the shipping price.
     *
     * @var \Amz\Orders\Model\Money
     */
    public $ShippingDiscount = null;

    /**
     * The tax on the discount on the shipping price.
     *
     * @var \Amz\Orders\Model\Money
     */
    public $ShippingDiscountTax = null;

    /**
     * The total of all promotional discounts in the offer.
     *
     * @var \Amz\Orders\Model\Money
     */
    public $PromotionDiscount = null;

    /**
     * The tax on the total of all promotional discounts in the offer.
     *
     * @var \Amz\Orders\Model\Money
     */
    public $PromotionDiscountTax = null;

    /**
     * @var \Amz\Orders\Model\PromotionIdList
     */
    public $PromotionIds = null;

    /**
     * The fee charged for COD service.
     *
     * @var \Amz\Orders\Model\Money
     */
    public $CODFee = null;

    /**
     * The discount on the COD fee.
     *
     * @var \Amz\Orders\Model\Money
     */
    public $CODFeeDiscount = null;

    /**
     * When true, the item is a gift.
     *
     * @var bool
     */
    public $IsGift = null;

    /**
     * The condition of the item as described by the seller.
     *
     * @var string
     */
    public $ConditionNote = null;

    /**
     * The condition of the item.
     *
     * Possible values: New, Used, Collectible, Refurbished, Preorder, Club.
     *
     * @var string
     */
    public $ConditionId = null;

    /**
     * The subcondition of the item.
     *
     * Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM,
     * Warranty, Refurbished Warranty, Refurbished, Open Box, Any, Other.
     *
     * @var string
     */
    public $ConditionSubtypeId = null;

    /**
     * The start date of the scheduled delivery window in the time zone of the order
     * destination. In ISO 8601 date time format.
     *
     * @var string
     */
    public $ScheduledDeliveryStartDate = null;

    /**
     * The end date of the scheduled delivery window in the time zone of the order
     * destination. In ISO 8601 date time format.
     *
     * @var string
     */
    public $ScheduledDeliveryEndDate = null;

    /**
     * Indicates that the selling price is a special price that is available only for
     * Amazon Business orders. For more information about the Amazon Business Seller
     * Program, see the [Amazon Business
     * website](https://www.amazon.com/b2b/info/amazon-business).
     *
     * Possible values: BusinessPrice - A special price that is available only for
     * Amazon Business orders.
     *
     * @var string
     */
    public $PriceDesignation = null;

    /**
     * Information about withheld taxes.
     *
     * @var \Amz\Orders\Model\TaxCollection
     */
    public $TaxCollection = null;

    /**
     * When true, the product type for this item has a serial number.
     *
     * Returned only for Amazon Easy Ship orders.
     *
     * @var bool
     */
    public $SerialNumberRequired = null;

    /**
     * When true, transparency codes are required.
     *
     * @var bool
     */
    public $IsTransparency = null;

    /**
     * The IOSS number for the marketplace. Sellers shipping to the European Union (EU)
     * from outside of the EU must provide this IOSS number to their carrier when
     * Amazon has collected the VAT on the sale.
     *
     * @var string
     */
    public $IossNumber = null;

    /**
     * The store chain store identifier. Linked to a specific store in a store chain.
     *
     * @var string
     */
    public $StoreChainStoreId = null;

    /**
     * The category of deemed reseller. This applies to selling partners that are not
     * based in the EU and is used to help them meet the VAT Deemed Reseller tax laws
     * in the EU and UK.
     *
     * @var string
     */
    public $DeemedResellerCategory = null;

    /**
     * @var \Amz\Orders\Model\ItemBuyerInfo
     */
    public $BuyerInfo = null;

    /**
     * Information about whether or not a buyer requested cancellation.
     *
     * @var \Amz\Orders\Model\BuyerRequestedCancel
     */
    public $BuyerRequestedCancel = null;
}
