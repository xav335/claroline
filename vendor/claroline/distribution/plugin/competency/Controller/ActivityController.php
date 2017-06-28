<?php

namespace HeVinci\CompetencyBundle\Controller;

use Claroline\CoreBundle\Entity\Resource\Activity;
use HeVinci\CompetencyBundle\Entity\Ability;
use HeVinci\CompetencyBundle\Entity\Competency;
use HeVinci\CompetencyBundle\Manager\ActivityManager;
use JMS\DiExtraBundle\Annotation as DI;
use JMS\SecurityExtraBundle\Annotation as SEC;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as EXT;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @EXT\Route("/activities", requirements={"id"="\d+"}, options={"expose"=true})
 * @EXT\Method("GET")
 */
class ActivityController
{
    private $activityManager;

    /**
     * @DI\InjectParams({
     *     "activityManager" = @DI\Inject("hevinci.competency.activity_manager")
     * })
     *
     * @param ActivityManager $activityManager
     */
    public function __construct(ActivityManager $activityManager)
    {
        $this->activityManager = $activityManager;
    }

    /**
     * Displays the list of competencies associated with an activity.
     *
     * @EXT\Route("/{id}", name="hevinci_activity_competencies")
     * @SEC\SecureParam(name="activity", permissions="OPEN")
     * @EXT\Template
     *
     * @param Activity $activity
     *
     * @return array
     */
    public function competenciesAction(Activity $activity)
    {
        return [
            '_resource' => $activity,
            'competencies' => $this->activityManager->loadLinkedCompetencies($activity),
        ];
    }

    /**
     * Creates an association between an activity and an ability.
     *
     * @EXT\Route("/{id}/abilities/{abilityId}/link", name="hevinci_activity_link_ability")
     * @EXT\Method("POST")
     * @EXT\ParamConverter("ability", options={"id"= "abilityId"})
     * @SEC\SecureParam(name="activity", permissions="OPEN")
     * @SEC\PreAuthorize("hasRole('ROLE_COMPETENCY_MANAGER')")
     *
     * @param Activity $activity
     * @param Ability  $ability
     *
     * @return JsonResponse
     */
    public function linkAbilityAction(Activity $activity, Ability $ability)
    {
        return new JsonResponse(
            $result = $this->activityManager->createLink($activity, $ability),
            $result ? 200 : 204
        );
    }

    /**
     * Creates an association between an activity and an ability.
     *
     * @EXT\Route("/{id}/competencies/{competencyId}/link", name="hevinci_activity_link_competency")
     * @EXT\Method("POST")
     * @EXT\ParamConverter("competency", options={"id"= "competencyId"})
     * @SEC\SecureParam(name="competency", permissions="OPEN")
     * @SEC\PreAuthorize("hasRole('ROLE_COMPETENCY_MANAGER')")
     *
     * @param Activity   $activity
     * @param Competency $competency
     *
     * @return JsonResponse
     */
    public function linkCompetencyAction(Activity $activity, Competency $competency)
    {
        return new JsonResponse(
            $result = $this->activityManager->createLink($activity, $competency),
            $result ? 200 : 204
        );
    }

    /**
     * Removes an association between an activity and an ability.
     *
     * @EXT\Route("/{id}/abilities/{abilityId}/remove", name="hevinci_activity_remove_ability")
     * @EXT\ParamConverter("ability", options={"id"= "abilityId"})
     * @SEC\SecureParam(name="activity", permissions="OPEN")
     * @SEC\PreAuthorize("hasRole('ROLE_COMPETENCY_MANAGER')")
     *
     * @param Activity $activity
     * @param Ability  $ability
     *
     * @return JsonResponse
     */
    public function removeAbilityLinkAction(Activity $activity, Ability $ability)
    {
        return new JsonResponse($this->activityManager->removeLink($activity, $ability));
    }

    /**
     * Removes an association between an activity and a competency.
     *
     * @EXT\Route("/{id}/competencies/{competencyId}/remove", name="hevinci_activity_remove_competency")
     * @EXT\ParamConverter("competency", options={"id"= "competencyId"})
     * @SEC\SecureParam(name="competency", permissions="OPEN")
     * @SEC\PreAuthorize("hasRole('ROLE_COMPETENCY_MANAGER')")
     *
     * @param Activity   $activity
     * @param Competency $competency
     *
     * @return JsonResponse
     */
    public function removeCompetencyLinkAction(Activity $activity, Competency $competency)
    {
        return new JsonResponse($this->activityManager->removeLink($activity, $competency));
    }

    /**
     * Displays the activities linked to a competency.
     *
     * @EXT\Route("/competencies/{id}", name="hevinci_competency_activities")
     * @SEC\PreAuthorize("hasRole('ROLE_USER')")
     * @EXT\Template
     *
     * @param Competency $competency
     *
     * @return array
     */
    public function competencyActivitiesAction(Competency $competency)
    {
        return ['competency' => $competency];
    }

    /**
     * Displays the activities linked to an ability.
     *
     * @EXT\Route("/abilities/{id}", name="hevinci_ability_activities")
     * @SEC\PreAuthorize("hasRole('ROLE_USER')")
     * @EXT\Template
     *
     * @param Ability $ability
     *
     * @return array
     */
    public function abilityActivitiesAction(Ability $ability)
    {
        return ['ability' => $ability];
    }
}
