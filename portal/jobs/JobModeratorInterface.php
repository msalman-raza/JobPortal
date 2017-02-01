<?php namespace Portal\Jobs;


interface JobModeratorInterface
{
    public function postJob();

    public function publishJob();

    public function archiveJob();
}