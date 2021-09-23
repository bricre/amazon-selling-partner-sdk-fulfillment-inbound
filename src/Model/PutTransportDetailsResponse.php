<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Workflow status for a shipment with an Amazon-partnered carrier.
 */
class PutTransportDetailsResponse extends AbstractModel
{
    /**
     * The payload for the putTransportDetails operation.
     *
     * @var \Amz\FulfillmentInbound\Model\CommonTransportResult
     */
    public $payload = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ErrorList
     */
    public $errors = null;
}
