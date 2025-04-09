<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    @vite('resources/css/app.css')
</head>

<body class="bg-black text-white">

    <!-- logo -->
    <div class="text-center my-6">
        <img src="{{ asset('assets/images/logo.jpg') }}" alt="logo" class="mx-auto max-w-xs">
    </div>

    <h3 class="text-center text-gray-600 text-xl md:text-2xl mb-8">
        Selecione as opções para gerar<br>
        <span class="text-blue-500 font-semibold">exercícios de matemática</span>.
    </h3>

    <!-- form -->
    <form action="{{ route('generateExercises') }}" method="post" class="px-4">
        @csrf
        <div class="container mx-auto border border-blue-500 rounded-xl p-6 md:p-10">

            <div class="flex flex-col md:flex-row md:justify-between gap-10">

                <!-- operações -->
                <div class="flex-1">
                    <p class="text-blue-500 font-medium mb-4">Operações:</p>

                    <div class="space-y-3">
                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="check_sum" name="check_sum" checked
                                class="w-4 h-4 text-blue-500 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="check_sum" class="text-sm">Soma</label>
                        </div>

                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="check_subtraction" name="check_subtraction" checked
                                class="w-4 h-4 text-blue-500 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="check_subtraction" class="text-sm">Subtração</label>
                        </div>

                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="check_multiplication" name="check_multiplication" checked
                                class="w-4 h-4 text-blue-500 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="check_multiplication" class="text-sm">Multiplicação</label>
                        </div>

                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="check_division" name="check_division" checked
                                class="w-4 h-4 text-blue-500 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="check_division" class="text-sm">Divisão</label>
                        </div>
                    </div>
                </div>

                <!-- parcelas -->
                <div class="flex-1">
                    <p class="text-blue-500 font-medium mb-4">Parcelas:</p>

                    <div class="mb-4">
                        <label for="number_one" class="block text-sm font-medium mb-1">Mínimo:</label>
                        <input type="number" id="number_one" name="number_one" min="0" max="999"
                            value="0"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="number_two" class="block text-sm font-medium mb-1">Máximo:</label>
                        <input type="number" id="number_two" name="number_two" min="0" max="999"
                            value="100"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>

                <!-- número de exercícios -->
                <div class="flex-1">
                    <p class="text-blue-500 font-medium mb-4">Número de exercícios:</p>

                    <div class="mb-4">
                        <label for="number_exercises" class="block text-sm font-medium mb-1">Número:</label>
                        <input type="number" id="number_exercises" name="number_exercises" min="5"
                            max="50" value="10"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div class="text-right">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition duration-200">
                            Gerar exercícios
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </form>

    @if ($errors->any())
        <div class="container mx-auto mt-3">
            <div class="flex p-4 mb-4 text-sm text-red-400 rounded-lg bg-gray-800" role="alert">
                <svg class="shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Danger</span>
                <div>
                  <span class="font-medium">Garantir que estes requisitos sejam cumpridos:</span>
                    <ul class="mt-1.5 list-disc list-inside">
                      <li>Selecione pelo menos uma operação.</li>
                      <li>As parcelas devem ser números entre 0 e 999.</li>
                      <li>O número de exercícios deve variar entre 5 e 50.</li>
                  </ul>
                </div>
              </div>
        </div>
        <div class="max-w-6xl mx-auto md:p-10">
        </div>
    @endif

    <!-- footer -->
    <footer class="text-center mt-10 text-sm text-gray-500">
        <p>MathX &copy; <span class="text-blue-500">{{ date('Y') }}</span></p>
    </footer>

</body>

</html>
