<section class="todo-list-create-section pt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="todo-list-create py-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-secondary">Todo List</h4>
                        </div>
                        <div class="card-body">

                            @if(session('error'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>{{ session('error') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                                <div id="search-box" class="w-100 d-flex align-items-center justify-content-center gap-3">
                                    <span class="search-icon">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </span>
                                    <input wire:model.live.debounce.500ms="search" type="text" name="" class="form-control" id="" />
                                </div>
                            <hr class="text-primary">
                            @foreach($todos as $todo)
                            <div wire:key="{{ $todo->id }}" class="todo-list">
                                <div class="row align-items-center g-0">
                                    <div class="col-md-1">
                                        <div class="form-check">
                                        @if($todo->completed)
                                            <input wire:click="toggle({{$todo->id}})" class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
                                        @else
                                            <input wire:click="toggle({{$todo->id}})" class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        @endif



                                            <label class="form-check-label" for="defaultCheck1">

                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <form>

                                        @if($editingTodoId  === $todo->id)
                                            <input wire:model="editingTodoName" type="text" name="" class="form-control" id="" />
                                            @error('editingTodoName')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        @else
                                            <h5 class="name">{{ $todo->name }}</h5>
                                        @endif

                                        <span class="">{{
                                            // $todo->created_at->diffForHumans()
                                            date('d/m/Y',strtotime($todo->created_at))
                                        }}
                                        </span>

                                        <div class="my-2">
                                            @if($editingTodoId  === $todo->id)
                                                <button wire:click="update({{ $todo->id }})" type="button" class="btn btn-primary">Update</button>
                                                <button wire:click="cancelEdit({{ $todo->id }})" type="button" class="btn btn-danger">Cancel</button>
                                            @endif
                                        </div>

                                        </form>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="d-flex align-items-center justify-content-end gap-2">
                                            <a wire:click="edit({{ $todo->id }})" href="javascript:void(0)" class="text-decoration-none text-success"><i class="fa-regular fa-pen-to-square"></i></a>
                                            <a wire:click="delete({{ $todo->id }})" href="javascript:void(0)" class="text-decoration-none text-danger"><i class="fa-solid fa-trash-can"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="text-primary">
                            @endforeach

                            <div class="my-2">
                                {{ $todos->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
