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
						{$form}
					</div>
				</div>
				<button type="button"> Panier</button>
				<p></p>
				<script type="text/javascript">
					$(document).ready(function(){
						$("button").click(function(){

							$.ajax({
								type: 'POST',
								url: 'cart.php',
								success: function(data) {
									alert("super");
									$("p").text(data);

								}
							});
				   });
				});
				</script>
			</div>
		</div>				
    {/foreach}		
	</div>
</div>