<?php

/**
 * Created by PhpStorm.
 * User: Lourence
 * Date: 9/2/2016
 * Time: 10:53 PM
 */
use Illuminate\Database\Eloquent\SoftDeletingTrait;
class AdminStaffs extends Eloquent
{
    use SoftDeletingTrait;
    protected $table = 'admin_staff';
    protected $primaryKey = 'id';
    protected $date = ['deleted_at'];
}