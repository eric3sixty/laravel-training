<div class="card shadow-sm m-4 hover:shadow-lg transition-all duration-300">
    <div class="card-body">
        <div class="d-flex flex-column gap-2">
            {{ $photo_url ?? null }}
            <h5 class="card-title">{{ $title }}</h5>
            <p class="card-text">{{ $description }}</p>
            {{ $card_buttons ?? null }}
        </div>
    </div>
</div>
