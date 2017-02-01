<?php namespace Portal\Root;


use Container;
use Portal\UserJobs\UserJobsFactory;

class ManageJobs implements ManageJobsInterface
{

    public function postJob(array $data)
    {
        $user = UserJobsFactory::makeByEmail($data);
        print_r($user);
    }

    public function approveJob(string $hash)
    {
        // TODO: Implement approveJob() method.
    }

    public function spamJob(string $hash)
    {
        // TODO: Implement spamJob() method.
    }
}