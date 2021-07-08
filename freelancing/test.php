<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<style>
		h1 {
			color: green;
		}
		.buttonIn {
			width: 300px;
			position: relative;
		}
		
		input {
			margin: 0px;
			padding: 0px;
			width: 100%;
			outline: none;
			height: 30px;
			border-radius: 5px;
		}
		
		button {
			position: absolute;
			top: 0;
			border-radius: 5px;
			right: 0px;
			z-index: 2;
			border: none;
			top: 2px;
			height: 30px;
			cursor: pointer;
			color: white;
			background-color: #1e90ff;
			transform: translateX(2px);
		}
	</style>
</head>

<body>
	<div class="buttonIn">
		<input type="text" id="enter">
		<button id="clear">clear</button>
	</div>
</body>

</html>
