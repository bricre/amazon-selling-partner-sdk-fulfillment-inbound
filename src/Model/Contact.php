<?php

namespace Amz\FulfillmentInbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Contact information for the person in the seller's organization who is
 * responsible for a Less Than Truckload/Full Truckload (LTL/FTL) shipment.
 */
class Contact extends AbstractModel
{
    /**
     * The name of the contact person.
     *
     * @var string
     */
    public $Name = null;

    /**
     * The phone number of the contact person.
     *
     * @var string
     */
    public $Phone = null;

    /**
     * The email address of the contact person.
     *
     * @var string
     */
    public $Email = null;

    /**
     * The fax number of the contact person.
     *
     * @var string
     */
    public $Fax = null;
}
