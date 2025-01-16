<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MascotasSeeder extends Seeder{
    public function run(): void {

        $perros = [
            ['nombre' => 'Max', 'raza' => 'Labrador', 'edad' => 3, 'tamano' => 'grande', 'tipoAnimal' => 'perro', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/perros/perro1.jpg'],
            ['nombre' => 'Bella', 'raza' => 'Beagle', 'edad' => 2, 'tamano' => 'mediano', 'tipoAnimal' => 'perro', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/perros/perro2.jpg'],
            ['nombre' => 'Charlie', 'raza' => 'Golden Retriever', 'edad' => 4, 'tamano' => 'grande', 'tipoAnimal' => 'perro', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/perros/perro3.jpg'],
            ['nombre' => 'Lucy', 'raza' => 'Bulldog', 'edad' => 1, 'tamano' => 'mediano', 'tipoAnimal' => 'perro', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/perros/perro4.jpg'],
            ['nombre' => 'Cooper', 'raza' => 'Poodle', 'edad' => 5, 'tamano' => 'pequeno', 'tipoAnimal' => 'perro', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/perros/perro5.jpg'],
            ['nombre' => 'Daisy', 'raza' => 'Chihuahua', 'edad' => 2, 'tamano' => 'pequeno', 'tipoAnimal' => 'perro', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/perros/perro6.jpg'],
            ['nombre' => 'Milo', 'raza' => 'Boxer', 'edad' => 3, 'tamano' => 'grande', 'tipoAnimal' => 'perro', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/perros/perro7.jpg'],
            ['nombre' => 'Sadie', 'raza' => 'Husky', 'edad' => 4, 'tamano' => 'grande', 'tipoAnimal' => 'perro', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/perros/perro8.jpg'],
            ['nombre' => 'Oscar', 'raza' => 'Dachshund', 'edad' => 1, 'tamano' => 'pequeno', 'tipoAnimal' => 'perro', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/perros/perro9.jpg'],
            ['nombre' => 'Luna', 'raza' => 'Border Collie', 'edad' => 2, 'tamano' => 'mediano', 'tipoAnimal' => 'perro', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/perros/perro10.jpg'],
            ['nombre' => 'Rocky', 'raza' => 'Shih Tzu', 'edad' => 2, 'tamano' => 'pequeno', 'tipoAnimal' => 'perro', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/perros/perro11.jpg'],
            ['nombre' => 'Bailey', 'raza' => 'Pastor Alemán', 'edad' => 4, 'tamano' => 'grande', 'tipoAnimal' => 'perro', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/perros/perro12.jpg'],
            ['nombre' => 'Toby', 'raza' => 'Cocker Spaniel', 'edad' => 3, 'tamano' => 'mediano', 'tipoAnimal' => 'perro', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/perros/perro13.jpg'],
            ['nombre' => 'Zoe', 'raza' => 'Akita Inu', 'edad' => 5, 'tamano' => 'grande', 'tipoAnimal' => 'perro', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/perros/perro14.jpg'],
            ['nombre' => 'Buddy', 'raza' => 'Terrier', 'edad' => 2, 'tamano' => 'mediano', 'tipoAnimal' => 'perro', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/perros/perro15.jpg'],
            ['nombre' => 'Maggie', 'raza' => 'Pug', 'edad' => 1, 'tamano' => 'pequeno', 'tipoAnimal' => 'perro', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/perros/perro16.jpg'],
            ['nombre' => 'Buster', 'raza' => 'Bulldog Francés', 'edad' => 3, 'tamano' => 'mediano', 'tipoAnimal' => 'perro', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/perros/perro17.jpg'],
            ['nombre' => 'Lola', 'raza' => 'Corgi', 'edad' => 2, 'tamano' => 'pequeno', 'tipoAnimal' => 'perro', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/perros/perro18.jpg'],
            ['nombre' => 'Marley', 'raza' => 'Samoyedo', 'edad' => 4, 'tamano' => 'grande', 'tipoAnimal' => 'perro', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/perros/perro19.jpg'],
        ];
        
        $gatos = [
            ['nombre' => 'Oliver', 'raza' => 'Persa', 'edad' => 3, 'tamano' => 'pequeno', 'tipoAnimal' => 'gato', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/gatos/gato1.jpg'],
            ['nombre' => 'Lily', 'raza' => 'Siames', 'edad' => 2, 'tamano' => 'pequeno', 'tipoAnimal' => 'gato', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/gatos/gato2.jpg'],
            ['nombre' => 'Leo', 'raza' => 'Maine Coon', 'edad' => 5, 'tamano' => 'grande', 'tipoAnimal' => 'gato', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/gatos/gato3.jpg'],
            ['nombre' => 'Chloe', 'raza' => 'Bengala', 'edad' => 1, 'tamano' => 'mediano', 'tipoAnimal' => 'gato', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/gatos/gato4.jpg'],
            ['nombre' => 'Simba', 'raza' => 'Abisinio', 'edad' => 4, 'tamano' => 'mediano', 'tipoAnimal' => 'gato', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/gatos/gato5.jpg'],
            ['nombre' => 'Sophie', 'raza' => 'Ragdoll', 'edad' => 2, 'tamano' => 'grande', 'tipoAnimal' => 'gato', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/gatos/gato6.jpg'],
            ['nombre' => 'Jack', 'raza' => 'Sphynx', 'edad' => 3, 'tamano' => 'pequeno', 'tipoAnimal' => 'gato', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/gatos/gato7.jpg'],
            ['nombre' => 'Molly', 'raza' => 'Azul Ruso', 'edad' => 1, 'tamano' => 'mediano', 'tipoAnimal' => 'gato', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/gatos/gato8.jpg'],
            ['nombre' => 'Buddy', 'raza' => 'Manx', 'edad' => 3, 'tamano' => 'pequeno', 'tipoAnimal' => 'gato', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/gatos/gato9.jpg'],
            ['nombre' => 'Mimi', 'raza' => 'Angora', 'edad' => 2, 'tamano' => 'pequeno', 'tipoAnimal' => 'gato', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/gatos/gato10.jpg'],
            ['nombre' => 'Luna', 'raza' => 'British Shorthair', 'edad' => 2, 'tamano' => 'mediano', 'tipoAnimal' => 'gato', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/gatos/gato11.jpg'],
            ['nombre' => 'Oscar', 'raza' => 'Exótico de pelo corto', 'edad' => 4, 'tamano' => 'mediano', 'tipoAnimal' => 'gato', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/gatos/gato12.jpg'],
            ['nombre' => 'Mia', 'raza' => 'Siberiano', 'edad' => 3, 'tamano' => 'grande', 'tipoAnimal' => 'gato', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/gatos/gato13.jpg'],
            ['nombre' => 'Felix', 'raza' => 'Chartreux', 'edad' => 5, 'tamano' => 'mediano', 'tipoAnimal' => 'gato', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/gatos/gato14.jpg'],
            ['nombre' => 'Daisy', 'raza' => 'Calico', 'edad' => 1, 'tamano' => 'pequeno', 'tipoAnimal' => 'gato', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/gatos/gato15.jpg'],
            ['nombre' => 'Tom', 'raza' => 'British Longhair', 'edad' => 2, 'tamano' => 'grande', 'tipoAnimal' => 'gato', 'sexo' => 'macho', 'foto_mascotas' => '/imgs/gatos/gato16.jpg'],
            ['nombre' => 'Lucy', 'raza' => 'American Curl', 'edad' => 4, 'tamano' => 'mediano', 'tipoAnimal' => 'gato', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/gatos/gato17.jpg'],
            ['nombre' => 'Simone', 'raza' => 'Birmano', 'edad' => 3, 'tamano' => 'grande', 'tipoAnimal' => 'gato', 'sexo' => 'hembra', 'foto_mascotas' => '/imgs/gatos/gato18.jpg'],
        ];

        DB::table('mascotas')->insert(array_merge($perros, $gatos));
    }
}
