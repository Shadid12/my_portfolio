<div class="container is-fluid">

<nav class="nav" id="nav">

	<div class="box is-fluid">
		<div class="columns">
		
		<div class="column">
			<a class="nav-item">
				<img src="img/shadid.png" alt="Bulma logo">
			</a>
		</div>

		<div class="column">
			<a href="#" class="btn" data-wipe="Portfolio">Portfolio</a>
		</div>

		<div class="column">
			<a href="#" class="btn" data-wipe="Experience">Experience</a>
		</div>

		<div class="column">
			<a href="#" class="btn" data-wipe="About">About</a>
		</div>

		<div class="column">
			<a href="#" class="btn" data-wipe="Contact">Contact</a>
		</div>

		</div>
	</div>

</nav>

</div>




<style type="text/css">

	* {
  box-sizing: border-box;
}

[data-wipe] {
  display: inline-block;
  padding: 12px 18px;
  text-decoration: none;
  position: relative;
  border: 2px solid #445561;
  border-radius: 3px;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  text-align: left;
  color: #445561;
  overflow: hidden;
}
[data-wipe]:before, [data-wipe]:after {
  content: attr(data-wipe);
  padding-top: inherit;
  padding-bottom: inherit;
  white-space: nowrap;
  position: absolute;
  top: 0;
  overflow: hidden;
  color: #F1F1F2;
  background: #445561;
}
[data-wipe]:before {
  left: 0;
  text-indent: 18px;
  width: 0;
}
[data-wipe]:after {
  padding-left: inherit;
  padding-right: inherit;
  left: 100%;
  text-indent: calc(-100% - 36px);
  transition: 0.2s ease-in-out;
}
[data-wipe]:hover:before {
  width: 100%;
  transition: width 0.2s ease-in-out;
}
[data-wipe]:hover:after {
  left: 0;
  text-indent: 0;
  transition: 0s 0.2s ease-in-out;
}


</style>