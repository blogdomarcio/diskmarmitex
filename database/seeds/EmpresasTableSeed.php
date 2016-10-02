<?php

use Illuminate\Database\Seeder;

class EmpresasTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(App\Empresa::class, 10)->create()->each(function($u) {
        $u->entregadores()->save(factory(App\Entregador::class)->make(),2);
    }
);}
}