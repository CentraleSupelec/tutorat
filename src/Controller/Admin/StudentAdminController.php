<?php

namespace App\Controller\Admin;

use App\Entity\Student;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class StudentAdminController extends Controller
{
    public function studentAdminImpersonateAction(): RedirectResponse
    {
        /** @var Student $subject */
        $subject = $this->admin->getSubject();
        $redirectionRouteName = 'tutee_home';

        if (in_array(Student::ROLE_TUTOR, $subject->getRoles())) {
            $redirectionRouteName = 'tutor_home';
        }

        return $this->redirectToRoute($redirectionRouteName, [
            '_switch_user' => $subject->getEmail(),
        ]);
    }
}
