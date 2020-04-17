<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    
    /**
     * @Assert\Image(
     *     minWidth = 200,
     *     maxWidth = 2850,
     *     minHeight = 200,
     *     maxHeight = 2400
     * )
     *@Assert\Valid
     *@ORM\Column(type="string", length=255)
     */
    protected $brochure;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail_user;

    public function setBrochure(string $brochure)
    {
        $this->brochure = $brochure;
    }

    public function getBrochure()
    {
        return $this->brochure;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMailUser(): ?string
    {
        return $this->mail_user;
    }

    public function setMailUser(string $mail_user): self
    {
        $this->mail_user = $mail_user;

        return $this;
    }

    
}
