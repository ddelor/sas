<?php

namespace sas\galleryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="sas\galleryBundle\Entity\EventRepository")
 */
class Event
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="category", type="integer")
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="expo1", type="text", nullable=true)
     */
    private $expo1;

    /**
     * @var string
     *
     * @ORM\Column(name="link1", type="string", length=255, nullable=true)
     */
    private $link1;

    /**
     * @var string
     *
     * @ORM\Column(name="url1", type="string", length=255, nullable=true)
     */
    private $url1;

    /**
     * @var string
     *
     * @ORM\Column(name="expo2", type="text", nullable=true)
     */
    private $expo2;

    /**
     * @var string
     *
     * @ORM\Column(name="link2", type="string", length=255, nullable=true)
     */
    private $link2;

    /**
     * @var string
     *
     * @ORM\Column(name="url2", type="string", length=255, nullable=true)
     */
    private $url2;

    /**
     * @var string
     *
     * @ORM\Column(name="expo3", type="text", nullable=true)
     */
    private $expo3;

    /**
     * @var string
     *
     * @ORM\Column(name="link3", type="string", length=255, nullable=true)
     */
    private $link3;

    /**
     * @var string
     *
     * @ORM\Column(name="url3", type="string", length=255, nullable=true)
     */
    private $url3;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param integer $category
     * @return Event
     */
    public function setCategory($category)
    {
        $this->category = $category->id;

        return $this;
    }

    /**
     * Get category
     *
     * @return integer 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return Event
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set expo1
     *
     * @param string $expo1
     * @return Event
     */
    public function setExpo1($expo1)
    {
        $this->expo1 = $expo1;

        return $this;
    }

    /**
     * Get expo1
     *
     * @return string 
     */
    public function getExpo1()
    {
        return $this->expo1;
    }

    /**
     * Set link1
     *
     * @param string $link1
     * @return Event
     */
    public function setLink1($link1)
    {
        $this->link1 = $link1;

        return $this;
    }

    /**
     * Get link1
     *
     * @return string 
     */
    public function getLink1()
    {
        return $this->link1;
    }

    /**
     * Set url1
     *
     * @param string $url1
     * @return Event
     */
    public function setUrl1($url1)
    {
        $this->url1 = $url1;

        return $this;
    }

    /**
     * Get url1
     *
     * @return string 
     */
    public function getUrl1()
    {
        return $this->url1;
    }

    /**
     * Set expo2
     *
     * @param string $expo2
     * @return Event
     */
    public function setExpo2($expo2)
    {
        $this->expo2 = $expo2;

        return $this;
    }

    /**
     * Get expo2
     *
     * @return string 
     */
    public function getExpo2()
    {
        return $this->expo2;
    }

    /**
     * Set link2
     *
     * @param string $link2
     * @return Event
     */
    public function setLink2($link2)
    {
        $this->link2 = $link2;

        return $this;
    }

    /**
     * Get link2
     *
     * @return string 
     */
    public function getLink2()
    {
        return $this->link2;
    }

    /**
     * Set url2
     *
     * @param string $url2
     * @return Event
     */
    public function setUrl2($url2)
    {
        $this->url2 = $url2;

        return $this;
    }

    /**
     * Get url2
     *
     * @return string 
     */
    public function getUrl2()
    {
        return $this->url2;
    }

    /**
     * Set expo3
     *
     * @param string $expo3
     * @return Event
     */
    public function setExpo3($expo3)
    {
        $this->expo3 = $expo3;

        return $this;
    }

    /**
     * Get expo3
     *
     * @return string 
     */
    public function getExpo3()
    {
        return $this->expo3;
    }

    /**
     * Set link3
     *
     * @param string $link3
     * @return Event
     */
    public function setLink3($link3)
    {
        $this->link3 = $link3;

        return $this;
    }

    /**
     * Get link3
     *
     * @return string 
     */
    public function getLink3()
    {
        return $this->link3;
    }

    /**
     * Set url3
     *
     * @param string $url3
     * @return Event
     */
    public function setUrl3($url3)
    {
        $this->url3 = $url3;

        return $this;
    }

    /**
     * Get url3
     *
     * @return string 
     */
    public function getUrl3()
    {
        return $this->url3;
    }
}
