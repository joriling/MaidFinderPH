<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author Hp
 */
class AdminController  extends BaseController {
    
    public function __construct() {
        
        $this->beforeFilter(function() {
            if(! Session::has('admin')) {
                return Redirect::to('user-login');
            }
        });
    }
    public function login() {

    }
    public function logout() {
        Session::flush();
        return true;
    }
    
}
