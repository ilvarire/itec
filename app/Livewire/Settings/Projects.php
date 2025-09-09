<?php

namespace App\Livewire\Settings;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Projects extends Component
{
    public $projects = [];
    public function mount()
    {
        $user = Auth::user();
        $projects = Project::where('user_id', $user->id)->get(['name', 'user_id', 'agreement', 'prd', 'docs', 'exp_date']);
        $this->projects = $projects;
    }
    // public function uploadImage()
    // {
    //     $this->validate([
    //         'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240', // 10MB Max
    //     ]);
    //     $path = $this->image->store('private/customer_images');
    //     session()->flash('message', 'Image uploaded successfully!');


    //     $agreement->filename = $file->getClientOriginalName();
    //     $agreement->file_path = $filePath;
    // }

    public function render()
    {
        return view('livewire.settings.projects');
    }
}
