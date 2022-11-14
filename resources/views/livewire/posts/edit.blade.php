<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('POST') }}</div>

                <div class="card-body">
                    <form>
                        <input type="hidden" wire:model="post_id">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.dever="title">
                            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Description</label>
                            <textarea name="body" id="body" cols="30" rows="2" class="form-control" wire:model.dever="body"></textarea>
                            @error('body') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <button type="submit" wire:click.prevent="update()"  class="btn btn-primary">SAVE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>