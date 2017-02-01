<?php namespace Portal\UserJobs;


use Portal\User\Employee;

class UserJobs implements UserJobsInterface
{
    protected $user;

    public function __construct( Employee $user )
    {
        $this->user = $user;
        $this->user->persist();
    }

    public function getJobsCount()
    {
        // TODO: Implement getJobsCount() method.
    }
}