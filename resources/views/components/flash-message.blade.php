@if (session()->has('message'))
    <div class="fixed top-0 left-[30%] px-36 py-3
      bg-laravel transform-translate-x-1/2 text-white"
        x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show='show'>
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
