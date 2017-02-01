<?php namespace Portal\Jobs;


use DI\ContainerBuilder;

class Job implements JobInterface
{
    protected $id;
    protected $user;
    protected $title;
    protected $description;
    protected $hash;
    protected $type = 'Default';
    protected $status = 'Pending';

    public function __construct()
    {
        $container = ContainerBuilder::buildDevContainer();
    }
}