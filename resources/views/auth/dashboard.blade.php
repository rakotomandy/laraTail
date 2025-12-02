@include('components.head')

<div class="min-h-screen bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10">
            <h1 class="text-4xl font-bold text-green-600">Welcome back!</h1>
            <p class="mt-4 text-xl text-gray-700">You are successfully logged in.</p>
            <p class="mt-2 text-lg">Hello: <strong>{{ auth()->user()->name }}</strong></p>

            <form action="{{ route('logout') }}" method="POST" class="mt-8">
                @csrf
                <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg">
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>

@include('components.footer')