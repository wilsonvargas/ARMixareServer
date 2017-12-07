<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gestante
 *
 * @ORM\Table(name="gestante")
 * @ORM\Entity
 */
class Gestante
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lng", type="string", length=20, nullable=true)
     */
    private $lng;

    /**
     * @var string
     *
     * @ORM\Column(name="lat", type="string", length=20, nullable=true)
     */
    private $lat;

    /**
     * @var string
     *
     * @ORM\Column(name="elevation", type="string", length=30, nullable=true)
     */
    private $elevation;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=200, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="distance", type="string", length=20, nullable=false)
     */
    private $distance;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="webpage", type="string", length=200, nullable=false)
     */
    private $webpage;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=20, nullable=false)
     */
    private $img;



/**
 * Get id
 *
 * @return string
 */
public function getId()
{
return $this->id;
}

/**
 * Set lng
 *
 * @param string $lng
 *
 * @return Gestante
 */
public function setLng($lng)
{
$this->lng = $lng;

return $this;
}

/**
 * Get lng
 *
 * @return string
 */
public function getLng()
{
return $this->lng;
}

/**
 * Set lat
 *
 * @param string $lat
 *
 * @return Gestante
 */
public function setLat($lat)
{
$this->lat = $lat;

return $this;
}

/**
 * Get lat
 *
 * @return string
 */
public function getLat()
{
return $this->lat;
}

/**
 * Set elevation
 *
 * @param string $elevation
 *
 * @return Gestante
 */
public function setElevation($elevation)
{
$this->elevation = $elevation;

return $this;
}

/**
 * Get elevation
 *
 * @return string
 */
public function getElevation()
{
return $this->elevation;
}

/**
 * Set title
 *
 * @param string $title
 *
 * @return Gestante
 */
public function setTitle($title)
{
$this->title = $title;

return $this;
}

/**
 * Get title
 *
 * @return string
 */
public function getTitle()
{
return $this->title;
}

/**
 * Set distance
 *
 * @param string $distance
 *
 * @return Gestante
 */
public function setDistance($distance)
{
$this->distance = $distance;

return $this;
}

/**
 * Get distance
 *
 * @return string
 */
public function getDistance()
{
return $this->distance;
}

/**
 * Set type
 *
 * @param string $type
 *
 * @return Gestante
 */
public function setType($type)
{
$this->type = $type;

return $this;
}

/**
 * Get type
 *
 * @return string
 */
public function getType()
{
return $this->type;
}

/**
 * Set webpage
 *
 * @param string $webpage
 *
 * @return Gestante
 */
public function setWebpage($webpage)
{
$this->webpage = $webpage;

return $this;
}

/**
 * Get webpage
 *
 * @return string
 */
public function getWebpage()
{
return $this->webpage;
}

/**
 * Set img
 *
 * @param string $img
 *
 * @return Gestante
 */
public function setImg($img)
{
$this->img = $img;

return $this;
}

/**
 * Get img
 *
 * @return string
 */
public function getImg()
{
return $this->img;
}
}
