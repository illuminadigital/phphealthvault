<?php
namespace com\microsoft\wc\methods\CreateConnectRequest;



/**
 * @XmlEntity	(xml="info")
 */
class Info extends \com\microsoft\wc\request\Info {
	/**
	 * The element of the request that contains the method specific parameters.
	 * All requests contain the info element to pass parameters that are specific to each method. If the method does not define an info element, the method does not take any parameters.
	 */

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="friendly-name")
	 */
	protected $friendlyName;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="question")
	 */
	protected $question;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="answer")
	 */
	protected $answer;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="external-id")
	 */
	protected $externalId;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\Stringnz", name="call-back-url")
	 */
	protected $callBackUrl;

	public function __construct($friendlyName = NULL, $question = NULL, $answer = NULL, $externalId = NULL, $callBackUrl = NULL) {
		$this->friendlyName = ($friendlyName===NULL) ? NULL : $this->validateFriendlyName($friendlyName);
		$this->question = ($question===NULL) ? NULL : $this->validateQuestion($question);
		$this->answer = ($answer===NULL) ? NULL : $this->validateAnswer($answer);
		$this->externalId = ($externalId===NULL) ? NULL : $this->validateExternalId($externalId);
		$this->callBackUrl = ($callBackUrl===NULL) ? NULL : $this->validateCallBackUrl($callBackUrl);
	}

	public function getFriendlyName() {
		if ($this->friendlyName===NULL) {
			$this->friendlyName = $this->createFriendlyName();
		}
		return $this->friendlyName;
	}
	
	protected function createFriendlyName() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setFriendlyName($friendlyName) {
		$this->friendlyName = $this->validateFriendlyName($friendlyName);
	}

	protected function validateFriendlyName($friendlyName) {
		if ( ! $friendlyName instanceof \com\microsoft\wc\types\Stringnz ) {
			$friendlyName = new \com\microsoft\wc\types\Stringnz ($friendlyName);
		}
	
		return $friendlyName;
	}

	public function getQuestion() {
		if ($this->question===NULL) {
			$this->question = $this->createQuestion();
		}
		return $this->question;
	}
	
	protected function createQuestion() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setQuestion($question) {
		$this->question = $this->validateQuestion($question);
	}

	protected function validateQuestion($question) {
		if ( ! $question instanceof \com\microsoft\wc\types\Stringnz ) {
			$question = new \com\microsoft\wc\types\Stringnz ($question);
		}
	
		return $question;
	}

	public function getAnswer() {
		if ($this->answer===NULL) {
			$this->answer = $this->createAnswer();
		}
		return $this->answer;
	}
	
	protected function createAnswer() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setAnswer($answer) {
		$this->answer = $this->validateAnswer($answer);
	}

	protected function validateAnswer($answer) {
		if ( ! $answer instanceof \com\microsoft\wc\types\Stringnz ) {
			$answer = new \com\microsoft\wc\types\Stringnz ($answer);
		}
	
		return $answer;
	}

	public function getExternalId() {
		if ($this->externalId===NULL) {
			$this->externalId = $this->createExternalId();
		}
		return $this->externalId;
	}
	
	protected function createExternalId() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setExternalId($externalId) {
		$this->externalId = $this->validateExternalId($externalId);
	}

	protected function validateExternalId($externalId) {
		if ( ! $externalId instanceof \com\microsoft\wc\types\Stringnz ) {
			$externalId = new \com\microsoft\wc\types\Stringnz ($externalId);
		}
	
		return $externalId;
	}

	public function getCallBackUrl() {
		if ($this->callBackUrl===NULL) {
			$this->callBackUrl = $this->createCallBackUrl();
		}
		return $this->callBackUrl;
	}
	
	protected function createCallBackUrl() {
		return new \com\microsoft\wc\types\Stringnz();
	}

	public function setCallBackUrl($callBackUrl) {
		$this->callBackUrl = $this->validateCallBackUrl($callBackUrl);
	}

	protected function validateCallBackUrl($callBackUrl) {
		if ( ! $callBackUrl instanceof \com\microsoft\wc\types\Stringnz  && ! is_null($callBackUrl) ) {
			$callBackUrl = new \com\microsoft\wc\types\Stringnz ($callBackUrl);
		}
	
		return $callBackUrl;
	}
} // end class Info
