<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for the createInboundShipmentPlan operation.
 */
class CreateInboundShipmentPlanRequest extends AbstractModel
{
    /**
     * The address from which the inbound shipment will be sent.
     *
     * @var \Amz\FulfillmentInbound\Model\Address
     */
    public $ShipFromAddress = null;

    /**
     * The seller's preference for label preparation for an inbound shipment.
     *
     * @var \Amz\FulfillmentInbound\Model\LabelPrepPreference
     */
    public $LabelPrepPreference = null;

    /**
     * The two-character country code for the country where the inbound shipment is to
     * be sent.
     *
     * Note: Not required. Specifying both ShipToCountryCode and
     * ShipToCountrySubdivisionCode returns an error.
     *
     *  Values:
     *
     *  ShipToCountryCode values for North America:
     *  * CA – Canada
     *  * MX - Mexico
     *  * US - United States
     *
     * ShipToCountryCode values for MCI sellers in Europe:
     *  * DE – Germany
     *  * ES – Spain
     *  * FR – France
     *  * GB – United Kingdom
     *  * IT – Italy
     *
     * Default: The country code for the seller's home marketplace.
     *
     * @var string
     */
    public $ShipToCountryCode = null;

    /**
     * The two-character country code, followed by a dash and then up to three
     * characters that represent the subdivision of the country where the inbound
     * shipment is to be sent. For example, "IN-MH". In full ISO 3166-2 format.
     *
     * Note: Not required. Specifying both ShipToCountryCode and
     * ShipToCountrySubdivisionCode returns an error.
     *
     * @var string
     */
    public $ShipToCountrySubdivisionCode = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\InboundShipmentPlanRequestItemList
     */
    public $InboundShipmentPlanRequestItems = null;
}
