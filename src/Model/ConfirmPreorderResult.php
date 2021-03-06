<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ConfirmPreorderResult extends AbstractModel
{
    /**
     * Date passed in with the NeedByDate parameter. The confirmed shipment must arrive
     * at the Amazon fulfillment center by this date to avoid delivery promise breaks
     * for pre-ordered items. In YYYY-MM-DD format.
     *
     * @var \Amz\FulfillmentInbound\Model\DateStringType
     */
    public $ConfirmedNeedByDate = null;

    /**
     * Date that determines which pre-order items in the shipment are eligible for
     * pre-order. The pre-order Buy Box will appear for any pre-order item in the
     * shipment with a release date on or after this date. In YYYY-MM-DD format.
     *
     * @var \Amz\FulfillmentInbound\Model\DateStringType
     */
    public $ConfirmedFulfillableDate = null;
}
