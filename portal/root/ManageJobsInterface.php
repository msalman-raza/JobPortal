<?php namespace Portal\Root;


interface ManageJobsInterface
{
    public function postJob(array $data);

    public function approveJob(string $hash);

    public function spamJob(string $hash);
}