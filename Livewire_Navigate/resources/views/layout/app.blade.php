<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Navigate</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


    <header>
        <div class="navbar bg-base-100 shadow-sm">
            <div class="container mx-auto">
                <div class="flex-1">
                    <a class="btn btn-ghost text-xl">daisyUI</a>
                </div>
                <div class="">
                    <div class="navbar-center hidden lg:flex">
                        <ul class="menu menu-horizontal px-1">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                  <div class="flex-none">
                    <div class="dropdown dropdown-end">
                      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                          <img
                            alt="Tailwind CSS Navbar component"
                            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                      </div>
                      <ul
                        tabindex="0"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                        <li>
                          <a class="justify-between">
                            Profile
                            <span class="badge">New</span>
                          </a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a>Logout</a></li>
                      </ul>
                    </div>
                  </div>
            </div>
        </div>
    </header>

    <section class="my-5 container mx-auto">

        <div class="grid grid-cols-[1fr_3fr_1fr] gap-3">

            @include('layout.left-sidebar')

            {{ $slot }}

            @include('layout.right-sidebar')

        </div>

    </section>



</body>
</html>
