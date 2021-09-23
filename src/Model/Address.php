<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class Address extends AbstractModel
{
    /**
     * Name of the individual or business.
     *
     * @var string
     */
    public $Name = null;

    /**
     * The street address information.
     *
     * @var string
     */
    public $AddressLine1 = null;

    /**
     * Additional street address information, if required.
     *
     * @var string
     */
    public $AddressLine2 = null;

    /**
     * The district or county.
     *
     * @var string
     */
    public $DistrictOrCounty = null;

    /**
     * The city.
     *
     * @var string
     */
    public $City = null;

    /**
     * The state or province code.
     *
     * If state or province codes are used in your marketplace, it is recommended that
     * you include one with your request. This helps Amazon to select the most
     * appropriate Amazon fulfillment center for your inbound shipment plan.
     *
     * @var string
     */
    public $StateOrProvinceCode = null;

    /**
     * The country code in two-character ISO 3166-1 alpha-2 format.
     *
     * @var string
     */
    public $CountryCode = null;

    /**
     * The postal code.
     *
     * If postal codes are used in your marketplace, we recommended that you include
     * one with your request. This helps Amazon select the most appropriate Amazon
     * fulfillment center for the inbound shipment plan.
     *
     * @var string
     */
    public $PostalCode = null;
}
