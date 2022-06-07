<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudiante;

class Estudiantes extends Component
{
    public $estudiantes, $codigo, $first_n, $last_n, $edad;
    public $modal=false;

    public function render()
    {
        $this->estudiantes = Estudiante::all();
        return view('livewire.estudiantes');
    }

    public function crear(){
        $this->abrirModal();
        $this->limpiarCampos();
    }
    public function abrirModal(){
        $this->modal = true;
    }
    public function cerrarModal(){
        $this->modal = false;
    }
    public function limpiarCampos(){
        $this->id_estudiantes='';
        $this->codigo='';
        $this->first_n='';
        $this->last_n='';
        $this->edad='';
    }
    public function guardar(){
        Estudiante::updateOrCreate(['id'=>$this->id_estudiantes],
            [
                'codigo'=>$this->codigo,
                'first_n'=> $this->first_n,
                'last_n'=> $this->last_n,
                'edad'=>$this->edad,
            ]);
        $this->cerrarModal();
        $this->limpiarCampos();
    }
    public function eliminar($id){
        Estudiante::find($id)->delete();
    }
    public function editar($id){
        $estudiantes = Estudiante::findOrFail($id);
        $this->id_estudiantes = $id;
        $this->codigo = $estudiantes->codigo;
        $this->first_n = $estudiantes->first_n;
        $this->last_n = $estudiantes->last_n;
        $this->edad = $estudiantes->edad;
        $this->abrirModal();
    }
}
