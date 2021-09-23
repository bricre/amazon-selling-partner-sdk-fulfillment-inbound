<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class BillOfLadingDownloadURL extends AbstractModel
{
    /**
     * URL to download the bill of lading for the package. Note: The URL will only be
     * valid for 15 seconds.
     *
     * @var string
     */
    public $DownloadURL = null;
}
