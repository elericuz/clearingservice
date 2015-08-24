<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteTbClient
 *
 * @ORM\Table(name="website_tb_client")
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\WebsiteTbClientRepository")
 */
class WebsiteTbClient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="clii_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cliiId;

    /**
     * @var string
     *
     * @ORM\Column(name="cliv_name", type="string", length=250, nullable=true)
     */
    private $clivName;

    /**
     * @var string
     *
     * @ORM\Column(name="cliv_address", type="string", length=250, nullable=true)
     */
    private $clivAddress;



    /**
     * Get cliiId
     *
     * @return integer 
     */
    public function getCliiId()
    {
        return $this->cliiId;
    }

    /**
     * Set clivName
     *
     * @param string $clivName
     * @return WebsiteTbClient
     */
    public function setClivName($clivName)
    {
        $this->clivName = $clivName;

        return $this;
    }

    /**
     * Get clivName
     *
     * @return string 
     */
    public function getClivName()
    {
        return $this->clivName;
    }

    /**
     * Set clivAddress
     *
     * @param string $clivAddress
     * @return WebsiteTbClient
     */
    public function setClivAddress($clivAddress)
    {
        $this->clivAddress = $clivAddress;

        return $this;
    }

    /**
     * Get clivAddress
     *
     * @return string 
     */
    public function getClivAddress()
    {
        return $this->clivAddress;
    }
}
