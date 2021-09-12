<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    private $products_list = array(
      array(
        'Aceites Esenciales',
        'aceites-esenciales',
        array(
          'https://nutrabiotics.info/wp-content/uploads/P-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/V-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/P-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/V-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/P-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/V-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/P-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/V-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/P-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/V-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/P-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/V-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/P-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/V-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/P-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/V-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/P-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/V-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/P-CIDE.png',
          'https://nutrabiotics.info/wp-content/uploads/V-CIDE.png',
        )
      ),
      array(
        'Alimento',
        'alimento',
        array(
          'https://nutrabiotics.info/wp-content/uploads/KETOESSENS-WEB.jpg',
          'https://nutrabiotics.info/wp-content/uploads/S-CIDE.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KETOESSENS-WEB.jpg',
          'https://nutrabiotics.info/wp-content/uploads/S-CIDE.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KETOESSENS-WEB.jpg',
          'https://nutrabiotics.info/wp-content/uploads/S-CIDE.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KETOESSENS-WEB.jpg',
          'https://nutrabiotics.info/wp-content/uploads/S-CIDE.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KETOESSENS-WEB.jpg',
          'https://nutrabiotics.info/wp-content/uploads/S-CIDE.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KETOESSENS-WEB.jpg',
          'https://nutrabiotics.info/wp-content/uploads/S-CIDE.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KETOESSENS-WEB.jpg',
          'https://nutrabiotics.info/wp-content/uploads/S-CIDE.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KETOESSENS-WEB.jpg',
          'https://nutrabiotics.info/wp-content/uploads/S-CIDE.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KETOESSENS-WEB.jpg',
          'https://nutrabiotics.info/wp-content/uploads/S-CIDE.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KETOESSENS-WEB.jpg',
          'https://nutrabiotics.info/wp-content/uploads/S-CIDE.jpg',
        )
      ),
      array(
        'Fitoterapéutico',
        'fitoterapeutico',
        array(
          'https://nutrabiotics.info/wp-content/uploads/LX-v2-caja.jpg',
          'https://nutrabiotics.info/wp-content/uploads/LX-v2-caja.jpg',
          'https://nutrabiotics.info/wp-content/uploads/LX-v2-caja.jpg',
          'https://nutrabiotics.info/wp-content/uploads/LX-v2-caja.jpg',
          'https://nutrabiotics.info/wp-content/uploads/LX-v2-caja.jpg',
          'https://nutrabiotics.info/wp-content/uploads/LX-v2-caja.jpg',
          'https://nutrabiotics.info/wp-content/uploads/LX-v2-caja.jpg',
          'https://nutrabiotics.info/wp-content/uploads/LX-v2-caja.jpg',
          'https://nutrabiotics.info/wp-content/uploads/LX-v2-caja.jpg',
          'https://nutrabiotics.info/wp-content/uploads/LX-v2-caja.jpg',
        )
      ),
      array(
        'Medicamento',
        'medicamento',
        array(
          'https://nutrabiotics.info/wp-content/uploads/COMO-CIDES-1.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AL-v2-combo.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KL-v2-cb.jpg',
          'https://nutrabiotics.info/wp-content/uploads/COMO-CIDES-1.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AL-v2-combo.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KL-v2-cb.jpg',
          'https://nutrabiotics.info/wp-content/uploads/COMO-CIDES-1.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AL-v2-combo.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KL-v2-cb.jpg',
          'https://nutrabiotics.info/wp-content/uploads/COMO-CIDES-1.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AL-v2-combo.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KL-v2-cb.jpg',
          'https://nutrabiotics.info/wp-content/uploads/COMO-CIDES-1.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AL-v2-combo.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KL-v2-cb.jpg',
          'https://nutrabiotics.info/wp-content/uploads/COMO-CIDES-1.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AL-v2-combo.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KL-v2-cb.jpg',
          'https://nutrabiotics.info/wp-content/uploads/COMO-CIDES-1.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AL-v2-combo.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KL-v2-cb.jpg',
          'https://nutrabiotics.info/wp-content/uploads/COMO-CIDES-1.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AL-v2-combo.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KL-v2-cb.jpg',
          'https://nutrabiotics.info/wp-content/uploads/COMO-CIDES-1.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AL-v2-combo.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KL-v2-cb.jpg',
          'https://nutrabiotics.info/wp-content/uploads/COMO-CIDES-1.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AL-v2-combo.jpg',
          'https://nutrabiotics.info/wp-content/uploads/KL-v2-cb.jpg',
        )
      ),
      array(
        'Nutracéutico',
        'nutraceutico',
        array(
          'https://nutrabiotics.info/wp-content/uploads/AD-v2-Frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/CM-v2-frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AD-v2-Frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/CM-v2-frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AD-v2-Frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/CM-v2-frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AD-v2-Frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/CM-v2-frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AD-v2-Frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/CM-v2-frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AD-v2-Frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/CM-v2-frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AD-v2-Frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/CM-v2-frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AD-v2-Frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/CM-v2-frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AD-v2-Frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/CM-v2-frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/AD-v2-Frasco.jpg',
          'https://nutrabiotics.info/wp-content/uploads/CM-v2-frasco.jpg',
        )
      )
    );
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $counter = 1;
      foreach ($this->products_list as $category) {
        $idCategory = Category::create([
          'name' => $category[0],
          'url' => $category[1],
        ])->id;
        foreach ($category[2] as $products) {
          Product::create([
            'name' => 'Producto ' . $counter,
            'category_id' => $idCategory,
            'short_description' => 'Descripción corta del Producto ' . $counter,
            'description' => 'Descripción del Producto ' . $counter . '. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente optio hic architecto eos, suscipit animi. Laudantium est similique sapiente quis at. Maxime enim ipsa dolores a necessitatibus voluptatum ipsum officiis.',
            'components' => 'Componentes de Producto ' . $counter,
            'image' => $products,
            'quantity' => rand(0, 1000),
            'price' => rand(1, 30) * 1000,
            'discount' => rand(0, 100),
          ]);
          $counter++;
        }
      }
    }
}
