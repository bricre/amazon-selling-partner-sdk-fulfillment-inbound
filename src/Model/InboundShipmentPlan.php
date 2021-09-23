<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Inbound shipment information used to create an inbound shipment. Returned by the
 * createInboundShipmentPlan operation.
 */
class InboundShipmentPlan extends AbstractModel
{
    /**
     * A shipment identifier originally returned by the createInboundShipmentPlan
     * operation.
     *
     * @var string
     */
    public $ShipmentId = null;

    /**
     * An Amazon fulfillment center identifier created by Amazon.
     *
     * @var string
     */
    public $DestinationFulfillmentCenterId = null;

    /**
     * The address of the Amazon fulfillment center to which to ship the items.
     *
     * @var \Amz\FulfillmentInbound\Model\Address
     */
    public $ShipToAddress = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\LabelPrepType
     */
    public $LabelPrepType = null;

    /**
     * SKU and quantity information for the items in the shipment.
     *
     * @var \Amz\FulfillmentInbound\Model\InboundShipmentPlanItemList
     */
    public $Items = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\BoxContentsFeeDetails
     */
    public $EstimatedBoxContentsFee = null;
}
