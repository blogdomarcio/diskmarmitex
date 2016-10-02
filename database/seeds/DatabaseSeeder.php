<?php

use Illuminate\Database\Seeder;
use App\Entregador;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClientesTableSeed::class);
        $this->call(EmpresasTableSeed::class);
        // $this->call(EntregadoresTableSeed::class);
    }
}
