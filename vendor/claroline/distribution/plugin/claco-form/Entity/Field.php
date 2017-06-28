<?php

/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Claroline\ClacoFormBundle\Entity;

use Claroline\CoreBundle\Entity\Facet\FieldFacet;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\SerializedName;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Claroline\ClacoFormBundle\Repository\FieldRepository")
 * @ORM\Table(
 *     name="claro_clacoformbundle_field",
 *     uniqueConstraints={
 *         @ORM\UniqueConstraint(name="field_unique_name", columns={"claco_form_id", "field_name"})
 *     }
 * )
 * @DoctrineAssert\UniqueEntity({"clacoForm", "name"})
 */
class Field
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Groups({"api_claco_form", "api_facet_admin", "api_user_min"})
     * @SerializedName("id")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(
     *     targetEntity="Claroline\ClacoFormBundle\Entity\ClacoForm",
     *     inversedBy="fields"
     * )
     * @ORM\JoinColumn(name="claco_form_id", nullable=false, onDelete="CASCADE")
     * @Groups({"api_claco_form"})
     * @SerializedName("clacoForm")
     */
    protected $clacoForm;

    /**
     * @ORM\Column(name="field_name")
     * @Assert\NotBlank()
     * @Groups({"api_claco_form", "api_facet_admin", "api_user_min"})
     * @SerializedName("name")
     */
    protected $name;

    /**
     * @ORM\Column(name="field_type", type="integer")
     * @Groups({"api_claco_form", "api_facet_admin", "api_user_min"})
     * @SerializedName("type")
     */
    protected $type;

    /**
     * @ORM\OneToOne(targetEntity="Claroline\CoreBundle\Entity\Facet\FieldFacet")
     * @ORM\JoinColumn(name="field_facet_id", onDelete="CASCADE")
     * @Groups({"api_facet_admin"})
     * @SerializedName("fieldFacet")
     */
    protected $fieldFacet;

    /**
     * @ORM\Column(name="required", type="boolean")
     * @Groups({"api_claco_form", "api_facet_admin", "api_user_min"})
     * @SerializedName("required")
     */
    protected $required = true;

    /**
     * @ORM\Column(name="is_metadata", type="boolean")
     * @Groups({"api_claco_form", "api_facet_admin", "api_user_min"})
     * @SerializedName("isMetadata")
     */
    protected $isMetadata = false;

    /**
     * @ORM\OneToMany(
     *     targetEntity="Claroline\ClacoFormBundle\Entity\FieldChoiceCategory",
     *     mappedBy="field"
     * )
     */
    protected $fieldChoiceCategories;

    public function __construct()
    {
        $this->fieldChoiceCategories = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getClacoForm()
    {
        return $this->clacoForm;
    }

    public function setClacoForm(ClacoForm $clacoForm)
    {
        $this->clacoForm = $clacoForm;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getFieldFacet()
    {
        return $this->fieldFacet;
    }

    public function setFieldFacet(FieldFacet $fieldFacet)
    {
        $this->fieldFacet = $fieldFacet;
    }

    public function isRequired()
    {
        return $this->required;
    }

    public function setRequired($required)
    {
        $this->required = $required;
    }

    public function getIsMetadata()
    {
        return $this->isMetadata;
    }

    public function setIsMetadata($isMetadata)
    {
        $this->isMetadata = $isMetadata;
    }

    public function getFieldChoiceCategories()
    {
        return $this->fieldChoiceCategories->toArray();
    }
}
