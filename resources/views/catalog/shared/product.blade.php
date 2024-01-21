<div class="col">
    <div class="card shadow-sm">
        <img src="{{ $item->thumbnail  }}" alt="{{ $item->title }}">
        <div class="card-body">
            <p class="h5 card-text">{{ $item->title }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="h3 text-body-secondary">{{ $item->price }} руб.</small>
            </div>
        </div>
    </div>
</div>


