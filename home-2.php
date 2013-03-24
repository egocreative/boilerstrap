<?php

  $title = "Boilerstrap";
  include('includes/document-header.php');

?>

	<div id="homepage-slider">
		<div>
			<h3 class="h1">This is a content slider.</h3>
		</div>
		<div>
			<h3 class="h1">Each slide can hold content.</h3>
		</div>
		<div>
			<h3 class="h1">Like text, pictures or actions.</h3>
		</div>
	</div>

	<div class="row">
			<article class="twelve column">

				<hgroup>
					<h1 class="h2">See our latest projects</h1>
					<h2 class="h4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ad mollitia praesentium eius vitae amet incidunt enim quo necessitatibus quidem delectus earum nostrum odio.</h2>
				</hgroup>

				<ul class="block-grid four-up mobile">
					<li>
						<aside class="panel">
							<h4 class="h3">Lorem ipsum dolor sit amet.</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</aside>
					</li>
					<li>
						<aside class="panel">
							<h4 class="h3">Lorem ipsum dolor sit amet.</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</aside>
					</li>
					<li>
						<aside class="panel">
							<h4 class="h3">Lorem ipsum dolor sit amet.</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</aside>
					</li>
					<li>
						<aside class="panel">
							<h4 class="h3">Lorem ipsum dolor sit amet.</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</aside>
					</li>
				</ul>

			</article>


		<section class="nine column">

				<h3>Latest from the blog</h3>

				<!-- Todo: use mobile class? -->
				<ul class="block-grid three-up mobile">
					<li>
						<article itemscope itemtype="http://schema.org/Article">
							<header>
								<h4 class="h3" itemprop="name">Lorem ipsum dolor sit amet.</h4>
								<p class="date-time"><time datetime="2010-03-20" itemprop="datePublished">20th March, 2010</time></p>
								<p class="comment-count"><span itemprop="interactionCount" content="UserComments:78">78</span> Comments</p>
							</header>
							<p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</article>
					</li>
					<li>
						<article itemscope itemtype="http://schema.org/Article">
							<header>
								<h4 class="h3" itemprop="name">Lorem ipsum dolor sit amet.</h4>
								<p class="date-time"><time datetime="2010-03-20" itemprop="datePublished">20th March, 2010</time></p>
								<p class="comment-count"><span itemprop="interactionCount" content="UserComments:78">78</span> Comments</p>
							</header>
							<p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</article>
					</li>
					<li>
						<article itemscope itemtype="http://schema.org/Article">
							<header>
								<h4 class="h3" itemprop="name">Lorem ipsum dolor sit amet.</h4>
								<p class="date-time"><time datetime="2010-03-20" itemprop="datePublished">20th March, 2010</time></p>
								<p class="comment-count"><span itemprop="interactionCount" content="UserComments:78">78</span> Comments</p>
							</header>
							<p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						</article>
					</li>
				</ul>
		</section>

		<section class="three column">

				<h3>Latest tweets</h3>

				<!-- Todo: use mobile class? -->
				<article>
					<ul class="media-list" id="twitter-timeline">
						<li itemscope itemprop="http://schema.org/Article" class="media">
							<img alt="" src="images/placehold-40x40-0eafff-ffffff.png" itemprop="thumbnailUrl" class="left">
							<div class="media-body">
								<p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<ul class="inline-list">
									<li><a href="http://twitter.com/intent/tweet?in_reply_to={id}" target="_blank">Reply</a></li>
									<li><a href="http://twitter.com/intent/retweet?tweet_id={id}" target="_blank">Retweet</a></li>
								</ul>
								<small class="date-time">About <time datetime="2010-03-20" itemprop="datePublished">10 minutes ago</time></small>
							</div>
						</li>
						<li itemscope itemprop="http://schema.org/Article" class="media">
							<img alt="" src="images/placehold-40x40-0eafff-ffffff.png" itemprop="thumbnailUrl" class="left">
							<div class="media-body">
								<p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<ul class="inline-list">
									<li><a href="http://twitter.com/intent/tweet?in_reply_to={id}" target="_blank">Reply</a></li>
									<li><a href="http://twitter.com/intent/retweet?tweet_id={id}" target="_blank">Retweet</a></li>
								</ul>
								<small class="date-time">About <time datetime="2010-03-20" itemprop="datePublished">10 minutes ago</time></small>
							</div>
						</li>
						<li itemscope itemprop="http://schema.org/Article" class="media">
							<img alt="" src="images/placehold-40x40-0eafff-ffffff.png" itemprop="thumbnailUrl" class="left">
							<div class="media-body">
								<p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<ul class="inline-list">
									<li><a href="http://twitter.com/intent/tweet?in_reply_to={id}" target="_blank">Reply</a></li>
									<li><a href="http://twitter.com/intent/retweet?tweet_id={id}" target="_blank">Retweet</a></li>
								</ul>
								<small class="date-time">About <time datetime="2010-03-20" itemprop="datePublished">10 minutes ago</time></small>
							</div>
						</li>
					</ul>
				</article>

		</section>


	</div>

<?php include('includes/document-footer.php'); ?>