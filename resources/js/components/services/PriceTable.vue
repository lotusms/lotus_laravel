<template>
	<div class="row no-gutters maint-prices">
		<div class="col-xs-12 col-md-4">
			<div
				class="price-table price-table-bronze wow zoomInUp animation-delay-2"
				style="visibility: visible; animation-name: zoomInUp;"
			>
				<header class="price-table-header">
					<h5 class="price-table-category">Bronze</h5>
					<h3>
						<sup>$</sup>60.00
						<sub>/mo.</sub>
					</h3>
				</header>
				<div class="price-table-body">
					<ul class="price-table-list white-text">
						<li>
							<span uk-icon="icon: code"></span>Supports economy websites.
						</li>
						<li>
							<span uk-icon="icon: desktop"></span>Website content management.
						</li>
						<li>
							<span uk-icon="icon: nut"></span>Monthly check for updates.
						</li>
						<li>
							<span uk-icon="icon: cloud-upload"></span>Website backup &amp; restore.
						</li>
						<li>
							<span uk-icon="icon: star"></span>Preferred by small businesses.
						</li>
					</ul>
					<div class="text-center">
						<a class="uk-button uk-button-primary uk-button-small" href="tel:+7179458132">(717) 945-8132</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div
				class="price-table price-table-silver prominent wow zoomInDown animation-delay-2"
				style="visibility: visible; animation-name: zoomInDown;"
			>
				<header class="price-table-header">
					<h5 class="price-table-category">Silver</h5>
					<h3>
						<sup>$</sup>120.00
						<sub>/mo.</sub>
					</h3>
				</header>
				<div class="price-table-body">
					<ul class="price-table-list white-text">
						<li>
							<span uk-icon="icon: code"></span>Supports e-commerce websites.
						</li>
						<li>
							<span uk-icon="icon: desktop"></span>Website content management.
						</li>
						<li>
							<span uk-icon="icon: nut"></span>Monthly check for updates.
						</li>
						<li>
							<span uk-icon="icon: cloud-upload"></span>Website backup &amp; restore.
						</li>
						<li>
							<span uk-icon="icon: star"></span>Preferred by specialty businesses.
						</li>
					</ul>
					<div class="text-center">
						<a class="uk-button uk-button-primary uk-button-small" href="tel:+7179458132">(717) 945-8132</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div
				class="price-table price-table-gold wow zoomInUp animation-delay-2"
				style="visibility: visible; animation-name: zoomInUp;"
			>
				<header class="price-table-header">
					<h5 class="price-table-category">Gold</h5>
					<h3>
						<sup>$</sup>170.00
						<sub>/mo.</sub>
					</h3>
				</header>
				<div class="price-table-body">
					<ul class="price-table-list white-text">
						<li>
							<span uk-icon="icon: code"></span>Supports large websites.
						</li>
						<li>
							<span uk-icon="icon: desktop"></span>Website content management.
						</li>
						<li>
							<span uk-icon="icon: nut"></span>Monthly check for updates.
						</li>
						<li>
							<span uk-icon="icon: cloud-upload"></span>Website backup &amp; restore.
						</li>
						<li>
							<span uk-icon="icon: star"></span>On-Page &amp; Social Networks Analytics.
						</li>
					</ul>
					<div class="text-center">
						<a class="uk-button uk-button-primary uk-button-small" href="tel:+7179458132">(717) 945-8132</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	name: "PriceTable"
};
</script>


<style lang="scss" scoped>
.bg-how-it-works {
	background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.77)),
		url("https://raw.githubusercontent.com/lotusms/LotusMS/master/webp/pagebanners/web-maintenance.webp")
			center center no-repeat;
	.banner-text {
		max-width: 1050px;
		margin: 0 auto;
	}
}

