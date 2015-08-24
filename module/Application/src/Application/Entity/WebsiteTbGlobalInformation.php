<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteTbGlobalInformation
 *
 * @ORM\Table(name="website_tb_global_information")
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\WebsiteTbGlobalInformationRepository")
 */
class WebsiteTbGlobalInformation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="glii_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gliiId;

    /**
     * @var string
     *
     * @ORM\Column(name="gliv_company_name", type="string", length=255, nullable=true)
     */
    private $glivCompanyName;

    /**
     * @var string
     *
     * @ORM\Column(name="gliv_default_title", type="string", length=255, nullable=true)
     */
    private $glivDefaultTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="gliv_welcome_message", type="string", length=255, nullable=true)
     */
    private $glivWelcomeMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="gliv_phone_number", type="string", length=50, nullable=true)
     */
    private $glivPhoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="gliv_fax_number", type="string", length=50, nullable=true)
     */
    private $glivFaxNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="glit_address", type="text", nullable=true)
     */
    private $glitAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="gliv_contact_email", type="string", length=255, nullable=true)
     */
    private $glivContactEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="gliv_default_email_sender", type="string", length=255, nullable=true)
     */
    private $glivDefaultEmailSender;

    /**
     * @var string
     *
     * @ORM\Column(name="gliv_default_name_sender", type="string", length=255, nullable=true)
     */
    private $glivDefaultNameSender;

    /**
     * @var string
     *
     * @ORM\Column(name="gliv_company_logo", type="string", length=255, nullable=true)
     */
    private $glivCompanyLogo;



    /**
     * Get gliiId
     *
     * @return integer 
     */
    public function getGliiId()
    {
        return $this->gliiId;
    }

    /**
     * Set glivCompanyName
     *
     * @param string $glivCompanyName
     * @return WebsiteTbGlobalInformation
     */
    public function setGlivCompanyName($glivCompanyName)
    {
        $this->glivCompanyName = $glivCompanyName;

        return $this;
    }

    /**
     * Get glivCompanyName
     *
     * @return string 
     */
    public function getGlivCompanyName()
    {
        return $this->glivCompanyName;
    }

    /**
     * Set glivDefaultTitle
     *
     * @param string $glivDefaultTitle
     * @return WebsiteTbGlobalInformation
     */
    public function setGlivDefaultTitle($glivDefaultTitle)
    {
        $this->glivDefaultTitle = $glivDefaultTitle;

        return $this;
    }

    /**
     * Get glivDefaultTitle
     *
     * @return string 
     */
    public function getGlivDefaultTitle()
    {
        return $this->glivDefaultTitle;
    }

    /**
     * Set glivWelcomeMessage
     *
     * @param string $glivWelcomeMessage
     * @return WebsiteTbGlobalInformation
     */
    public function setGlivWelcomeMessage($glivWelcomeMessage)
    {
        $this->glivWelcomeMessage = $glivWelcomeMessage;

        return $this;
    }

    /**
     * Get glivWelcomeMessage
     *
     * @return string 
     */
    public function getGlivWelcomeMessage()
    {
        return $this->glivWelcomeMessage;
    }

    /**
     * Set glivPhoneNumber
     *
     * @param string $glivPhoneNumber
     * @return WebsiteTbGlobalInformation
     */
    public function setGlivPhoneNumber($glivPhoneNumber)
    {
        $this->glivPhoneNumber = $glivPhoneNumber;

        return $this;
    }

    /**
     * Get glivPhoneNumber
     *
     * @return string 
     */
    public function getGlivPhoneNumber()
    {
        return $this->glivPhoneNumber;
    }

    /**
     * Set glivFaxNumber
     *
     * @param string $glivFaxNumber
     * @return WebsiteTbGlobalInformation
     */
    public function setGlivFaxNumber($glivFaxNumber)
    {
        $this->glivFaxNumber = $glivFaxNumber;

        return $this;
    }

    /**
     * Get glivFaxNumber
     *
     * @return string 
     */
    public function getGlivFaxNumber()
    {
        return $this->glivFaxNumber;
    }

    /**
     * Set glitAddress
     *
     * @param string $glitAddress
     * @return WebsiteTbGlobalInformation
     */
    public function setGlitAddress($glitAddress)
    {
        $this->glitAddress = $glitAddress;

        return $this;
    }

    /**
     * Get glitAddress
     *
     * @return string 
     */
    public function getGlitAddress()
    {
        return $this->glitAddress;
    }

    /**
     * Set glivContactEmail
     *
     * @param string $glivContactEmail
     * @return WebsiteTbGlobalInformation
     */
    public function setGlivContactEmail($glivContactEmail)
    {
        $this->glivContactEmail = $glivContactEmail;

        return $this;
    }

    /**
     * Get glivContactEmail
     *
     * @return string 
     */
    public function getGlivContactEmail()
    {
        return $this->glivContactEmail;
    }

    /**
     * Set glivDefaultEmailSender
     *
     * @param string $glivDefaultEmailSender
     * @return WebsiteTbGlobalInformation
     */
    public function setGlivDefaultEmailSender($glivDefaultEmailSender)
    {
        $this->glivDefaultEmailSender = $glivDefaultEmailSender;

        return $this;
    }

    /**
     * Get glivDefaultEmailSender
     *
     * @return string 
     */
    public function getGlivDefaultEmailSender()
    {
        return $this->glivDefaultEmailSender;
    }

    /**
     * Set glivDefaultNameSender
     *
     * @param string $glivDefaultNameSender
     * @return WebsiteTbGlobalInformation
     */
    public function setGlivDefaultNameSender($glivDefaultNameSender)
    {
        $this->glivDefaultNameSender = $glivDefaultNameSender;

        return $this;
    }

    /**
     * Get glivDefaultNameSender
     *
     * @return string 
     */
    public function getGlivDefaultNameSender()
    {
        return $this->glivDefaultNameSender;
    }

    /**
     * Set glivCompanyLogo
     *
     * @param string $glivCompanyLogo
     * @return WebsiteTbGlobalInformation
     */
    public function setGlivCompanyLogo($glivCompanyLogo)
    {
        $this->glivCompanyLogo = $glivCompanyLogo;

        return $this;
    }

    /**
     * Get glivCompanyLogo
     *
     * @return string 
     */
    public function getGlivCompanyLogo()
    {
        return $this->glivCompanyLogo;
    }
}
