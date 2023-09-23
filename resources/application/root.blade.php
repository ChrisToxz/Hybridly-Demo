<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full flex flex-col">
	<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			@vite('resources/application/main.ts')
	</head>
	<body class="bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-300 ">
			@hybridly(class: 'h-full')
	</body>
</html>
