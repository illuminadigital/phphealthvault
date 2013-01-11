<?php
namespace DLS\Healthvault\Shell;

class CreateRecordMethod extends AuthMethod
{
    protected $allowTokenRedirect = FALSE;
    protected $allowOptionalRules = TRUE;
    
    protected $methodName = 'CreateRecord';
}
