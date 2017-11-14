<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Yeterlilik
 *
 * @ORM\Table(name="yeterlilik")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\YeterlilikRepository")
 */
class Yeterlilik
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Sektor", inversedBy="id")
     * @ORM\JoinColumn(name="sektor_id", referencedColumnName="id")
     */
    private $sektor;

    /**
     * @ORM\Column(name = "ad",type="string", length=100)
     */
    private $ad;

    /**
     * @ORM\Column(name = "kod",type="string", length=100)
     */
    private $kod;

    /**
     * @ORM\Column(name="seviye", type="integer")
     */
    private $seviye;

    /**
     * @ORM\Column(name="revizyontarihi", type="date")
     */
    private $revizyontarihi;

    /**
     * @ORM\Column(name="revizyonno", type="integer")
     */
    private $revizyonno;

    /**
     * @ORM\Column(name="yayintarihi", type="date")
     */
    private $yayintarihi;

    /**
     * @ORM\Column(name="onaytarihi", type="date")
     */
    private $onaytarihi;

    /**
     * @ORM\Column(name = "sayisi",type="string", length=100)
     */
    private $sayisi;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ad
     *
     * @param string $ad
     *
     * @return Yeterlilik
     */
    public function setAd($ad)
    {
        $this->ad = $ad;

        return $this;
    }

    /**
     * Get ad
     *
     * @return string
     */
    public function getAd()
    {
        return $this->ad;
    }

    /**
     * Set kod
     *
     * @param string $kod
     *
     * @return Yeterlilik
     */
    public function setKod($kod)
    {
        $this->kod = $kod;

        return $this;
    }

    /**
     * Get kod
     *
     * @return string
     */
    public function getKod()
    {
        return $this->kod;
    }

    /**
     * Set seviye
     *
     * @param integer $seviye
     *
     * @return Yeterlilik
     */
    public function setSeviye($seviye)
    {
        $this->seviye = $seviye;

        return $this;
    }

    /**
     * Get seviye
     *
     * @return integer
     */
    public function getSeviye()
    {
        return $this->seviye;
    }

    /**
     * Set revizyontarihi
     *
     * @param \DateTime $revizyontarihi
     *
     * @return Yeterlilik
     */
    public function setRevizyontarihi($revizyontarihi)
    {
        $this->revizyontarihi = $revizyontarihi;

        return $this;
    }

    /**
     * Get revizyontarihi
     *
     * @return \DateTime
     */
    public function getRevizyontarihi()
    {
        return $this->revizyontarihi;
    }

    /**
     * Set revizyonno
     *
     * @param integer $revizyonno
     *
     * @return Yeterlilik
     */
    public function setRevizyonno($revizyonno)
    {
        $this->revizyonno = $revizyonno;

        return $this;
    }

    /**
     * Get revizyonno
     *
     * @return integer
     */
    public function getRevizyonno()
    {
        return $this->revizyonno;
    }

    /**
     * Set yayintarihi
     *
     * @param \DateTime $yayintarihi
     *
     * @return Yeterlilik
     */
    public function setYayintarihi($yayintarihi)
    {
        $this->yayintarihi = $yayintarihi;

        return $this;
    }

    /**
     * Get yayintarihi
     *
     * @return \DateTime
     */
    public function getYayintarihi()
    {
        return $this->yayintarihi;
    }

    /**
     * Set onaytarihi
     *
     * @param \DateTime $onaytarihi
     *
     * @return Yeterlilik
     */
    public function setOnaytarihi($onaytarihi)
    {
        $this->onaytarihi = $onaytarihi;

        return $this;
    }

    /**
     * Get onaytarihi
     *
     * @return \DateTime
     */
    public function getOnaytarihi()
    {
        return $this->onaytarihi;
    }

    /**
     * Set sayisi
     *
     * @param string $sayisi
     *
     * @return Yeterlilik
     */
    public function setSayisi($sayisi)
    {
        $this->sayisi = $sayisi;

        return $this;
    }

    /**
     * Get sayisi
     *
     * @return string
     */
    public function getSayisi()
    {
        return $this->sayisi;
    }

    /**
     * Set sektor
     *
     * @param \AppBundle\Entity\Sektor $sektor
     *
     * @return Yeterlilik
     */
    public function setSektor(\AppBundle\Entity\Sektor $sektor = null)
    {
        $this->sektor = $sektor;

        return $this;
    }

    /**
     * Get sektor
     *
     * @return \AppBundle\Entity\Sektor
     */
    public function getSektor()
    {
        return $this->sektor;
    }
}
