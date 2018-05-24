<?php

namespace app\models;

use app\Model;
use app\models\connect\Education;
use app\models\connect\Interests;
use app\models\connect\Experience;
use app\models\connect\Skills;
use app\models\connect\Personal;

/**
 * Class CvModel
 */
class CvModel
{
    const PART_EDUCATION = 'education';
    const PART_EXPERIENCE = 'experience';
    const PART_INTERESTS = 'interests';
    const PART_PERSONAL = 'personal';
    const PART_SKILLS = 'skills';

    /**
     * @var array
     */
    private $data = [];

    /**
     * @return \app\models\cv\Personal
     */
    public function getPersonal()
    {
        if (!isset($this->data[self::PART_PERSONAL])) {
            /** @var \app\models\cv\Personal $data */
            $data = Model::CheckModels('\app\models\cv\Personal', (new Personal())->get());
            $this->data[self::PART_PERSONAL] = $data;
        }

        return $this->data[self::PART_PERSONAL];
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function getSkills()
    {
        if (!isset($this->data[self::PART_SKILLS])) {
            /** @var \app\models\cv\Skills $data */
            $data = Model::CheckModel('\app\models\cv\Skills', (new Skills())->get());
            $this->data[self::PART_SKILLS] = $data->getAll();
        }

        return $this->data[self::PART_SKILLS];
    }

    /**
     * @return \app\models\cv\Experience[]
     */
    public function getExperience()
    {
        if (!isset($this->data[self::PART_EXPERIENCE])) {
            /** @var \app\models\cv\Experience $data */
            $data = Model::CheckModels('\app\models\cv\Experience', (new Experience())->get());
            $this->data[self::PART_EXPERIENCE] = $data;
        }

        return $this->data[self::PART_EXPERIENCE];
    }

    /**
     * @return \app\models\cv\Education[]
     */
    public function getEducation()
    {
        if (!isset($this->data[self::PART_EDUCATION])) {
            $data = Model::CheckModels('\app\models\cv\Education', (new Education())->get());
            $this->data[self::PART_EDUCATION] = $data;
        }

        return $this->data[self::PART_EDUCATION];
    }

    /**
     * @return \app\models\cv\Interests[]
     */
    public function getInterests()
    {
        if (!isset($this->data[self::PART_INTERESTS])) {
            $data = Model::CheckModels('\app\models\cv\Interests', (new Interests())->get());
            $this->data[self::PART_INTERESTS] = $data;
        }

        return $this->data[self::PART_INTERESTS];
    }
}
