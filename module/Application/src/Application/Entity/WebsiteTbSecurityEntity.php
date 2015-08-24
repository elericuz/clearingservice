<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteTbSecurityEntity
 *
 * @ORM\Table(name="website_tb_security_entity", indexes={@ORM\Index(name="scex_tb_security_entity_fk", columns={"seti_id"})})
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\WebsiteTbSecurityEntityRepository")
 */
class WebsiteTbSecurityEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="seni_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seniId;

    /**
     * @var integer
     *
     * @ORM\Column(name="seti_id", type="integer", nullable=true)
     */
    private $setiId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="seny_status", type="boolean", nullable=false)
     */
    private $senyStatus = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="seni_created_by", type="integer", nullable=true)
     */
    private $seniCreatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="send_created_date", type="datetime", nullable=false)
     */
    private $sendCreatedDate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="senv_created_ip", type="string", length=17, nullable=true)
     */
    private $senvCreatedIp = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="seni_mod_by", type="integer", nullable=true)
     */
    private $seniModBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="send_mod_date", type="datetime", nullable=false)
     */
    private $sendModDate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="senv_mod_ip", type="string", length=17, nullable=true)
     */
    private $senvModIp = '';



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
     * Set setiId
     *
     * @param integer $setiId
     * @return WebsiteTbSecurityEntity
     */
    public function setSetiId($setiId)
    {
        $this->setiId = $setiId;

        return $this;
    }

    /**
     * Get setiId
     *
     * @return integer 
     */
    public function getSetiId()
    {
        return $this->setiId;
    }

    /**
     * Set senyStatus
     *
     * @param boolean $senyStatus
     * @return WebsiteTbSecurityEntity
     */
    public function setSenyStatus($senyStatus)
    {
        $this->senyStatus = $senyStatus;

        return $this;
    }

    /**
     * Get senyStatus
     *
     * @return boolean 
     */
    public function getSenyStatus()
    {
        return $this->senyStatus;
    }

    /**
     * Set seniCreatedBy
     *
     * @param integer $seniCreatedBy
     * @return WebsiteTbSecurityEntity
     */
    public function setSeniCreatedBy($seniCreatedBy)
    {
        $this->seniCreatedBy = $seniCreatedBy;

        return $this;
    }

    /**
     * Get seniCreatedBy
     *
     * @return integer 
     */
    public function getSeniCreatedBy()
    {
        return $this->seniCreatedBy;
    }

    /**
     * Set sendCreatedDate
     *
     * @param \DateTime $sendCreatedDate
     * @return WebsiteTbSecurityEntity
     */
    public function setSendCreatedDate($sendCreatedDate)
    {
        $this->sendCreatedDate = $sendCreatedDate;

        return $this;
    }

    /**
     * Get sendCreatedDate
     *
     * @return \DateTime 
     */
    public function getSendCreatedDate()
    {
        return $this->sendCreatedDate;
    }

    /**
     * Set senvCreatedIp
     *
     * @param string $senvCreatedIp
     * @return WebsiteTbSecurityEntity
     */
    public function setSenvCreatedIp($senvCreatedIp)
    {
        $this->senvCreatedIp = $senvCreatedIp;

        return $this;
    }

    /**
     * Get senvCreatedIp
     *
     * @return string 
     */
    public function getSenvCreatedIp()
    {
        return $this->senvCreatedIp;
    }

    /**
     * Set seniModBy
     *
     * @param integer $seniModBy
     * @return WebsiteTbSecurityEntity
     */
    public function setSeniModBy($seniModBy)
    {
        $this->seniModBy = $seniModBy;

        return $this;
    }

    /**
     * Get seniModBy
     *
     * @return integer 
     */
    public function getSeniModBy()
    {
        return $this->seniModBy;
    }

    /**
     * Set sendModDate
     *
     * @param \DateTime $sendModDate
     * @return WebsiteTbSecurityEntity
     */
    public function setSendModDate($sendModDate)
    {
        $this->sendModDate = $sendModDate;

        return $this;
    }

    /**
     * Get sendModDate
     *
     * @return \DateTime 
     */
    public function getSendModDate()
    {
        return $this->sendModDate;
    }

    /**
     * Set senvModIp
     *
     * @param string $senvModIp
     * @return WebsiteTbSecurityEntity
     */
    public function setSenvModIp($senvModIp)
    {
        $this->senvModIp = $senvModIp;

        return $this;
    }

    /**
     * Get senvModIp
     *
     * @return string 
     */
    public function getSenvModIp()
    {
        return $this->senvModIp;
    }
}
