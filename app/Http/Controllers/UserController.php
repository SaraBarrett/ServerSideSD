<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function allUsers(){
        $cesaeInfo = $this->getCesaeInfo();
        $allContacts = $this->getContacts();

        $contactPerson= DB::table('users')->where('name','Bruno')->first();
        $this->deleteUser(8);


        //função para inserir um user na bd. corre quando chamamos a rota cuja presente função está associada
        //$this->insertUserIntoDB();

        $this->updateUserAtDB();
        $allUsers = $this->getAllUsersFromDB();


        return view('users.all_users', compact('cesaeInfo', 'allContacts', 'allUsers', 'contactPerson'));
    }

    public function addUsers(){
        return view('users.add_users');
    }

    public function insertUserIntoDB(){
        DB::table('users')
        ->insert([
            'name'=> 'Sara Monteiro',
            'email'=> 'myemaildd2@gmail.com',
            'password' => '133444'
        ]);

        return response()->json('utilizador inserido');
    }

    private function getCesaeInfo(){
        $cesaeInfo = [
            'name'=> 'Cesae',
            'email' =>'Cesae@gmail.com',
            'address' =>'Rua do CesAE',
        ];

        return $cesaeInfo;
    }

    protected function getContacts(){
        $contacts =[
        ['id'=> 1, 'name' => 'Sara', 'phone' => '912222222'],
        ['id'=> 2, 'name' => 'Bruno', 'phone' => '912222222'],
        ['id'=> 3, 'name' => 'Márcia', 'phone' => '912222222'],
        ];

        return  $contacts;
    }

    public function updateUserAtDB(){

        Db::table('users')
        ->where('id', 3)
        ->update([
            'address' => 'Rua Nova do Bruno',
            'updated_at' =>now(),
        ]);
    }

    protected function getAllUsersFromDB(){

        $users = Db::table('users')
                ->select('name', 'email', 'password', 'id')
                ->get();


        return $users;
    }

    protected function deleteUser($id){
        Db::table('users')
        ->where('id', $id)
        ->delete();

    }
}
