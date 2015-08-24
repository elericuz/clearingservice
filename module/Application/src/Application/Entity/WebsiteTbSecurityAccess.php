<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteTbSecurityAccess
 *
 * @ORM\Table(name="website_tb_security_access", indexes={@ORM\Index(name="scex_tb_security_access_fk", columns={"seni_id"}), @ORM\Index(name="glen_tb_security_access_fk1", columns={"scri_id"})})
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\WebsiteTbSecurityAccessRepository")
 */
class WebsiteTbSecurityAccess
{
    /**
     * @var integer
     *
     * @ORM\Column(name="scri_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $scriId;

    /**
     * @var integer
     *
     * @ORM\Column(name="smoi_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $smoiId;

    /**
     * @var integer
     *
     * @ORM\Column(name="seni_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $seniId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sacd_created_date", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sacdCreatedDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sacy_status", type="boolean", nullable=false)
     */
    private $sacyStatus = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="saci_created_by", type="integer", nullable=true)
     */
    private $saciCreatedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="sacv_created_ip", type="string", length=17, nullable=true)
     */
    private $sacvCreatedIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="saci_mod_by", type="integer", nullable=true)
     */
    private $saciModBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sacd_mod_date", type="datetime", nullable=true)
     */
    private $sacdModDate;

    /**
     * @var string
     *
     * @ORM\Column(name="sacv_mod_ip", type="string", length=17, nullable=true)
     */
    private $sacvModIp;



    /**
     * Set scriId
     *
     * @param integer $scriId
     * @return WebsiteTbSecurityAccess
     */
    public function setScriId($scriId)
    {
        $this->scriId = $scriId;

        return $this;
    }

    /**
     * Get scriId
     *
     * @return integer 
     */
    public function getScriId()
    {
        return $this->scriId;
    }

    /**
     * Set smoiId
     *
     * @param integer $smoiId
     * @return WebsiteTbSecurityAccess
     */
    public function setSmoiId($smoiId)
    {
        $this->smoiId = $smoiId;

        return $this;
    }

    /**
     * Get smoiId
     *
     * @return integer 
     */
    public function getSmoiId()
    {
        return $this->smoiId;
    }

    /**
     * Set seniId
     *
     * @param integer $seniId
     * @return WebsiteTbSecurityAccess
     */
    public function setSeniId($seniId)
    {
        $this->seniId = $seniId;

        return $this;
    }

    /**
     * Get seniId
     *
     * @return integer 
     */
    public function getSeniId()
    {
        return $this->seniId;
    }

    /**
     * Set sacdCreatedDate
     *
     * @param \DateTime $sacdCreatedDate
     * @return WebsiteTbSecurityAccess
     */
    public function setSacdCreatedDate($sacdCreatedDate)
    {
        $this->sacdCreatedDate = $sacdCreatedDate;

        return $this;
    }

    /**
     * Get sacdCreatedDate
     *
     * @return \DateTime 
     */
    public function getSacdCreatedDate()
    {
        return $this->sacdCreatedDate;
    }

    /**
     * Set sacyStatus
     *
     * @param boolean $sacyStatus
     * @return WebsiteTbSecurityAccess
     */
    public function setSacyStatus($sacyStatus)
    {
        $this->sacyStatus = $sacyStatus;

        return $this;
    }

    /**
     * Get sacyStatus
     *
     * @return boolean 
     */
    public function getSacyStatus()
    {
        return $this->sacyStatus;
    }

    /**
     * Set saciCreatedBy
     *
     * @param integer $saciCreatedBy
     * @return WebsiteTbSecurityAccess
     */
    public function setSaciCreatedBy($saciCreatedBy)
    {
        $this->saciCreatedBy = $saciCreatedBy;

        return $this;
    }

    /**
     * Get saciCreatedBy
     *
     * @return integer 
     */
    public function getSaciCreatedBy()
    {
        return $this->saciCreatedBy;
    }

    /**
     * Set sacvCreatedIp
     *
     * @param string $sacvCreatedIp
     * @return WebsiteTbSecurityAccess
     */
    public function setSacvCreatedIp($sacvCreatedIp)
    {
        $this->sacvCreatedIp = $sacvCreatedIp;

        return $this;
    }

    /**
     * Get sacvCreatedIp
     *
     * @return string 
     */
    public function getSacvCreatedIp()
    {
        return $this->sacvCreatedIp;
    }

    /**
     * Set saciModBy
     *
     * @param integer $saciModBy
     * @return WebsiteTbSecurityAccess
     */
    public function setSaciModBy($saciModBy)
    {
        $this->saciModBy = $saciModBy;

        return $this;
    }

    /**
     * Get saciModBy
     *
     * @return integer 
     */
    public function getSaciModBy()
    {
        return $this->saciModBy;
    }

    /**
     * Set sacdModDate
     *
     * @param \DateTime $sacdModDate
     * @return WebsiteTbSecurityAccess
     */
    public function setSacdModDate($sacdModDate)
    {
        $this->sacdModDate = $sacdModDate;

        return $this;
    }

    /**
     * Get sacdModDate
     *
     * @return \DateTime 
     */
    public function getSacdModDate()
    {
        return $this->sacdModDate;
    }

    /**
     * Set sacvModIp
     *
     * @param string $sacvModIp
     * @return WebsiteTbSecurityAccess
     */
    public function setSacvModIp($sacvModIp)
    {
        $this->sacvModIp = $sacvModIp;

        return $this;
    }

    /**
     * Get sacvModIp
     *
     * @return string 
     */
    public function getSacvModIp()
    {
        return $this->sacvModIp;
    }
}
