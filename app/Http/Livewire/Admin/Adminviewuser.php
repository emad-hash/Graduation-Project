<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Adminviewuser extends Component
{
   use WithPagination;
   use LivewireAlert;
   public $user_id;
   public $searchTerm;

   public function deleteUser(){
    $user = User::find($this->user_id);
    $user->delete();
    $this->alert('success','User has been delete successfully', [
        'position' => 'center',
        'timer' => 8000,
        'toast' => false,
        'showConfirmButton' => true,
        'onConfirmed' => '',
        'timerProgressBar' => true,

       ]);
       return redirect('/admin/user')->back();
     }

    public function render()
    {
        $users = User::orderBy('created_at','ASC')->paginate(10);
        $search = '%' . $this->searchTerm . '%';
        $users = User::where('name','LIKE',$search)->paginate(10);
        return view('livewire.admin.adminviewuser',['users'=>$users]);
    }
}
