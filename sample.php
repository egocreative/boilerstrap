<?php include('includes/document-header.php'); ?>

		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<link rel="stylesheet" href="/css/bootstrap.css">
		<link rel="stylesheet" href="/css/responsive.css">

		<script src="/js/vendor/modernizr.custom-2.6.2.min.js"></script>

		<script>
			
			Modernizr.load([
				{
					load : 'iegt5!ielt9!/js/vendor/selectivizr-1.0.2.min.js'
				},
			  {
			    load: '//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js',
			    complete: function () {
			      if ( !window.jQuery ) {
			            Modernizr.load('/js/vendor/jquery-1.8.3.min.js');
			      }
			    }
			  },
			  {
				  load: ['/js/vendor/jquery.tools.custom-1.2.7.min.js', '/js/vendor/bootstrap.twitter.custom-2.2.1.min.js', '/js/vendor/bootstrap.jasny.custom-2.2.1.min.js', '/js/site-ck.js', '/js/sample-ck.js'] // Split into seperate load functions, or see docs: http://yepnopejs.com/
			  },
				// Simple example, only loads js if the canvas 
			  // { 
			  // 					test: Modernizr.canvas,
			  // 					yep: ['/js/cool-canvas-piece.js']
			  // }
				
			]);
			
		</script>
    

	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

     <div class="page-alert">
       <div class="alert alert-success">
					<a class="close" data-dismiss="alert" href="#">×</a>
         <strong>Success!</strong> Your profile information has been saved.
       </div>
     </div>
		<!-- Add your site or application content here -->
		<div class="container">
			
			<!-- Header -->
			<div class="row mb">
		
				<div class="navbar span12">
				  <div class="navbar-inner">
				    <div class="container">

					    <a class="brand" href="#"><img src="http://placehold.it/170x100"></a>

				      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </a>

				      <!-- Everything you want hidden at 940px or less, place within here -->
				      <div class="nav-collapse collapse">
						    <ul class="nav">
									<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Base CSS <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#typography">Typography</a></li>
                      <li><a href="#code">Code</a></li>
											<li><a href="#tables">Tables</a></li>
											<li><a href="#forms">Forms</a></li>
											<li><a href="#buttons">Buttons</a></li>
											<li><a href="#actionLinks">Action Links</a></li>
											<li><a href="#iconicIcons">Iconic Icons</a></li>
                    </ul>
                  </li>
									<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Lorem</a></li>
                      <li><a href="#">Ipsum</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Dolor</a></li>
                    </ul>
                  </li>
									<li><a href="#">Contact</a></li>
						    </ul>
								<form class="navbar-form pull-right input-append">
								  <input type="text" class="span2">
								  <button type="submit" class="btn">Search</button>
								</form>
				      </div>

				    </div>

				  </div>
				</div>
				
			</div>
			
			<!-- Breadcrumb -->
			<div class="row">

				<div class="span12">

					<div class="breadcrumb">
						<a href="">Home</a>
						<span class="divider">|</span>
						<a href="">Parent</a>
						<span class="divider">|</span>
						<span>Child</span>
					</div>

				</div>
				
			</div>

			<!-- Base CSS -->
			<div class="row mb">

				<div class="span6">
					<h1 class="hdg hdgLarger" id="typography">Typography</h1>

					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					
					<h2 class="hdg hdgMedium">Blockquotes</h2>
					
					<blockquote class="pull-right span2">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					  <small>Boris says</small>
					</blockquote>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut. Ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore, ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>

					<h2 class="hdg hdgMedium">Bold, Italics, Small &amp;  Abbreviation styles...</h2>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <strong>incididunt ut labore et dolore magna</strong> aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex <abbr title="abbreviations" class="tooltip-trigger">abbr</abbr> commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum duis aute irure<small>aliquip ex ea commodo consequatrum</small> laboris nisi ut aliquip ex <abbr title="abbreviations" class="tooltip-trigger initialism">abbr</abbr> ea commodo.</p>

					<h2 class="hdg hdgMedium">Emphasis classes</h2>

					<p class="muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
					<p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
					<p class="text-error">Donec ullamcorper nulla non metus auctor fringilla.</p>
					<p class="text-info">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>
					<p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
					
					<h2 class="hdg hdgMedium">Addresses</h2>
					
					<address>
					  <strong>Twitter, Inc.</strong><br>
					  795 Folsom Ave, Suite 600<br>
					  San Francisco, CA 94107<br>
					  <abbr title="Phone">P:</abbr> (123) 456-7890
					</address>

					<address>
					  <strong>Full Name</strong><br>
					  <a href="mailto:#">first.last@gmail.com</a>
					</address>
					
					<h2 class="hdg hdgMedium">Lists</h2>

					<h3 class="hdg hdgSmall">Unordered</h3>
					
					<ul>
	          <li>Lorem ipsum dolor sit amet</li>
	          <li>Consectetur adipiscing elit</li>
	          <li>Nulla volutpat aliquam velit
	            <ul>
	              <li>Phasellus iaculis neque</li>
	              <li>Vestibulum laoreet porttitor sem</li>
	              <li>Ac tristique libero volutpat at</li>
	            </ul>
	          </li>
	          <li>Faucibus porta lacus fringilla vel</li>
	        </ul>
	
					<h3 class="hdg hdgSmall">Ordered</h3>

					<ol>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Consectetur adipiscing elit</li>
            <li>Integer molestie lorem at massa</li>
            <li>Eget porttitor lorem</li>
          </ol>

					<h3 class="hdg hdgSmall">Unstyled</h3>

					<ul class="unstyled">
           <li>Lorem ipsum dolor sit amet</li>
           <li>Nulla volutpat aliquam velit
             <ul>
               <li>Phasellus iaculis neque</li>
               <li>Ac tristique libero volutpat at</li>
             </ul>
           </li>
           <li>Eget porttitor lorem</li>
         </ul>

					<h3 class="hdg hdgSmall">Description</h3>

				<dl>
	         <dt>Description lists</dt>
          <dd>A description list is perfect for defining terms.</dd>
          <dt>Euismod</dt>
          <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
          <dd>Donec id elit non mi porta gravida at eget metus.</dd>
          <dt>Malesuada porta</dt>
          <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
        </dl>

				<h3 class="hdg hdgSmall">Description Horizontal</h3>

				<dl class="dl-horizontal">
	        <dt>Description lists</dt>
	        <dd>A description list is perfect for defining terms.</dd>
	        <dt>Euismod</dt>
	        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
	        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
	        <dt>Malesuada porta</dt>
	        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
	        <dt>Felis euismod semper eget lacinia</dt>
	        <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
	      </dl>

				<h1 class="hdg hdgLarger" id="code">Code</h1>

				<h2 class="hdg hdgMedium">Inline</h2>

					<p>Lorem ipsum dolor sit amet, consectetur <code>&lt;section&gt;</code>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<h2 class="hdg hdgMedium">Basic block</h2>
					
