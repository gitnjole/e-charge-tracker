@extends('layout')

@section('title', 'Check Card')

@section('styles')
<style>
    .crediCard.seeBack {
        transform: rotateY(-180deg);
    }
    #imageCardNumber, #imagePINNumber {
      background-color: transparent;
      border: 1px solid white;
      color: white;
    }
</style>
@endsection

@section('content')
<main class="flex min-h-screen flex-col items-center justify-center p-6 lg:p-24">
    <form action="/cards/search" method="POST" class="w-full max-w-3xl mx-auto px-4 lg:px-6 py-8 rounded-md flex flex-col items-center">
      @csrf
      
      <div class="w-full lg:w-1/2 lg:pl-8 mb-8">
        @include('components.card-display')
      </div>

      <div class="mt-4">
        {{-- Implement a working return button
        <button class="mt-5 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-700 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 mr-3">
          Cancel
        </button>
        --}}
        <button type="submit" class="mt-5 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Check
        </button>
      </div>
    </form>
</main>
@endsection


@section('scripts')
<script>
  const toggleBackCard = () => {
    if (event.target.tagName === 'INPUT') {
      return;
    }
    
    const cardEl = document.getElementById("creditCard");
    if (cardEl.classList.contains("seeBack")) {
      cardEl.classList.remove("seeBack");
    } else {
      cardEl.classList.add("seeBack");
    }
  };

  const imageCardNumber = document.getElementById("imageCardNumber");

  imageCardNumber.addEventListener("input", (event) => {
    const input = event.target.value.replace(/[^A-Za-z0-9]/g, "");
    imageCardNumber.innerHTML = input;
  });

  const imagePINNumber = document.getElementById("imagePINNumber");

  imagePINNumber.addEventListener("input", (event) => {
    const input = event.target.value.replace(/[^A-Za-z0-9]/g, "");
    imagePINNumber.innerHTML = input;
  });

  const inputCardName = document.getElementById("cardName");
  const imageCardName = document.getElementById("imageCardName");

  inputCardName.addEventListener("input", (event) => {
    imageCardName.innerHTML = event.target.value;
  });

  document.getElementById("cardNumber").addEventListener("click", (event) => {
    event.stopPropagation();
  });

  document.getElementById("ccvNumber").addEventListener("click", (event) => {
    event.stopPropagation();
  });
</script>
@endsection
