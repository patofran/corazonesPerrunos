<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FichaSaludSeeder extends Seeder {

    public function run(): void {
        
        $datos = [
            ['idMascota' => '1', 'MicroChip' => '01', 'vacunasPuestas' => 'Parvovirus,Moquillo,Rabia', 'vacunasPendientes' => 'Leptospirosis', 'alergias' => 'Ninguna', 'peso' => '8.73', 'esterilizacion' => '1', 'desparasitacion' => '1'],
            ['idMascota' => '2', 'MicroChip' => '02', 'vacunasPuestas' => 'Parvovirus,Rabia,hepatitis,Leptospirosis', 'vacunasPendientes' => '', 'alergias' => 'Lacteos', 'peso' => '3.61', 'esterilizacion' => '0', 'desparasitacion' => '0'],
            ['idMascota' => '3', 'MicroChip' => '03', 'vacunasPuestas' => 'Moquillo,Rabia', 'vacunasPendientes' => 'Hepatitis,Parvovirus', 'alergias' => 'Ninguna', 'peso' => '11.30', 'esterilizacion' => '0', 'desparasitacion' => '1'],
            ['idMascota' => '4', 'MicroChip' => '04', 'vacunasPuestas' => 'Moquillo', 'vacunasPendientes' => 'Parvovirus,Hepatitis', 'alergias' => 'Ninguna', 'peso' => '4.86', 'esterilizacion' => '1', 'desparasitacion' => '1'],
            ['idMascota' => '5', 'MicroChip' => '05', 'vacunasPuestas' => 'Rabia,Leptospirosis,Parvovirus', 'vacunasPendientes' => 'Moquillo', 'alergias' => 'Ninguna', 'peso' => '4.91', 'esterilizacion' => '0', 'desparasitacion' => '1'],
            ['idMascota' => '6', 'MicroChip' => '06', 'vacunasPuestas' => 'Panleucopenia,Rinotraqueitis,Moquillo', 'vacunasPendientes' => '', 'alergias' => 'Ninguna', 'peso' => '5.27', 'esterilizacion' => '0', 'desparasitacion' => '0'],
            ['idMascota' => '7', 'MicroChip' => '07', 'vacunasPuestas' => 'Leptospirosis,Moquillo,Rabia,hepatitis', 'vacunasPendientes' => 'Parvovirus', 'alergias' => 'Acaros del polvo', 'peso' => '6.01', 'esterilizacion' => '1', 'desparasitacion' => '1'],
            ['idMascota' => '8', 'MicroChip' => '08', 'vacunasPuestas' => 'Rinotraqueitis,Moquillo,Rabia,Leptospirosis', 'vacunasPendientes' => '', 'alergias' => 'Ninguna', 'peso' => '7.51', 'esterilizacion' => '0', 'desparasitacion' => '0'],
            ['idMascota' => '9', 'MicroChip' => '09', 'vacunasPuestas' => 'Leptospirosis,Rabia,Moquillo', 'vacunasPendientes' => 'Moquillo', 'alergias' => 'Ninguna', 'peso' => '8.73', 'esterilizacion' => '1', 'desparasitacion' => '1'],
            ['idMascota' => '10', 'MicroChip' => '010', 'vacunasPuestas' => 'Parvovirus,Rinotraqueitis', 'vacunasPendientes' => '', 'alergias' => 'Ninguna', 'peso' => '6.98', 'esterilizacion' => '0', 'desparasitacion' => '0'],
            ['idMascota' => '11', 'MicroChip' => '011', 'vacunasPuestas' => 'Moquillo,Leptospirosis', 'vacunasPendientes' => 'Hepatitis,Rabia', 'alergias' => 'Ninguna', 'peso' => '5.07', 'esterilizacion' => '1', 'desparasitacion' => '0'],
            ['idMascota' => '12', 'MicroChip' => '012', 'vacunasPuestas' => 'Hepatitis,Rabia', 'vacunasPendientes' => 'Leptospirosis', 'alergias' => 'Alergia a pulgas', 'peso' => '8.00', 'esterilizacion' => '1', 'desparasitacion' => '1'],
            ['idMascota' => '13', 'MicroChip' => '013', 'vacunasPuestas' => 'Rinotraqueitis,Rabia', 'vacunasPendientes' => 'Panleucopenia,Moquillo', 'alergias' => 'Ninguna', 'peso' => '8.73', 'esterilizacion' => '0', 'desparasitacion' => '0'],
            ['idMascota' => '14', 'MicroChip' => '014', 'vacunasPuestas' => 'Leptospirosis,Hepatitis,Parvovirus', 'vacunasPendientes' => '', 'alergias' => 'Ninguna', 'peso' => '5.92', 'esterilizacion' => '0', 'desparasitacion' => '1'],
            ['idMascota' => '15', 'MicroChip' => '015', 'vacunasPuestas' => 'Moquillo,Parvovirus', 'vacunasPendientes' => 'Rabia,Leptospirosis', 'alergias' => 'Ninguna', 'peso' => '6.55', 'esterilizacion' => '0', 'desparasitacion' => '0'],
            ['idMascota' => '16', 'MicroChip' => '016', 'vacunasPuestas' => 'Panleucopenia,Moquillo,Hepatitis', 'vacunasPendientes' => 'Rabia', 'alergias' => 'Ninguna', 'peso' => '3.73', 'esterilizacion' => '0', 'desparasitacion' => '0'],
            ['idMascota' => '17', 'MicroChip' => '017', 'vacunasPuestas' => 'Moquillo,Rabia,Leptospirosis', 'vacunasPendientes' => '', 'alergias' => 'tratamientos antipulgas', 'peso' => '9.02', 'esterilizacion' => '1', 'desparasitacion' => '1'],
            ['idMascota' => '18', 'MicroChip' => '018', 'vacunasPuestas' => 'Hepatitis,Rabia,Rinotraqueitis', 'vacunasPendientes' => '', 'alergias' => 'Ninguna', 'peso' => '3.40', 'esterilizacion' => '1', 'desparasitacion' => '1'],
            ['idMascota' => '19', 'MicroChip' => '019', 'vacunasPuestas' => 'Panleucopenia, Rinotraqueitis, Parvovirus', 'vacunasPendientes' => '', 'alergias' => 'Ninguna', 'peso' => '5.00', 'esterilizacion' => '0', 'desparasitacion' => '0'],
            ['idMascota' => '20', 'MicroChip' => '020', 'vacunasPuestas' => 'Trivalente felina,Leucemia felina', 'vacunasPendientes' => 'Rabia', 'alergias' => 'Ninguna', 'peso' => '1.98', 'esterilizacion' => '0', 'desparasitacion' => '0'],
            ['idMascota' => '21', 'MicroChip' => '021', 'vacunasPuestas' => 'Rabia,Calicivirus', 'vacunasPendientes' => 'Panleucopenia,Leucemia felina', 'alergias' => 'Ninguna', 'peso' => '3.80', 'esterilizacion' => '0', 'desparasitacion' => '0'],
            ['idMascota' => '22', 'MicroChip' => '022', 'vacunasPuestas' => 'Trivalente felina,Panleucopenia', 'vacunasPendientes' => 'Leucemia felina', 'alergias' => 'Polen', 'peso' => '4.02', 'esterilizacion' => '1', 'desparasitacion' => '1'],
            ['idMascota' => '23', 'MicroChip' => '023', 'vacunasPuestas' => 'Trivalente felina,Calicivirus', 'vacunasPendientes' => '', 'alergias' => 'Ninguna', 'peso' => '2.81', 'esterilizacion' => '0', 'desparasitacion' => '1'],
            ['idMascota' => '24', 'MicroChip' => '024', 'vacunasPuestas' => 'Rabia', 'vacunasPendientes' => 'Leucemia felina,Rinotraqueitis', 'alergias' => 'Ninguna', 'peso' => '3.56', 'esterilizacion' => '1', 'desparasitacion' => '0'],
            ['idMascota' => '25', 'MicroChip' => '025', 'vacunasPuestas' => 'Trivalente felina,Panleucopenia', 'vacunasPendientes' => '', 'alergias' => 'Ninguna', 'peso' => '4.73', 'esterilizacion' => '1', 'desparasitacion' => '0'],
            ['idMascota' => '26', 'MicroChip' => '026', 'vacunasPuestas' => 'Rabia,Calicivirus', 'vacunasPendientes' => '', 'alergias' => 'Ninguna', 'peso' => '2.68', 'esterilizacion' => '0', 'desparasitacion' => '1'],
            ['idMascota' => '27', 'MicroChip' => '027', 'vacunasPuestas' => 'Panleucopenia,Rabia', 'vacunasPendientes' => 'Trivalente felina', 'alergias' => 'Ninguna', 'peso' => '3.71', 'esterilizacion' => '1', 'desparasitacion' => '1'],
            ['idMascota' => '28', 'MicroChip' => '028', 'vacunasPuestas' => 'Trivalente felina,Rinotraqueitis', 'vacunasPendientes' => 'Calicivirus', 'alergias' => 'Ninguna', 'peso' => '2.90', 'esterilizacion' => '0', 'desparasitacion' => '0'],
            ['idMascota' => '29', 'MicroChip' => '029', 'vacunasPuestas' => 'Panleucopenia,Calicivirus', 'vacunasPendientes' => 'Rabia', 'alergias' => 'Ninguna', 'peso' => '4.02', 'esterilizacion' => '0', 'desparasitacion' => '1'],
            ['idMascota' => '30', 'MicroChip' => '030', 'vacunasPuestas' => 'Rabia,Panleucopenia', 'vacunasPendientes' => 'Leucemia felina', 'alergias' => 'Ninguna', 'peso' => '2.87', 'esterilizacion' => '1', 'desparasitacion' => '0'],
            ['idMascota' => '31', 'MicroChip' => '031', 'vacunasPuestas' => 'Rabia,Trivalente felina,Leucemia felina', 'vacunasPendientes' => '', 'alergias' => 'Ninguna', 'peso' => '2.49', 'esterilizacion' => '1', 'desparasitacion' => '1'],
            ['idMascota' => '32', 'MicroChip' => '032', 'vacunasPuestas' => 'Panleucopenia,Leucemia felina', 'vacunasPendientes' => 'Calicivirus,Rinotraqueitis', 'alergias' => 'Ninguna', 'peso' => '4.01', 'esterilizacion' => '0', 'desparasitacion' => '0'],
            ['idMascota' => '33', 'MicroChip' => '033', 'vacunasPuestas' => 'Rinotraqueitis,Rabia,Trivalente felina', 'vacunasPendientes' => '', 'alergias' => 'Ninguna', 'peso' => '3.77', 'esterilizacion' => '0', 'desparasitacion' => '1'],
            ['idMascota' => '34', 'MicroChip' => '034', 'vacunasPuestas' => 'Calicivirus,Rinotraqueitis,Panleucopenia,Leucemia felina', 'vacunasPendientes' => '', 'alergias' => 'Ninguna', 'peso' => '2.83', 'esterilizacion' => '1', 'desparasitacion' => '1'],
            ['idMascota' => '35', 'MicroChip' => '035', 'vacunasPuestas' => 'Rabia,Rinotraqueitis,Leucemia felina', 'vacunasPendientes' => 'Moquillo', 'alergias' => 'Ninguna', 'peso' => '3.64', 'esterilizacion' => '0', 'desparasitacion' => '1'],
            ['idMascota' => '36', 'MicroChip' => '036', 'vacunasPuestas' => 'Panleucopenia,Rinotraqueitis', 'vacunasPendientes' => 'Leucemia felina', 'alergias' => 'Ninguna', 'peso' => '4.22', 'esterilizacion' => '1', 'desparasitacion' => '0'],
            ['idMascota' => '37', 'MicroChip' => '037', 'vacunasPuestas' => 'Rabia,Panleucopenia,Leucemia felina', 'vacunasPendientes' => 'Trivalente felina', 'alergias' => 'Ninguna', 'peso' => '3.51', 'esterilizacion' => '1', 'desparasitacion' => '1'],
            
        ];
        
        DB::table('ficha_salud')->insert(array_merge($datos));
    }
}
