<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A single item's buyer information.
 */
class ItemBuyerInfo extends AbstractModel
{
    /**
     * Buyer information for custom orders from the Amazon Custom program.
     *
     * @var \Amz\Orders\Model\BuyerCustomizedInfoDetail
     */
    public $BuyerCustomizedInfo = null;

    /**
     * The gift wrap price of the item.
     *
     * @var \Amz\Orders\Model\Money
     */
    public $GiftWrapPrice = null;

    /**
     * The tax on the gift wrap price.
     *
     * @var \Amz\Orders\Model\Money
     */
    public $GiftWrapTax = null;

    /**
     * A gift message provided by the buyer.
     *
     * @var string
     */
    public $GiftMessageText = null;

    /**
     * The gift wrap level specified by the buyer.
     *
     * @var string
     */
    public $GiftWrapLevel = null;
}
