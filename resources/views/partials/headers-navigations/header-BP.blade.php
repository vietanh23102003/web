

<!-- Header-BP -->

<header class="header" id="site-header">
	<div class="fixed-sidebar">
		<a href="{{route('home', ['id' => Auth::id()])}}" class="logo">
			<div class="img-wrap">
				<img src="{{asset('images/logo.png')}}" alt="Olympus">
			</div>
		</a>
	</div>
	<div class="page-title">
		<h6><a href="{{route('home', ['id' => Auth::id()])}}" class="logo">Trang chủ</a></h6>
	</div>

	<div class="header-content-wrapper">
		<form method="POST" action="{{ route('search') }}" class="search-bar w-search notification-list friend-requests">
    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
    		<div class="form-group with-button">
        		<input name="search" class="form-control" placeholder="Tìm bạn bè..." type="text">
        		<button type="submit"> <svg class="olymp-magnifying-glass-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon')}}"></use></svg>
        		</button>
    		</div>
		</form>

		<a href="#" class="link-find-friend">Tìm kiếm</a>

		<div class="control-block">

			<div class="control-icon more has-items">
				<svg class="olymp-happy-face-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')}}"></use></svg>
				<div class="label-avatar bg-blue">6</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Lời mời kết bạn</h6>
						<a href="#">Tìm bạn</a>
						<a href="#">Cài đặt</a>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list friend-requests">
							<li>
								<div class="author-thumb">
									<img src="{{asset('images/avatar55-sm.jpg')}}" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Tamara Romanoff</a>
									<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
								</div>
								<span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')}}"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')}}"></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')}}"></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="{{asset('images/avatar56-sm.jpg')}}" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Tony Stevens</a>
									<span class="chat-message-item">4 Friends in Common</span>
								</div>
								<span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')}}"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')}}"></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')}}"></use></svg>
								</div>
							</li>

							<li class="accepted">
								<div class="author-thumb">
									<img src="{{asset('images/avatar57-sm.jpg')}}" alt="author">
								</div>
								<div class="notification-event">
									You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>.
								</div>
								<span class="notification-icon">
									<svg class="olymp-happy-face-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')}}"></use></svg>
								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')}}"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-little-delete')}}"></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="{{asset('images/avatar58-sm.jpg')}}" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Stagg Clothing</a>
									<span class="chat-message-item">9 Friends in Common</span>
								</div>
								<span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')}}"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')}}"></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')}}"></use></svg>
								</div>
							</li>

						</ul>
					</div>

					<a href="{{route('friend_requests', ['id' => Auth::id()])}}" class="view-all bg-blue">Xem tất cả</a>
				</div>
			</div>

			<div class="control-icon more has-items">
				<svg class="olymp-chat---messages-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-chat---messages-icon')}}"></use></svg>
				<div class="more-dropdown more-with-triangle triangle-top-center pb-0">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Tin nhắn</h6>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list chat-message ">
							@foreach ($listMess as $mess)
								<li>
									<div class="author-thumb">
										<img src="{{asset($mess->profile->avatar_path)}}" alt="author" class="avatar">
									</div>
									<div class="notification-event">
									{{--<a href="#" class="h6 notification-friend">{{$mess->user->first_name.' '.$mess->user->last_name}}</a>
									<span class="chat-message-item">{{$mess->content}}</span>--}}
									</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-chat---messages')}}-icon"></use></svg>
									</span>
								</li>
							@endforeach
						</ul>
					</div>

				</div>
			</div>

			<div class="control-icon more has-items">
				<svg class="olymp-thunder-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-thunder-icon')}}"></use></svg>

				<div class="label-avatar bg-primary">8</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Thông báo</h6>
						<a href="#">Đánh dấu đã đọc</a>
						<a href="#">Cài đặt</a>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list">
							<li>
								<div class="author-thumb">
									<img src="{{asset('images/avatar62-sm.jpg')}}" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-comments-post-icon')}}"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')}}"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-little-delete')}}"></use></svg>
								</div>
							</li>

							<li class="un-read">
								<div class="author-thumb">
									<img src="{{asset('images/avatar63-sm.jpg')}}" alt="author">
								</div>
								<div class="notification-event">
									<div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')}}"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')}}"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-little-delete')}}"></use></svg>
								</div>
							</li>

							<li class="with-comment-photo">
								<div class="author-thumb">
									<img src="{{asset('images/avatar64-sm.jpg')}}" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-comments-post-icon')}}"></use></svg>
									</span>

								<div class="comment-photo">
									<img src="{{asset('images/comment-photo1.jpg')}}" alt="photo">
									<span>“She looks incredible in that outfit! We should see each...”</span>
								</div>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')}}"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-little-delete')}}"></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="{{asset('images/avatar65-sm.jpg')}}" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')}}"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')}}"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-little-delete')}}"></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="{{asset('images/avatar66-sm.jpg')}}" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-heart-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-heart-icon')}}"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')}}"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-little-delete')}}"></use></svg>
								</div>
							</li>
						</ul>
					</div>

					<a href="#" class="view-all bg-primary">Xem tất cả</a>
				</div>
			</div>

			<div class="author-page author vcard inline-items more">
				<div class="author-thumb">
					<a href="{{route('profile', ['id' => Auth::id()])}}">
						@if (($profile->avatar_path) != null)
							<img alt="author" src="{{asset($profile->avatar_path)}}" width="36" height="36" class="avatar">
						@else
							<img alt="author" src="{{asset('images/avatar67-sm.jpg')}}" width="36" height="36" class="avatar">
						@endif
					</a>
					<div class="more-dropdown more-with-triangle">
						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Tài khoản</h6>
							</div>

							<ul class="account-settings">
								<li>
									<a href="{{route('get_profile_update_info', ['id' => Auth::id()])}}">
										<svg class="olymp-menu-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-menu-icon')}}"></use></svg>

										<span>Thông tin cá nhân</span>
									</a>
								</li>
								<li>
									<a href="{{route('logout')}}">
										<svg class="olymp-logout-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-logout-icon')}}"></use></svg>

										<span>Đăng xuất</span>
									</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
				<!-- <a href="02-ProfilePage.html" class="author-name fn">
					<div class="author-title">
						James Spiegel <svg class="olymp-dropdown-arrow-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon')}}"></use></svg>
					</div>
					<span class="author-subtitle">SPACE COWBOY</span>
				</a> -->
				<a href="{{route('profile', ['id' => Auth::id()])}}" class="author-name fn">
					<div class="author-title">
						{{Auth::user()->first_name}}<svg class="olymp-dropdown-arrow-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon')}}"></use></svg>
					</div>
					<!-- <span class="author-subtitle">SPACE COWBOY</span> -->
				</a>
			</div>

		</div>
	</div>

</header>

<!-- ... end Header-BP -->