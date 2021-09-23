<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The workflow status for a shipment with an Amazon-partnered carrier.
 */
class TransportResult extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentInbound\Model\TransportStatus
     */
    public $TransportStatus = null;

    /**
     * An error code that identifies the type of error that occured.
     *
     * @var string
     */
    public $ErrorCode = null;

    /**
     * A message that describes the error condition.
     *
     * @var string
     */
    public $ErrorDescription = null;
}
