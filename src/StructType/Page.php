<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Page StructType
 * @subpackage Structs
 */
class Page extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ID;
    /**
     * The ParentPageID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $ParentPageID;
    /**
     * The SuperAdminOnly
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $SuperAdminOnly;
    /**
     * The ShowInMenu
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $ShowInMenu;
    /**
     * The AllowAll
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $AllowAll;
    /**
     * The ShowAdmin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $ShowAdmin;
    /**
     * The ShowInHomePage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $ShowInHomePage;
    /**
     * The IsDefault
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsDefault;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $Status;
    /**
     * The DateCreated
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $DateCreated;
    /**
     * The DateModified
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $DateModified;
    /**
     * The VerifierID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $VerifierID;
    /**
     * The VerifiedDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $VerifiedDate;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The Url
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Url;
    /**
     * The ImageUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ImageUrl;
    /**
     * The ExpandedImageUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExpandedImageUrl;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The CreatedBy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CreatedBy;
    /**
     * The ModifiedBy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ModifiedBy;
    /**
     * The MenuPages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfMenuPage
     */
    public $MenuPages;
    /**
     * The RolePages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfRolePage
     */
    public $RolePages;
    /**
     * The Pages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfPage
     */
    public $Pages;
    /**
     * Constructor method for Page
     * @uses Page::setID()
     * @uses Page::setParentPageID()
     * @uses Page::setSuperAdminOnly()
     * @uses Page::setShowInMenu()
     * @uses Page::setAllowAll()
     * @uses Page::setShowAdmin()
     * @uses Page::setShowInHomePage()
     * @uses Page::setIsDefault()
     * @uses Page::setStatus()
     * @uses Page::setDateCreated()
     * @uses Page::setDateModified()
     * @uses Page::setVerifierID()
     * @uses Page::setVerifiedDate()
     * @uses Page::setTitle()
     * @uses Page::setUrl()
     * @uses Page::setImageUrl()
     * @uses Page::setExpandedImageUrl()
     * @uses Page::setDescription()
     * @uses Page::setCreatedBy()
     * @uses Page::setModifiedBy()
     * @uses Page::setMenuPages()
     * @uses Page::setRolePages()
     * @uses Page::setPages()
     * @param int $iD
     * @param int $parentPageID
     * @param bool $superAdminOnly
     * @param bool $showInMenu
     * @param bool $allowAll
     * @param bool $showAdmin
     * @param bool $showInHomePage
     * @param bool $isDefault
     * @param int $status
     * @param string $dateCreated
     * @param string $dateModified
     * @param int $verifierID
     * @param string $verifiedDate
     * @param string $title
     * @param string $url
     * @param string $imageUrl
     * @param string $expandedImageUrl
     * @param string $description
     * @param string $createdBy
     * @param string $modifiedBy
     * @param \ArrayType\ArrayOfMenuPage $menuPages
     * @param \ArrayType\ArrayOfRolePage $rolePages
     * @param \ArrayType\ArrayOfPage $pages
     */
    public function __construct($iD = null, $parentPageID = null, $superAdminOnly = null, $showInMenu = null, $allowAll = null, $showAdmin = null, $showInHomePage = null, $isDefault = null, $status = null, $dateCreated = null, $dateModified = null, $verifierID = null, $verifiedDate = null, $title = null, $url = null, $imageUrl = null, $expandedImageUrl = null, $description = null, $createdBy = null, $modifiedBy = null, \ArrayType\ArrayOfMenuPage $menuPages = null, \ArrayType\ArrayOfRolePage $rolePages = null, \ArrayType\ArrayOfPage $pages = null)
    {
        $this
            ->setID($iD)
            ->setParentPageID($parentPageID)
            ->setSuperAdminOnly($superAdminOnly)
            ->setShowInMenu($showInMenu)
            ->setAllowAll($allowAll)
            ->setShowAdmin($showAdmin)
            ->setShowInHomePage($showInHomePage)
            ->setIsDefault($isDefault)
            ->setStatus($status)
            ->setDateCreated($dateCreated)
            ->setDateModified($dateModified)
            ->setVerifierID($verifierID)
            ->setVerifiedDate($verifiedDate)
            ->setTitle($title)
            ->setUrl($url)
            ->setImageUrl($imageUrl)
            ->setExpandedImageUrl($expandedImageUrl)
            ->setDescription($description)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setMenuPages($menuPages)
            ->setRolePages($rolePages)
            ->setPages($pages);
    }
    /**
     * Get ID value
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \StructType\Page
     */
    public function setID($iD = null)
    {
        // validation for constraint: int
        if (!is_null($iD) && !(is_int($iD) || ctype_digit($iD))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get ParentPageID value
     * @return int
     */
    public function getParentPageID()
    {
        return $this->ParentPageID;
    }
    /**
     * Set ParentPageID value
     * @param int $parentPageID
     * @return \StructType\Page
     */
    public function setParentPageID($parentPageID = null)
    {
        // validation for constraint: int
        if (!is_null($parentPageID) && !(is_int($parentPageID) || ctype_digit($parentPageID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentPageID, true), gettype($parentPageID)), __LINE__);
        }
        $this->ParentPageID = $parentPageID;
        return $this;
    }
    /**
     * Get SuperAdminOnly value
     * @return bool
     */
    public function getSuperAdminOnly()
    {
        return $this->SuperAdminOnly;
    }
    /**
     * Set SuperAdminOnly value
     * @param bool $superAdminOnly
     * @return \StructType\Page
     */
    public function setSuperAdminOnly($superAdminOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($superAdminOnly) && !is_bool($superAdminOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($superAdminOnly, true), gettype($superAdminOnly)), __LINE__);
        }
        $this->SuperAdminOnly = $superAdminOnly;
        return $this;
    }
    /**
     * Get ShowInMenu value
     * @return bool
     */
    public function getShowInMenu()
    {
        return $this->ShowInMenu;
    }
    /**
     * Set ShowInMenu value
     * @param bool $showInMenu
     * @return \StructType\Page
     */
    public function setShowInMenu($showInMenu = null)
    {
        // validation for constraint: boolean
        if (!is_null($showInMenu) && !is_bool($showInMenu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showInMenu, true), gettype($showInMenu)), __LINE__);
        }
        $this->ShowInMenu = $showInMenu;
        return $this;
    }
    /**
     * Get AllowAll value
     * @return bool
     */
    public function getAllowAll()
    {
        return $this->AllowAll;
    }
    /**
     * Set AllowAll value
     * @param bool $allowAll
     * @return \StructType\Page
     */
    public function setAllowAll($allowAll = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowAll) && !is_bool($allowAll)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowAll, true), gettype($allowAll)), __LINE__);
        }
        $this->AllowAll = $allowAll;
        return $this;
    }
    /**
     * Get ShowAdmin value
     * @return bool
     */
    public function getShowAdmin()
    {
        return $this->ShowAdmin;
    }
    /**
     * Set ShowAdmin value
     * @param bool $showAdmin
     * @return \StructType\Page
     */
    public function setShowAdmin($showAdmin = null)
    {
        // validation for constraint: boolean
        if (!is_null($showAdmin) && !is_bool($showAdmin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showAdmin, true), gettype($showAdmin)), __LINE__);
        }
        $this->ShowAdmin = $showAdmin;
        return $this;
    }
    /**
     * Get ShowInHomePage value
     * @return bool
     */
    public function getShowInHomePage()
    {
        return $this->ShowInHomePage;
    }
    /**
     * Set ShowInHomePage value
     * @param bool $showInHomePage
     * @return \StructType\Page
     */
    public function setShowInHomePage($showInHomePage = null)
    {
        // validation for constraint: boolean
        if (!is_null($showInHomePage) && !is_bool($showInHomePage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showInHomePage, true), gettype($showInHomePage)), __LINE__);
        }
        $this->ShowInHomePage = $showInHomePage;
        return $this;
    }
    /**
     * Get IsDefault value
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->IsDefault;
    }
    /**
     * Set IsDefault value
     * @param bool $isDefault
     * @return \StructType\Page
     */
    public function setIsDefault($isDefault = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDefault) && !is_bool($isDefault)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefault, true), gettype($isDefault)), __LINE__);
        }
        $this->IsDefault = $isDefault;
        return $this;
    }
    /**
     * Get Status value
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param int $status
     * @return \StructType\Page
     */
    public function setStatus($status = null)
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get DateCreated value
     * @return string
     */
    public function getDateCreated()
    {
        return $this->DateCreated;
    }
    /**
     * Set DateCreated value
     * @param string $dateCreated
     * @return \StructType\Page
     */
    public function setDateCreated($dateCreated = null)
    {
        // validation for constraint: string
        if (!is_null($dateCreated) && !is_string($dateCreated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateCreated, true), gettype($dateCreated)), __LINE__);
        }
        $this->DateCreated = $dateCreated;
        return $this;
    }
    /**
     * Get DateModified value
     * @return string
     */
    public function getDateModified()
    {
        return $this->DateModified;
    }
    /**
     * Set DateModified value
     * @param string $dateModified
     * @return \StructType\Page
     */
    public function setDateModified($dateModified = null)
    {
        // validation for constraint: string
        if (!is_null($dateModified) && !is_string($dateModified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateModified, true), gettype($dateModified)), __LINE__);
        }
        $this->DateModified = $dateModified;
        return $this;
    }
    /**
     * Get VerifierID value
     * @return int
     */
    public function getVerifierID()
    {
        return $this->VerifierID;
    }
    /**
     * Set VerifierID value
     * @param int $verifierID
     * @return \StructType\Page
     */
    public function setVerifierID($verifierID = null)
    {
        // validation for constraint: int
        if (!is_null($verifierID) && !(is_int($verifierID) || ctype_digit($verifierID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($verifierID, true), gettype($verifierID)), __LINE__);
        }
        $this->VerifierID = $verifierID;
        return $this;
    }
    /**
     * Get VerifiedDate value
     * @return string
     */
    public function getVerifiedDate()
    {
        return $this->VerifiedDate;
    }
    /**
     * Set VerifiedDate value
     * @param string $verifiedDate
     * @return \StructType\Page
     */
    public function setVerifiedDate($verifiedDate = null)
    {
        // validation for constraint: string
        if (!is_null($verifiedDate) && !is_string($verifiedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($verifiedDate, true), gettype($verifiedDate)), __LINE__);
        }
        $this->VerifiedDate = $verifiedDate;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \StructType\Page
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get Url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->Url;
    }
    /**
     * Set Url value
     * @param string $url
     * @return \StructType\Page
     */
    public function setUrl($url = null)
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->Url = $url;
        return $this;
    }
    /**
     * Get ImageUrl value
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->ImageUrl;
    }
    /**
     * Set ImageUrl value
     * @param string $imageUrl
     * @return \StructType\Page
     */
    public function setImageUrl($imageUrl = null)
    {
        // validation for constraint: string
        if (!is_null($imageUrl) && !is_string($imageUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageUrl, true), gettype($imageUrl)), __LINE__);
        }
        $this->ImageUrl = $imageUrl;
        return $this;
    }
    /**
     * Get ExpandedImageUrl value
     * @return string|null
     */
    public function getExpandedImageUrl()
    {
        return $this->ExpandedImageUrl;
    }
    /**
     * Set ExpandedImageUrl value
     * @param string $expandedImageUrl
     * @return \StructType\Page
     */
    public function setExpandedImageUrl($expandedImageUrl = null)
    {
        // validation for constraint: string
        if (!is_null($expandedImageUrl) && !is_string($expandedImageUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expandedImageUrl, true), gettype($expandedImageUrl)), __LINE__);
        }
        $this->ExpandedImageUrl = $expandedImageUrl;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\Page
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get CreatedBy value
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->CreatedBy;
    }
    /**
     * Set CreatedBy value
     * @param string $createdBy
     * @return \StructType\Page
     */
    public function setCreatedBy($createdBy = null)
    {
        // validation for constraint: string
        if (!is_null($createdBy) && !is_string($createdBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdBy, true), gettype($createdBy)), __LINE__);
        }
        $this->CreatedBy = $createdBy;
        return $this;
    }
    /**
     * Get ModifiedBy value
     * @return string|null
     */
    public function getModifiedBy()
    {
        return $this->ModifiedBy;
    }
    /**
     * Set ModifiedBy value
     * @param string $modifiedBy
     * @return \StructType\Page
     */
    public function setModifiedBy($modifiedBy = null)
    {
        // validation for constraint: string
        if (!is_null($modifiedBy) && !is_string($modifiedBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedBy, true), gettype($modifiedBy)), __LINE__);
        }
        $this->ModifiedBy = $modifiedBy;
        return $this;
    }
    /**
     * Get MenuPages value
     * @return \ArrayType\ArrayOfMenuPage|null
     */
    public function getMenuPages()
    {
        return $this->MenuPages;
    }
    /**
     * Set MenuPages value
     * @param \ArrayType\ArrayOfMenuPage $menuPages
     * @return \StructType\Page
     */
    public function setMenuPages(\ArrayType\ArrayOfMenuPage $menuPages = null)
    {
        $this->MenuPages = $menuPages;
        return $this;
    }
    /**
     * Get RolePages value
     * @return \ArrayType\ArrayOfRolePage|null
     */
    public function getRolePages()
    {
        return $this->RolePages;
    }
    /**
     * Set RolePages value
     * @param \ArrayType\ArrayOfRolePage $rolePages
     * @return \StructType\Page
     */
    public function setRolePages(\ArrayType\ArrayOfRolePage $rolePages = null)
    {
        $this->RolePages = $rolePages;
        return $this;
    }
    /**
     * Get Pages value
     * @return \ArrayType\ArrayOfPage|null
     */
    public function getPages()
    {
        return $this->Pages;
    }
    /**
     * Set Pages value
     * @param \ArrayType\ArrayOfPage $pages
     * @return \StructType\Page
     */
    public function setPages(\ArrayType\ArrayOfPage $pages = null)
    {
        $this->Pages = $pages;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Page
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
