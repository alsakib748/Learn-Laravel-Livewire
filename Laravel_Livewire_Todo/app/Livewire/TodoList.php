<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Livewire\WithPagination;

class TodoList extends Component
{

    use WithPagination;

    // #[Rule('required|min:3|max:50')]
    public $name;

    public $search;

    public $editingTodoId;
    public $editingTodoName;

    public function create(){
        // validate
        // create the todo
        // clear the input
        // send flash message
        // $validated =  $this->validateOnly('name');

        $validated = $this->validate([
            'name' => 'required|min:3|max:50'
        ]);

        Todo::create($validated);

        $this->reset('name');

        session()->flash('success','Todo Saved');

    }

    public function render()
    {

        // $todos = Todo::where('name', 'like', '%' . $this->search . '%')
        // ->latest()
        // ->paginate(5);

        return view('livewire.todo-list',[
            'todos' => Todo::latest()->where('name','like','%'.$this->search.'%')->paginate(5)
            // 'todos' => $todos
        ]);

    }

    public function delete($todoId){
        try{
            Todo::find($todoId)->delete();
        }
        catch(\Exception $e){
            session()->flash('error','Failed To delete todo!');
        }
    }

    public function toggle($todoId){
        $todo = Todo::find($todoId);
        $todo->completed = !$todo->completed;
        $todo->save();
    }

    public function edit($todoId){
        $this->editingTodoId = $todoId;
        $this->editingTodoName = Todo::find($todoId)->name;
    }

    public function cancelEdit(){
        $this->reset('editingTodoId','editingTodoName');
    }

    public function update(){
        $validated = $this->validate([
            'editingTodoName' => 'required|min:3|max:50'
        ]);

        Todo::find($this->editingTodoId)->update([
            'name' => $this->editingTodoName
        ]);

        $this->cancelEdit();
    }

}
