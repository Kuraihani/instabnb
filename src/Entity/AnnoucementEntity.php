<?php


namespace App\Entity;
use App\DTO\CreateAnnoucement;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnnoucementRepository")
 */
class AnnoucementEntity
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /** @ORM\Column(name="title", type="string", nullable=false)*/
    private $title;
    /** @ORM\Column(name="price", type="integer", nullable=false)*/
    private $price;
    /** @ORM\Column(name="content", type="string", nullable=true)*/
    private $content;
    /** @ORM\Column(name="createdAt", type="datetime")*/
    private  $createdAt;

    public function __construct(CreateAnnoucement $CreateAnnoucement){
        $this->title = $CreateAnnoucement->title;
        $this->price = $CreateAnnoucement->price;
        $this->content = $CreateAnnoucement->content;
        $this->createdAt = new \Datetime();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}