<button {{ $attributes->merge([

'class' => '

border-2
border-pink-400
text-pink-400
hover:bg-pink-400
hover:text-white
font-semibold
px-6
py-2
rounded-lg
transition

'

]) }}>

{{ $slot }}

</button>
