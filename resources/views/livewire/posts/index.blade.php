<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if($updateMode)
                @include('livewire.posts.edit')
            @else
                @include('livewire.posts.create')
            @endif
            <div class="card mt-4">
                <div class="card-header">{{ __('DATA POST') }}</div>

                <div class="card-body">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                <table class="table table-bordered mt-2">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th width="150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($posts->count() != 0)
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->body }}</td>
                                <td>
                                    <button wire:click="edit({{ $post->id }})" class="btn btn-primary btn-sm">Edit</button>
                                    <button wire:click="delete({{ $post->id }})" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td style="text-align: center;" colspan="4" class="pt-3 pb-3"> Not Found</td>
                            </tr>
                        @endif
                        
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>