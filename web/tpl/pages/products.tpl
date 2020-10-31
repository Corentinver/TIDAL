<div class="latest_product_inner">
	<div class="row">
		{foreach from=$products item=product}
		<div class="col-lg-4 col-md-6">
			<div class="single-product">
				<div class="product-img">
					<img class="card-img" src="../../public/img/product/{$product['picture']}" alt="">
					<div class="p_icon">
						<a href="?page=single_product&id={$product['id']}">
							<i class="ti-eye"></i>
						</a>
						<a href="#">
							<i class="ti-heart"></i>
						</a>
						<a href="#">
							<i class="ti-shopping-cart"></i>
						</a>
						<?php
							if(array_key_exists('addToCart', $_POST)){
								echo "Ajout au Panier";
								window.open("https://www.w3schools.com");
							}
						?>
						<form method="post"> 
							 <input type="submit" name="addToCart" class="button" value="Plus" /> 
						</form>
						
					</div>
				</div>
				<div class="product-btm">
					<a href="#" class="d-block">
						<h4>{$product['name']}</h4>
					</a>
					<div class="mt-3">
						<span class="mr-4">{$product['price']}€</span>
					</div>
				</div>
			</div>
		</div>				
    {/foreach}		
	</div>
</div>