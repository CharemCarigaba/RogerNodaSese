<div class="container">
    <div class="col-md-3 col-lg-3 ml-auto">
        <label class="sr-only" for="inlineFormInputGroup">Search</label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text">
                <span class="material-icons">
                    search
                </span>
            </div>
          </div>
          <input type="text" class="form-control" wire:model.debounce.500ms="search" placeholder="Search">
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <div wire:loading.class="spinner-border spinner-border-xl"></div>
      </div>
        <table class="table table-striped" wire:loading.class="d-none">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
        @forelse ($theses as $thesis)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$thesis->title}}</td>
                    <td class="col-1"><a href="{{route('student.archive',[$thesis->program->college->slug,$thesis->program->slug,$thesis->id])}}" class="text-primary" data-toggle="tooltip" data-placement="top" title="View">View </a></td>
                </tr>
        @empty
        <tr>
            <td colspan="6">
                <div class="d-flex justify-content-center justify-item-center">
                    <span>No results found!</span>
                </div>
            </td>
        </tr>
        @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <div wire:loading.class="d-none">
            {{$theses->links()}}
            </div>
        </div>
    </div>