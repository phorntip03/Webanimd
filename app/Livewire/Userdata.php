<?php

namespace App\Livewire;

use Livewire\Component;
use App\models\User;
use Livewire\WithPagination;

class Userdata extends Component
{
    use WithPagination;
    protected $paginationTheme ='bootstrap';
    public function render()
    {
        //ดึงข้อมูลทั้งหมดจาก User เก็บใส่ตัวแปร data
        $data = User::Paginate(2);
         //withcompact คือทุกครั้งที่มีการ rander ใหม่ ให้ส่งตัวแปร data ไปที่หน้า view ด้วย
        return view('livewire.userdata')->with(compact('data'));
    }
   

    public function delete($id)
    { 
        try{
         User::find($id)->delete();
      
    }catch(Exception $e){
        dd($e);

    }
   }

}