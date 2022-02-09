<html>
    <body>
		<h1>List of Posts</h1>
		<ul>
			<?php foreach ($posts as $post): ?>
		
				<BR>
					<img src=" <?php echo $post['img'] ?>  ">
				<h2>
					<a href="templates/show.php?id=<?php echo $post['id'] ?>">
						<?php echo $post['title'] ?>
					</a>
				<h2>
					<h5>
						<?php echo $post['date'] ?>
					</h5>

					<div class="card-text">
						<?php echo $post['textintro'] ?>
					</div>
	
		   			 <button onclick="location.href='templates/show.php?id=<?php echo $post['id'] ?>'" 
		   			 class="boton_personalizado" value="Submit">Más...</button>

		   			 <br><br>
			<?php endforeach; ?>


<br><br><br><br>
			  <div class="blog_pages">
						<ul>
							<li class="active"><a href="1">01.</a></li>
						</ul>
					</div>

		</ul>
    </body>
</html>


