<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([

            ['id' => 9, 'name' => 'Автомобили с пробегом', 'group' => 'Транспорт'],
            ['id' => 10, 'name' => 'Запчасти и аксессуары', 'group' => 'Транспорт'],
            ['id' => 11, 'name' => 'Водный транспорт', 'group' => 'Транспорт'],
            ['id' => 14, 'name' => 'Мотоциклы и мототехника', 'group' => 'Транспорт'],
            ['id' => 23, 'name' => 'Комнаты', 'group' => 'Недвижимость'],
            ['id' => 24, 'name' => 'Квартиры', 'group' => 'Недвижимость'],
            ['id' => 26, 'name' => 'Дома, дачи, коттеджи', 'group' => 'Недвижимость'],
            ['id' => 42, 'name' => 'Гаражи и машиноместа', 'group' => 'Недвижимость'],
            ['id' => 81, 'name' => 'Грузовики и спецтехника', 'group' => 'Транспорт'],
            ['id' => 85, 'name' => 'Земельные участки', 'group' => 'Недвижимость'],
            ['id' => 86, 'name' => 'Коммерческая недвижимость', 'group' => 'Недвижимость'],
            ['id' => 109, 'name' => 'Новые автомобили', 'group' => 'Транспорт'],
            ['id' => 111, 'name' => 'Вакансии (поиск сотрудников)', 'group' => 'Работа'],
            ['id' => 123, 'name' => 'Резюме (поиск работы)', 'group' => 'Работа']
        ]);
    }
}