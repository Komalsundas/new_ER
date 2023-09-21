<?php
 
namespace App\Livewire;
 
use Livewire\Attributes\Rule; 
use Livewire\Component;
use App\Models\Post;
 
class CreatePost extends Component
{
    #[Rule('required')] 
    public $title = '';
 
    #[Rule('required')] 
    public $content = '';
 
    public function save()
    {
        $this->validate(); 
 
        Post::create(
            $this->only(['title', 'content'])
        );
 
        return $this->redirect('/posts');
    }
 
    public function render()
    {
        return view('livewire.create-post');
    }
}