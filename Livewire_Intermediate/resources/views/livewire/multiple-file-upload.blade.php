<div>
    <section class="user-create-with-image-section py-5">

                    {{-- <div wire:poll.keep-alive.5s class="card"> --}}
                    {{-- <div wire:poll.visible.5s class="card">
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
                                @foreach($users as $key => $user)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="row">
                                <div class="col-md-12 d-flex flex-column justify-content-between">
                                    {{ $users->links() }}
                                </div>
                            </div>

                        </div>
                    </div> --}}


                    <div class="max-w-md mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="w-96 mx-auto">
                            <h3 class="text-center text-warning">Multiple Image Upload</h3>
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session('success') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                                <form wire:submit.prevent="createNewUserWithImage"  enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                        <input wire:model="name" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        @error("name")
                                            <span class="text-danger py-1">{{ $message }}</span>
                                        @enderror
                                      </div>
                                    <div class="mb-3">
                                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                                      <input wire:model="email" type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                      @error("email")
                                        <span class="text-danger py-1">{{ $message }}</span>
                                      @enderror
                                    </div>
                                    <div class="mb-3">
                                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                      <input wire:model="password" type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                                      @error("password")
                                        <span class="text-danger py-1">{{ $message }}</span>
                                      @enderror

                                      </div>

                                    {{-- </div> --}}
                                    {{-- <div class="mb-3">
                                        <label for="confirm_password" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirm_password">
                                    </div> --}}
                                    <div class="mb-3">
                                        <label for="photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profile Image</label>
                                        <input type="file" multiple wire:model="photos" accept="image/png, image/jpeg, image/jpg, image/webp" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" >
                                        @error("photos")
                                            <span class="text-danger py-1">{{ $message }}</span>
                                        @enderror

                                        <div class="d-flex flex-wrap align-items-center justify-content-start gap-3">
                                        @if($photos)
                                            @foreach ($photos as $photo)
                                            <img src="{{ $photo->temporaryUrl() }}" alt="" class="img-fluid rounded w-25 h-25 mt-3 mb-2 d-block">
                                            @endforeach
                                        @endif
                                        </div>

                                        <div wire:loading wire:target="photos" class="text-success">Uploading...</div>

                                    </div>

                                    <div wire:loading.delay.longest class="pt-1 pb-3">
                                        <span class="text-success ">Sending ...</span>
                                    </div>

                                    <div class="mb-3">
                                        {{-- <button wire:click.prevent='ReloadList' class="btn btn-success">
                                            Reload List
                                        </button> --}}
                                        <button type="button" @click="$dispatch('user-created')" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                                            Reload List
                                        </button>
                                    </div>

                                    <div class="d-block">
                                        <button wire:loading.class.remove="text-white" wire.loading.attr="disabled" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create +</button>
                                    </div>

                                </form>

                        </div>

                </div>

    </section>

</div>
