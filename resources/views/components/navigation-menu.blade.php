<nav class="bg-white border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 lg:px-6">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('products.index') }}" class="text-xl font-semibold text-indigo-500">
                        {{ config('app.name') }}
                    </a>
                </div>
            </div>

            <div x-data="{}" class="flex items-center">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <button type="submit" href="{{ route('logout') }}" class="text-gray-700 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
