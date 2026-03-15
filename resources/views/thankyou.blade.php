<x-guest-layout>
    <div class="container mx-auto px-6 py-12 text-center">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Thank You!</h1>
        <p class="text-lg text-gray-600 mb-8">Your reservation is ready. We look forward to serving you!</p>
        <a href="{{ route('reservations.step.one') }}" class="inline-flex items-center justify-center px-6 py-3 text-base font-semibold leading-6 text-black bg-blue-500 rounded-full shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-300">
            Return to Home

        </a>
    </div>
</x-guest-layout>

