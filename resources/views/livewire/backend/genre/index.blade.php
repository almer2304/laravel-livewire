<div>
    @if ($showForm)
        <form wire:submit="store">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" placeholder="Masukkan genre baru" wire:model="name" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" placeholder="Masukkan slug genre" wire:model="slug" class="form-control @error('name') is-invalid @enderror">
                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary">Create</button>
            <button class="btn btn-secondary" wire:click="backToTable">Cancel</button>
        </form>
    @else
        <a href="#" wire:click="create" class="btn btn-primary mb-3 w-20%"><i class="fas fa-plus"></i>Create genre</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th width="15%">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($genre as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>
                        <button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
