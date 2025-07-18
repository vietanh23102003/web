

<!-- Responsive Header-BP -->

<header class="header header-responsive" id="site-header-responsive">

	<div class="header-content-wrapper">
		<ul class="nav nav-tabs mobile-app-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#request" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')); ?>"></use></svg>
						<div class="label-avatar bg-blue">6</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#chat" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-chat---messages-icon')); ?>"></use></svg>
						<div class="label-avatar bg-purple">2</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#notification" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-thunder-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-thunder-icon')); ?>"></use></svg>
						<div class="label-avatar bg-primary">8</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#search" role="tab">
					<svg class="olymp-magnifying-glass-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon')); ?>"></use></svg>
					<svg class="olymp-close-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-close-icon')); ?>"></use></svg>
				</a>
			</li>
		</ul>
	</div>

	<!-- Tab panes -->
	<div class="tab-content tab-content-responsive">

		<div class="tab-pane " id="request" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Lời mời kết bạn</h6>
					<a href="#">Tìm bạn</a>
					<a href="#">Cài đặt</a>
				</div>
				<ul class="notification-list friend-requests">
					<li>
						<div class="author-thumb">
							<img src="<?php echo e(asset('images/avatar55-sm.jpg')); ?>" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Tamara Romanoff</a>
							<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
						</div>
									<span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')); ?>"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')); ?>"></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="<?php echo e(asset('images/avatar56-sm.jpg')); ?>" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Tony Stevens</a>
							<span class="chat-message-item">4 Friends in Common</span>
						</div>
									<span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')); ?>"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')); ?>"></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg>
						</div>
					</li>
					<li class="accepted">
						<div class="author-thumb">
							<img src="<?php echo e(asset('images/avatar57-sm.jpg')); ?>" alt="author">
						</div>
						<div class="notification-event">
							You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>.
						</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')); ?>"></use></svg>
									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-little-delete')); ?>"></use></svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="<?php echo e(asset('images/avatar58-sm.jpg')); ?>" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Stagg Clothing</a>
							<span class="chat-message-item">9 Friends in Common</span>
						</div>
									<span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')); ?>"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')); ?>"></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg>
						</div>
					</li>
				</ul>
				<a href="#" class="view-all bg-blue">Xem tất cả</a>
			</div>

		</div>

		<div class="tab-pane " id="chat" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Tin nhắn</h6>
					<a href="#">Đánh dấu đã đọc</a>
					<a href="#">Cài đặt</a>
				</div>

				<ul class="notification-list chat-message">
					<li class="message-unread">
						<div class="author-thumb">
							<img src="<?php echo e(asset('images/avatar59-sm.jpg')); ?>" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Diana Jameson</a>
							<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-chat---messages-icon')); ?>"></use></svg>
									</span>
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?php echo e(asset('images/avatar60-sm.jpg')); ?>" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Jake Parker</a>
							<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-chat---messages-icon')); ?>"></use></svg>
									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="<?php echo e(asset('images/avatar61-sm.jpg')); ?>" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
							<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-chat---messages-icon')); ?>"></use></svg>
										</span>
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg>
						</div>
					</li>

					<li class="chat-group">
						<div class="author-thumb">
							<img src="<?php echo e(asset('images/avatar11-sm.jpg')); ?>" alt="author">
							<img src="<?php echo e(asset('images/avatar12-sm.jpg')); ?>" alt="author">
							<img src="<?php echo e(asset('images/avatar13-sm.jpg')); ?>" alt="author">
							<img src="<?php echo e(asset('images/avatar10-sm.jpg')); ?>" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
							<span class="last-message-author">Ed:</span>
							<span class="chat-message-item">Yeah! Seems fine by me!</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-chat---messages-icon')); ?>"></use></svg>
										</span>
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg>
						</div>
					</li>
				</ul>

				<a href="#" class="view-all bg-purple">Xem tất cả</a>
			</div>

		</div>

		<div class="tab-pane " id="notification" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Thông báo</h6>
					<a href="#">Đánh dấu đã đọc</a>
					<a href="#">Cài đặt</a>
				</div>

				<ul class="notification-list">
					<li>
						<div class="author-thumb">
							<img src="<?php echo e(asset('images/avatar62-sm.jpg')); ?>" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-comments-post-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-comments-post-icon')); ?>"></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-little-delete')); ?>"></use></svg>
						</div>
					</li>

					<li class="un-read">
						<div class="author-thumb">
							<img src="<?php echo e(asset('images/avatar63-sm.jpg')); ?>" alt="author">
						</div>
						<div class="notification-event">
							<div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')); ?>"></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-little-delete')); ?>"></use></svg>
						</div>
					</li>

					<li class="with-comment-photo">
						<div class="author-thumb">
							<img src="<?php echo e(asset('images/avatar64-sm.jpg')); ?>" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-comments-post-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-comments-post-icon')); ?>"></use></svg>
										</span>

						<div class="comment-photo">
							<img src="<?php echo e(asset('images/comment-photo1.jpg')); ?>" alt="photo">
							<span>“She looks incredible in that outfit! We should see each...”</span>
						</div>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-little-delete')); ?>"></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?php echo e(asset('images/avatar65-sm.jpg')); ?>" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')); ?>"></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-little-delete')); ?>"></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?php echo e(asset('images/avatar66-sm.jpg')); ?>" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
						</div>
										<span class="notification-icon">
											<svg class="olymp-heart-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-heart-icon')); ?>"></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')); ?>"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?php echo e(asset('svg-icons/sprites/icons.svg#olymp-little-delete')); ?>"></use></svg>
						</div>
					</li>
				</ul>

				<a href="#" class="view-all bg-primary">Xem tất cả</a>
			</div>

		</div>

		<div class="tab-pane " id="search" role="tabpanel">


				<form class="search-bar w-search notification-list friend-requests">
					<div class="form-group with-button">
						<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
					</div>
				</form>


		</div>

	</div>
	<!-- ... end  Tab panes -->

</header>

<!-- ... end Responsive Header-BP --><?php /**PATH C:\xampppp\htdocs\copysc\resources\views/partials/headers-navigations/header-BP-responsive.blade.php ENDPATH**/ ?>