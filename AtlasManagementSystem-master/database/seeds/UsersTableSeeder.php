    <?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'over_name' => '仲田',
            'under_name' => '萌木',
            'over_name_kana' => 'ナカタ',
            'under_name_kana' => 'モエギ',
            'mail_address' => 'm@gmail.com',
            'sex' => '1',
            'birth_day' => '20000401',
            'role' => '1',
            'password' => '0141',
        ]);

    }
}
