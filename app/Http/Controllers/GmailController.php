<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 8/22/2018
 * Time: 10:47 AM
 */

namespace App\Http\Controllers;
use App\Models\Gmail;
use Illuminate\Http\Request;

class GmailController extends Controller
{
    public function index()
    {
        return view('gmails.index');
    }

    public function datatables(Request $request)
    {
        return Gmail::getDataTables($request);
    }

    public function update(Request $request, $id)
    {
        $gmail = Gmail::findOrFail($id);
        \DB::beginTransaction();

        try {
            $gmail->update($request->all());

            \DB::commit();
            return 'ok';
        } catch(\Exception $e) {
            \DB::rollback();
            return $e->getMessage();
        }
    }
}