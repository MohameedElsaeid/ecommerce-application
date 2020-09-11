<?php


namespace App\Http\Controllers\WebsiteController;


class Cities
{
    private $id;
    private $name;
    private $areas = [];

    /**
     * @param Areas $areas
     */
    public function setAreas(Areas $areas): void
    {
        $this->areas[] = $areas;
    }


    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'areas' => array_map(function (Areas $areas) {
                return $areas->toArray();
            }, $this->areas)
        ];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
}
