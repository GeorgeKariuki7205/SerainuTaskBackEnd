<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class registeringUsers extends Controller
{
    //
    public function creatingUsersWithRoles(){

        $role1 = Role::create(['name' => 'adminUser']);
        $role2 = Role::create(['name' => 'normalUser']);

        // ! ATHI USERS. 

        $athiUserAdmin = new User();
        $athiUserAdmin->name = 'Athi Admin User.';
        $athiUserAdmin->email = 'athinadmin@mail.com';
        $athiUserAdmin->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $athiUserAdmin->organisation_id = 1;
        $athiUserAdmin->save();
        $athiUserAdmin->assignRole('adminUser');

        $athiUserNormalUser = new User();
        $athiUserNormalUser->name = 'Athi Normal User';
        $athiUserNormalUser->email = 'athinormal@mail.com';
        $athiUserNormalUser->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $athiUserNormalUser->organisation_id = 1;
        $athiUserNormalUser->save();
        $athiUserNormalUser->assignRole('normalUser');

        // ! TANA USERS.

        $tanaUserAdmin = new User();
        $tanaUserAdmin->name = 'Tana Admin User.';
        $tanaUserAdmin->email = 'tanaadmin@mail.com';
        $tanaUserAdmin->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $tanaUserAdmin->organisation_id = 2;
        $tanaUserAdmin->save();
        $tanaUserAdmin->assignRole('adminUser');

        $tanaUserNormalUser = new User();
        $tanaUserNormalUser->name = 'Tana Normal User';
        $tanaUserNormalUser->email = 'tananormaluser@mail.com';
        $tanaUserNormalUser->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $tanaUserNormalUser->organisation_id = 2;
        $tanaUserNormalUser->save();
        $tanaUserNormalUser->assignRole('normalUser');

        // ! GALANA USERS. 
        $galanaUserAdmin = new User();
        $galanaUserAdmin->name = 'Galana Admin User';
        $galanaUserAdmin->email = 'galanaadmin@mail.com';
        $galanaUserAdmin->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $galanaUserAdmin->organisation_id = 3;
        $galanaUserAdmin->save();
        $galanaUserAdmin->assignRole('adminUser');

        $galanaUserNormalUser = new User();
        $galanaUserNormalUser->name = 'Galana Normal User';
        $galanaUserNormalUser->email = 'galananormaluser@mail.com';
        $galanaUserNormalUser->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $galanaUserNormalUser->organisation_id = 3;
        $galanaUserNormalUser->save();
        $galanaUserNormalUser->assignRole('normalUser');


        // ! EWASONYIRO USERS.
        $ewasoNyiroUserAdmin = new User();
        $ewasoNyiroUserAdmin->name = 'Ewaso-Nyiro Admin User';
        $ewasoNyiroUserAdmin->email = 'ewaso-nyiroadmin@mail.com';
        $ewasoNyiroUserAdmin->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $ewasoNyiroUserAdmin->organisation_id = 4;
        $ewasoNyiroUserAdmin->save();
        $ewasoNyiroUserAdmin->assignRole('adminUser');

        $ewasoNyiroNormalUser = new User();
        $ewasoNyiroNormalUser->name = 'Ewaso-Nyiro Normal User';
        $ewasoNyiroNormalUser->email = 'ewaso-nyironormaluser@mail.com';
        $ewasoNyiroNormalUser->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $ewasoNyiroNormalUser->organisation_id = 4;
        $ewasoNyiroNormalUser->save();
        $ewasoNyiroNormalUser->assignRole('normalUser');


        $nzoiaUserAdmin = new User();
        $nzoiaUserAdmin->name = 'Nzoia Admin User';
        $nzoiaUserAdmin->email = 'nzoiaadmin@mail.com';
        $nzoiaUserAdmin->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $nzoiaUserAdmin->organisation_id = 5;
        $nzoiaUserAdmin->save();
        $nzoiaUserAdmin->assignRole('adminUser');

        $nzoiaUserNormalUser = new User();
        $nzoiaUserNormalUser->name = 'Nzoia Normal User';
        $nzoiaUserNormalUser->email = 'nzoianormaluser@mail.com';
        $nzoiaUserNormalUser->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $nzoiaUserNormalUser->organisation_id = 5;
        $nzoiaUserNormalUser->save();
        $nzoiaUserNormalUser->assignRole('normalUser');


        return "SuccessIn Adding Users And Roles.";

    }

}
