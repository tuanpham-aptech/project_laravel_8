<div class="bg-purple-700 mb-8">
    <div class="container mx-auto">
        <div class="flex items-center ">
            <a class="block px-8 py-4 {{session('activeNav') =='home'?'bg-purple-800':null}}" href="{{route('home')}}">Home</a>
            <a class="block px-8 py-4  {{session('activeNav') =='about'?'bg-purple-800':null}}" href="{{route('about-us')}}">About us</a>
            <a class="block px-8 py-4  {{session('activeNav') =='contact'?'bg-purple-800':null}}" href="{{route('contact-us')}}">Contact us</a>
        </div>
    </div>
</div>
