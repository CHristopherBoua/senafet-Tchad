<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fichier trop volumineux — {{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-lg p-8 max-w-lg w-full text-center">
        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
            </svg>
        </div>
        <h1 class="text-xl font-bold text-gray-800 mb-2">Fichier trop volumineux</h1>
        <p class="text-gray-600 mb-6">La limite d’envoi du serveur PHP est dépassée. Pour autoriser les gros uploads (carousel, vidéos), démarrez le serveur avec des limites plus hautes.</p>
        <div class="bg-gray-50 rounded-xl p-4 text-left mb-6 font-mono text-sm text-gray-700">
            <p class="font-semibold mb-2">À faire :</p>
            <ol class="list-decimal list-inside space-y-1">
                <li>Arrêtez le serveur actuel (Ctrl+C).</li>
                <li>Relancez avec <strong>serve.bat</strong> ou <strong>composer run serve</strong>.</li>
            </ol>
        </div>
        <a href="{{ url()->previous() }}" class="inline-block px-6 py-3 bg-[#C41E3A] text-white rounded-lg hover:bg-[#a0192f] transition font-medium">Retour</a>
    </div>
</body>
</html>
