<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Information about whether or not a buyer requested cancellation.
 */
class BuyerRequestedCancel extends AbstractModel
{
    /**
     * When true, the buyer has requested cancellation.
     *
     * @var bool
     */
    public $IsBuyerRequestedCancel = null;

    /**
     * The reason that the buyer requested cancellation.
     *
     * @var string
     */
    public $BuyerCancelReason = null;
}
