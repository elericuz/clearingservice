<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteTbTechnicalReport
 *
 * @ORM\Table(name="website_tb_technical_report", indexes={@ORM\Index(name="clii_id", columns={"clii_id"})})
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\WebsiteTbTechnicalReportRepository")
 */
class WebsiteTbTechnicalReport
{
    /**
     * @var integer
     *
     * @ORM\Column(name="teri_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $teriId;

    /**
     * @var string
     *
     * @ORM\Column(name="terv_service", type="string", length=250, nullable=true)
     */
    private $tervService;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="terd_date", type="date", nullable=true)
     */
    private $terdDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="terd_starthour", type="datetime", nullable=true)
     */
    private $terdStarthour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="terd_endhour", type="datetime", nullable=true)
     */
    private $terdEndhour;

    /**
     * @var string
     *
     * @ORM\Column(name="tert_used_product", type="text", nullable=true)
     */
    private $tertUsedProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="tert_personal", type="text", nullable=true)
     */
    private $tertPersonal;

    /**
     * @var \Application\Entity\WebsiteTbClient
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\WebsiteTbClient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clii_id", referencedColumnName="clii_id")
     * })
     */
    private $clii;



    /**
     * Get teriId
     *
     * @return integer 
     */
    public function getTeriId()
    {
        return $this->teriId;
    }

    /**
     * Set tervService
     *
     * @param string $tervService
     * @return WebsiteTbTechnicalReport
     */
    public function setTervService($tervService)
    {
        $this->tervService = $tervService;

        return $this;
    }

    /**
     * Get tervService
     *
     * @return string 
     */
    public function getTervService()
    {
        return $this->tervService;
    }

    /**
     * Set terdDate
     *
     * @param \DateTime $terdDate
     * @return WebsiteTbTechnicalReport
     */
    public function setTerdDate($terdDate)
    {
        $this->terdDate = $terdDate;

        return $this;
    }

    /**
     * Get terdDate
     *
     * @return \DateTime 
     */
    public function getTerdDate()
    {
        return $this->terdDate;
    }

    /**
     * Set terdStarthour
     *
     * @param \DateTime $terdStarthour
     * @return WebsiteTbTechnicalReport
     */
    public function setTerdStarthour($terdStarthour)
    {
        $this->terdStarthour = $terdStarthour;

        return $this;
    }

    /**
     * Get terdStarthour
     *
     * @return \DateTime 
     */
    public function getTerdStarthour()
    {
        return $this->terdStarthour;
    }

    /**
     * Set terdEndhour
     *
     * @param \DateTime $terdEndhour
     * @return WebsiteTbTechnicalReport
     */
    public function setTerdEndhour($terdEndhour)
    {
        $this->terdEndhour = $terdEndhour;

        return $this;
    }

    /**
     * Get terdEndhour
     *
     * @return \DateTime 
     */
    public function getTerdEndhour()
    {
        return $this->terdEndhour;
    }

    /**
     * Set tertUsedProduct
     *
     * @param string $tertUsedProduct
     * @return WebsiteTbTechnicalReport
     */
    public function setTertUsedProduct($tertUsedProduct)
    {
        $this->tertUsedProduct = $tertUsedProduct;

        return $this;
    }

    /**
     * Get tertUsedProduct
     *
     * @return string 
     */
    public function getTertUsedProduct()
    {
        return $this->tertUsedProduct;
    }

    /**
     * Set tertPersonal
     *
     * @param string $tertPersonal
     * @return WebsiteTbTechnicalReport
     */
    public function setTertPersonal($tertPersonal)
    {
        $this->tertPersonal = $tertPersonal;

        return $this;
    }

    /**
     * Get tertPersonal
     *
     * @return string 
     */
    public function getTertPersonal()
    {
        return $this->tertPersonal;
    }

    /**
     * Set clii
     *
     * @param \Application\Entity\WebsiteTbClient $clii
     * @return WebsiteTbTechnicalReport
     */
    public function setClii(\Application\Entity\WebsiteTbClient $clii = null)
    {
        $this->clii = $clii;

        return $this;
    }

    /**
     * Get clii
     *
     * @return \Application\Entity\WebsiteTbClient 
     */
    public function getClii()
    {
        return $this->clii;
    }
}
