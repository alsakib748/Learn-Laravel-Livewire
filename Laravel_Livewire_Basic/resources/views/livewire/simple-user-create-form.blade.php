<section class="user-create-section">
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                @if(session('success'))
                    <span class="alert alert-success">{{ session('success') }}</span>
                @endif
                <form wire:submit="createNewUser" action="">
                    <input wire:model="name" type="text" class="form-control" placeholder="name" />

                    @error('name')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror

                    <br/>
                    <input wire:model="email" type="text" class="form-control" placeholder="email" />

                    @error('email')
                        <span class="text-danger fs-6">{{    $message }}</span>
                    @enderror

                    <br/>
                    <input wire:model="password" type="text" class="form-control" placeholder="password" />
                    @error('password')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                    <br/><br/>

                    {{-- <button wire:click.prevent="createNewUser" type="submit" class="btn btn-primary">Create User</button> --}}
                    <button type="submit" class="btn btn-primary">Create User</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="row pt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        @foreach($users as $user)
                            <p>Name: {{ $user->name }}</p>
                            <p>Email: {{ $user->email }}</p>
                            <hr>
                        @endforeach

                        {{ $users->links() }}
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>

    </div>
</section>
