<?php
namespace RAR\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="rar_category")
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string")
     */
    public $name;

    /**
     * @ORM\Column(type="string")
     */
    public $description;

    /**
     * @ORM\Column(type="string")
     */
    public $parent_category;

    
          /**
     * @ORM\Column(type="integer")
     */
    public $creator_id;  
    
    /**
     * @ORM\Column(type="datetime")
     */
    public $creation_timestamp;
    
          /**
     * @ORM\Column(type="integer")
     */
    public $modifier_id;

    /**
     * @ORM\Column(type="datetime")
     */
    public $modification_timestamp;
    
   
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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Category
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set parent_category
     *
     * @param string $parentCategory
     * @return Category
     */
    public function setParentCategory($parentCategory)
    {
        $this->parent_category = $parentCategory;
    
        return $this;
    }

    /**
     * Get parent_category
     *
     * @return string 
     */
    public function getParentCategory()
    {
        return $this->parent_category;
    }

    /**
     * Set creator_id
     *
     * @param integer $creatorId
     * @return Category
     */
    public function setCreatorId($creatorId)
    {
        $this->creator_id = $creatorId;
    
        return $this;
    }

    /**
     * Get creator_id
     *
     * @return integer 
     */
    public function getCreatorId()
    {
        return $this->creator_id;
    }

    /**
     * Set creation_timestamp
     *
     * @param \DateTime $creationTimestamp
     * @return Category
     */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creation_timestamp = $creationTimestamp;
    
        return $this;
    }

    /**
     * Get creation_timestamp
     *
     * @return \DateTime 
     */
    public function getCreationTimestamp()
    {
        return $this->creation_timestamp;
    }

    /**
     * Set modifier_id
     *
     * @param integer $modifierId
     * @return Category
     */
    public function setModifierId($modifierId)
    {
        $this->modifier_id = $modifierId;
    
        return $this;
    }

    /**
     * Get modifier_id
     *
     * @return integer 
     */
    public function getModifierId()
    {
        return $this->modifier_id;
    }

    /**
     * Set modification_timestamp
     *
     * @param \DateTime $modificationTimestamp
     * @return Category
     */
    public function setModificationTimestamp($modificationTimestamp)
    {
        $this->modification_timestamp = $modificationTimestamp;
    
        return $this;
    }

    /**
     * Get modification_timestamp
     *
     * @return \DateTime 
     */
    public function getModificationTimestamp()
    {
        return $this->modification_timestamp;
    }
}