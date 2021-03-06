<?php
/**
 * Created by PhpStorm.
 * User: Hansen
 * Date: 12/24/2014
 * Time: 10:22 AM
 */
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    public function preparePermissionsForDisplay($permissions)
    {
        // Get all the available permissions
        $availablePermissions = $this->all()->toArray();

        foreach($permissions as &$permission) {
            array_walk($availablePermissions, function(&$value) use(&$permission){
                if($permission->name == $value['name']) {
                    $value['checked'] = true;
                }
            });
        }
        return $availablePermissions;
    }

    /**
     * Convert from input array to savable array.
     * @param $permissions
     * @return array
     */
    public function preparePermissionsForSave( $permissions )
    {
        $availablePermissions = $this->all()->toArray();
        $preparedPermissions = array();
        foreach( (array) $permissions as $permission )
        {
            array_walk($availablePermissions, function(&$value) use($permission, &$preparedPermissions){
                if($permission == (int)$value['id']) {
                    $preparedPermissions[] = $permission;
                }
            });
        }
        return $preparedPermissions;
    }
}