<script type="text/javascript">
	{literal}
		function AddToCart(product) {
			var element = document.getElementById('addcart'); 
			$.ajax({
				type: 'POST',
				url: "/cart.php",
				/*data : { 
					action: 'addToCart',
					product: product,
					qty: 1
				},*/
				success: function(data) {
					console.log(data);
				}
			});
		}
	{/literal}
</script>
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
					</div>
				</div>
				
				<input type="button" id="addcart" onclick="AddToCart({$product})" value="Add">
			</div>
		</div>				
    {/foreach}		
	</div>
</div>