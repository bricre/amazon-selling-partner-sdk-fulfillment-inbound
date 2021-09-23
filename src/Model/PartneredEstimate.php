<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The estimated shipping cost for a shipment using an Amazon-partnered carrier.
 */
class PartneredEstimate extends AbstractModel
{
    /**
     * The amount that the Amazon-partnered carrier will charge to ship the inbound
     * shipment.
     *
     * @var \Amz\FulfillmentInbound\Model\Amount
     */
    public $Amount = null;

    /**
     * The date in ISO 8601 date time format by which this estimate must be confirmed.
     * After this date the estimate is no longer valid and cannot be confirmed.
     *
     * Returned only if the TransportStatus value of the inbound shipment is ESTIMATED.
     *
     * @var \Amz\FulfillmentInbound\Model\TimeStampStringType
     */
    public $ConfirmDeadline = null;

    /**
     * The date in ISO 8601 date time format after which a confirmed transportation
     * request can no longer be voided. This date is 24 hours after a Small Parcel
     * shipment transportation request is confirmed or one hour after a Less Than
     * Truckload/Full Truckload (LTL/FTL) shipment transportation request is confirmed.
     * After the void deadline passes the seller's account will be charged for the
     * shipping cost.
     *
     * Returned only if the TransportStatus value of the inbound shipment is CONFIRMED.
     *
     * @var \Amz\FulfillmentInbound\Model\TimeStampStringType
     */
    public $VoidDeadline = null;
}
