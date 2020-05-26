<div class="relative" x-data="{ isShown: false }">
    <div 
        @mouseenter.once="@this.call('loadDetail')"
        @mouseenter="isShown = true" 
        @mouseleave="isShown = false" 
        class="relative flex items-center justify-center w-8 h-8 -ml-2 text-xs font-semibold text-white bg-blue-500 border-2 border-white rounded-full"
    >
        {{ $name }}
    </div>
    @if ($detail)
        <div class="absolute bottom-0 left-0 z-20 mb-8 -ml-2 pointer-events-none" x-show="isShown">
            <div class="p-3 bg-white rounded-md shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="flex items-center justify-center w-10 h-10 mb-2 text-lg font-semibold text-white bg-blue-400 rounded-full">{{ $detail->name[0] }}</div>
                <div class="pl-1">
                    <a href="#" class="text-sm font-semibold text-blue-700">{{ $detail->name }}</a>
                    <span class="block text-sm text-gray-500">{{ $detail->email }}</span>
                </div>
            </div>
        </div>
    @endif
</div>