<?php
namespace DLS\Healthvault\Proxy\Type;

use DLS\Healthvault\Utilities\DateTimeUtils;

class DurationValue extends BaseType
{

    /**
     * Start date date for the target
     *
     * @Assert\DateTime()
     * @var DateTime
     */
    protected $startDate;

    /**
     * End date date for the target
     *
     * @Assert\DateTime()
     * @var DateTime
     */
    protected $endDate;

    /**
     * @return the DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate($startDate)
    {
        if ( ! $startDate instanceof \DateTime )
        {

            $startDate = new \DateTime($startDate);

        }

        $this->startDate = $startDate;
    }

    /**
     * @return the DateTime
     */
    public function getEndDate()
    {

        return $this->endDate;

    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate($endDate)
    {

        if ( $endDate !== NULL && ! $endDate instanceof \DateTime ) {

            $endDate = new \DateTime($endDate);

        }

        $this->endDate = $endDate;

    }

    public function setFromThingElement($thingElement)
    {

        if (empty($thingElement)) {

            return;

        }

        $this->startDate = DateTimeUtils::getThingApproxDateTime($thingElement->getStartDate(FALSE));

        $this->endDate = DateTimeUtils::getThingApproxDateTime($thingElement->getEndDate(FALSE));

    }

    public function updateToThingElement($thingElement)
    {

        if ( isset($this->startDate)) {

            DateTimeUtils::setThingApproxDateTime($thingElement->getStartDate(), $this->startDate);

        }

        if ( isset($this->endDate) ) {

            DateTimeUtils::setThingApproxDateTime($thingElement->getEndDate(), $this->endDate);

        } else {

            $thingElement->setEndDate(NULL);

        }

    }

    public function __toString(){

        $duration = $this->startDate->format('d/m/Y H:i');

        if( ! empty($this->endDate) ){

            $duration.= $this->endDate->format('d/m/Y H:i');

        }

        return $duration;

    }

}