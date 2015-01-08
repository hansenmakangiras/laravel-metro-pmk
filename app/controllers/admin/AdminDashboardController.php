<?php
/**
 * Created by PhpStorm.
 * User: Hansen
 * Date: 12/19/2014
 * Time: 12:10 PM
 */

class AdminDashboardController extends AdminController {

    /**
     * Admin dashboard
     *
     */
    public function getIndex()
    {
        return View::make('admin/pages/dashboard');
    }

}