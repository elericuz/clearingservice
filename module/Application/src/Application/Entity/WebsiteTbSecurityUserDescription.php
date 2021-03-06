<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteTbSecurityUserDescription
 *
 * @ORM\Table(name="website_tb_security_user_description", indexes={@ORM\Index(name="has_user", columns={"susi_id"})})
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\WebsiteTbSecurityUserDescriptionRepository")
 */
class WebsiteTbSecurityUserDescription
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sudi_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sudiId;

    /**
     * @var string
     *
     * @ORM\Column(name="sudv_name", type="string", length=150, nullable=true)
     */
    private $sudvName;

    /**
     * @var string
     *
     * @ORM\Column(name="sudv_lastname", type="string", length=150, nullable=true)
     */
    private $sudvLastname;

    /**
     * @var integer
     *
     * @ORM\Column(name="sudi_created_by", type="integer", nullable=false)
     */
    private $sudiCreatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sudd_created_date", type="datetime", nullable=false)
     */
    private $suddCreatedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="sudv_created_ip", type="string", length=17, nullable=false)
     */
    private $sudvCreatedIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="sudi_mod_by", type="integer", nullable=true)
     */
    private $sudiModBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sudd_mod_date", type="datetime", nullable=true)
     */
    private $suddModDate;

    /**
     * @var string
     *
     * @ORM\Column(name="sudv_mod_ip", type="string", length=17, nullable=true)
     */
    private $sudvModIp;

    /**
     * @var \Application\Entity\WebsiteTbSecurityUser
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\WebsiteTbSecurityUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="susi_id", referencedColumnName="susi_id")
     * })
     */
    private $susi;



    /**
     * Get sudiId
     *
     * @return integer 
     */
    public function getSudiId()
    {
        return $this->sudiId;
    }

    /**
     * Set sudvName
     *
     * @param string $sudvName
     * @return WebsiteTbSecurityUserDescription
     */
    public function setSudvName($sudvName)
    {
        $this->sudvName = $sudvName;

        return $this;
    }

    /**
     * Get sudvName
     *
     * @return string 
     */
    public function getSudvName()
    {
        return $this->sudvName;
    }

    /**
     * Set sudvLastname
     *
     * @param string $sudvLastname
     * @return WebsiteTbSecurityUserDescription
     */
    public function setSudvLastname($sudvLastname)
    {
        $this->sudvLastname = $sudvLastname;

        return $this;
    }

    /**
     * Get sudvLastname
     *
     * @return string 
     */
    public function getSudvLastname()
    {
        return $this->sudvLastname;
    }

    /**
     * Set sudiCreatedBy
     *
     * @param integer $sudiCreatedBy
     * @return WebsiteTbSecurityUserDescription
     */
    public function setSudiCreatedBy($sudiCreatedBy)
    {
        $this->sudiCreatedBy = $sudiCreatedBy;

        return $this;
    }

    /**
     * Get sudiCreatedBy
     *
     * @return integer 
     */
    public function getSudiCreatedBy()
    {
        return $this->sudiCreatedBy;
    }

    /**
     * Set suddCreatedDate
     *
     * @param \DateTime $suddCreatedDate
     * @return WebsiteTbSecurityUserDescription
     */
    public function setSuddCreatedDate($suddCreatedDate)
    {
        $this->suddCreatedDate = $suddCreatedDate;

        return $this;
    }

    /**
     * Get suddCreatedDate
     *
     * @return \DateTime 
     */
    public function getSuddCreatedDate()
    {
        return $this->suddCreatedDate;
    }

    /**
     * Set sudvCreatedIp
     *
     * @param string $sudvCreatedIp
     * @return WebsiteTbSecurityUserDescription
     */
    public function setSudvCreatedIp($sudvCreatedIp)
    {
        $this->sudvCreatedIp = $sudvCreatedIp;

        return $this;
    }

    /**
     * Get sudvCreatedIp
     *
     * @return string 
     */
    public function getSudvCreatedIp()
    {
        return $this->sudvCreatedIp;
    }

    /**
     * Set sudiModBy
     *
     * @param integer $sudiModBy
     * @return WebsiteTbSecurityUserDescription
     */
    public function setSudiModBy($sudiModBy)
    {
        $this->sudiModBy = $sudiModBy;

        return $this;
    }

    /**
     * Get sudiModBy
     *
     * @return integer 
     */
    public function getSudiModBy()
    {
        return $this->sudiModBy;
    }

    /**
     * Set suddModDate
     *
     * @param \DateTime $suddModDate
     * @return WebsiteTbSecurityUserDescription
     */
    public function setSuddModDate($suddModDate)
    {
        $this->suddModDate = $suddModDate;

        return $this;
    }

    /**
     * Get suddModDate
     *
     * @return \DateTime 
     */
    public function getSuddModDate()
    {
        return $this->suddModDate;
    }

    /**
     * Set sudvModIp
     *
     * @param string $sudvModIp
     * @return WebsiteTbSecurityUserDescription
     */
    public function setSudvModIp($sudvModIp)
    {
        $this->sudvModIp = $sudvModIp;

        return $this;
    }

    /**
     * Get sudvModIp
     *
     * @return string 
     */
    public function getSudvModIp()
    {
        return $this->sudvModIp;
    }

    /**
     * Set susi
     *
     * @param \Application\Entity\WebsiteTbSecurityUser $susi
     * @return WebsiteTbSecurityUserDescription
     */
    public function setSusi(\Application\Entity\WebsiteTbSecurityUser $susi = null)
    {
        $this->susi = $susi;

        return $this;
    }

    /**
     * Get susi
     *
     * @return \Application\Entity\WebsiteTbSecurityUser 
     */
    public function getSusi()
    {
        return $this->susi;
    }
}
