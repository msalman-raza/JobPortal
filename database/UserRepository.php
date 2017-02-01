<?php namespace Database;


use Portal\Repositories\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    public function findByEmail()
    {
        return false;
    }

    public function save(array $data)
    {
        $data['id'] = 1;
        return json_decode(json_encode($data));
    }

    public function update(array $data, int $id)
    {
        // TODO: Implement update() method.
    }
}