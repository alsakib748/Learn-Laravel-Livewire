<div>

    <section class="user-create-with-image-section py-5">

        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    {{-- <div wire:poll.keep-alive.5s class="card"> --}}

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="my-2">
                                <input wire:model.live.throttle.200ms="search" type="text" class="form-control" placeholder="Search here..." />
                            </div>
                            <div class="my-2">
                                <button type="submit" wire:click="update" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>

                    <div wire:poll.visible.5s class="card">
                        <div class="card-body">
                            <table class="table table-responsive table-striped table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Created At</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($this->users as $key => $user)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{-- <div class="row">
                                <div class="col-md-12 d-flex flex-column justify-content-between">
                                    {{ $users->links() }}
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center text-warning">User Image Upload</h3>
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session('success') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                                <form wire:submit.prevent="createNewUserWithImage"  enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input wire:model="name" type="text" class="form-control">
                                        @error("name")
                                            <span class="text-danger py-1">{{ $message }}</span>
                                        @enderror
                                      </div>
                                    <div class="mb-3">
                                      <label for="email" class="form-label">Email address</label>
                                      <input wire:model="email" type="email" class="form-control">
                                      @error("email")
                                        <span class="text-danger py-1">{{ $message }}</span>
                                      @enderror
                                    </div>
                                    <div class="mb-3">
                                      <label for="password" class="form-label">Password</label>
                                      <input wire:model="password" type="password" class="form-control" >
                                      @error("password")
                                        <span class="text-danger py-1">{{ $message }}</span>
                                      @enderror

                                      </div>
                                    <div class="mb-3">
                                        <label for="photo" class="form-label">Profile Image</label>
                                        <input type="file" wire:model="photo" class="form-control" >
                                        @error("photo")
                                            <span class="text-danger py-1">{{ $message }}</span>
                                        @enderror

                                        @if($photo)
                                            <img src="{{ $photo->temporaryUrl() }}" alt="" class="img-fluid rounded w-25 h-25 mt-3 mb-2 d-block">
                                        @endif

                                        <div wire:loading wire:target="photo" class="text-success">Uploading...</div>

                                    </div>

                                    <div wire:loading.delay.longest class="pt-1 pb-3">
                                        <span class="text-success ">Sending ...</span>
                                    </div>

                                    <div class="mb-3">
                                        <button type="button" @click="$dispatch('user-created')" class="btn btn-success">
                                            Reload List
                                        </button>
                                    </div>

                                    <div class="d-block">
                                        <button wire:loading.class.remove="text-white" wire.loading.attr="disabled" type="submit" class="btn btn-primary">Create +</button>
                                    </div>

                                </form>

                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

    </section>


</div>
