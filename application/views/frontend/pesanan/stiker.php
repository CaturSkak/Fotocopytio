<div class="container">
	<header class="page-header">
		<h1 class="page-title">Print</h1>
		<ol class="breadcrumb page-breadcrumb">
			<li><a href="#">Home</a>
			</li>
			<li><a href="#">Pesan</a>
			</li>
			<li class="active">Print</li>
		</ol>
	</header>
	<div class="row">
		<?= form_open('stiker' , array('enctype' => 'multipart/form-data')) ?>
		<div class="col-md-5">
			<h4>Upload File</h4>
			<div class="product-page-product-wrap">
				<div class="clearfix">
					<input type="file" class="dropify" name="upload" required>
				</div>
			</div>
		</div>
		<div class="col-md-7">
			<h4>Detail Pesanan</h4>
			<div class="row" data-gutter="10">
				<div class="col-md-8">
					<div class="box">
						<div class="form-group">
						  <div class="row">
							  <div class="col-md-6">
									Halaman
								</div>
								<div class="col-md-6">
									Sisi
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<input type="text" class="form-control" id="panjang" name="panjang"
										   placeholder="Halaman" required autocomplete="off">
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" id="lebar" name="lebar"
										   placeholder="Sisi" required autocomplete="off">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="">Tipe Print :</label><br>
							<select name="bahan" id="bahan" class="form-control" required>
								<option value="Print Digital">Print Digital</option>
								<option value="Print Biasa">Print Biasa</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Jumlah Halaman :</label>
							<input type="number" name="jumlah" class="form-control" id="jumlah" 
								   required autocomplete="off">
						</div>
						<div class="form-group">
							<label for="">Jumlah Copy :</label>
							<input type="number" class="form-control" required autocomplete="off" name="estimasi">
						</div>
						<br>
						<div class="form-group">
							<label for=""><span style="color: red">*</span>Keterangan :</label>
							<ul>
								<li>Print Digital : Rp. 200 per lembar</li>
								<li>Print Biasa   : Rp. 500 per lembar</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					
						<button type="submit" class="btn btn-block btn-primary" name="keranjang"><i
								class="fa fa-shopping-cart"></i>Add to cart
						</button>
						<?= form_close() ?>
						<div class="product-page-side-section">
							<h5 class="product-page-side-title">Share This Item</h5>
							<ul class="product-page-share-item">
								<li>
									<a class="fa fa-facebook" href="#"></a>
								</li>
								<li>
									<a class="fa fa-twitter" href="#"></a>
								</li>
								<li>
									<a class="fa fa-pinterest" href="#"></a>
								</li>
								<li>
									<a class="fa fa-instagram" href="#"></a>
								</li>
								<li>
									<a class="fa fa-google-plus" href="#"></a>
								</li>
							</ul>
						</div>
						<div class="product-page-side-section">
							<h5 class="product-page-side-title">Shipping & Returns</h5>
							<p class="product-page-side-text">In the store of your choice in 3-5 working days</p>
							<p class="product-page-side-text">STANDARD 4.95 USD FREE (ORDERS OVER 50 USD) In 2-4 working
								days*</p>
							<p class="product-page-side-text">EXPRESS 9.95 USD In 24-48 hours (working days)*</p>
							<p class="product-page-side-text">* Except remote areas</p>
							<p class="product-page-side-text">You have one month from the shipping confirmation
								email.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="gap"></div>
</div>
