<?php
namespace com\microsoft\wc\methods\CreateConnectRequest;

use com\microsoft\wc\types\Stringnz;

/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.methods.CreateConnectRequest", prefix="")
 * })
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
		return new Stringnz();
	}

	public function setFriendlyName($friendlyName) {
		$this->friendlyName = $this->validateFriendlyName($friendlyName);
	}

	protected function validateFriendlyName($friendlyName) {
		if ( ! $friendlyName instanceof Stringnz ) {
			$friendlyName = new Stringnz ($friendlyName);
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
		return new Stringnz();
	}

	public function setQuestion($question) {
		$this->question = $this->validateQuestion($question);
	}

	protected function validateQuestion($question) {
		if ( ! $question instanceof Stringnz ) {
			$question = new Stringnz ($question);
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
		return new Stringnz();
	}

	public function setAnswer($answer) {
		$this->answer = $this->validateAnswer($answer);
	}

	protected function validateAnswer($answer) {
		if ( ! $answer instanceof Stringnz ) {
			$answer = new Stringnz ($answer);
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
		return new Stringnz();
	}

	public function setExternalId($externalId) {
		$this->externalId = $this->validateExternalId($externalId);
	}

	protected function validateExternalId($externalId) {
		if ( ! $externalId instanceof Stringnz ) {
			$externalId = new Stringnz ($externalId);
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
		return new Stringnz();
	}

	public function setCallBackUrl($callBackUrl) {
		$this->callBackUrl = $this->validateCallBackUrl($callBackUrl);
	}

	protected function validateCallBackUrl($callBackUrl) {
		if ( ! $callBackUrl instanceof Stringnz ) {
			$callBackUrl = new Stringnz ($callBackUrl);
		}
	
		return $callBackUrl;
	}
} // end class Info
