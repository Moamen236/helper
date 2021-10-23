<?php

namespace App\Actions\Fortify;

use App\Models\Role;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'type' => 'required'
        ])->validate();


        switch ($input['type']) {
            case '1':
                $role = Role::where('name', 'specialist')->first();
                break;
            case '2':
                $role = Role::where('name', 'caregiver')->first();
                break;
            case '3':
                $role = Role::where('name', 'guest')->first();
                break;
            default:
                $role = Role::where('name', 'guest')->first();
                break;
                return $role;
        }

        return
            User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'role_id' => $role->id
            ]);
    }
}