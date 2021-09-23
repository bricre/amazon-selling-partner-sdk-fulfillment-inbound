<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getTransportDetails operation.
 */
class GetTransportDetailsResponse extends AbstractModel
{
    /**
     * The payload for the getTransportDetails operation.
     *
     * @var \Amz\FulfillmentInbound\Model\GetTransportDetailsResult
     */
    public $payload = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ErrorList
     */
    public $errors = null;
}
