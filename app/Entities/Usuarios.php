<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var string
     *
     * @ORM\Column(name="dni_usu", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $dniUsu;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_usu", type="string", length=50, nullable=true)
     */
    private $nomUsu;

    /**
     * @var string
     *
     * @ORM\Column(name="ape_usu", type="string", length=60, nullable=true)
     */
    private $apeUsu;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=20, nullable=true)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=20, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_usu", type="string", length=1, nullable=true)
     */
    private $estadoUsu;

    /**
     * @var string
     *
     * @ORM\Column(name="permiso", type="string", length=1, nullable=false)
     */
    private $permiso;



/**
 * Get dniUsu
 *
 * @return string
 */
public function getDniUsu()
{
return $this->dniUsu;
}

/**
 * Set nomUsu
 *
 * @param string $nomUsu
 *
 * @return Usuarios
 */
public function setNomUsu($nomUsu)
{
$this->nomUsu = $nomUsu;

return $this;
}

/**
 * Get nomUsu
 *
 * @return string
 */
public function getNomUsu()
{
return $this->nomUsu;
}

/**
 * Set apeUsu
 *
 * @param string $apeUsu
 *
 * @return Usuarios
 */
public function setApeUsu($apeUsu)
{
$this->apeUsu = $apeUsu;

return $this;
}

/**
 * Get apeUsu
 *
 * @return string
 */
public function getApeUsu()
{
return $this->apeUsu;
}

/**
 * Set usuario
 *
 * @param string $usuario
 *
 * @return Usuarios
 */
public function setUsuario($usuario)
{
$this->usuario = $usuario;

return $this;
}

/**
 * Get usuario
 *
 * @return string
 */
public function getUsuario()
{
return $this->usuario;
}

/**
 * Set password
 *
 * @param string $password
 *
 * @return Usuarios
 */
public function setPassword($password)
{
$this->password = $password;

return $this;
}

/**
 * Get password
 *
 * @return string
 */
public function getPassword()
{
return $this->password;
}

/**
 * Set estadoUsu
 *
 * @param string $estadoUsu
 *
 * @return Usuarios
 */
public function setEstadoUsu($estadoUsu)
{
$this->estadoUsu = $estadoUsu;

return $this;
}

/**
 * Get estadoUsu
 *
 * @return string
 */
public function getEstadoUsu()
{
return $this->estadoUsu;
}

/**
 * Set permiso
 *
 * @param string $permiso
 *
 * @return Usuarios
 */
public function setPermiso($permiso)
{
$this->permiso = $permiso;

return $this;
}

/**
 * Get permiso
 *
 * @return string
 */
public function getPermiso()
{
return $this->permiso;
}
}
