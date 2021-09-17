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
                <div>
                    @json($sortDirection)
                </div>
                <div>
                    @json($sortField)
                </div>
                <!-- Users Table -->
                <x-table>
                    <x-slot name="head">
                        <x-table.heading sortable wire:click="sortBy('name')"
                                         :direction="$sortField === 'name' ? $sortDirection : null">Name
                        </x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('address')"
                                         :direction="$sortField === 'address' ? $sortDirection : null">Address
                        </x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('email')"
                                         :direction="$sortField === 'email' ? $sortDirection : null">Email
                        </x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('phone')"
                                         :direction="$sortField === 'phone' ? $sortDirection : null">Phone
                        </x-table.heading>
                        <x-table.heading>Actions</x-table.heading>
                    </x-slot>
                    <x-slot name="body">
                        @forelse($users as $user)
                            <x-table.row wire:loading.class.delay="opacity-50">
                                <x-table.cell>{{$user->name}}</x-table.cell>
                                <x-table.cell>{{$user->address}}</x-table.cell>
                                <x-table.cell>{{$user->email}}</x-table.cell>
                                <x-table.cell>{{$user->phone}}</x-table.cell>
                                <x-table.cell><x-button.link wire:click="edit">Edit</x-button.link>
                                </x-table.cell>
                            </x-table.row>
                        @empty
                        @endforelse
                    </x-slot>
                </x-table>
                {{ $users->links() }}
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <x-jet-dialog-modal wire:model.defer="showEditModal">
        <x-slot name="title">Edit User</x-slot>
        <x-slot name="content">
            <x-input.group for="title" label="Title">
                <x-input.text id="title" />
            </x-input.group>

        </x-slot>
        <x-slot name="footer">
            <x-button.secondary>Cancel</x-button.secondary>
            <x-button.primary>Save</x-button.primary>
        </x-slot>
    </x-jet-dialog-modal>
</div>
