<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the estimateTransport operation.
 */
class EstimateTransportResponse extends AbstractModel
{
    /**
     * The payload for the estimateTransport operation.
     *
     * @var \Amz\FulfillmentInbound\Model\CommonTransportResult
     */
    public $payload = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ErrorList
     */
    public $errors = null;
}
