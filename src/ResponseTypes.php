<?php

namespace Amz\Orders;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public array $types = [
        'getOrders' => [
            '200.' => 'Amz\\Orders\\Model\\GetOrdersResponse',
            '400.' => 'Amz\\Orders\\Model\\GetOrdersResponse',
            '403.' => 'Amz\\Orders\\Model\\GetOrdersResponse',
            '404.' => 'Amz\\Orders\\Model\\GetOrdersResponse',
            '429.' => 'Amz\\Orders\\Model\\GetOrdersResponse',
            '500.' => 'Amz\\Orders\\Model\\GetOrdersResponse',
            '503.' => 'Amz\\Orders\\Model\\GetOrdersResponse',
        ],
        'getOrder' => [
            '200.' => 'Amz\\Orders\\Model\\GetOrderResponse',
            '400.' => 'Amz\\Orders\\Model\\GetOrderResponse',
            '403.' => 'Amz\\Orders\\Model\\GetOrderResponse',
            '404.' => 'Amz\\Orders\\Model\\GetOrderResponse',
            '429.' => 'Amz\\Orders\\Model\\GetOrderResponse',
            '500.' => 'Amz\\Orders\\Model\\GetOrderResponse',
            '503.' => 'Amz\\Orders\\Model\\GetOrderResponse',
        ],
        'getOrderBuyerInfo' => [
            '200.' => 'Amz\\Orders\\Model\\GetOrderBuyerInfoResponse',
            '400.' => 'Amz\\Orders\\Model\\GetOrderBuyerInfoResponse',
            '403.' => 'Amz\\Orders\\Model\\GetOrderBuyerInfoResponse',
            '404.' => 'Amz\\Orders\\Model\\GetOrderBuyerInfoResponse',
            '429.' => 'Amz\\Orders\\Model\\GetOrderBuyerInfoResponse',
            '500.' => 'Amz\\Orders\\Model\\GetOrderBuyerInfoResponse',
            '503.' => 'Amz\\Orders\\Model\\GetOrderBuyerInfoResponse',
        ],
        'getOrderAddress' => [
            '200.' => 'Amz\\Orders\\Model\\GetOrderAddressResponse',
            '400.' => 'Amz\\Orders\\Model\\GetOrderAddressResponse',
            '403.' => 'Amz\\Orders\\Model\\GetOrderAddressResponse',
            '404.' => 'Amz\\Orders\\Model\\GetOrderAddressResponse',
            '429.' => 'Amz\\Orders\\Model\\GetOrderAddressResponse',
            '500.' => 'Amz\\Orders\\Model\\GetOrderAddressResponse',
            '503.' => 'Amz\\Orders\\Model\\GetOrderAddressResponse',
        ],
        'getOrderItems' => [
            '200.' => 'Amz\\Orders\\Model\\GetOrderItemsResponse',
            '400.' => 'Amz\\Orders\\Model\\GetOrderItemsResponse',
            '403.' => 'Amz\\Orders\\Model\\GetOrderItemsResponse',
            '404.' => 'Amz\\Orders\\Model\\GetOrderItemsResponse',
            '429.' => 'Amz\\Orders\\Model\\GetOrderItemsResponse',
            '500.' => 'Amz\\Orders\\Model\\GetOrderItemsResponse',
            '503.' => 'Amz\\Orders\\Model\\GetOrderItemsResponse',
        ],
        'getOrderItemsBuyerInfo' => [
            '200.' => 'Amz\\Orders\\Model\\GetOrderItemsBuyerInfoResponse',
            '400.' => 'Amz\\Orders\\Model\\GetOrderItemsBuyerInfoResponse',
            '403.' => 'Amz\\Orders\\Model\\GetOrderItemsBuyerInfoResponse',
            '404.' => 'Amz\\Orders\\Model\\GetOrderItemsBuyerInfoResponse',
            '429.' => 'Amz\\Orders\\Model\\GetOrderItemsBuyerInfoResponse',
            '500.' => 'Amz\\Orders\\Model\\GetOrderItemsBuyerInfoResponse',
            '503.' => 'Amz\\Orders\\Model\\GetOrderItemsBuyerInfoResponse',
        ],
        'updateShipmentStatus' => [
            '400.' => 'Amz\\Orders\\Model\\UpdateShipmentStatusErrorResponse',
            '403.' => 'Amz\\Orders\\Model\\UpdateShipmentStatusErrorResponse',
            '404.' => 'Amz\\Orders\\Model\\UpdateShipmentStatusErrorResponse',
            '413.' => 'Amz\\Orders\\Model\\UpdateShipmentStatusErrorResponse',
            '415.' => 'Amz\\Orders\\Model\\UpdateShipmentStatusErrorResponse',
            '429.' => 'Amz\\Orders\\Model\\UpdateShipmentStatusErrorResponse',
            '500.' => 'Amz\\Orders\\Model\\UpdateShipmentStatusErrorResponse',
            '503.' => 'Amz\\Orders\\Model\\UpdateShipmentStatusErrorResponse',
        ],
        'getOrderRegulatedInfo' => [
            '200.' => 'Amz\\Orders\\Model\\GetOrderRegulatedInfoResponse',
            '400.' => 'Amz\\Orders\\Model\\GetOrderRegulatedInfoResponse',
            '403.' => 'Amz\\Orders\\Model\\GetOrderRegulatedInfoResponse',
            '404.' => 'Amz\\Orders\\Model\\GetOrderRegulatedInfoResponse',
            '429.' => 'Amz\\Orders\\Model\\GetOrderRegulatedInfoResponse',
            '500.' => 'Amz\\Orders\\Model\\GetOrderRegulatedInfoResponse',
            '503.' => 'Amz\\Orders\\Model\\GetOrderRegulatedInfoResponse',
        ],
        'updateVerificationStatus' => [
            '400.' => 'Amz\\Orders\\Model\\UpdateVerificationStatusErrorResponse',
            '403.' => 'Amz\\Orders\\Model\\UpdateVerificationStatusErrorResponse',
            '404.' => 'Amz\\Orders\\Model\\UpdateVerificationStatusErrorResponse',
            '413.' => 'Amz\\Orders\\Model\\UpdateVerificationStatusErrorResponse',
            '415.' => 'Amz\\Orders\\Model\\UpdateVerificationStatusErrorResponse',
            '429.' => 'Amz\\Orders\\Model\\UpdateVerificationStatusErrorResponse',
            '500.' => 'Amz\\Orders\\Model\\UpdateVerificationStatusErrorResponse',
            '503.' => 'Amz\\Orders\\Model\\UpdateVerificationStatusErrorResponse',
        ],
    ];
}
