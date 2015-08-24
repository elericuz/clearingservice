<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteTbSecurityEntityHierachy
 *
 * @ORM\Table(name="website_tb_security_entity_hierachy", indexes={@ORM\Index(name="scex_tb_security_entity_hierachy_fk", columns={"seni_id"})})
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\WebsiteTbSecurityEntityHierachyRepository")
 */
class WebsiteTbSecurityEntityHierachy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sehi_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sehiId;

    /**
     * @var integer
     *
     * @ORM\Column(name="seni_id", type="integer", nullable=true)
     */
    private $seniId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="seni_father_id", type="integer", nullable=true)
     */
    private $seniFatherId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sehy_status", type="boolean", nullable=false)
     */
    private $sehyStatus = '1';



    /**
     * Get sehiId
     *
     * @return integer 
     */
    public function getSehiId()
    {
        return $this->sehiId;
    }

    /**
     * Set seniId
     *
     * @param integer $seniId
     * @return WebsiteTbSecurityEntityHierachy
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
     * Set seniFatherId
     *
     * @param integer $seniFatherId
     * @return WebsiteTbSecurityEntityHierachy
     */
    public function setSeniFatherId($seniFatherId)
    {
        $this->seniFatherId = $seniFatherId;

        return $this;
    }

    /**
     * Get seniFatherId
     *
     * @return integer 
     */
    public function getSeniFatherId()
    {
        return $this->seniFatherId;
    }

    /**
     * Set sehyStatus
     *
     * @param boolean $sehyStatus
     * @return WebsiteTbSecurityEntityHierachy
     */
    public function setSehyStatus($sehyStatus)
    {
        $this->sehyStatus = $sehyStatus;

        return $this;
    }

    /**
     * Get sehyStatus
     *
     * @return boolean 
     */
    public function getSehyStatus()
    {
        return $this->sehyStatus;
    }
}
