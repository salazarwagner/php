<?php

use Illuminate\Database\Seeder;

use App\Categoria;
use App\Conta;

class ContaSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    factory(App\Conta::class, 30)->create();
  }
}
