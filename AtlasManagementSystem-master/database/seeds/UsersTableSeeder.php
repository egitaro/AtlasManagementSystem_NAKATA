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
            'under_name' => '滋',
            'over_name_kana' => 'ナカタ',
            'under_name_kana' => 'シゲル',
            'mail_address' => 'sigeru@gmail.com',
            'sex' => '1',
            'birth_day' => '19730508',
            'role' => '1',
            'password' => Hash::make('0508'),
            'created_at' => new DateTime(),
        ]);
    }
}
