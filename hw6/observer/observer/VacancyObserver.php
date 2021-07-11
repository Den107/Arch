<?php

namespace hw6\observer\observer;

use hw6\observer\entity\User;
use hw6\observer\entity\Vacancy;

class VacancyObserver
{

    private User $user;

    public function __construct($user)
    {
        $this->user = $user;
    }


    public function update(Vacancy $vacancy)
    {
        echo "{$this->user->getName()}, появилась новая вакансия '{$vacancy->getTitle()}' с зарплатой '{$vacancy->getSalary()}.'";
    }


    public function getUser(): User
    {
        return $this->user;
    }
}
