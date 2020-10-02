<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 * @package App\Repositories
 */
abstract class BaseRepository
{
    /**
     * @var Model
     */
    public  $model;

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * @return mixed
     */
    public function get()
    {
        return $this->model->all();
    }

    /**
     * @param $id
     */
    public function getById($id)
    {
        $this->model->find($id);
    }

    /**
     * @param array $where
     * @param array $data
     * @return mixed
     */
    public function update(array $where, array $data)
    {
        return $this->model->where($where)->update($data);
    }

    /**
     * @param array $where
     */
    public function delete(array $where)
    {
        $this->model->where($where)->delete();
    }

}
