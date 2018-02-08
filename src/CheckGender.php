<?php

namespace Peter;

class CheckGender
{
    private $gender;

    /**
     * @param int $gender
     */
    public function __construct(int $gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return boolean
     */
    public function check()
    {
        return $this->gender >= 18;
    }
}
