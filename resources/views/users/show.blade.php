<a href="{{ route('users.edit', $user) }}">
    <div class="absolute left-0 z-10 pl-4" x-show="isShown">
        <div class="p-3 bg-white rounded-md shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
            <div class="flex items-center justify-center w-10 h-10 mb-2 text-lg font-semibold text-white bg-blue-400 rounded-full">{{ $user->name[0] }}</div>
            <div class="pl-1">
                <a href="#" class="font-semibold text-blue-700 text-md">{{ $user->name }}</a>
                <span class="block text-sm text-gray-500">{{ $user->email }}</span>
            </div>
        </div>
    </div>
</a>