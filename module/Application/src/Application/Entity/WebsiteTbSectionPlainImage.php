<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteTbSectionPlainImage
 *
 * @ORM\Table(name="website_tb_section_plain_image", indexes={@ORM\Index(name="section_image", columns={"sepi_id"})})
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\WebsiteTbSectionPlainImageRepository")
 */
class WebsiteTbSectionPlainImage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="spii_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $spiiId;

    /**
     * @var string
     *
     * @ORM\Column(name="spiv_url", type="string", length=255, nullable=true)
     */
    private $spivUrl;

    /**
     * @var \Application\Entity\WebsiteTbSectionPlain
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\WebsiteTbSectionPlain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sepi_id", referencedColumnName="sepi_id")
     * })
     */
    private $sepi;



    /**
     * Get spiiId
     *
     * @return integer 
     */
    public function getSpiiId()
    {
        return $this->spiiId;
    }

    /**
     * Set spivUrl
     *
     * @param string $spivUrl
     * @return WebsiteTbSectionPlainImage
     */
    public function setSpivUrl($spivUrl)
    {
        $this->spivUrl = $spivUrl;

        return $this;
    }

    /**
     * Get spivUrl
     *
     * @return string 
     */
    public function getSpivUrl()
    {
        return $this->spivUrl;
    }

    /**
     * Set sepi
     *
     * @param \Application\Entity\WebsiteTbSectionPlain $sepi
     * @return WebsiteTbSectionPlainImage
     */
    public function setSepi(\Application\Entity\WebsiteTbSectionPlain $sepi = null)
    {
        $this->sepi = $sepi;

        return $this;
    }

    /**
     * Get sepi
     *
     * @return \Application\Entity\WebsiteTbSectionPlain 
     */
    public function getSepi()
    {
        return $this->sepi;
    }
}
