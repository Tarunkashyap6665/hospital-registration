<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <!-- component -->
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                {{-- Comment --}}
                @if (Session::has('status'))
                @php
                    if (Session::get('status')=="Updated Successfully...") {
                        $statusColor="yellow";
                    }
                    else{
                        $statusColor="red";
                    }
                @endphp
                <div class="bg-{{$statusColor}}-100 border border-{{$statusColor}}-400 text-{{$statusColor}}-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Status!</strong>
                    <span class="block sm:inline">{{Session::get('status')}}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-{{$statusColor}}-500" role="button"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
                @endif
               
                {{-- end comment --}}
                <div
                    class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12">
                    <div class="flex justify-between">
                        <div class="inline-flex border rounded w-7/12 px-2 lg:px-6 h-12 bg-transparent">
                            <div class="flex flex-wrap items-stretch w-full h-full mb-6 relative">
                                <div class="flex">
                                    <span
                                        class="flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">
                                        <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z"
                                                stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <input type="text"
                                    class="flex-shrink flex-grow flex-auto leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-3 relative focus:outline-none text-xxs lg:text-xs lg:text-base text-gray-500 font-thin"
                                    placeholder="Search" wire:model.debounce.800ms="search">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                    ID</th>

                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    Fullname</th>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    Age</th>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    Sex</th>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    Department</th>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                    Registered At</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @forelse ($patients as $patient)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                    <div class="flex items-center">
                                        <div>
                                            <div class="text-sm leading-5 text-gray-800">{{$patient->id}}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                    <div class="text-sm leading-5 text-blue-900">{{$patient->name}}</div>
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                    {{$patient->age}}</td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                    {{$patient->sex}}</td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                    {{$patient->department}}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">
                                    {{$patient->created_at}}</td>
                                <td
                                    class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                    <a href="{{route('edit-record',['id'=>$patient->id])}}"
                                        class="px-5 py-2 mx-1 border-yellow-500 border text-yellow-500 rounded transition duration-300 hover:bg-yellow-700 hover:text-white focus:outline-none">Edit
                                    </a>
                                    <a href="{{route('delete-record',['id'=>$patient->id])}}"
                                        class="px-5 py-2 mx-1 border-red-500 border text-red-500 rounded transition duration-300 hover:bg-red-700 hover:text-white focus:outline-none">Delete
                                    </a>
                                    <a href="{{route('view-record',['id'=>$patient->id])}}"
                                        class="px-5 py-2 mx-1 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">View
                                        Details</a>
                                </td>
                            </tr>
                            @empty
                            <td colspan="6">
                                Records Empty....
                            </td>
                            @endforelse

                        </tbody>
                    </table>
                    <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans">
                        <div>
                            {{-- <p class="text-sm leading-5 text-blue-700">
                                Showing
                                <span class="font-medium">1</span>
                                to
                                <span class="font-medium">{{$patients->count()}}</span>
                                of
                                <span class="font-medium">{{App\Models\PatientsModel::count()}}</span>
                                results
                            </p>
                        </div>
                        <div>
                            {{$patients->links()}}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
