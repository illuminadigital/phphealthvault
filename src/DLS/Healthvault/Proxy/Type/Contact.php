<?php
namespace DLS\Healthvault\Proxy\Type;

use com\microsoft\wc\thing\types\Email as hvEmail;
use com\microsoft\wc\thing\types\Phone as hvPhone;
use com\microsoft\wc\thing\types\Address as hvAddress;

class Contact extends VocabularyType
{
    /**
     * @var DLS\Healthvault\Proxy\Type\Address[]
     */
    protected $address;

    /**
     * @var DLS\Healthvault\Proxy\Type\Phone[]
     */
    protected $phone;

    /**
     * @var DLS\Healthvault\Proxy\Type\Email[]
     */
    protected $email;

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress(array $address)
    {
        $this->address = $address;
        
        return $this;
    }
    
    public function addAddress($address)
    {
        if (is_array($this->address)) {
            foreach ($this->address as $thisAddress) {
                if ($thisAddress == $address) {
                    return;
                }
            }
        }
        
        $this->address[] = $address;
        
        return $this;
    }
    
    public function removeAddress($address) {
        if (is_array($this->address)) {
            foreach ($this->address as $index => $thisAddress) {
                if ($thisAddress == $address) {
                    unset ($this->address[$index]);
                    
                    return TRUE;
                }
            }
        }
        
        return FALSE;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone(array $phone)
    {
        $this->phone = $phone;
        
        return $this;
    }

    public function addPhone($phone)
    {
        if (is_array($this->phone)) {
            foreach ($this->phone as $thisPhone) {
                if ($thisPhone->getNumber() == $phone->getNumber()) {
                    return;
                }
            }
        }
        
        $this->phone[] = $phone;
        
        return $this;
    }
    
    public function removePhone($phone) {
        if (is_array($this->phone)) {
            foreach ($this->phone as $index => $thisPhone) {
                if ($thisPhone->getNumber() == $phone->getNumber()) {
                    unset ($this->phone[$index]);
                    
                    return TRUE;
                }
            }
        }
        
        return FALSE;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(array $email)
    {
        $this->email = $email;
        
        return $this;
    }

    public function addEmail($email)
    {
        if (is_array($this->email)) {
            foreach ($this->email as $index => $thisEmail) {
                if ($thisEmail->getAddress() == $email->getAddress()) {
                    unset ($this->email[$index]);
                    
                    return;
                }
            }
        }
    
        $this->email[] = $email;
    
        return $this;
    }
    
    public function removeEmail($email) {
        if (is_array($this->email)) {
            foreach ($this->email as $thisEmail) {
                if ($thisEmail == $email) {
                    return TRUE;
                }
            }
        }
    
        return FALSE;
    }
    
    
    public function setFromThingElement($thingElement)
    {
        if (empty($thingElement)) {
            return;
        }
        
        $addressEntries = $thingElement->getAddress();

        $newAddresses = array();

        if (is_array($addressEntries)) {
            foreach ($addressEntries as $addressEntry) {
                $newAddresses[] = new Address($addressEntry);
            }
        }

        $this->address = $newAddresses;

        $emailEntries = $thingElement->getAddress();

        $newEmails = array();

        if (is_array($emailEntries)) {
            foreach ($emailEntries as $emailEntry) {
                $newEmails[] = new Address($emailEntry);
            }
        }

        $this->email = $newEmails;

        $phoneEntries = $thingElement->getAddress();

        $newPhones = array();

        if (is_array($phoneEntries)) {
            foreach ($phoneEntries as $phoneEntry) {
                $newPhones[] = new Address($phoneEntry);
            }
        }

        $this->phone = $newPhones;
    }

    public function updateToThingElement($thingElement)
    {
        $newAddresses = NULL;

        if (is_array($this->address)) {
            foreach ($this->address as $addressEntry) {
                if (!$addressEntry->isEmpty()) {
                    $newAddress = new hvAddress();
                    $addressEntry->updateToThingElement($newAddress);
                    $newAddresses[] = $newAddress;
                }
            }
        }

        $thingElement->setAddress($newAddresses);

        $newEmails = NULL;

        if (is_array($this->email)) {
            foreach ($this->email as $emailEntry) {
                if (!$emailEntry->isEmpty()) {
                    $newEmail = new hvEmail();
                    $emailEntry->updateToThingElement($newEmail);
                    $newEmails[] = $newEmail;
                }
            }
        }

        $thingElement->setEmail($newEmails);

        $newPhones = NULL;

        if (is_array($this->phone)) {
            foreach ($this->phone as $phoneEntry) {
                if (!$phoneEntry->isEmpty()) {
                    $newPhone = new hvPhone();
                    $phoneEntry->updateToThingElement($newPhone);
                    $newPhones[] = $newPhone;
                }
            }
        }

        $thingElement->setPhone($newPhones);
    }

    public function isEmpty()
    {
        if (is_array($this->address)) {
            foreach ($this->address as $thisAddress) {
                if (!$thisAddress->isEmpty()) {
                    return FALSE;
                }
            }
        }

        if (is_array($this->phone)) {
            foreach ($this->phone as $thisPhone) {
                if (!$thisPhone->isEmpty()) {
                    return FALSE;
                }
            }
        }

        if (is_array($this->email)) {
            foreach ($this->email as $thisEmail) {
                if (!$thisEmail->isEmpty()) {
                    return FALSE;
                }
            }
        }

        return TRUE;
    }
    
    public function __toString() {
        return 'Contact data';
    }
}
