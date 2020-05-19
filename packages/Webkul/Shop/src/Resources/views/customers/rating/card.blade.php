<div class="card mb-3 text-center">
    @inject ('customerImageHelper', 'Webkul\Customer\Helpers\CustomerAvatar')
    <img src="{{ asset('themes/default/assets/images'.$user->ava_path) }}" class="card-img-top" alt="{{ $user->name }}">
    <div class="card-body">
        <h5 class="card-title">{{ $user->name }}</h5>
        <p class="card-text"><small class="text-muted">{{ __("shop::app.rating.card").': '. $user->points.' поинтов' }}</small></p>
    </div>
</div>