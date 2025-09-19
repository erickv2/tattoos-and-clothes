
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tattoos & Clothes - Tattoos</title>
	<style>
		body {
			background: #fff;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		.site-title {
			text-align: center;
			font-size: 2.5rem;
			font-weight: bold;
			margin: 2rem 0 1.5rem 0;
			letter-spacing: 2px;
		}
		.gallery {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			gap: 2rem;
			max-width: 1000px;
			margin: 0 auto;
		}
		.item {
			display: flex;
			flex-direction: column;
			align-items: center;
			width: 200px;
		}
		.icon-box {
			width: 180px;
			height: 180px;
			background: #f3f3f3;
			border-radius: 12px;
			display: flex;
			align-items: center;
			justify-content: center;
			margin-bottom: 1rem;
			box-shadow: 0 2px 8px rgba(0,0,0,0.04);
		}
		.icon-box svg {
			width: 100px;
			height: 100px;
			fill: #222;
		}
		.square-btn {
			margin-top: 0.5rem;
			padding: 0.7rem 0;
			width: 100%;
			background: #222;
			color: #fff;
			border: none;
			border-radius: 6px;
			font-size: 1rem;
			cursor: pointer;
			transition: background 0.2s;
		}
		.square-btn:hover {
			background: #444;
		}
	</style>
</head>
<body>
	<div class="site-title">Tattoos & Clothes</div>
	<div class="gallery">
		<div class="item">
			<div class="icon-box">
				<!-- Tattoo Icon 1 -->
				<svg viewBox="0 0 64 64"><circle cx="32" cy="32" r="28"/></svg>
			</div>
			<button class="square-btn">Tattoo 1</button>
		</div>
		<div class="item">
			<div class="icon-box">
				<!-- Tattoo Icon 2 -->
				<svg viewBox="0 0 64 64"><rect x="12" y="12" width="40" height="40"/></svg>
			</div>
			<button class="square-btn">Tattoo 2</button>
		</div>
		<div class="item">
			<div class="icon-box">
				<!-- Tattoo Icon 3 -->
				<svg viewBox="0 0 64 64"><polygon points="32,8 56,56 8,56"/></svg>
			</div>
			<button class="square-btn">Tattoo 3</button>
		</div>
	</div>
</body>
</html>
