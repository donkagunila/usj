
<section class="card my-5">
	<div class="card-bod">
		<header class="d-flex align-items-center px-5 pt-5">
			<div class="image-holder avatar-lg">
				<img src="https://i.pravatar.cc/50?u={{ $post->user->email}}" 
				     alt=""
				     class="avatar-img rounded-circle">
			</div>

			<div class="flex-1 ml-5">
				<div>
					<p class="user-name">{{ $post->user->username }}</p>
					<span class="company-name small">Company name</span>
				</div>
			</div>
		</header>

	<hr>

	<div>
		<p class="p-5">
			{{ $post->body }}
		</p>
	</div>

	</div>
</section>