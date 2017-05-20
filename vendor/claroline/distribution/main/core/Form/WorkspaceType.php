<?php

/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Claroline\CoreBundle\Form;

use Claroline\CoreBundle\Entity\User;
use Claroline\CoreBundle\Validator\Constraints\WorkspaceUniqueCode;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class WorkspaceType extends AbstractType
{
    private $user;

    public function __construct(User $user = null)
    {
        $this->user = $user;
        $this->forApi = false;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $user = $this->user;
        if (php_sapi_name() === 'cli') {
            $this->forApi = true;
        }

        if ($this->forApi) {
            $codeConstraints = [new NotBlank()];
        } else {
            $codeConstraints = [new WorkspaceUniqueCode(), new NotBlank()];
        }

        $builder
            ->add(
                'name',
                'text',
                [
                    'label' => 'name',
                    'constraints' => new NotBlank(),
                ]
            )
            ->add(
                'code',
                'text',
                [
                    'constraints' => $codeConstraints,
                    'label' => 'code',
                ]
            )
            ->add(
                'description',
                isset($options['theme_options']['tinymce']) && !$options['theme_options']['tinymce'] ?
                    'textarea' :
                    'tinymce',
                ['required' => false, 'label' => 'description']
            );

        if (!$this->forApi) {
            $builder->add(
                    'model',
                    'entity',
                    [
                        'class' => 'ClarolineCoreBundle:Model\WorkspaceModel',
                        'query_builder' => function (EntityRepository $er) use ($user) {
                            return $er->createQueryBuilder('wm')
                                ->leftJoin('wm.users', 'u')
                                ->leftJoin('wm.groups', 'g')
                                ->leftJoin('g.users', 'gu')
                                ->where('u.id = :userId')
                                ->orWhere('gu.id = :userId')
                                ->setParameter('userId', $user->getId())
                                ->orderBy('wm.name', 'ASC');
                        },
                        'property' => 'nameAndWorkspace',
                        'required' => false,
                        'label' => 'model',
                        'mapped' => false,
                    ]
                );
        }
        $builder
                ->add('displayable', 'checkbox', ['required' => false, 'label' => 'displayable_in_workspace_list'])
                ->add('selfRegistration', 'checkbox', ['required' => false, 'label' => 'public_registration'])
                ->add('registrationValidation', 'checkbox', ['required' => false, 'label' => 'registration_validation'])
                ->add('selfUnregistration', 'checkbox', ['required' => false, 'label' => 'public_unregistration']);

        if ($this->forApi) {
            $builder->add(
                'maxStorageSize',
                'text',
                [
                    'label' => 'max_storage_size',
                    'constraints' => [new NotBlank()],
                ]
            );
            $builder->add(
                'maxUploadResources',
                'text',
                [
                    'label' => 'max_amount_resources',
                    'constraints' => [new NotBlank()],
                ]
            );
            $builder->add(
                'maxUsers',
                'text',
                [
                    'label' => 'workspace_max_users',
                    'constraints' => [new NotBlank()],
                ]
            );
            $params = [
                'label' => 'expiration_date',
                'format' => 'dd-MM-yyyy',
                'widget' => 'single_text',
                'input' => 'datetime',
                'attr' => [
                    'class' => 'datepicker input-small',
                    'data-date-format' => 'dd-mm-yyyy',
                    'autocomplete' => 'off',
                ],
            ];

            $builder->add('endDate', 'datepicker', $params);
        }
    }

    public function getName()
    {
        return 'workspace_form';
    }

    public function enableApi()
    {
        $this->forApi = true;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $default = ['translation_domain' => 'platform'];
        if ($this->forApi) {
            $default['csrf_protection'] = false;
        }

        $resolver->setDefaults($default);
    }
}
