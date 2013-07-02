<?php
namespace DLS\Healthvault\Shell;

/**
 * Include the External Record ID in the method request
 * 
 * @author Alistair MacDonald <alistair.macdonald@digitallifesciences.co.uk>
 *
 */
class ShellMethodWithRecordId extends ShellMethodWithAppId
{
    protected $externalRecordId;

    public function getTargetqsParameter()
    {
        parent::getTargetqsParameter();

        // The parameter is not always required
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
