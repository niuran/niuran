<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // 获取 Faker 实例
        $faker = app(Faker\Generator::class);

        $avatars = [
            'https://niuran.cn/uploads/images/avatars/avatars.jpg'
        ];

        // 生成数据集合
        $users = factory(User::class)
                        ->times(10)
                        ->make()
                        ->each(function ($user, $index)
                            use ($faker, $avatars)
        {
           $user->avatar = 'https://niuran.cn/uploads/images/avatars/avatars.jpg';
        });

        // 让隐藏字段可见，并将数据集合转换为数组
        $user_array = $users->makeVisible(['password', 'remember_token'])->toArray();

        // 插入到数据库中
        User::insert($user_array);

        // 单独处理第一个用户的数据
        $user = User::find(1);
        $user->name = 'niuran';
        $user->email = 'niuran1993@gmail.com';
        $user->avatar = 'https://niuran.cn/uploads/images/avatars/201803/08/1_1520493303_pp3JcDy3Cs.png';
        $user->save();

        // 初始化用户角色，将 1 号用户指派为『站长』
        $user->assignRole('Founder');

        // 将 2 号用户指派为『管理员』
        $user = User::find(2);
        $user->name = 'niuran1993';
        $user->email = '980411575@qq.com';
        $user->avatar = 'https://niuran.cn/uploads/images/avatars/avatars.jpg';
        $user->save();
        $user->assignRole('Maintainer');
    }
}