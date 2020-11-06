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
				<input type="button" id="addcart" onclick="myFunction()" value="Add"
				<p></p>
				<script type="text/javascript">
					{literal}
						function myFunction() {
							var element = document.getElementById('addcart'); 
							alert("super");
						}
					{/literal}
				</script>
			</div>
		</div>				
    {/foreach}		
	</div>
</div>