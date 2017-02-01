<?php namespace Portal\Repositories;


interface UserRepositoryInterface
{
    public function findByEmail();
    public function save( array $data);
    public function update( array $data, int $id);
}