<?php

namespace App\Livewire;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edituser extends Component
{
    use WithFileUploads;
    public $uid, $name, $email, $password, $photo,$temp_user;

    //สร้าง function รับ parameter id (life cycle hook)
    public function mount($id){
       // dd($id);
       //การ qiery  ข้อมูลจากตาราง user ด้วย id เข้ามา
        $temp_user = User::find($id);
        $this->name =$temp_user->name;
        $this->email =$temp_user->email;
        $this->uid=$id;
       // $this->password =$temp_user->password;
    }

    public function insert(){
       //คำสั่งดักจับ error
        try{

            $model = User::where('id',$this->uid)->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' =>Hash::make($this->password)
            ]);
            $model = User::find($this->uid);
            //การเพิ่มรูป
            if ($this->photo){
                $fullpath = $this->photo->store('photo', 'public');
                $model->profile_photo_path = $fullpath;
                $model->save();
            }

            return redirect()->to(route('userdata'));
    
        }catch(Exception $e){
            dd($e);

        }
    }

    public function render()
    {
        return view('livewire.edituser');
    }
}
