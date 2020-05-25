<div class="origin-top-right right-0 absolute z-10 rounded-md shadow-lg" x-show="isShown">
    <div class="p-3 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
        <div class="w-10 h-10 flex items-center justify-center bg-blue-400 rounded-full mb-2 font-semibold text-white">{{ $user->name[0] }}</div>
        <div class="pl-1">
            <a href="#" class="text-blue-700 text-md font-semibold">{{ $user->name }}</a>
            <span class="block text-sm">{{ $user->email }}</span>
        </div>
    </div>
</div>