<form action="{{ route('gudang.update', $item->id) }}" method="post">
    @csrf
    @method('put')

    <!-- Modal -->
    <div class="modal fade" id="updateGudang{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Create Inventory</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="InputName">Nama</label>
                        <input type="text" class="form-control" id="InputName" name="name" required value="{{ $item->name }}">
                    </div>
                    <div class="form-group">
                        <label for="InputType">Type</label>
                        <input type="text" class="form-control" id="InputType" name="type" required value="{{ $item->type }}">
                    </div>
                    <div class="form-group">
                        <label for="InputAddress">Alamat</label>
                        <input type="text" class="form-control" id="InputAddress" name="address" required value="{{ $item->address }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
