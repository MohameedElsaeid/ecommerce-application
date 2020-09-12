<?php


namespace App\Http\Controllers\WebsiteController;


class City
{
    private $id;
    private $name;
    private $areas = [];

    /**
     * @param Area $areas
     */
    public function setAreas(Area $areas): void
    {
        $this->areas[] = $areas;
    }


    public function toArray()
    {
        return [
            'cityId' => $this->getId(),
            'cityName' => $this->getName(),
            'areas' => array_map(function (Area $areas) {
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
