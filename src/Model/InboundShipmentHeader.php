<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Inbound shipment information used to create and update inbound shipments.
 */
class InboundShipmentHeader extends AbstractModel
{
    /**
     * The name for the shipment. Use a naming convention that helps distinguish
     * between shipments over time, such as the date the shipment was created.
     *
     * @var string
     */
    public $ShipmentName = null;

    /**
     * The return address.
     *
     * @var \Amz\FulfillmentInbound\Model\Address
     */
    public $ShipFromAddress = null;

    /**
     * The identifier for the fulfillment center to which the shipment will be shipped.
     * Get this value from the InboundShipmentPlan object in the response returned by
     * the createInboundShipmentPlan operation.
     *
     * @var string
     */
    public $DestinationFulfillmentCenterId = null;

    /**
     * Indicates whether or not an inbound shipment contains case-packed boxes. Note: A
     * shipment must contain either all case-packed boxes or all individually packed
     * boxes.
     *
     * Possible values:
     *
     * true - All boxes in the shipment must be case packed.
     *
     * false - All boxes in the shipment must be individually packed.
     *
     * Note: If AreCasesRequired = true for an inbound shipment, then the value of
     * QuantityInCase must be greater than zero for every item in the shipment.
     * Otherwise the service returns an error.
     *
     * @var bool
     */
    public $AreCasesRequired = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ShipmentStatus
     */
    public $ShipmentStatus = null;

    /**
     * The preference for label preparation for an inbound shipment.
     *
     * @var \Amz\FulfillmentInbound\Model\LabelPrepPreference
     */
    public $LabelPrepPreference = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\IntendedBoxContentsSource
     */
    public $IntendedBoxContentsSource = null;
}
