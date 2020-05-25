<tr 
    class="cursor-pointer hover:shadow-md transition-all duration-200" 
    x-data="{ isShown: false }" 
    @mouseenter.once="
        fetch('{{ route('users.show', $user) }}')
            .then(response => response.text())
            .then(html => { $refs.dropdown.innerHTML = html })
    " 
    @mouseenter="isShown = true"
    @mouseleave="isShown = false"
>
    <td class="px-6 py-4 relative whitespace-no-wrap border-b border-gray-200">
        <div x-ref="dropdown"></div>
        <div class="flex items-center">
            <div class="flex-shrink-0 h-10 w-10 bg-blue-400 text-white rounded-full flex items-center justify-center font-semibold">
                <span class="">{{ $user->name[0] }}</span>
            </div>
            <div class="ml-4">
                <div class="text-sm leading-5 font-medium text-gray-900">{{ $user->name }}</div>
                <div class="text-sm leading-5 text-gray-500">{{ $user->email }}</div>
            </div>
        </div>
    </td>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <div class="text-sm leading-5 text-gray-900">Director</div>
        <div class="text-sm leading-5 text-gray-500">Human Resources</div>
    </td>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
            Active
        </span>
    </td>
    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
        Owner
    </td>
    <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
    </td>
</tr>
