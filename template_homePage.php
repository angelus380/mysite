<?php get_header(); ?>

<?php 
/*
Template Name: Home Page
*/
?>

<header id="header" class="header">
	<div class="container">
		<div class="header-text text-center">
			<h1>Delmar Almeida</h1>
			<h2>Get a unique and beautiful website handcrafted with love <span>♥</span></h2>
			<div class="cta-container">
				<a class="theme-btn cta" href="#contact">Peça um orçamento</a>
				<a class="theme-btn reverse" href="#services">Ver mais</a>
			</div>
		</div>
	</div>
</header>

<section id="services" class="services">
  <div class="container">
    <div class="row">
      <div class="push-down col-lg-12 text-center">
        <h3>Os meus serviços</h3>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-md-4">
	      <div class="services-box push-down">
					<span class="fa-stack fa-4x">
	          <i class="fa fa-circle fa-stack-2x colorfull"></i>
	          <i class="fa fa-laptop fa-stack-1x fa-inverse shadow"></i>
	        </span>
	        <h4>1. Web Design</h4>
	        <p class="service-p">Desenho e projeção de um produto web através de uma análise ao modelo de negócio, imagem e comunicação da sua empresa.</p>
	      </div>
      </div>
      <div class="col-md-4">
	      <div class="services-box push-down">
	      	<span class="fa-stack fa-4x">
	          <i class="fa fa-circle fa-stack-2x colorfull"></i>
	          <i class="fa fa-code fa-stack-1x fa-inverse shadow"></i>
	        </span>
	        <h4>2. Development</h4>
	        <p class="service-p">Desenvolvimento do seu website com ferramentas adequadas à sua necessidade e adaptado a diversos dispositivos móveis.</p>
	      </div>
      </div>
      <div class="col-md-4">
	      <div class="services-box push-down">
	      	<span class="fa-stack fa-4x">
	          <i class="fa fa-circle fa-stack-2x colorfull"></i>
	          <i class="fa fa-heart-o fa-stack-1x fa-inverse shadow"></i>
	        </span>
	        <h4>3. Handcrafted</h4>
	        <p class="service-p">Todo o trabalho é construído e testado com o maior cuidado possível para lhe entregar uma solução à medida do seu negócio.</p>
	      </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 text-center">
        <a class="theme-btn" href="#contact">Fale comigo.</a>
      </div>
    </div>
  </div>
</section>

<?php // portfolio section creation 
	$page_id = get_page_by_title( 'portfolio')->ID;
	$child_pages = new WP_Query( array(
    'post_type'      => 'page',
    'posts_per_page' => 12,
    'post_parent'    => $page_id,
    'no_found_rows'  => true,
	) );

	if ( $child_pages->have_posts() ) : 
?>

<section id="portfolio" class="portfolio">
	<div class="container">
		<div class="row">
			<div class="push-down col-lg-12 text-center">
        <h3>Portfólio</h2>
      </div>
		</div>

		<?php	while ( $child_pages->have_posts() ) : $child_pages->the_post(); //portefolio items creation
		
			//get title name and create id eg: "New title" to "#new_title"
				$title = get_the_title(); $item_title = str_replace( ' ', '_', $title ); $item_title_target = '#' . $item_title;
		?>
		<div class="row">
			<div class="portfolio-item col-md-4 col-sm-6">
				<div class="portfolio-item-box">
					<div class="portfolio-bg"></div>
					<div class="touchable-img trans-03s" data-toggle="modal" data-target="<?php echo $item_title_target ?>" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>)">
					</div>
					<div class="portfolio-info-box">
						<h4 class="text-center"><?php the_title(); ?></h4>
					</div>
				</div>

			<?php if ( $post->post_content !== "" ) : // modal creation	?>
				<div class="modal fade" id="<?php echo $item_title ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document"> 
				    <div class="modal-content">
				    	<div class="close-modal" data-dismiss="modal">
				    		<div class="lr"><div class="rl"></div></div>
				    	</div>

				      <div class="container">
				      	<div class="row">
				      		<div class="col-lg-12">
				      			<div class="modal-body">
				      				<h2><?php the_title(); ?></h2>
							      	<div class="body-content"><?php	the_content(); ?></div>
							      	<div class="text-center">
							      		<button type="button" class="btn close-btn trans-03s" data-dismiss="modal">
							      			<i class="fa fa-times"></i> Close
							      		</button>								      		
							      	</div>
				      			</div>
				      		</div>
				      	</div>
				      </div>
				    </div>
				  </div>
				</div>
			<?php endif; // modal close ?>

			</div>
		</div>
	<?php endwhile; // portfolio item close ?>

	</div>
</section>
<?php endif;	wp_reset_postdata(); // portfolio section close ?>


<section id="about" class="about bg">
  <div class="fog-img"></div>
  <div class="container">
    <div class="row">
   		<div class="col-sm-1"></div>
	    <div class="col-sm-4">
	    	<img src="http://i.imgur.com/40fe6Dt.jpg" class="img-responsive img-circle" alt="">
				<ul class="list inline social-btn text-center">
					<li><a href="https://twitter.com/go_ronin" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a href="https://pt.linkedin.com/in/delmar-almeida-7009645b" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
					<li><a href="https://github.com/angelus380" target="_blank"><i class="fa fa-github fa-lg"></i></a></li>
				</ul>
			</div>
      <div class="col-sm-6">
	      <h3 class="text-center">Um bocado sobre a minha história.</h3>
	      <hr class="long">
        <p class="about-text">Em 2013 decidi avançar com a minha primeira startup, a TouchNtalk, que se focava  no desenvolvimento de aplicações web e mobile. Como Designer, aprendi novos conceitos e terminologias utilizados nessa área, e, acima de tudo, a comunicar com programadores.<br><br>Em 2015 tive de abandonar esse projecto e envolvi-me no mundo da programação web através da Creators School, onde aprendi a trabalhar com tecnologias web focadas em ruby-on-rails. Não sendo o suficiente, comecei a explorar outras tecnologias e a implementá-las em vários trabalhos, desenvolvendo assim as minhas competências com HTML, CSS, JS, jQuery, Bootstrap, SQL e WordPress.<br><br>Neste momento, o meu trabalho passa pelo desenvolvimento de sites focados no utilizador final e adaptados ao modelo de negócio do cliente.
      </div>
    </div>
  </div>
</section>

<section id="contact" class="contact bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
        <h3>Contacto</h2>
        <p class="intro-text">Em que posso ajudar no seu negócio?<br><span id="needs" class="needs"></span><span class="blinked animated infinite flash">|</span></p>
      </div>
		</div>

		<div class="form-box">		
			<form id="contact-form" method="POST">
				<label id="name">Nome*</label>
	    	<input type="text" name="name" value="" placeholder="Ex: John Doe" required>
				<label id="_replyto">Email*</label>
		    <input type="email" name="_replyto" value="" placeholder="Ex: exemplo@exemplo.com" required>
				<label id="message">Mensagem*</label>
				<textarea type="text" name="message" value="" placeholder="Ex: Preciso de um novo website" required></textarea>
				<input type="hidden" name="_next" value="<?php echo home_url(); ?>" />
        <input type="text" name="_gotcha" style="display:none;" />
				<div>
					<input class="pull-right" type="submit" value="Send">
				</div>
			</form>
		</div>
	</div>

</section>

<?php get_footer(); ?>