<pre class="mb">
&lt;p&gt;Sample text here...&lt;/p&gt; <code>dsadasdasdsa</code>
</pre>

					<h1 class="hdg hdgLarge" id="tables">Tables</h1>

					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
					</table>

					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
					</table>
					
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td rowspan="2">1</td>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<td>Mark</td>
								<td>Otto</td>
								<td>@TwBootstrap</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<td>3</td>
								<td colspan="2">Larry the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
					</table>

					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<td>3</td>
								<td colspan="2">Larry the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
					</table>

					<table class="table table-condensed">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Username</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<td>3</td>
								<td colspan="2">Larry the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
					</table>

					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Product</th>
								<th>Payment Taken</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr class="success">
								<td>1</td>
								<td>TB - Monthly</td>
								<td>01/04/2012</td>
								<td>Approved</td>
							</tr>
							<tr class="error">
								<td>2</td>
								<td>TB - Monthly</td>
								<td>02/04/2012</td>
								<td>Declined</td>
							</tr>
							<tr class="warning">
								<td>3</td>
								<td>TB - Monthly</td>
								<td>03/04/2012</td>
								<td>Pending</td>
							</tr>
							<tr class="info">
								<td>4</td>
								<td>TB - Monthly</td>
								<td>04/04/2012</td>
								<td>Call in to confirm</td>
							</tr>
						</tbody>
					</table>
					
					<table class="table table-striped table-bordered">
						<thead>
               <tr><th>Name</th><th>Description</th><th>Actions</th></tr>
             </thead>
             <tbody data-provides="rowlink">
               <tr class="rowlink"><td>Modals</td><td>A streamlined, but flexible, take on the traditional javascript modal plugin with only the minimum required functionality and smart defaults.</td><td class="nolink"><a href="http://www.google.com">Action</a></td></tr>
               <tr class="rowlink"><td>Dropdowns</td><td>Add dropdown menus to nearly anything in Bootstrap with this simple plugin. Bootstrap features full dropdown menu support on in the navbar, tabs, and pills.</td><td class="nolink"><a href="#">Action</a></td></tr>
               <tr class="rowlink"><td>Scrollspy</td><td>Use scrollspy to automatically update the links in your navbar to show the current active link based on scroll position.</td><td class="nolink"><a href="#">Action</a></td></tr>
               <tr class="rowlink"><td>Togglable tabs</td><td>Use this plugin to make tabs and pills more useful by allowing them to toggle through tabbable panes of local content.</td><td class="nolink"><a href="#">Action</a></td></tr>
               <tr class="rowlink"><td>Tooltips</td><td>A new take on the jQuery Tipsy plugin, Tooltips don't rely on images, uss CSS3 for animations, and data-attributes for local title storage.</td><td class="nolink"><a href="#">Action</a></td></tr>
             </tbody>
           </table>
					
					<h1 class="hdg hdgLarge" id="forms">Forms</h1>

					<h2 class="hdg hdgMedium">Default</h2>

					<form>
					  <fieldset>
					    <legend>Legend</legend>
					    <label>Label name</label>
					    <input type="text">
					    <span class="help-block">Example block-level help text here.</span>
					    <label class="checkbox">
					      <input type="checkbox"> Check me out
					    </label>
					    <button type="submit" class="btn">Submit</button>
					  </fieldset>
					</form>

					<h2 class="hdg hdgMedium">Inline</h2>

					<form class="form-inline">
            <input type="text" class="input-small">
            <input type="password" class="input-small">
            <label class="checkbox" style="width:110px">
              <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn">Sign in</button>
          </form>
					
					<h2 class="hdg hdgMedium">Horizontal</h2>
					
					<form class="form-horizontal">
            <div class="control-group">
              <label class="control-label" for="inputEmail">Email</label>
              <div class="controls">
                <input type="text" id="inputEmail" placeholder="Email">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">Password</label>
              <div class="controls">
                <input type="password" id="inputPassword" placeholder="Password">
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <label class="checkbox">
                  <input type="checkbox"> Remember me
                </label>
                <button type="submit" class="btn">Sign in</button>
              </div>
            </div>
					</form>
					
					<h2 class="hdg hdgMedium">Form Controls</h2>
					
					<form class="form-horizontal">
						
						<div class="control-group">
              <label class="control-label" for="inputInput">Input</label>
              <div class="controls">
                <input type="text" id="inputInput">
								<span class="help-inline">Inline help text</span>
              </div>
            </div>

						<div class="control-group">
              <label class="control-label" for="inputTextarea">Textarea</label>
              <div class="controls">
								<textarea rows="3" id="inputTextarea"></textarea>
								<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
              </div>
            </div>

						<div class="control-group">
							<div class="controls">
		            <label class="radio">
		              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
		              Option one is this and that
		            </label>
		            <label class="radio">
		              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
		              Option two can be something else
		            </label>
	          	</div>
		          
						</div>
						
						<div class="control-group">
	            <div class="controls">
		            <label class="checkbox inline">
		              <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
		            </label>
		            <label class="checkbox inline">
		              <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
		            </label>
		            <label class="checkbox inline">
		              <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
		            </label>
	            </div>
	        	</div>
	
						<div class="control-group">
						  <label class="control-label">Upload button</label>
						  <div class="controls">
								<div class="fileupload fileupload-new" data-provides="fileupload">
								  <div class="input-append">
								    <div class="uneditable-input span3"><i class="iconic-document fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
								  </div>
								</div>
						    <p class="help-block">It's possible to use a button to upload files, instead of showing the native browser element.</p>
						  </div>
						</div>

						<div class="control-group">
						  <label class="control-label">Upload button</label>
						  <div class="controls">
								<div class="fileupload fileupload-new" data-provides="fileupload">
								  <span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" /></span>
								  <span class="fileupload-preview"></span>
								  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
								</div>
						    <p class="help-block">It's possible to use a button to upload files, instead of showing the native browser element.</p>
						  </div>
						</div>
						
						<div class="control-group">
						  <label class="control-label">Upload button</label>
						  <div class="controls">
						
								<div class="fileupload fileupload-new" data-provides="fileupload">
								  <div class="fileupload-preview thumbnail"></div>
								  <div>
								    <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" /></span>
								    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
								  </div>
								</div>
	
						    <p class="help-block">It's possible to use a button to upload files, instead of showing the native browser element.</p>
						  </div>
						</div>
						
						<div class="control-group">
						  <label class="control-label">Input Mask</label>
						  <div class="controls">
								<input type="text" class="span4" data-mask="999-99-999-9999-9">
						    <p class="help-block">Input masks can be used to force the user to enter data conform a specific format. Unlike validation, the user can't enter any other key than the ones specified by the mask.</p>
						  </div>
						</div>
						

						<div class="control-group">
              <label class="control-label" for="select">Select</label>

	            <div class="controls">

								<select id="select">
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
								
	            </div>

        		</div>


						<div class="control-group">
              <label class="control-label" for="selectMultiple">Select</label>

	            <div class="controls">

								<select id="selectMultiple" multiple="multiple">
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
								
	            </div>

        		</div>

						<div class="control-group">
              <label class="control-label" for="prependedInput">Prepended input</label>

	            <div class="controls">

								<div class="input-prepend">
		              <span class="add-on">@</span>
		              <input class="span2" id="prependedInput" size="16" type="text">
		            </div>

	            </div>

        		</div>

						<div class="control-group">
              <label class="control-label" for="appendedInput">Appended input</label>

	            <div class="controls">

								<div class="input-append">
		              <input class="span2" id="appendedInput" size="16" type="text">
		              <span class="add-on">.00</span>
		            </div>

	            </div>

        		</div>

						<div class="control-group">
              <label class="control-label" for="appendedPrependedInput">Appended &amp; Prepended</label>

	            <div class="controls">

								<div class="input-prepend input-append">
									<span class="add-on">$</span><input class="span2" id="appendedPrependedInput" size="16" type="text"><span class="add-on">.00</span>
								</div>

	            </div>

        		</div>

						<div class="control-group">
              <label class="control-label" for="appendedInputButton">Appended Input Button</label>

	            <div class="controls">

								<div class="input-append">
		              <input class="span2" id="appendedInputButton" type="text">
		              <button class="btn" type="button">Go!</button>
		            </div>

	            </div>

        		</div>

						<div class="control-group">
              <label class="control-label" for="appendedInputDropdown">Appended Input Dropdown</label>

	            <div class="controls">

								<div class="input-append">
		              <input class="span2" id="appendedInputDropdown" type="text">
		              <div class="btn-group">
		                <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
		                <ul class="dropdown-menu">
		                  <li><a href="#">Action</a></li>
		                  <li><a href="#">Another action</a></li>
		                  <li><a href="#">Something else here</a></li>
		                  <li class="divider"></li>
		                  <li><a href="#">Separated link</a></li>
		                </ul>
		              </div><!-- /btn-group -->
		            </div>

	            </div>

        		</div>

						<div class="control-group">
              <label class="control-label" for="disabled">Disabled Span</label>
              <div class="controls">
								<span class="input-xlarge uneditable-input">This is a span tag</span>
              </div>
            </div>

						<div class="control-group">
              <label class="control-label" for="disabled">Disabled Input</label>
              <div class="controls">
								<input class="input-xlarge" id="disabledInput" type="text" value="This is an input tag" disabled>
              </div>
            </div>

						<div class="control-group">
              <label class="control-label" for="small-1">Range</label>
              <div class="controls">
                <input class="span1" id="small-1" type="number">
              </div>
            </div>

						<div class="form-actions">
              <button type="submit" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn">Cancel</button>
            </div>

					</form>
					
					<h2 class="hdg hdgMedium">Control Sizing</h2>
					
					<h3 class="hdg hdgSmall">Block Level</h3>
					
					<input class="input-block-level" type="text">

					<h3 class="hdg hdgSmall">Relative Sizing</h3>
					
					<input class="input-mini show" type="text">
					<input class="input-small show" type="text">
					<input class="input-medium show" type="text">
					<input class="input-large show" type="text">
					<input class="input-xlarge show" type="text">
					<input class="input-xxlarge show" type="text">
					
					<h3 class="hdg hdgSmall">Grid Sizing</h3>
					
          <input class="span1 show" type="text">
          <input class="span2 show" type="text">
          <input class="span3 show" type="text">

					<form>
	          <div class="controls">
	            <input class="span5" type="text">
	          </div>                             
	          <div class="controls controls-row">
	            <input class="span4" type="text">
	            <input class="span1" type="text">
	          </div>                             
	          <div class="controls controls-row">
	            <input class="span3" type="text">
	            <input class="span2" type="text">
	          </div>                             
	          <div class="controls controls-row">
	            <input class="span2" type="text">
	            <input class="span3" type="text">
	          </div>                             
	          <div class="controls controls-row">
	            <input class="span1" type="text">
	            <input class="span4" type="text">
	          </div>
					</form>
					
					<h3 class="hdg hdgSmall">Validation states</h3>
					
					<form class="form-horizontal">
            <div class="control-group warning">
              <label class="control-label" for="inputWarning">Input with warning</label>
              <div class="controls">
                <input type="text" id="inputWarning">
                <span class="help-inline">Something may have gone wrong</span>
              </div>
            </div>
            <div class="control-group error">
              <label class="control-label" for="inputError">Input with error</label>
              <div class="controls">
                <input type="text" id="inputError">
                <span class="help-inline">Please correct the error</span>
              </div>
            </div>
            <div class="control-group info">
              <label class="control-label" for="inputInfo">Input with info</label>
              <div class="controls">
                <input type="text" id="inputInfo">
                <span class="help-inline">Username is taken</span>
              </div>
            </div>
            <div class="control-group success">
              <label class="control-label" for="inputSuccess">Input with success</label>
              <div class="controls">
                <input type="text" id="inputSuccess">
                <span class="help-inline">Woohoo!</span>
              </div>
            </div>
          </form>



						<h1 class="hdg hdgLarge" id="iconicIcons">Iconic icons <small>Icons as a font</small></h1>

						<ul class="thumbnails">
	            <li class="span3"><i class="iconic-hash"></i> iconic-hash</li>
	            <li class="span3"><i class="iconic-question-mark"></i> iconic-question-mark</li>
	            <li class="span3"><i class="iconic-at"></i> iconic-at</li>
	            <li class="span3"><i class="iconic-pilcrow"></i> iconic-pilcrow</li>
	            <li class="span3"><i class="iconic-info"></i> iconic-info</li>
	            <li class="span3"><i class="iconic-home"></i> iconic-home</li>
	            <li class="span3"><i class="iconic-sun"></i> iconic-sun</li>
	            <li class="span3"><i class="iconic-sun-stroke"></i> iconic-sun-stroke</li>
	            <li class="span3"><i class="iconic-cloud"></i> iconic-cloud</li>
	            <li class="span3"><i class="iconic-rain"></i> iconic-rain</li>
	            <li class="span3"><i class="iconic-umbrella"></i> iconic-umbrella</li>
	            <li class="span3"><i class="iconic-bolt"></i> iconic-bolt</li>
	            <li class="span3"><i class="iconic-star"></i> iconic-star</li>
	            <li class="span3"><i class="iconic-moon"></i> iconic-moon</li>
	            <li class="span3"><i class="iconic-moon-stroke"></i> iconic-moon-stroke</li>
	            <li class="span3"><i class="iconic-heart"></i> iconic-heart</li>
	            <li class="span3"><i class="iconic-heart-stroke"></i> iconic-heart-stroke</li>
	            <li class="span3"><i class="iconic-trash"></i> iconic-trash</li>
	            <li class="span3"><i class="iconic-trash-stroke"></i> iconic-trash-stroke</li>
	            <li class="span3"><i class="iconic-link"></i> iconic-link</li>
	            <li class="span3"><i class="iconic-mail"></i> iconic-mail</li>
	            <li class="span3"><i class="iconic-fork"></i> iconic-fork</li>
	            <li class="span3"><i class="iconic-cog"></i> iconic-cog</li>
	            <li class="span3"><i class="iconic-wrench"></i> iconic-wrench</li>
	            <li class="span3"><i class="iconic-clock"></i> iconic-clock</li>
	            <li class="span3"><i class="iconic-compass"></i> iconic-compass</li>
	            <li class="span3"><i class="iconic-dial"></i> iconic-dial</li>
	            <li class="span3"><i class="iconic-lightbulb"></i> iconic-lightbulb</li>
	            <li class="span3"><i class="iconic-box"></i> iconic-box</li>
	            <li class="span3"><i class="iconic-award"></i> iconic-award</li>
	            <li class="span3"><i class="iconic-award-stroke"></i> iconic-award-stroke</li>
	            <li class="span3"><i class="iconic-left-quote"></i> iconic-left-quote</li>
	            <li class="span3"><i class="iconic-right-quote"></i> iconic-right-quote</li>
	            <li class="span3"><i class="iconic-left-quote-alt"></i> iconic-left-quote-alt</li>
	            <li class="span3"><i class="iconic-right-quote-alt"></i> iconic-right-quote-alt</li>
	            <li class="span3"><i class="iconic-x"></i> iconic-x</li>
	            <li class="span3"><i class="iconic-check"></i> iconic-check</li>
	            <li class="span3"><i class="iconic-plus"></i> iconic-plus</li>
	            <li class="span3"><i class="iconic-minus"></i> iconic-minus</li>
	            <li class="span3"><i class="iconic-o-x"></i> iconic-o-x</li>
	            <li class="span3"><i class="iconic-o-check"></i> iconic-o-check</li>
	            <li class="span3"><i class="iconic-o-plus"></i> iconic-o-plus</li>
	            <li class="span3"><i class="iconic-o-minus"></i> iconic-o-minus</li>

	            <li class="span3"><i class="iconic-user"></i> iconic-user</li>
	            <li class="span3"><i class="iconic-chat"></i> iconic-chat</li>
	            <li class="span3"><i class="iconic-chat-alt"></i> iconic-chat-alt</li>
	            <li class="span3"><i class="iconic-chat-alt-stroke"></i> iconic-chat-alt-stroke</li>
	            <li class="span3"><i class="iconic-comment"></i> iconic-comment</li>
	            <li class="span3"><i class="iconic-comment-stroke"></i> iconic-comment-stroke</li>
	            <li class="span3"><i class="iconic-comment-alt1"></i> iconic-comment-alt1</li>
	            <li class="span3"><i class="iconic-comment-alt1-stroke"></i> iconic-comment-alt1-stroke</li>
	            <li class="span3"><i class="iconic-comment-alt2"></i> iconic-comment-alt2</li>
	            <li class="span3"><i class="iconic-comment-alt2-stroke"></i> iconic-comment-alt2-stroke</li>
	            <li class="span3"><i class="iconic-image"></i> iconic-image</li>
	            <li class="span3"><i class="iconic-chart"></i> iconic-chart</li>
	            <li class="span3"><i class="iconic-chart-alt"></i> iconic-chart-alt</li>
	            <li class="span3"><i class="iconic-aperture"></i> iconic-aperture</li>
	            <li class="span3"><i class="iconic-aperture-alt"></i> iconic-aperture-alt</li>
	            <li class="span3"><i class="iconic-cursor"></i> iconic-cursor</li>
	            <li class="span3"><i class="iconic-denied"></i> iconic-denied</li>
	            <li class="span3"><i class="iconic-eye"></i> iconic-eye</li>
	            <li class="span3"><i class="iconic-magnifying-glass"></i> iconic-magnifying-glass</li>
	            <li class="span3"><i class="iconic-pen"></i> iconic-pen</li>
	            <li class="span3"><i class="iconic-pen-alt"></i> iconic-pen-alt</li>
	            <li class="span3"><i class="iconic-pen-alt-stroke"></i> iconic-pen-alt-stroke</li>
	            <li class="span3"><i class="iconic-pen-alt2"></i> iconic-pen-alt2</li>
	            <li class="span3"><i class="iconic-brush"></i> iconic-brush</li>
	            <li class="span3"><i class="iconic-brush-alt"></i> iconic-brush-alt</li>
	            <li class="span3"><i class="iconic-eyedropper"></i> iconic-eyedropper</li>
	            <li class="span3"><i class="iconic-layers"></i> iconic-layers</li>
	            <li class="span3"><i class="iconic-layers-alt"></i> iconic-layers-alt</li>
	            <li class="span3"><i class="iconic-target"></i> iconic-target</li>
	            <li class="span3"><i class="iconic-tag"></i> iconic-tag</li>
	            <li class="span3"><i class="iconic-tag-stroke"></i> iconic-tag-stroke</li>
	            <li class="span3"><i class="iconic-rss"></i> iconic-rss</li>
	            <li class="span3"><i class="iconic-rss-alt"></i> iconic-rss-alt</li>
	            <li class="span3"><i class="iconic-share"></i> iconic-share</li>
	            <li class="span3"><i class="iconic-undo"></i> iconic-undo</li>
	            <li class="span3"><i class="iconic-curved-arrow"></i> iconic-curved-arrow</li>
	            <li class="span3"><i class="iconic-key"></i> iconic-key</li>
	            <li class="span3"><i class="iconic-key-stroke"></i> iconic-key-stroke</li>
	            <li class="span3"><i class="iconic-lock"></i> iconic-lock</li>
	            <li class="span3"><i class="iconic-lock-stroke"></i> iconic-lock-stroke</li>
	            <li class="span3"><i class="iconic-unlock"></i> iconic-unlock</li>
	            <li class="span3"><i class="iconic-unlock-stroke"></i> iconic-unlock-stroke</li>
	            <li class="span3"><i class="iconic-steering-wheel"></i> iconic-steering-wheel</li>

	            <li class="span3"><i class="iconic-arrow-left"></i> iconic-arrow-left</li>
	            <li class="span3"><i class="iconic-arrow-up"></i> iconic-arrow-up</li>
	            <li class="span3"><i class="iconic-arrow-right"></i> iconic-arrow-right</li>
	            <li class="span3"><i class="iconic-arrow-down"></i> iconic-arrow-down</li>
	            <li class="span3"><i class="iconic-move"></i> iconic-move</li>
	            <li class="span3"><i class="iconic-move-alt"></i> iconic-move-alt</li>
	            <li class="span3"><i class="iconic-move-horizontal"></i> iconic-move-horizontal</li>
	            <li class="span3"><i class="iconic-move-horizontal-alt"></i> iconic-move-horizontal-alt</li>
	            <li class="span3"><i class="iconic-move-vertical"></i> iconic-move-vertical</li>
	            <li class="span3"><i class="iconic-move-vertical-alt"></i> iconic-move-vertical-alt</li>
	            <li class="span3"><i class="iconic-o-arrow-left"></i> iconic-o-arrow-left</li>
	            <li class="span3"><i class="iconic-o-arrow-left-alt"></i> iconic-o-arrow-left-alt</li>
	            <li class="span3"><i class="iconic-o-arrow-up"></i> iconic-o-arrow-up</li>
	            <li class="span3"><i class="iconic-o-arrow-up-alt"></i> iconic-o-arrow-up-alt</li>
	            <li class="span3"><i class="iconic-o-arrow-right"></i> iconic-o-arrow-right</li>
	            <li class="span3"><i class="iconic-o-arrow-right-alt"></i> iconic-o-arrow-right-alt</li>
	            <li class="span3"><i class="iconic-o-arrow-down"></i> iconic-o-arrow-down</li>
	            <li class="span3"><i class="iconic-o-arrow-down-alt"></i> iconic-o-arrow-down-alt</li>
	            <li class="span3"><i class="iconic-o-move"></i> iconic-o-move</li>
	            <li class="span3"><i class="iconic-o-move-horizontal"></i> iconic-o-move-horizontal</li>
	            <li class="span3"><i class="iconic-o-move-vertical"></i> iconic-o-move-vertical</li>
	            <li class="span3"><i class="iconic-fullscreen"></i> iconic-fullscreen</li>
	            <li class="span3"><i class="iconic-fullscreen-alt"></i> iconic-fullscreen-alt</li>
	            <li class="span3"><i class="iconic-fullscreen-exit"></i> iconic-fullscreen-exit</li>
	            <li class="span3"><i class="iconic-fullscreen-exit-alt"></i> iconic-fullscreen-exit-alt</li>
	            <li class="span3"><i class="iconic-new-window"></i> iconic-new-window</li>
	            <li class="span3"><i class="iconic-reload"></i> iconic-reload</li>
	            <li class="span3"><i class="iconic-reload-alt"></i> iconic-reload-alt</li>
	            <li class="span3"><i class="iconic-loop"></i> iconic-loop</li>
	            <li class="span3"><i class="iconic-loop-alt"></i> iconic-loop-alt</li>
	            <li class="span3"><i class="iconic-back-forth"></i> iconic-back-forth</li>
	            <li class="span3"><i class="iconic-back-forth-alt"></i> iconic-back-forth-alt</li>
	            <li class="span3"><i class="iconic-spin"></i> iconic-spin</li>
	            <li class="span3"><i class="iconic-spin-alt"></i> iconic-spin-alt</li>
	            <li class="span3"><i class="iconic-transfer"></i> iconic-transfer</li>
	            <li class="span3"><i class="iconic-download"></i> iconic-download</li>
	            <li class="span3"><i class="iconic-upload"></i> iconic-upload</li>
	            <li class="span3"><i class="iconic-cloud-download"></i> iconic-cloud-download</li>
	            <li class="span3"><i class="iconic-cloud-upload"></i> iconic-cloud-upload</li>
	            <li class="span3"><i class="iconic-article"></i> iconic-article</li>
	            <li class="span3"><i class="iconic-read-more"></i> iconic-read-more</li>
	            <li class="span3"><i class="iconic-list"></i> iconic-list</li>
	            <li class="span3"><i class="iconic-list-nested"></i> iconic-list-nested</li>

	            <li class="span3"><i class="iconic-play"></i> iconic-play</li>
	            <li class="span3"><i class="iconic-o-play"></i> iconic-o-play</li>
	            <li class="span3"><i class="iconic-pause"></i> iconic-pause</li>
	            <li class="span3"><i class="iconic-stop"></i> iconic-stop</li>
	            <li class="span3"><i class="iconic-eject"></i> iconic-eject</li>
	            <li class="span3"><i class="iconic-first"></i> iconic-first</li>
	            <li class="span3"><i class="iconic-last"></i> iconic-last</li>
	            <li class="span3"><i class="iconic-volume"></i> iconic-volume</li>
	            <li class="span3"><i class="iconic-volume-mute"></i> iconic-volume-mute</li>
	            <li class="span3"><i class="iconic-headphones"></i> iconic-headphones</li>
	            <li class="span3"><i class="iconic-mic"></i> iconic-mic</li>
	            <li class="span3"><i class="iconic-equalizer"></i> iconic-equalizer</li>
	            <li class="span3"><i class="iconic-battery-half"></i> iconic-battery-half</li>
	            <li class="span3"><i class="iconic-battery-empty"></i> iconic-battery-empty</li>
	            <li class="span3"><i class="iconic-battery-charging"></i> iconic-battery-charging</li>
	            <li class="span3"><i class="iconic-battery-full"></i> iconic-battery-full</li>
	            <li class="span3"><i class="iconic-bars"></i> iconic-bars</li>
	            <li class="span3"><i class="iconic-bars-alt"></i> iconic-bars-alt</li>
	            <li class="span3"><i class="iconic-movie"></i> iconic-movie</li>
	            <li class="span3"><i class="iconic-cd"></i> iconic-cd</li>
	            <li class="span3"><i class="iconic-folder"></i> iconic-folder</li>
	            <li class="span3"><i class="iconic-folder-stroke"></i> iconic-folder-stroke</li>
	            <li class="span3"><i class="iconic-document"></i> iconic-document</li>
	            <li class="span3"><i class="iconic-document-stroke"></i> iconic-document-stroke</li>
	            <li class="span3"><i class="iconic-document-alt"></i> iconic-document-alt</li>
	            <li class="span3"><i class="iconic-document-alt-stroke"></i> iconic-document-alt-stroke</li>
	            <li class="span3"><i class="iconic-pin"></i> iconic-pin</li>
	            <li class="span3"><i class="iconic-map-pin"></i> iconic-map-pin</li>
	            <li class="span3"><i class="iconic-map-pin-stroke"></i> iconic-map-pin-stroke</li>
	            <li class="span3"><i class="iconic-map-pin-alt"></i> iconic-map-pin-alt</li>
	            <li class="span3"><i class="iconic-book"></i> iconic-book</li>
	            <li class="span3"><i class="iconic-book-alt"></i> iconic-book-alt</li>
	            <li class="span3"><i class="iconic-book-alt2"></i> iconic-book-alt2</li>
	            <li class="span3"><i class="iconic-calendar"></i> iconic-calendar</li>
	            <li class="span3"><i class="iconic-calendar-alt"></i> iconic-calendar-alt</li>
	            <li class="span3"><i class="iconic-calendar-alt-stroke"></i> iconic-calendar-alt-stroke</li>
	            <li class="span3"><i class="iconic-iphone"></i> iconic-iphone</li>
	            <li class="span3"><i class="iconic-camera"></i> iconic-camera</li>
	            <li class="span3"><i class="iconic-beaker"></i> iconic-beaker</li>
	            <li class="span3"><i class="iconic-beaker-alt"></i> iconic-beaker-alt</li>
	          </ul>

				</div>

				<div class="span6">

					<h1 class="hdg hdgLarge" id="buttons">Buttons</h1>

					<h2 class="hdg hdgMedium">Default</h2>

					<!-- Table -->
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Button</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><button type="button" class="btn">Default</button></td>
								<td>Standard gray button with gradient</td>
							</tr>
							<tr>
								<td><button type="button" class="btn btn-primary">Primary</button></td>
								<td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
							</tr>
							<tr>
								<td><button type="button" class="btn btn-info">Info</button></td>
								<td>Used as an alternative to the default styles</td>
							</tr>
							<tr>
								<td><button type="button" class="btn btn-success">Success</button></td>
								<td>Indicates a successful or positive action</td>
							</tr>
							<tr>
								<td><button type="button" class="btn btn-warning">Warning</button></td>
								<td>Indicates caution should be taken with this action</td>
							</tr>
							<tr>
								<td><button type="button" class="btn btn-danger">Danger</button></td>
								<td>Indicates a dangerous or potentially negative action</td>
							</tr>
							<tr>
								<td><button type="button" class="btn btn-inverse">Inverse</button></td>
								<td>Alternate dark gray button, not tied to a semantic action or use</td>
							</tr>
							<tr>
								<td><button type="button" class="btn btn-link">Link</button></td>
								<td>Deemphasize a button by making it look like a link while maintaining button behavior</td>
							</tr>
						</tbody>
					</table>

					<h2 class="hdg hdgMedium">Button Sizes</h2>

					<p>
						<button type="button" class="btn btn-large btn-primary">Large button</button>
						<button type="button" class="btn btn-large">Large button</button>
					</p>
					<p>
						<button type="button" class="btn btn-primary">Default button</button>
						<button type="button" class="btn">Default button</button>
					</p>
					<p>
						<button type="button" class="btn btn-small btn-primary">Small button</button>
						<button type="button" class="btn btn-small">Small button</button>
					</p>
					<p>
						<button type="button" class="btn btn-mini btn-primary">Mini button</button>
						<button type="button" class="btn btn-mini">Mini button</button>
					</p>
					
          <button type="button" class="btn btn-large btn-block btn-primary">Block level button</button>
          <button type="button" class="btn btn-large btn-block">Block level button</button>
					
					<h2 class="hdg hdgMedium">Disabled state</h2>

					<a href="#" class="btn btn-large btn-primary disabled">Primary link</a>
					<a href="#" class="btn btn-large disabled">Link</a>
					
					<h2 class="hdg hdgMedium">Button Groups</h2>

						<div class="btn-toolbar">
		            <div class="btn-group">
		              <button class="btn btn-primary">1</button>
		              <button class="btn">2</button>
		              <button class="btn">3</button>
		              <button class="btn">4</button>
		            </div>
		            <div class="btn-group">
		              <button class="btn">5</button>
		              <button class="btn">6</button>
		              <button class="btn">7</button>
		            </div>
		            <div class="btn-group">
		              <button class="btn">8</button>
		            </div>
		          </div>

						<div class="btn-group btn-group-vertical">
		          <button type="button" class="btn"><i class="iconic-rain"></i></button>
		          <button type="button" class="btn"><i class="iconic-sun-stroke"></i></button>
		          <button type="button" class="btn"><i class="iconic-bolt"></i></button>
		        </div>

						<h2 class="hdg hdgMedium">Dropdowns</h2>

						<div class="btn-toolbar">
	            <div class="btn-group">
	              <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
	              <ul class="dropdown-menu">
	                <li><a href="#">Action</a></li>
	                <li><a href="#">Another action</a></li>
	                <li><a href="#">Something else here</a></li>
	                <li class="divider"></li>
	                <li><a href="#">Separated link</a></li>
	              </ul>
	            </div><!-- /btn-group -->
	            <div class="btn-group">
	              <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
	              <ul class="dropdown-menu">
	                <li><a href="#">Action</a></li>
	                <li><a href="#">Another action</a></li>
	                <li><a href="#">Something else here</a></li>
	                <li class="divider"></li>
	                <li><a href="#">Separated link</a></li>
	                <li class="dropdown-submenu">
	                  <a tabindex="-1" href="#">More options</a>
	                  <ul class="dropdown-menu">
	                    <li><a tabindex="-1" href="#">Second level link</a></li>
	                    <li><a tabindex="-1" href="#">Second level link</a></li>
	                    <li><a tabindex="-1" href="#">Second level link</a></li>
	                    <li><a tabindex="-1" href="#">Second level link</a></li>
	                    <li><a tabindex="-1" href="#">Second level link</a></li>
	                  </ul>
	                </li>
	              </ul>
	            </div><!-- /btn-group -->
	            <div class="btn-group">
	              <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
	              <ul class="dropdown-menu">
	                <li><a href="#">Action</a></li>
	                <li><a href="#">Another action</a></li>
	                <li><a href="#">Something else here</a></li>
	                <li class="divider"></li>
	                <li><a href="#">Separated link</a></li>
	              </ul>
	            </div><!-- /btn-group -->
	            <div class="btn-group">
	              <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span></button>
	              <ul class="dropdown-menu">
	                <li><a href="#">Action</a></li>
	                <li><a href="#">Another action</a></li>
	                <li><a href="#">Something else here</a></li>
	                <li class="divider"></li>
	                <li><a href="#">Separated link</a></li>
	              </ul>
	            </div><!-- /btn-group -->
	            <div class="btn-group">
	              <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
	              <ul class="dropdown-menu">
	                <li><a href="#">Action</a></li>
	                <li><a href="#">Another action</a></li>
	                <li><a href="#">Something else here</a></li>
	                <li class="divider"></li>
	                <li><a href="#">Separated link</a></li>
	              </ul>
	            </div><!-- /btn-group -->
	          </div>

						<h1 class="hdg hdgLarge" id="actionLinks">Action Links <small>Jasny</small></h1>

						<h2 class="hdg hdgMedium">Alternative style for actions</h2>

						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Action link</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a class="act" href="#">Default</a></td>
									<td>Standard gray text</td>
								</tr>
								<tr>
									<td><a class="act act-primary" href="#">Primary</a></td>
									<td>Provides extra visual weight</td>
								</tr>
								<tr>
									<td><a class="act act-info" href="#">Info</a></td>
									<td>Used as an alternate to the default styles</td>
								</tr>
								<tr>
									<td><a class="act act-success" href="#">Success</a></td>
									<td>Indicates a successful or positive action</td>
								</tr>
								<tr>
									<td><a class="act act-warning" href="#">Warning</a></td>
									<td>Indicates caution should be taken with this action</td>
								</tr>
								<tr>
									<td><a class="act act-danger" href="#">Danger</a></td>
									<td>Indicates a dangerous or potentially negative action</td>
								</tr>
							</tbody>
						</table>

						<div class="form-actions">
              <button class="btn btn-primary" type="submit">Save changes</button>
              <button class="btn" type="reset">Cancel</button>
              <a href="#" class="act act-danger pull-right">Delete account</a>
            </div>

					<h1 class="hdg hdgLarger" id="navs">Navs</h1>

					<h2 class="hdg hdgMedium">Basic tabs</h2>

					<ul class="nav nav-tabs">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Messages</a></li>
          </ul>

					<h2 class="hdg hdgMedium">Basic pills</h2>

					<ul class="nav nav-pills">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Messages</a></li>
            <li class="disabled"><a href="#">Disabled link</a></li>
          </ul>

					<h2 class="hdg hdgMedium">Stacked tabs</h2>

					<ul class="nav nav-tabs nav-stacked">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Messages</a></li>
          </ul>

					<h2 class="hdg hdgMedium">Stacked pills</h2>

					<ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Messages</a></li>
          </ul>

					<h2 class="hdg hdgMedium">Tabs with dropdowns</h2>

					<ul class="nav nav-tabs">
           <li class="active"><a href="#">Home</a></li>
           <li><a href="#">Help</a></li>
           <li class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
             <ul class="dropdown-menu">
               <li><a href="#">Action</a></li>
               <li><a href="#">Another action</a></li>
               <li><a href="#">Something else here</a></li>
               <li class="divider"></li>
               <li><a href="#">Separated link</a></li>
             </ul>
           </li>
         </ul>

					<h2 class="hdg hdgMedium">Pills with dropdowns</h2>

				<ul class="nav nav-pills">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Help</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>

				<h2 class="hdg hdgMedium">Nav list</h2>

				<ul class="nav nav-list">
          <li class="nav-header">List header</li>
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Library</a></li>
          <li><a href="#">Applications</a></li>
          <li class="nav-header">Another list header</li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Settings</a></li>
          <li class="divider"></li>
          <li><a href="#">Help</a></li>
        </ul>


				<h1 class="hdg hdgLarger">Tabs</h1>

				<div class="tabbable tabs-below" id="tabbable">
           <div class="tab-content">
             <div class="tab-pane active" id="section1">
               <p>I'm in Section A.</p>
             </div>
             <div class="tab-pane" id="section2">
               <p>Howdy, I'm in Section B.</p>
             </div>
             <div class="tab-pane" id="section3">
               <p>What up girl, this is Section C.</p>
             </div>
           </div>
           <ul class="nav nav-tabs">
             <li class="active"><a href="#section1" data-localscroll="false">Section 1</a></li>
             <li><a href="#section2" data-localscroll="false">Section 2</a></li>
             <li><a href="#section3" data-localscroll="false">Section 3</a></li>
           </ul>
         </div>

				<h1 class="hdg hdgLarger">Accordion</h1>

					<!-- Accordion -->
					<div class="accordion accordion-pills accordion-stacked" id="accordion">
					  <h2 class="heading current">First pane</h2>
					  <div class="pane" style="display:block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>

					  <h2 class="heading">Second pane</h2>
					  <div class="pane">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>

					  <h2 class="heading">Third pane</h2>
					  <div class="pane">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
					</div>
					


			</div>

						
			<!-- Alerts -->
			<div class="row">
				
				<div class="span12">

					<div class="alert alert-error">
						<a class="close" data-dismiss="alert" href="#">×</a>
						<strong>Warning</strong> Lorem ipsum dolor sit amet, consectetur adipisicing...
					</div>

					<div class="alert alert-success alert-block">
						<a class="close" data-dismiss="alert" href="#">×</a>
						<h4 class="alert-heading">Warning</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
						<ul>
							<li>Lorem ipsum dolor sit amet</li>
							<li>Lorem ipsum dolor</li>
						</ul>
					</div>
					
				</div>
				
			</div>
			

			<div class="row">
								<div class="span6">


									<div class="btn-toolbar">
				            <div class="btn-group">
				              <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
				              <ul class="dropdown-menu">
				                <li><a href="#">Action</a></li>
				                <li><a href="#">Another action</a></li>
				                <li><a href="#">Something else here</a></li>
				                <li class="divider"></li>
				                <li><a href="#">Separated link</a></li>
				              </ul>
				            </div><!-- /btn-group -->
				            <div class="btn-group">
				              <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
				              <ul class="dropdown-menu">
				                <li><a href="#">Action</a></li>
				                <li><a href="#">Another action</a></li>
				                <li><a href="#">Something else here</a></li>
				                <li class="divider"></li>
				                <li><a href="#">Separated link</a></li>
				              </ul>
				            </div><!-- /btn-group -->
				            <div class="btn-group">
				              <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
				              <ul class="dropdown-menu">
				                <li><a href="#">Action</a></li>
				                <li><a href="#">Another action</a></li>
				                <li><a href="#">Something else here</a></li>
				                <li class="divider"></li>
				                <li><a href="#">Separated link</a></li>
				              </ul>
				            </div><!-- /btn-group -->
				            <div class="btn-group">
				              <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span></button>
				              <ul class="dropdown-menu">
				                <li><a href="#">Action</a></li>
				                <li><a href="#">Another action</a></li>
				                <li><a href="#">Something else here</a></li>
				                <li class="divider"></li>
				                <li><a href="#">Separated link</a></li>
				              </ul>
				            </div><!-- /btn-group -->
				            <div class="btn-group">
				              <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
				              <ul class="dropdown-menu">
				                <li><a href="#">Action</a></li>
				                <li><a href="#">Another action</a></li>
				                <li><a href="#">Something else here</a></li>
				                <li class="divider"></li>
				                <li><a href="#">Separated link</a></li>
				              </ul>
				            </div><!-- /btn-group -->
				          </div>







									<p>Duis aute irure dolor in reprehenderit in voluptate <span class="label label-success">velit</span> esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

														<ul class="pager">
														  <li><a href="#">Previous</a></li>
														  <li><a href="#">Next</a></li>
														</ul>

									<ul class="media-list">

										<li class="media">
										  <a class="" href="#">
										    <img class="pull-left media-object" src="http://placehold.it/64x64">
											  <div class="media-body">
											    <h4 class="media-heading">Media heading</h4>
											    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
											  </div>
									  	</a>
										</li>
										<li class="media">
										  <a class="pull-left" href="#">
										    <img class="media-object" src="http://placehold.it/64x64">
										  </a>
										  <div class="media-body">
										    <h4 class="media-heading">Media heading</h4>
										    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

												<ul class="media-list">

													<li class="media">
													  <a class="pull-left" href="#">
													    <img class="media-object" src="http://placehold.it/64x64">
													  </a>
													  <div class="media-body">
													    <h4 class="media-heading">Media heading</h4>
													    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
													  </div>
													</li>
													<li class="media">
													  <a class="pull-left" href="#">
													    <img class="media-object" src="http://placehold.it/64x64">
													  </a>
													  <div class="media-body">
													    <h4 class="media-heading">Media heading</h4>
													    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

															<ul class="media-list">

																<li class="media">
																  <a class="pull-left" href="#">
																    <img class="media-object" src="http://placehold.it/64x64">
																  </a>
																  <div class="media-body">
																    <h4 class="media-heading">Media heading</h4>
																    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
																  </div>
																</li>

															</ul>
													  </div>
													</li>

												</ul>

										  </div>
										</li>

									</ul>

				

									<div class="pagination pagination-centered">
						        <ul>
											<li class="disabled"><a href="#">«</a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li><a href="#">»</a></li>
					        	</ul>
					       </div>

								</div>



								<div class="span6">

									<div class="progress progress-striped">
									  <div class="bar" style="width: 20%;"></div>
									</div>

									<div class="progress progress-striped active">
									  <div class="bar" style="width: 40%;"></div>
									</div>

									<div class="progress">
									  <div class="bar bar-success" style="width: 35%;"></div>
									  <div class="bar bar-warning" style="width: 20%;"></div>
									  <div class="bar bar-danger" style="width: 10%;"></div>
									</div>

				
								</div>
				
			</div>
			
			<div class="row">
				<div class="span12">
					


				</div>
			</div>
			
			<div class="row">
				<div class="span6">
					
					
					

				</div>


				<div class="span6">
					<a href="" class="tooltip-trigger" title="Tooltip details">Title</a>
				
					<a href="ajax-sample.html" class="btn btn-primary overlay-ajax-trigger">Show external page in overlay</a>
				
				</div>
				
				
			</div>
		</div>

<?php include('includes/document-footer.php'); ?>