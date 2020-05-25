<tr class="transition-all duration-200 cursor-pointer hover:shadow-md">
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <div class="flex items-center">
            <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 font-semibold text-white bg-blue-400 rounded-full">
                <span class="">{{ $user->name[0] }}</span>
            </div>
            <div class="ml-4">
                <div class="text-sm font-medium leading-5 text-gray-900">{{ $user->name }}</div>
                <div class="text-sm leading-5 text-gray-500">{{ $user->email }}</div>
            </div>
        </div>
    </td>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <div class="text-sm leading-5 text-gray-900">Followers</div>
        <div class="flex">
            @foreach ($user->followers as $follower)
                <div 
                    class="relative flex items-center justify-center w-8 h-8 -ml-2 text-xs font-semibold text-white bg-blue-500 border-2 border-white rounded-full"
                    x-data="{ isShown: false }" 
                        @mouseenter.once="
                            fetch('{{ route('users.show', $follower) }}')
                                .then(response => response.text())
                                .then(html => { $refs.dropdown.innerHTML = html })
                        " 
                        @mouseenter="isShown = true"
                        @mouseleave="isShown = false"
                >
                    <div x-ref="dropdown"></div>
                    {{ $follower->name[0] }}
                </div>
            @endforeach
        </div>
    </td>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
            Active
        </span>
    </td>
    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
        Owner
    </td>
    <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
    </td>
</tr>
