<?php
/**
 * Created by PhpStorm.
 * User: Hansen
 * Date: 12/24/2014
 * Time: 10:22 AM
 */

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole {

    /**
     * Provide an array of strings that map to valid roles.
     * @param array $roles
     * @return stdClass
     */
    public function validateRoles( array $roles )
    {
        $user = Confide::user();
        $roleValidation = new stdClass();
        foreach( $roles as $role )
        {
            // Make sure theres a valid user, then check role.
            $roleValidation->$role = ( empty($user) ? false : $user->hasRole($role) );
        }
        return $roleValidation;
    }
}