<?php

namespace App\Models;

use DB;
use Datatables;
use Illuminate\Database\Eloquent\Model;

class Gmail extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address1',
        'address2',
        'city',
        'province',
        'province_code',
        'country',
        'country_code',
        'zipcode',
        'link'
    ];

    public $timestamps = false;

    public static function getDataTables($request)
    {
        $gmails = static::select('*');

        return Datatables::of($gmails)
            ->addColumn('action', function($gmail) {
                return
                    '
                        <a 
                            class="table-action-btn edit-mail" 
                            title="Sửa" 
                            href="#" 
                            data-toggle="modal" 
                            data-target="#myModal"
                            data-id="'.$gmail->id.'" 
                            data-mail="'.$gmail->email.'"
                            data-first-name="'.$gmail->first_name.'"
                            data-last-name="'.$gmail->last_name.'"
                            data-address1="'.$gmail->address1.'"
                            data-address2="'.$gmail->address2.'"
                            data-city="'.$gmail->city.'"
                            data-province-code="'.$gmail->province_code.'"
                            data-country="'.$gmail->country.'"
                            data-zipcode="'.$gmail->zipcode.'"
                            data-link="'.$gmail->link.'"
                        >
                            <i class="fa fa-edit text-info"></i>
                        </a>
                        
                    ';
            })
            ->make(true);
    }
}