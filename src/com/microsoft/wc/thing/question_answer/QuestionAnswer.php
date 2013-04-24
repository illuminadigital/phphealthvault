<?php
namespace com\microsoft\wc\thing\question_answer;



/**
 * @XmlNamespaces ({
 *	@XmlNamespace(url="urn:com.microsoft.wc.thing.question-answer", prefix="")
 * })
 * @XmlEntity	(xml="question-answer")
 */
class QuestionAnswer extends \com\microsoft\wc\thing\AnyMixed {
	/**
	 * A question that was asked and the answers given.
	 */

	const ID = '55d33791-58de-4cae-8c78-819e12ba5059';
	const NAME = 'Question Answer';

	/**
	 * List of manually overridden properties that should not be re-generated automatically
	 * @var array
	 */
	protected $_overrides = array();


	/**
	 * @XmlElement	(type="\com\microsoft\wc\dates\DateTime", name="when")
	 */
	protected $when;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", name="question")
	 */
	protected $question;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", collection="true", name="answer-choice")
	 */
	protected $answerChoice;

	/**
	 * @XmlElement	(type="\com\microsoft\wc\types\CodableValue", collection="true", name="answer")
	 */
	protected $answer;

	public function __construct($when = NULL, $question = NULL, $answerChoice = NULL, $answer = NULL) {
		$this->when = ($when===NULL) ? NULL : $this->validateWhen($when);
		$this->question = ($question===NULL) ? NULL : $this->validateQuestion($question);
		$this->answerChoice = ($answerChoice===NULL) ? NULL : $this->validateAnswerChoice($answerChoice);
		$this->answer = ($answer===NULL) ? NULL : $this->validateAnswer($answer);
	}

	public function getWhen($autoCreate = TRUE) {
		if ($this->when===NULL && $autoCreate && ! isset($this->_overrides['when']) ) {
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
		if ( ! $when instanceof \com\microsoft\wc\dates\DateTime ) {
			$when = new \com\microsoft\wc\dates\DateTime ($when);
		}
	
		return $when;
	}

	public function getQuestion($autoCreate = TRUE) {
		if ($this->question===NULL && $autoCreate && ! isset($this->_overrides['question']) ) {
			$this->question = $this->createQuestion();
		}
		return $this->question;
	}
	
	protected function createQuestion() {
		return new \com\microsoft\wc\types\CodableValue();
	}

	public function setQuestion($question) {
		$this->question = $this->validateQuestion($question);
	}

	protected function validateQuestion($question) {
		if ( ! $question instanceof \com\microsoft\wc\types\CodableValue ) {
			$question = new \com\microsoft\wc\types\CodableValue ($question);
		}
	
		return $question;
	}

	public function getAnswerChoice($autoCreate = TRUE) {
		if ($this->answerChoice===NULL && $autoCreate && ! isset($this->_overrides['answerChoice']) ) {
			$this->answerChoice = $this->createAnswerChoice();
		}
		return $this->answerChoice;
	}
	
	protected function createAnswerChoice() {
		return array();
	}

	public function setAnswerChoice($answerChoice) {
		$this->answerChoice = $this->validateAnswerChoice($answerChoice);
	}

	protected function validateAnswerChoice($answerChoice) {
		if ( $answerChoice === FALSE ) {
			$this->_overrides['answerChoice'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($answerChoice) && ! is_null($answerChoice) ) {
			$answerChoice = array($answerChoice);
		}

		unset ($this->_overrides['answerChoice']);
		$count = count($answerChoice);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'answerChoice', 0));
		}
		if ( ! empty($answerChoice) ) {
			foreach ($answerChoice as $entry) {
				if (!($entry instanceof CodableValue)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'answerChoice', 'codable-value'));
				}
			}
		}
	
		return $answerChoice;
	}

	public function addAnswerChoice($answerChoice) {
		$this->answerChoice[] = $answerChoice;
	}

	public function getAnswer($autoCreate = TRUE) {
		if ($this->answer===NULL && $autoCreate && ! isset($this->_overrides['answer']) ) {
			$this->answer = $this->createAnswer();
		}
		return $this->answer;
	}
	
	protected function createAnswer() {
		return array();
	}

	public function setAnswer($answer) {
		$this->answer = $this->validateAnswer($answer);
	}

	protected function validateAnswer($answer) {
		if ( $answer === FALSE ) {
			$this->_overrides['answer'] = TRUE;
			return NULL;
		}

		if ( ! is_array ($answer) && ! is_null($answer) ) {
			$answer = array($answer);
		}

		unset ($this->_overrides['answer']);
		$count = count($answer);
		if ($count < 0) {
			throw new \Exception(sprintf('Supplied %s array has less than the required number (%d) of entries.', 'answer', 0));
		}
		if ( ! empty($answer) ) {
			foreach ($answer as $entry) {
				if (!($entry instanceof CodableValue)) {
					throw new \Exception(sprintf('Supplied %s value was not %s', 'answer', 'codable-value'));
				}
			}
		}
	
		return $answer;
	}

	public function addAnswer($answer) {
		$this->answer[] = $answer;
	}
} // end class QuestionAnswer
