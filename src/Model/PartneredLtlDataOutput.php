<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information returned by Amazon about a Less Than Truckload/Full Truckload
 * (LTL/FTL) shipment by an Amazon-partnered carrier.
 */
class PartneredLtlDataOutput extends AbstractModel
{
    /**
     * Contact information for the person in the seller's organization who is
     * responsible for the shipment. Used by the carrier if they have questions about
     * the shipment.
     *
     * @var \Amz\FulfillmentInbound\Model\Contact
     */
    public $Contact = null;

    /**
     * The number of boxes in the shipment.
     *
     * @var \Amz\FulfillmentInbound\Model\UnsignedIntType
     */
    public $BoxCount = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\SellerFreightClass
     */
    public $SellerFreightClass = null;

    /**
     * The date that the shipment will be ready to be picked up by the carrier. Must be
     * in YYYY-MM-DD format.
     *
     * @var \Amz\FulfillmentInbound\Model\DateStringType
     */
    public $FreightReadyDate = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\PalletList
     */
    public $PalletList = null;

    /**
     * The total weight of the shipment.
     *
     * @var \Amz\FulfillmentInbound\Model\Weight
     */
    public $TotalWeight = null;

    /**
     * Your declaration of the total value of the inventory in the shipment.
     *
     * @var \Amz\FulfillmentInbound\Model\Amount
     */
    public $SellerDeclaredValue = null;

    /**
     * Estimate by Amazon of the total value of the inventory in the shipment.
     *
     * @var \Amz\FulfillmentInbound\Model\Amount
     */
    public $AmazonCalculatedValue = null;

    /**
     * The estimated date that the shipment will be picked up by the carrier, in
     * YYYY-MM-DD format.
     *
     * @var \Amz\FulfillmentInbound\Model\DateStringType
     */
    public $PreviewPickupDate = null;

    /**
     * The estimated date that the shipment will be delivered to an Amazon fulfillment
     * center, in YYYY-MM-DD format.
     *
     * @var \Amz\FulfillmentInbound\Model\DateStringType
     */
    public $PreviewDeliveryDate = null;

    /**
     * The freight class of the shipment as estimated by Amazon if you did not include
     * a freight class when you called the putTransportDetails operation.
     *
     * @var \Amz\FulfillmentInbound\Model\SellerFreightClass
     */
    public $PreviewFreightClass = null;

    /**
     * A unique identifier created by Amazon that identifies this Amazon-partnered,
     * Less Than Truckload/Full Truckload (LTL/FTL) shipment.
     *
     * @var string
     */
    public $AmazonReferenceId = null;

    /**
     * Indicates whether the bill of lading for the shipment is available.
     *
     * @var bool
     */
    public $IsBillOfLadingAvailable = null;

    /**
     * The estimated shipping cost using an Amazon-partnered carrier.
     *
     * @var \Amz\FulfillmentInbound\Model\PartneredEstimate
     */
    public $PartneredEstimate = null;

    /**
     * The carrier for the inbound shipment.
     *
     * @var string
     */
    public $CarrierName = null;
}
