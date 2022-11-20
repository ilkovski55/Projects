@extends('layouts.main')

@section('title', 'Declined')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Declined') }}
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-center text-black-600 text-xl">
                    - Declined receipts -
                </div>
            </div>
        </div>
    </div>

    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-20 grid grid-cols-4 gap-5">
                @if ($receipts->count())
                @foreach($receipts as $receipt)
                <img class="w-full h-full object-cover cursor-pointer" data-bs-toggle="modal"
                    data-bs-target="#exampleModalLg" src="{{$receipt->file->file_path}}">

                <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                    id="exampleModalLg" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
                    <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
                        <div
                            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                            <div class="modal-header">
                              
                                <h5 class="modal-title"><tr>
                                    <td>{{ $receipt->id }}</td></tr></h5>
                                
                            </div>
                            <div class="modal-body relative p-4">
                                <img id="modal-img" src="{{$receipt->file->file_path}}"
                                    class="max-w-[800px] max-h-[600px] object-cover mx-auto" />
                            </div>
                            <div
                                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                {{-- <button type="button"
                                    class="inline-block px-6 py-2.5 bg-green-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out"
                                    data-bs-dismiss="modal">
                                    Approve
                                </button>
                                <button type="button"
                                    class="inline-block px-6 py-2.5 bg-red-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                                    Decline
                                </button> --}}
                            </div>
                        </div>
                    </div>
                </div>
                
                @endforeach
                @else

                <tr>
                    <td colspan="4">Sorry no files found.</td>
                </tr>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
