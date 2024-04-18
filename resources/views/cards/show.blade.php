@extends('layout')

@section('title', 'Card details')

@section('content')
<main class="flex min-h-screen flex-col items-center justify-between p-6 lg:p-24">
    <div class="bg-white w-full max-w-3xl mx-auto px-4 lg:px-6 py-8 shadow-md rounded-md flex flex-col lg:flex-row">
      <div class="w-full">
        @include('components.card-details')
      </div>
      <a href="/cards/search" class="mt-1 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
        Check another card
      </a>
    </div>
</main>
@endsection