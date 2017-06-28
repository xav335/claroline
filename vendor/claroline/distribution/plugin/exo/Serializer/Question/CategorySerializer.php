<?php

namespace UJM\ExoBundle\Serializer\Question;

use Claroline\CoreBundle\Entity\User;
use Claroline\CoreBundle\Persistence\ObjectManager;
use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use UJM\ExoBundle\Entity\Question\Category;
use UJM\ExoBundle\Library\Options\Transfer;
use UJM\ExoBundle\Library\Serializer\AbstractSerializer;

/**
 * Serializer for category data.
 *
 * @DI\Service("ujm_exo.serializer.category")
 */
class CategorySerializer extends AbstractSerializer
{
    /**
     * @var ObjectManager
     */
    private $om;

    /**
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    /**
     * CategorySerializer constructor.
     *
     * @param ObjectManager         $om
     * @param TokenStorageInterface $tokenStorage
     *
     * @DI\InjectParams({
     *     "om"           = @DI\Inject("claroline.persistence.object_manager"),
     *     "tokenStorage" = @DI\Inject("security.token_storage")
     * })
     */
    public function __construct(
        ObjectManager $om,
        TokenStorageInterface $tokenStorage)
    {
        $this->om = $om;
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * Converts a Category into a JSON-encodable structure.
     *
     * @param Category $category
     * @param array    $options
     *
     * @return \stdClass
     */
    public function serialize($category, array $options = [])
    {
        $categoryData = new \stdClass();
        $categoryData->id = $category->getUuid();
        $categoryData->name = $category->getName();

        if (in_array(Transfer::INCLUDE_ADMIN_META, $options)) {
            $categoryData->default = $category->isDefault();
        }

        return $categoryData;
    }

    /**
     * Converts raw data into a Category entity.
     *
     * @param \stdClass $data
     * @param Category  $category
     * @param array     $options
     *
     * @return Category
     */
    public function deserialize($data, $category = null, array $options = [])
    {
        if (empty($category)) {
            // Loads the Category from DB if already exist
            if (!empty($data->id)) {
                $category = $this->om->getRepository('UJMExoBundle:Question\Category')->findOneBy([
                    'uuid' => $data->id,
                ]);
            }

            if (empty($category)) {
                // Question not exist
                $category = new Category();
            }
        }

        // Force client ID if needed
        if (!$this->hasOption(Transfer::USE_SERVER_IDS, $options)) {
            $category->setUuid($data->id);
        }

        // Map data to entity (dataProperty => entityProperty/function to call)
        $this->mapObjectToEntity([
            'name' => 'name',
            'default' => 'default',
        ], $data, $category);

        if (empty($category->getUser())) {
            $currentUser = $this->tokenStorage->getToken()->getUser();
            if ($currentUser instanceof User) {
                $category->setUser($currentUser);
            }
        }

        return $category;
    }
}
