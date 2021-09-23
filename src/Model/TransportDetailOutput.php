<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Inbound shipment information, including carrier details and shipment status.
 */
class TransportDetailOutput extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentInbound\Model\PartneredSmallParcelDataOutput
     */
    public $PartneredSmallParcelData = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\NonPartneredSmallParcelDataOutput
     */
    public $NonPartneredSmallParcelData = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\PartneredLtlDataOutput
     */
    public $PartneredLtlData = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\NonPartneredLtlDataOutput
     */
    public $NonPartneredLtlData = null;
}
