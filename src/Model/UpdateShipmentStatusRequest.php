<?php

namespace Amz\Orders\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Request to update the status of shipment of an order.
 */
class UpdateShipmentStatusRequest extends AbstractModel
{
    /**
     * @var \Amz\Orders\Model\MarketplaceId
     */
    public $marketplaceId = null;

    /**
     * @var \Amz\Orders\Model\ShipmentStatus
     */
    public $shipmentStatus = null;

    /**
     * @var \Amz\Orders\Model\OrderItems
     */
    public $orderItems = null;
}
