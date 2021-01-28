<?php

use App\Porfolio;
use Illuminate\Database\Seeder;

class PorfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Porfolio::create([
            'title' => 'Sistema de Ventas',
            'image' => 'assets/img/portfolio/sales-purchases.PNG',
            'git' => 'https://github.com/BrayanDaga/sis-ventas',
            'demo' => 'http://mysalesphp.herokuapp.com/login',
            'desc' => '(En proceso) Sistema de ventas desarrollado en laravel crud de proveedor , cliente , producto y compa'
        ]);
    }
}
