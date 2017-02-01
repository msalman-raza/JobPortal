<?php namespace Portal\User;


use Container;

final class UserFactory
{
    private static $instance;
    public static function makeByEmail(array $data){

        if ( SELF::findByEmail( $data['email'] ) ){

        } else {
            $object = json_decode(json_encode($data));
            return new HrManager( Container::make('Portal\Repositories\UserRepositoryInterface') , $object );
        }
    }

    private static function findByEmail(string $email){
        $userRepository = Container::make('Portal\Repositories\UserRepositoryInterface');
        return $userRepository->findByEmail();
    }
}