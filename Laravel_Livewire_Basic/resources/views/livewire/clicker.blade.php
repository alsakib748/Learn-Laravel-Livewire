<div>

    <h1>{{ $title }}</h1>

    <h2>{{ $username }}</h2>

    {{ count($users) }}

    <button wire:click="createNewUser">
        Create New User
    </button>

</div>
