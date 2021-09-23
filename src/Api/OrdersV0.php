<?php

namespace Amz\Orders\Api;

use Amz\Orders\Model\GetOrderAddressResponse as GetOrderAddressResponse;
use Amz\Orders\Model\GetOrderBuyerInfoResponse as GetOrderBuyerInfoResponse;
use Amz\Orders\Model\GetOrderItemsBuyerInfoResponse as GetOrderItemsBuyerInfoResponse;
use Amz\Orders\Model\GetOrderItemsResponse as GetOrderItemsResponse;
use Amz\Orders\Model\GetOrderResponse as GetOrderResponse;
use Amz\Orders\Model\GetOrdersResponse as GetOrdersResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class OrdersV0 extends AbstractAPI
{
    /**
     * Returns orders created or updated during the time frame indicated by the
     * specified parameters. You can also apply a range of filtering criteria to narrow
     * the list of orders returned. If NextToken is present, that will be used to
     * retrieve the orders instead of other criteria.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 0.0055 | 20 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param array $queries options:
     *                       'CreatedAfter'		A date used for selecting orders created after (or at) a
     *                       specified time. Only orders placed after the specified time are returned. Either
     *                       the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both
     *                       cannot be empty. The date must be in ISO 8601 format.
     *                       'CreatedBefore'		A date used for selecting orders created before (or at) a
     *                       specified time. Only orders placed before the specified time are returned. The
     *                       date must be in ISO 8601 format.
     *                       'LastUpdatedAfter'		A date used for selecting orders that were last updated
     *                       after (or at) a specified time. An update is defined as any change in order
     *                       status, including the creation of a new order. Includes updates made by Amazon
     *                       and by the seller. The date must be in ISO 8601 format.
     *                       'LastUpdatedBefore'		A date used for selecting orders that were last updated
     *                       before (or at) a specified time. An update is defined as any change in order
     *                       status, including the creation of a new order. Includes updates made by Amazon
     *                       and by the seller. The date must be in ISO 8601 format.
     *                       'OrderStatuses'		A list of OrderStatus values used to filter the results.
     *                       Possible values: PendingAvailability (This status is available for pre-orders
     *                       only. The order has been placed, payment has not been authorized, and the
     *                       release date of the item is in the future.); Pending (The order has been placed
     *                       but payment has not been authorized); Unshipped (Payment has been authorized and
     *                       the order is ready for shipment, but no items in the order have been shipped);
     *                       PartiallyShipped (One or more, but not all, items in the order have been
     *                       shipped); Shipped (All items in the order have been shipped); InvoiceUnconfirmed
     *                       (All items in the order have been shipped. The seller has not yet given
     *                       confirmation to Amazon that the invoice has been shipped to the buyer.);
     *                       Canceled (The order has been canceled); and Unfulfillable (The order cannot be
     *                       fulfilled. This state applies only to Multi-Channel Fulfillment orders.).
     *                       'MarketplaceIds'		A list of MarketplaceId values. Used to select orders that
     *                       were placed in the specified marketplaces.
     *                       'FulfillmentChannels'		A list that indicates how an order was fulfilled. Filters
     *                       the results by fulfillment channel. Possible values: FBA (Fulfillment by
     *                       Amazon); SellerFulfilled (Fulfilled by the seller).
     *                       'PaymentMethods'		A list of payment method values. Used to select orders paid
     *                       using the specified payment methods. Possible values: COD (Cash on delivery);
     *                       CVS (Convenience store payment); Other (Any payment method other than COD or
     *                       CVS).
     *                       'BuyerEmail'		The email address of a buyer. Used to select orders that contain
     *                       the specified email address.
     *                       'SellerOrderId'		An order identifier that is specified by the seller. Used to
     *                       select only the orders that match the order identifier. If SellerOrderId is
     *                       specified, then FulfillmentChannels, OrderStatuses, PaymentMethod,
     *                       LastUpdatedAfter, LastUpdatedBefore, and BuyerEmail cannot be specified.
     *                       'MaxResultsPerPage'		A number that indicates the maximum number of orders that
     *                       can be returned per page. Value must be 1 - 100. Default 100.
     *                       'EasyShipShipmentStatuses'		A list of EasyShipShipmentStatus values. Used to
     *                       select Easy Ship orders with statuses that match the specified  values. If
     *                       EasyShipShipmentStatus is specified, only Amazon Easy Ship orders are
     *                       returned.Possible values: PendingPickUp (Amazon has not yet picked up the
     *                       package from the seller). LabelCanceled (The seller canceled the pickup).
     *                       PickedUp (Amazon has picked up the package from the seller). AtOriginFC (The
     *                       packaged is at the origin fulfillment center). AtDestinationFC (The package is
     *                       at the destination fulfillment center). OutForDelivery (The package is out for
     *                       delivery). Damaged (The package was damaged by the carrier). Delivered (The
     *                       package has been delivered to the buyer). RejectedByBuyer (The package has been
     *                       rejected by the buyer). Undeliverable (The package cannot be delivered).
     *                       ReturnedToSeller (The package was not delivered to the buyer and was returned to
     *                       the seller). ReturningToSeller (The package was not delivered to the buyer and
     *                       is being returned to the seller).
     *                       'NextToken'		A string token returned in the response of your previous request.
     *                       'AmazonOrderIds'		A list of AmazonOrderId values. An AmazonOrderId is an
     *                       Amazon-defined order identifier, in 3-7-7 format.
     *                       'ActualFulfillmentSupplySourceId'		Denotes the recommended sourceId where the
     *                       order should be fulfilled from.
     *                       'IsISPU'		When true, this order is marked to be picked up from a store rather
     *                       than delivered.
     *                       'StoreChainStoreId'		The store chain store identifier. Linked to a specific
     *                       store in a store chain.
     *
     * @return GetOrdersResponse
     */
    public function getOrders(array $queries = []): GetOrdersResponse
    {
        return $this->client->request('getOrders', 'GET', 'orders/v0/orders',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns the order indicated by the specified order ID.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 0.0055 | 20 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $orderId An Amazon-defined order identifier, in 3-7-7 format
     *
     * @return GetOrderResponse
     */
    public function getOrder($orderId): GetOrderResponse
    {
        return $this->client->request('getOrder', 'GET', "orders/v0/orders/{$orderId}",
            [
            ]
        );
    }

    /**
     * Returns buyer information for the specified order.
     *
     * **Important.** We recommend using the getOrders operation to get buyer
     * information for an order, as the getOrderBuyerInfo operation is scheduled for
     * deprecation on January 12, 2022. For more information, see the [Tokens API Use
     * Case
     * Guide](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/use-case-guides/tokens-api-use-case-guide/tokens-API-use-case-guide-2021-03-01.md).
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 0.0055 | 20 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $orderId An orderId is an Amazon-defined order identifier, in 3-7-7
     * format
     *
     * @return GetOrderBuyerInfoResponse
     */
    public function getOrderBuyerInfo($orderId): GetOrderBuyerInfoResponse
    {
        return $this->client->request('getOrderBuyerInfo', 'GET', "orders/v0/orders/{$orderId}/buyerInfo",
            [
            ]
        );
    }

    /**
     * Returns the shipping address for the specified order.
     *
     * **Important.** We recommend using the getOrders operation to get shipping
     * address information for an order, as the getOrderAddress operation is scheduled
     * for deprecation on January 12, 2022. For more information, see the [Tokens API
     * Use Case
     * Guide](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/use-case-guides/tokens-api-use-case-guide/tokens-API-use-case-guide-2021-03-01.md).
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 0.0055 | 20 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $orderId An orderId is an Amazon-defined order identifier, in 3-7-7
     * format
     *
     * @return GetOrderAddressResponse
     */
    public function getOrderAddress($orderId): GetOrderAddressResponse
    {
        return $this->client->request('getOrderAddress', 'GET', "orders/v0/orders/{$orderId}/address",
            [
            ]
        );
    }

    /**
     * Returns detailed order item information for the order indicated by the specified
     * order ID. If NextToken is provided, it's used to retrieve the next page of order
     * items.
     *
     * Note: When an order is in the Pending state (the order has been placed but
     * payment has not been authorized), the getOrderItems operation does not return
     * information about pricing, taxes, shipping charges, gift status or promotions
     * for the order items in the order. After an order leaves the Pending state (this
     * occurs when payment has been authorized) and enters the Unshipped, Partially
     * Shipped, or Shipped state, the getOrderItems operation returns information about
     * pricing, taxes, shipping charges, gift status and promotions for the order items
     * in the order.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 0.0055 | 20 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $orderId An Amazon-defined order identifier, in 3-7-7 format
     * @param array $queries options:
     *                       'NextToken'		A string token returned in the response of your previous request
     *
     * @return GetOrderItemsResponse
     */
    public function getOrderItems($orderId, array $queries = []): GetOrderItemsResponse
    {
        return $this->client->request('getOrderItems', 'GET', "orders/v0/orders/{$orderId}/orderItems",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns buyer information for the order items in the specified order.
     *
     * **Important.** We recommend using the getOrderItems operation to get buyer
     * information for the order items in an order, as the getOrderItemsBuyerInfo
     * operation is scheduled for deprecation on January 12, 2022. For more
     * information, see the [Tokens API Use Case
     * Guide](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/use-case-guides/tokens-api-use-case-guide/tokens-API-use-case-guide-2021-03-01.md).
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 0.0055 | 20 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $orderId An Amazon-defined order identifier, in 3-7-7 format
     * @param array $queries options:
     *                       'NextToken'		A string token returned in the response of your previous request
     *
     * @return GetOrderItemsBuyerInfoResponse
     */
    public function getOrderItemsBuyerInfo($orderId, array $queries = []): GetOrderItemsBuyerInfoResponse
    {
        return $this->client->request('getOrderItemsBuyerInfo', 'GET', "orders/v0/orders/{$orderId}/orderItems/buyerInfo",
            [
                'query' => $queries,
            ]
        );
    }
}
