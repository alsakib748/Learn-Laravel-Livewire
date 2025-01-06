<section class="todo-list-create-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="todo-list-create py-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-secondary">Create New Todo</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Todo</label>
                                    <input wire:model="name" type="text" class="form-control" id="name" name="name" placeholder="Todo...">

                                    @error('name')
                                        <span class="text-danger fs-6 pt-3">{{ $message }}</span>
                                    @enderror

                                </div>
                                <button wire:click.prevent="create" type="submit" class="btn btn-primary" name="todo-submit">Create</button>

                                @if(session('success'))
                                    <span class="text-success fs-6">{{ session('success') }}</span>
                                @endif

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