.price-table {
	border-radius: 2px;
	box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
	background-color: #263238;
	padding: 0;
	transition: all ease 0.5s;
	position: relative;
	z-index: 1;
}
.price-table:hover {
	background-color: #fafafa;
	li,
	i,
	svg {
		color: #000000 !important;
		fill: #000000 !important;
	}
}
.price-table:hover .price-table-body:after {
	top: 0;
}
.price-table.prominent {
	-webkit-transform: translateY(-10px);
	transform: translateY(-10px);
	position: relative;
	z-index: 2;
	box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.14), 0 3px 3px -2px rgba(0, 0, 0, 0.2),
		0 1px 8px 0 rgba(0, 0, 0, 0.12);
}
.price-table.prominent .price-table-body .btn {
	margin-top: 30px;
	margin-top: 3rem;
}
.price-table header {
	background-color: #263238;
	display: block;
	text-align: center;
	color: #cbccce;
}
.price-table header .price-table-category {
	display: block;
	background-color: rgba(0, 0, 0, 0.2);
	padding: 10px 0;
	padding: 1rem 0;
}
.price-table header h3 {
	font-weight: 400;
	padding: 20px 0;
	margin: 0;
	font-size: 40px;
	font-size: 4rem;
}
.price-table header h3 sup {
	font-size: 20px;
	font-size: 2rem;
	margin-right: 5px;
	margin-right: 0.5rem;
}
.price-table header h3 sub {
	font-size: 16px;
	font-size: 1.6rem;
}
.price-table .price-table-body {
	padding: 20px;
	padding: 2rem;
	transition: all ease 0.3s;
	position: relative;
	overflow: hidden;
}
.price-table .price-table-body:after {
	transition: all ease 0.3s;
	display: block;
	content: "";
	position: absolute;
	height: 100%;
	width: 100%;
	top: 100%;
	bottom: 0;
	left: 0;
	right: 0;
	z-index: -1;
}
.price-table .price-table-body .price-table-list {
	list-style-type: none;
	padding-left: 0;
	font-size: 15px;
	font-size: 1rem;
}
.price-table .price-table-body .price-table-list li {
	margin: 0;
	padding: 8px 0;
	border-bottom: dotted 1px #e0e0e0;
}
.price-table .price-table-body .price-table-list li i {
	margin-right: 15px;
}
.price-table.price-table-bronze {
	border-bottom: solid 3px #cd7f32;
}
.price-table.price-table-bronze header {
	background-color: #cd7f32;
}
.price-table.price-table-bronze .price-table-body:after {
	background-color: #cd7f32;
}
.price-table.price-table-bronze .price-table-body .price-table-list li i {
	color: #cd7f32;
}
.price-table.price-table-bronze .price-table-body .btn {
	background-color: #cd7f32;
}
.price-table.price-table-bronze:hover .price-table-body {
	color: #cbccce;
}
.price-table.price-table-bronze:hover .price-table-body .price-table-list li {
	border-color: #404040;
}
.price-table.price-table-bronze:hover .price-table-body .price-table-list li i {
	color: #cbccce;
}
.price-table.price-table-bronze:hover .price-table-body .btn-raised {
	background-color: #cbccce;
	color: #cd7f32 !important;
}
.price-table.price-table-silver {
	border-bottom: solid 3px #c0c0c0;
}
.price-table.price-table-silver header {
	background-color: #c0c0c0;
}
.price-table.price-table-silver .price-table-body:after {
	background-color: #c0c0c0;
}
.price-table.price-table-silver .price-table-body .price-table-list li i {
	color: #c0c0c0;
}
.price-table.price-table-silver .price-table-body .btn {
	background-color: #c0c0c0;
}
.price-table.price-table-silver:hover .price-table-body {
	color: #cbccce;
}
.price-table.price-table-silver:hover .price-table-body .price-table-list li {
	border-color: #404040;
}
.price-table.price-table-silver:hover .price-table-body .price-table-list li i {
	color: #cbccce;
}
.price-table.price-table-silver:hover .price-table-body .btn-raised {
	background-color: #cbccce;
	color: #c0c0c0 !important;
}
.price-table.price-table-gold {
	border-bottom: solid 3px #daa520;
}
.price-table.price-table-gold header {
	background-color: #daa520;
}
.price-table.price-table-gold .price-table-body:after {
	background-color: #daa520;
}
.price-table.price-table-gold .price-table-body .price-table-list li i {
	color: #daa520;
}
.price-table.price-table-gold .price-table-body .btn {
	background-color: #daa520;
}
.price-table.price-table-gold:hover .price-table-body {
	color: #cbccce;
}
.price-table.price-table-gold:hover .price-table-body .price-table-list li {
	border-color: #31e8ff;
}
.price-table.price-table-gold:hover .price-table-body .price-table-list li i {
	color: #cbccce;
}
.price-table.price-table-gold:hover .price-table-body .btn-raised {
	background-color: #cbccce;
	color: #daa520 !important;
}

@media (max-width: 991px) {
	.price-table {
		margin-bottom: 2rem;
		max-width: 500px;
		margin: 2rem auto;
	}
	.price-table.prominent {
		-webkit-transform: translateY(0) !important;
		transform: translateY(0) !important;
		position: static !important;
		box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14),
			0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
	}
	.price-table.prominent .price-table-body {
		padding-bottom: 20px !important;
	}
	.price-table.prominent .price-table-body .btn {
		-webkit-transform: translateY(0) !important;
		transform: translateY(0) !important;
	}
}
</style>