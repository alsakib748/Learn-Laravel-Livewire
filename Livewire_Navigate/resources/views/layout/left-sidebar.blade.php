<div class="left-sidebar">
    <div class="card">
        <div class="card-body">

            <ul class="menu menu-md bg-white rounded-box w-56 border border-gray-400 shadow-sm">
                <li class=""><a href="{{ route('navigate') }}" wire:navigate.hover class="rounded-3xl  hover:bg-slate-900 hover:text-white transition">Home</a></li>
                <li class=""><a href="{{ route('feed') }}" wire:navigate.hover class="rounded-3xl  hover:bg-slate-900 hover:text-white transition">Feed</a></li>
                <li class=""><a href="{{ route('terms') }}" wire:navigate.hover class="rounded-3xl  hover:bg-slate-900 hover:text-white transition">Terms</a></li>
            </ul>

        </div>
    </div>

</div>
