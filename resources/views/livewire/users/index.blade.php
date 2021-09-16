<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 space-y-2">

            <div class="w-1/4">
                <x-input.search
                placeholder="Search users..."
                wire:model="search"
            ></x-input.search>
            </div>
            <!-- Users Table -->
            <x-table>
                <x-slot name="head">
                    <x-table.heading sortable>Name</x-table.heading>
                    <x-table.heading sortable>Address</x-table.heading>
                    <x-table.heading sortable>Email</x-table.heading>
                    <x-table.heading sortable>Phone</x-table.heading>
                    <x-table.heading>Actions</x-table.heading>
                </x-slot>
                <x-slot name="body">
                    @forelse($users as $user)
                        <x-table.row wire:loading.class.delay="opacity-50">
                            <x-table.cell>{{$user->name}}</x-table.cell>
                            <x-table.cell>{{$user->address}}</x-table.cell>
                            <x-table.cell>{{$user->email}}</x-table.cell>
                            <x-table.cell>{{$user->phone}}</x-table.cell>
                            <x-table.cell><a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a></x-table.cell>
                        </x-table.row>
                    @empty
                    @endforelse
                </x-slot>
            </x-table>
            {{ $users->links() }}
        </div>
    </div>
</div>
</div>
