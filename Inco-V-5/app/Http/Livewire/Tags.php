<?php

namespace App\Http\Livewire;
use App\Models\Categoria;
use Livewire\Component;

class Tags extends Component
{
    public $show = false;
    public $name_tag;
    public $id_categoria;
    public $tags;
    protected $rules = [
        'name_tag' =>'required|min:3|max:20'     
    ];
    //-- usamos el modelo para traer todos los registros
    public function render()
    {
        $categoria = Categoria::where('id_categoria',$this->id_categoria)->get();
        return view('livewire.tags',compact("tag"));
    }
     //-- guardar
     public function save()
     {
       $this->validate();
       $new = new Categoria();
       $new->id_categorias = $this->id_categoria;
       $new->name_tag = $this->name_tag;
       $new->save();
       $this->reset(['name_tag','show']);
     }
//--eliminar
public function delete(Categoria $id)
{
    $id->delete();
}
}