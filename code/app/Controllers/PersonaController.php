<?php
namespace App\Controllers;
use App\Models\PersonaModel;
class PersonaController extends BaseController{
    public function index(){
        $persona=new PersonaModel();
        $data['persona']= $persona->findAll();
        return view('persona/index',$data);
    }
    public  function create(){
        return view('persona/create');
    }
    public function store(){

        $persona=new PersonaModel();
        $data=[
            'carnet'      => $this->request->getPost('carnet'),
            'ncompleto'   => $this->request->getPost('ncompleto'),
            'fechanac'    => $this->request->getPost('fechanac'),
          //  'fechanac'    => $this->request->getPost('2015-02-15'),
            'telefono'    => $this->request->getPost('telefono'),
            'departamento'=> $this->request->getPost('departamento')          

        ];
        $persona->save($data);
        //return view('persona/store');
        return redirect()->to(base_url('persona'))->with('status','Persona Adicionanda Correctamente');

    }

    public function edit($id){
        $persona = new PersonaModel();
        $data['persona']=$persona->find($id);
        return view('persona/edit',$data);
    }
    public function update($id){
        $persona=new PersonaModel();
       // $persona->find($carnet);
        $data=[
            'carnet'      => $this->request->getPost('carnet'),
            'ncompleto'   => $this->request->getPost('ncompleto'),
            'fechanac'    => $this->request->getPost('fechanac'),
          //  'fechanac'    => $this->request->getPost('2015-02-15'),
            'telefono'    => $this->request->getPost('telefono'),
            'departamento'=> $this->request->getPost('departamento')          

        ];
        $persona->update($id,$data);
        return redirect()->to(base_url('persona'))->with('status','Persona Actualizada Correctamente');



    }
    public function delete($id){
        $persona=new PersonaModel();
        $persona->delete($id);
        return redirect()->to(base_url('persona'))->with('status','Persona Eliminada Correctamente');


    }

} 

?>