{{-- STATUS CARD

VariableS/Props:

$label = name of the card
$data = pass in an array of data
$icon = icon shown on card

END --}}


<a href="{{ $link }}"
    class="flex flex-col items-center justify-center overflow-hidden bg-white p-3 shadow-xl duration-200 hover:scale-110 sm:rounded-lg">
    <img class="my-2" src='{{ $icon }}' />
    <h1 class="my-2 text-sm text-gray-700">{{ $label }}</h1>
    <p class="my-2 text-xl font-bold text-blue-800">{{ count($data) }}</p>
</a>
