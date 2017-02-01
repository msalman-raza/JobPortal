<?php namespace Portal\UserJobs;


use Portal\User\UserFactory;

class UserJobsFactory
{
    public static function makeByEmail(array $data){
        $user = UserFactory::makeByEmail($data);
        return new UserJobs( $user );
    }
}