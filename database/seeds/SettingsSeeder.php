<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Settings;
// use App\Settings;

class SettingsSeeder extends Seeder
{
  public function run(){
    Settings::create([
      'short_des' => 'Defualt short description',
      'description' => 'Default description',
      'logo' => 'default-logo.png',
      'photo' => 'defualt-photo.png',
      'address' => 'Port Bell Rd, Nakawa, Kampala, Uganda',
      'email' => 'jeremiah.bridge.patterns@gmail.com',
      'phone' => '0788931578',
    ]);
  }

}
