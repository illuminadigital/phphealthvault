<?php
namespace com\microsoft\wc\thing\application;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.application", prefix="")
 * })
 * @XmlEntity	(xml="app-specific")
 */
class AppSpecific extends \com\microsoft\wc\thing\Thing {
	/**
	 * Application specific data in XML form.
	 * An application can define any arbitrary XMLas it's data. It may or may not adhere toa published schema.
	 */

	const ID = 'a5033c9d-08cf-4204-9bd3-cb412ce39fc0';
	const NAME = 'Application-Specific Information';

	/**
	 * @XmlText	(type="string", name="format-appid")
	 */
	protected $formatAppid;

	/**
	 * @XmlText	(type="string", name="format-tag")
	 */
	protected $formatTag;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlText	(type="string", name="summary")
	 */
	protected $summary;

	public function __construct($formatAppid = NULL, $formatTag = NULL, $when = NULL, $summary = NULL) {
		$this->formatAppid = ($formatAppid===NULL) ? NULL : $this->validateFormatAppid($formatAppid);
		$this->formatTag = ($formatTag===NULL) ? NULL : $this->validateFormatTag($formatTag);
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->summary = ($summary===NULL) ? NULL : $this->validateSummary($summary);
	}

	public function getFormatAppid() {
		if ($this->formatAppid===NULL) {
			$this->formatAppid = $this->createFormatAppid();
		}
		return $this->formatAppid;
	}
	
	protected function createFormatAppid() {
		return '';
	}

	public function setFormatAppid($formatAppid) {
		$this->formatAppid = $this->validateFormatAppid($formatAppid);
	}

	protected function validateFormatAppid($formatAppid) {
		if (!is_string($formatAppid)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'formatAppid', 'string'));
		}
	
		return $formatAppid;
	}

	public function getFormatTag() {
		if ($this->formatTag===NULL) {
			$this->formatTag = $this->createFormatTag();
		}
		return $this->formatTag;
	}
	
	protected function createFormatTag() {
		return '';
	}

	public function setFormatTag($formatTag) {
		$this->formatTag = $this->validateFormatTag($formatTag);
	}

	protected function validateFormatTag($formatTag) {
		if (!is_string($formatTag)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'formatTag', 'string'));
		}
	
		return $formatTag;
	}

	public function getWhen() {
		if ($this->when===NULL) {
			$this->when = $this->createWhen();
		}
		return $this->when;
	}
	
	protected function createWhen() {
		return new \com\microsoft\wc\dates\DateTime();
	}

	public function setWhen($when) {
		$this->when = $this->validateWhen($when);
	}

	protected function validateWhen($when) {
		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime  && ! is_null($when) ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}
	
		return $when;
	}

	public function getSummary() {
		if ($this->summary===NULL) {
			$this->summary = $this->createSummary();
		}
		return $this->summary;
	}
	
	protected function createSummary() {
		return '';
	}

	public function setSummary($summary) {
		$this->summary = $this->validateSummary($summary);
	}

	protected function validateSummary($summary) {
		if (!is_string($summary)) {
			throw new \Exception(sprintf('Supplied %s value was not %s', 'summary', 'string'));
		}
	
		return $summary;
	}
} // end class AppSpecific
