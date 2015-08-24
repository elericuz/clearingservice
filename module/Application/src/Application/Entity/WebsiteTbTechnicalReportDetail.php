<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteTbTechnicalReportDetail
 *
 * @ORM\Table(name="website_tb_technical_report_detail", indexes={@ORM\Index(name="teri_id", columns={"teri_id"})})
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\WebsiteTbTechnicalReportDetailRepository")
 */
class WebsiteTbTechnicalReportDetail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="trdi_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $trdiId;

    /**
     * @var string
     *
     * @ORM\Column(name="trdv_area", type="string", length=250, nullable=true)
     */
    private $trdvArea;

    /**
     * @var string
     *
     * @ORM\Column(name="trdt_observation", type="text", nullable=true)
     */
    private $trdtObservation;

    /**
     * @var string
     *
     * @ORM\Column(name="trdt_action", type="text", nullable=true)
     */
    private $trdtAction;

    /**
     * @var string
     *
     * @ORM\Column(name="trdv_photo", type="string", length=250, nullable=true)
     */
    private $trdvPhoto;

    /**
     * @var \Application\Entity\WebsiteTbTechnicalReport
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\WebsiteTbTechnicalReport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="teri_id", referencedColumnName="teri_id")
     * })
     */
    private $teri;



    /**
     * Get trdiId
     *
     * @return integer 
     */
    public function getTrdiId()
    {
        return $this->trdiId;
    }

    /**
     * Set trdvArea
     *
     * @param string $trdvArea
     * @return WebsiteTbTechnicalReportDetail
     */
    public function setTrdvArea($trdvArea)
    {
        $this->trdvArea = $trdvArea;

        return $this;
    }

    /**
     * Get trdvArea
     *
     * @return string 
     */
    public function getTrdvArea()
    {
        return $this->trdvArea;
    }

    /**
     * Set trdtObservation
     *
     * @param string $trdtObservation
     * @return WebsiteTbTechnicalReportDetail
     */
    public function setTrdtObservation($trdtObservation)
    {
        $this->trdtObservation = $trdtObservation;

        return $this;
    }

    /**
     * Get trdtObservation
     *
     * @return string 
     */
    public function getTrdtObservation()
    {
        return $this->trdtObservation;
    }

    /**
     * Set trdtAction
     *
     * @param string $trdtAction
     * @return WebsiteTbTechnicalReportDetail
     */
    public function setTrdtAction($trdtAction)
    {
        $this->trdtAction = $trdtAction;

        return $this;
    }

    /**
     * Get trdtAction
     *
     * @return string 
     */
    public function getTrdtAction()
    {
        return $this->trdtAction;
    }

    /**
     * Set trdvPhoto
     *
     * @param string $trdvPhoto
     * @return WebsiteTbTechnicalReportDetail
     */
    public function setTrdvPhoto($trdvPhoto)
    {
        $this->trdvPhoto = $trdvPhoto;

        return $this;
    }

    /**
     * Get trdvPhoto
     *
     * @return string 
     */
    public function getTrdvPhoto()
    {
        return $this->trdvPhoto;
    }

    /**
     * Set teri
     *
     * @param \Application\Entity\WebsiteTbTechnicalReport $teri
     * @return WebsiteTbTechnicalReportDetail
     */
    public function setTeri(\Application\Entity\WebsiteTbTechnicalReport $teri = null)
    {
        $this->teri = $teri;

        return $this;
    }

    /**
     * Get teri
     *
     * @return \Application\Entity\WebsiteTbTechnicalReport 
     */
    public function getTeri()
    {
        return $this->teri;
    }
}
