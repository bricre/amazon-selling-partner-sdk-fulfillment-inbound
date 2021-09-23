<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getBillOfLading operation.
 */
class GetBillOfLadingResponse extends AbstractModel
{
    /**
     * The payload for the getBillOfLading operation.
     *
     * @var \Amz\FulfillmentInbound\Model\BillOfLadingDownloadURL
     */
    public $payload = null;

    /**
     * @var \Amz\FulfillmentInbound\Model\ErrorList
     */
    public $errors = null;
}
