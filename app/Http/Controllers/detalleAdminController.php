<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\FichaSalud;

class detalleAdminController {

    public function Edit($id) {

        $mascota = DB::table('mascotas')->where('idMascota', $id)->first();
        $fichaSalud = DB::table('ficha_salud')->where('idMascota', $id)->first();

        return view('detalleAdmin', [
            'mascota' => $mascota,
            'fichaSalud' => $fichaSalud
        ]);
    }

    public function updateFichaSalud(Request $request, $id) {
        $validatedData = $request->validate([
            'esterilizacion' => 'nullable|boolean',
            'desparasitacion' => 'nullable|boolean',
            'peso' => 'nullable|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
            'alergias' => 'required|string|max:255',
            'vPuestas' => 'nullable|string|max:255',
            'vPendientes' => 'nullable|string|max:255',
        ]);

        $fichaSalud = FichaSalud::where('idMascota', $id)->first();

        if (!$fichaSalud) {
            return redirect()->back()->with('error', 'Ficha de salud no encontrada.');
        }

        $esterilizacion = intval($validatedData['esterilizacion'] ?? $fichaSalud->esterilizacion);
        $desparasitacion = intval($validatedData['desparasitacion'] ?? $fichaSalud->desparasitacion);
        $peso = $validatedData['peso'] ?? $fichaSalud->peso;
        $vacunasPuestas = $validatedData['vPuestas'] ?? $fichaSalud->vacunasPuestas;
        $vacunasPendientes = $validatedData['vPendientes'] ?? $fichaSalud->vacunasPendientes;

        $fichaSalud->update([
            'esterilizacion' => $esterilizacion,
            'desparasitacion' => $desparasitacion,
            'peso' => $peso,
            'alergias' => $validatedData['alergias'],
            'vacunasPuestas' => $vacunasPuestas,
            'vacunasPendientes' =>$vacunasPendientes,
        ]);

        return redirect()->route('listaMascotaAdmin')->with('success', 'Ficha de salud actualizada correctamente.');
    }

    public function deleteMascota($id) {
        
        DB::transaction(function () use ($id) {
            DB::table('ficha_salud')->where('idMascota', $id)->delete();
            DB::table('mascotas')->where('idMascota', $id)->delete();
        });
    
        return redirect()->route('listaMascotaAdmin')->with('success', 'La mascota ha sido eliminada correctamente.');
    }
    
}