<?php


namespace hw6\observer\entity;




class User
{
    private $name;
    private $email;
    private $experience;


    public function __construct($name, $email, $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }


    public function getExperience()
    {
        return $this->experience;
    }
}
