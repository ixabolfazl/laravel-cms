<?php

namespace Database\Seeders;

use App\Models\Theme;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BaseSeeder extends Seeder
{
    public function run()
    {
        $user = User::whereMobile('02191070629')->first();
        if($user) $user->delete();
        User::create([
            'level' => 'admin',
            'name' => 'ابوالفضل',
            'family' => 'خلیلی',
            'email' => 'contact@demo.ir',
            'mobile' => '02191070629',
            'password' => Hash::make('123456789')
        ]);

        $user = User::whereMobile('demo')->first();
        if($user) $user->delete();
        User::create([
            'level' => 'admin',
            'name' => 'ابوالفضل',
            'family' => 'ابوالفضل',
            'email' => 'contest@demo.ir',
            'mobile' => 'demo',
            'password' => Hash::make('demo')
        ]);

        $theme = Theme::whereSlug('starter-theme')->first();
        if($theme) $theme->delete();
        Theme::create([
            'name' => 'قالب اولیه',
            'slug' => 'starter-theme',
            'size' => '1.7 MB',
            'file' => 'themes/starter-theme.zip',
            'images' => 'images/themes/' . Carbon::now()->year . '/starter-theme.png',
            'active' => 1
        ]);
    }
}
