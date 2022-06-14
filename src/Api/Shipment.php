<?php

namespace Amz\Orders\Api;

use Amz\Orders\Model\UpdateShipmentStatusErrorResponse;
use Amz\Orders\Model\UpdateShipmentStatusRequest;

class Shipment extends AbstractAPI
{
    /**
     * Update the shipment status.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 5 | 15 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $orderId An Amazon-defined order identifier, in 3-7-7 format
     * @param UpdateShipmentStatusRequest $Model Update the shipment status.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 5 | 15 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @return UpdateShipmentStatusErrorResponse
     */
    public function updateStatus($orderId, UpdateShipmentStatusRequest $Model): UpdateShipmentStatusErrorResponse
    {
        return $this->request(
        'updateShipmentStatus',
        'POST',
        "orders/v0/orders/$orderId/shipment",
        null,
        [],
        []
        );
    }
}
