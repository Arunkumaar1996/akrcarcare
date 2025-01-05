<style>
    .btn-explore {
            background-color: #f4a261;
            color: #fff;
            border: none;
        }
</style>
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn']) }}>
    {{ $slot }}
</button>
