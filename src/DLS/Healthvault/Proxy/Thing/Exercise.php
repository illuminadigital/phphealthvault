<?php
namespace DLS\Healthvault\Proxy\Thing;

use DLS\Healthvault\Proxy\Type\LongLengthValue;
use DLS\Healthvault\Proxy\Type\CodableValue;

use DLS\Healthvault\Utilities\VocabularyInterface;

use Symfony\Component\Validator\Constraints as Assert;
#use Illumina\Phphealthvaultbundle\Validator\Constraints as Validate;

use com\microsoft\wc\thing\exercise\Exercise as hvExercise;

use com\microsoft\wc\thing\Thing2;

class Exercise extends ApproxWhenThing {
	protected $thingType = 'Exercise';

	/**
	 * The type of activity
	 * 
	 * @Assert\NotBlank()
	 * 
	 * @var \DLS\Healthvault\Proxy\Type\CodableValue
	 */
	/*
	 * @Validate\InHealthvaultVocabulary("exercise-activities", "aerobic-activities")
	 */
	protected $activity;

	/**
	 * A descriptive title
	 * 
	 * @var string
	 */
	protected $title;

	/**
	 * The distance covered
	 * 
	 * @var \DLS\Healthvault\Proxy\Type\LongLengthValue
	 */
	protected $distance;

	/**
	 * The duration in minutes
	 * 
	 * @Assert\Type("double")
	 * 
	 * @var double
	 */
	protected $duration;

	
	public function __construct(Thing2 $thing = NULL,
            VocabularyInterface $healthvaultVocabulary = NULL)
    {
		$this->distance = new LongLengthValue();
        $this->activity = new CodableValue(array('exercise-activities', 'aerobic-activities'));
        
		parent::__construct($thing, $healthvaultVocabulary);
    }

	/* Public getters/setters */
	
	public function getActivity() {
		return $this->activity;
	}

	public function setActivity($activity) {
		$this->activity = $activity;
		
		return $this;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
		
		return $this;
	}

	public function getDuration() {
		return $this->duration;
	}

	public function setDuration($duration) {
		$this->duration = $duration;
		
		return $this;
	}
	
	public function getDistance() {
		return $this->distance;
	}
	
	public function setDistance(LengthValue $distance) {
		$this->distance = $distance;
	}
	
	
	public function setThing(Thing2 $thing) {
		$result = parent::setThing($thing);
		
		if ( ! $result )
		{
			return $result;
		}
		
		$payload = $this->getThingPayload();
		
		$this->title = $payload->getTitle();
		$this->duration = $payload->getDuration()->getValue();
		$this->distance->setFromThingElement($payload->getDistance());
		$this->activity->setFromThingElement($payload->getActivity());
		
		return $result;
	}
	
	public function getThing(Thing2 $thing = NULL) {
		$thing = parent::getThing($thing);
		
		$this->setThingTitle($this->title);
		$this->setThingDuration($this->duration);
		
		$payload = $this->getThingPayload();
		
		$distance = $payload->getDistance();
		$this->distance->updateToThingElement($distance);
		$payload->setDistance($distance);
		
		$activity = $payload->getActivity();
		$this->activity->updateToThingElement($activity);
		$payload->setActivity($activity);
		
		return $thing;
	}
	
	public function setThingTitle($title) {
		$payload = $this->getThingPayload();
		
		$payload->setTitle($title);
		
		return $this;
	}
	
	public function setThingDuration($duration) {
		$payload = $this->getThingPayload();
		
		if ( ! empty($duration) ) {
    		$payload->getDuration()->setValue($duration);
		} else {
		    $payload->setDuration(NULL);
		}
		
		return $this;
	}
	
	public static function reallySupports(Thing2 $thing) {
		return ($thing->getTypeId()->getValue() == hvExercise::ID);
	}
	
	protected function getNewDataXmlContent() {
		return new hvExercise();
	}
	
	public static function getDisplayFields() {
		return array(
			'when' => 'Date',
			'activity' => 'Activity',
			'title' => 'Title',
			'duration' => 'Duration',
			'distance' => 'Distance',
		);
	}
}
