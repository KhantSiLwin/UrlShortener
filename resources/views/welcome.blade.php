<x-guest-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex justify-center bg-white border-b border-gray-200">
                    <section class="text-center">
                        <h1 class="text-4xl mb-5 text-blue-800">Short your link</h1>
                     
                    <form action="{{route('short.url')}}" method="post">
                        @csrf
                        <input class="border border-gray-300 rounded-lg" type="url" name="original_url" autofocus>
                        
                        <button class="m-2 px-6 py-2 bg-green-500 hover:bg-green-700 rounded-lg" type="submit">Short Url</button>
                    @error('original_url')
                          <br>  <span class="text-red-400 m-2 p-2">{{$message}}</span>
                        @enderror
                    </form>
                    <br>
                    @if (session('success_message'))
                    <h3>{!!session('success_message')!!}</h3>
               @endif
                    </section>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
