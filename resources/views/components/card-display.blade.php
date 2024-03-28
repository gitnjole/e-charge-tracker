<div class="w-full max-w-sm h-56" style="perspective: 1000px">
    <div
      id="creditCard"
      class="relative crediCard cursor-pointer transition-transform duration-500"
      style="transform-style: preserve-3d"
      onclick="toggleBackCard()"
    >
      <div
        class="w-full h-56 m-auto rounded-xl text-white shadow-2xl absolute"
        style="backface-visibility: hidden"
      >
        <img
          src="images/card-background.jpg"
          class="relative object-cover w-full h-full rounded-xl"
        />
        <div class="w-full px-8 absolute top-8">
          <div class="text-right">
            <svg
              class="w-14 h-14 ml-auto"
              width="50"
              height="36"
              viewBox="-1 0 80 36"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
            <path 
              d="M18.5147 0C15.4686 0 12.5473 1.21005 10.3934 3.36396L3.36396 10.3934C1.21005 12.5473 0 15.4686 0 18.5147C0 24.8579 5.14214 30 11.4853 30C14.5314 30 17.4527 28.7899 19.6066 26.636L24.4689 21.7737C24.469 21.7738 24.4689 21.7736 24.4689 21.7737L38.636 7.6066C39.6647 6.57791 41.0599 6 42.5147 6C44.9503 6 47.0152 7.58741 47.7311 9.78407L52.2022 5.31296C50.1625 2.11834 46.586 0 42.5147 0C39.4686 0 36.5473 1.21005 34.3934 3.36396L15.364 22.3934C14.3353 23.4221 12.9401 24 11.4853 24C8.45584 24 6 21.5442 6 18.5147C6 17.0599 6.57791 15.6647 7.6066 14.636L14.636 7.6066C15.6647 6.57791 17.0599 6 18.5147 6C20.9504 6 23.0152 7.58748 23.7311 9.78421L28.2023 5.31307C26.1626 2.1184 22.5861 0 18.5147 0Z" class="ccustom" fill="#394149">
            </path>
            <path 
              d="M39.364 22.3934C38.3353 23.4221 36.9401 24 35.4853 24C33.05 24 30.9853 22.413 30.2692 20.2167L25.7982 24.6877C27.838 27.8819 31.4143 30 35.4853 30C38.5314 30 41.4527 28.7899 43.6066 26.636L62.636 7.6066C63.6647 6.57791 65.0599 6 66.5147 6C69.5442 6 72 8.45584 72 11.4853C72 12.9401 71.4221 14.3353 70.3934 15.364L63.364 22.3934C62.3353 23.4221 60.9401 24 59.4853 24C57.0498 24 54.985 22.4127 54.269 20.2162L49.798 24.6873C51.8377 27.8818 55.4141 30 59.4853 30C62.5314 30 65.4527 28.7899 67.6066 26.636L74.636 19.6066C76.7899 17.4527 78 14.5314 78 11.4853C78 5.14214 72.8579 0 66.5147 0C63.4686 0 60.5473 1.21005 58.3934 3.36396L39.364 22.3934Z" class="ccustom" fill="#394149">
            </path>
            </svg>
          </div>
          <div class="pt-1">
            <p class="font-light">Card Number</p>
            <input type="text" id="imageCardNumber" name="cardSlug" class="font-medium tracking-more-wider h-6" maxlength="16" />
          </div>
          <div class="pt-6 flex justify-between">
            <div>
              <p class="font-light">Name</p>
              <p
                id="imageCardName"
                class="font-medium tracking-widest h-6"
              >
                John Doe
              </p>
            </div>
          </div>
        </div>
      </div>
      <div
        class="w-full h-56 m-auto rounded-xl text-white shadow-2xl absolute"
        style="backface-visibility: hidden; transform: rotateY(180deg)"
      >
        <img
        src="images/card-background.jpg"
          class="relative object-cover w-full h-full rounded-xl"
        />
        <div class="w-full absolute top-8">
          <div class="bg-black h-10"></div>
          <div class="px-8 mt-5">
            <div class="flex space-between">
              <div class="flex-1 h-8 bg-red-100"></div>
              <input type="text" id="imageCCVNumber" name="pin" class="bg-white text-black flex items-center pl-4 pr-2 w-14" maxlength="4" />
            </div>
            <p class="font-light flex justify-end text-xs mt-2">
              PIN
            </p>
            <div class="flex justify-end mt-2">
              <svg
              class="w-14 h-14 ml-auto"
              width="50"
              height="36"
              viewBox="-1 0 80 36"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
            <path 
              d="M18.5147 0C15.4686 0 12.5473 1.21005 10.3934 3.36396L3.36396 10.3934C1.21005 12.5473 0 15.4686 0 18.5147C0 24.8579 5.14214 30 11.4853 30C14.5314 30 17.4527 28.7899 19.6066 26.636L24.4689 21.7737C24.469 21.7738 24.4689 21.7736 24.4689 21.7737L38.636 7.6066C39.6647 6.57791 41.0599 6 42.5147 6C44.9503 6 47.0152 7.58741 47.7311 9.78407L52.2022 5.31296C50.1625 2.11834 46.586 0 42.5147 0C39.4686 0 36.5473 1.21005 34.3934 3.36396L15.364 22.3934C14.3353 23.4221 12.9401 24 11.4853 24C8.45584 24 6 21.5442 6 18.5147C6 17.0599 6.57791 15.6647 7.6066 14.636L14.636 7.6066C15.6647 6.57791 17.0599 6 18.5147 6C20.9504 6 23.0152 7.58748 23.7311 9.78421L28.2023 5.31307C26.1626 2.1184 22.5861 0 18.5147 0Z" class="ccustom" fill="#394149">
            </path>
            <path 
              d="M39.364 22.3934C38.3353 23.4221 36.9401 24 35.4853 24C33.05 24 30.9853 22.413 30.2692 20.2167L25.7982 24.6877C27.838 27.8819 31.4143 30 35.4853 30C38.5314 30 41.4527 28.7899 43.6066 26.636L62.636 7.6066C63.6647 6.57791 65.0599 6 66.5147 6C69.5442 6 72 8.45584 72 11.4853C72 12.9401 71.4221 14.3353 70.3934 15.364L63.364 22.3934C62.3353 23.4221 60.9401 24 59.4853 24C57.0498 24 54.985 22.4127 54.269 20.2162L49.798 24.6873C51.8377 27.8818 55.4141 30 59.4853 30C62.5314 30 65.4527 28.7899 67.6066 26.636L74.636 19.6066C76.7899 17.4527 78 14.5314 78 11.4853C78 5.14214 72.8579 0 66.5147 0C63.4686 0 60.5473 1.21005 58.3934 3.36396L39.364 22.3934Z" class="ccustom" fill="#394149">
            </path>
            </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>