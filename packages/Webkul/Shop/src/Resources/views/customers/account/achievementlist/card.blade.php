<div class="card reward-card">
    <img src="{{
	    $reward->done ?
	        asset('themes/default/assets/images/unlocked-reward.jpg') :
	            asset('themes/default/assets/images/locked-reward.jpg')
	            }}" class="card-img-top ml-auto mr-auto" alt="{{$reward->name}}">
    <div class="card-body">
        <h3 class="reward-header">{{ $reward->name }}</h3>
        <p class="card-text reward-text">{{ $reward->description }}</p>
    </div>
</div>
