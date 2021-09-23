<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Inbound shipment information, including carrier details, shipment status, and
 * the workflow status for a request for shipment with an Amazon-partnered carrier.
 */
class TransportContent extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentInbound\Model\TransportHeader
     */
    public $TransportHeader = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\TransportDetailOutput
     */
    public $TransportDetails = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\TransportResult
     */
    public $TransportResult = null;
}
