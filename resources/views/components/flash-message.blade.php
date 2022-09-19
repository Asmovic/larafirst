@if(session()->has('message'))
    <div x-data="{show:true}" x-init="setTimeout(()=> show = false, 3000)" x-show="show"
        class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-laravel px-24 text-white py-3">
    <p class="text-center">
        {{session('message')}}
    </p>
</div>
@endif