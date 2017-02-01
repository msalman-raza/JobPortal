<?php namespace Portal\User;


use Portal\Repositories\UserRepositoryInterface;

class HrManager implements Employee
{
    protected $id;
    protected $email;
    protected $type = "HR Manager";
    protected $repository;

    public function __construct( UserRepositoryInterface $repository , $data)
    {
        $this->repository = $repository;
        $this->id = ($data->id)??null;
        $this->email = ($data->email)??null;
    }

    public function persist(){
        if($this->id){
            $this->repository->update($this->makeData() , $this->id);
        } else {
            $obj = $this->repository->save($this->makeData());
            $this->id = $obj->id;
        }
    }

    protected function makeData() {
        $data['email'] = $this->email;
        return $data;
    }
}