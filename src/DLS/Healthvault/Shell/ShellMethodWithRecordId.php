<?php
namespace DLS\Healthvault\Shell;

class ShellMethodWithRecordId extends ShellMethodWithAppId
{
    protected $externalRecordId;

    public function getTargetqsParameter()
    {
        parent::getTargetqsParameter();

        $this->addOptionalParameters(array(
                'extrecordid' => 'externalRecordId',
        ));

        return $this->targetqsParameter;
    }

    public function setExternalRecordId($recordId)
    {
        $this->externalRecordId = $recordId;

        return $this;
    }
}
