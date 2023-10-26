@extends('layouts.main')

{{-- <div class="container">
    <div class="navbar bg-orange-700 text-white shadow-xl">
      <div class="flex-1 pl-5">
        <a class="btn btn-ghost normal-case text-xl">Profile <i class="fa-solid fa-user"></i></a>
      </div>
      <div class="flex-none">
        <div class="dropdown dropdown-end pr-5">
          <div class="flex items-stretch">
            <a href="/" class="btn btn-ghost rounded-btn"><i class="fa-solid fa-angle-left fa-rotate-180"></i>Back</a>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <div class="navbar bg-[91D086] text-slate-900 shadow-xl">
  <div class="flex-1 pl-5">
    <a href="#" class="btn btn-ghost normal-case text-xl">Profile <i class="fa-solid fa-user"></i></a>
  </div>
  <div class="flex-none">
    <div class="pr-5">
      <div class="flex items-stretch">
        <a href="/" class="btn btn-ghost rounded-btn">Beranda</a>
        <div class="dropdown dropdown-end">
          <!-- Dropdown "Produktivitas" -->
          <label tabindex="0" class="btn btn-ghost">
            <div class="rounded-btn">
              <!-- Icon untuk dropdown "Produktivitas" -->
              Produktivitas <i class="fa-solid fa-chevron-down"></i>
            </div>      
          </label>
          <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-green-300 rounded-box w-52">
            <!-- Tautan untuk fitur-fitur -->
            <li>
              <a href="/video" class="justify-between">
                Video Meditasi
              </a>
            </li>
            <li><a href="/mood">Mood Tracker</a></li>
            <li>
              <a href="/todo">
                To-Do List
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="dropdown dropdown-end mr-8">
    @auth
    <!-- Code for authenticated users -->
    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
      <div class="w-10 rounded-full">
        @if ($user->profile_image)
            <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Avatar Image" />
        @else
            <img src="{{ asset('img/user.jpeg') }}" alt="Default Avatar" />
        @endif
      </div>      
    </label>
    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-green-300 rounded-box w-52">
      <li>
        <a href="/profile" class="justify-between">
          Pengaturan Profile
        </a>
      </li>
      <li><a href="/premium">Berlangganan (premium)</a></li>
      <li>
        <a href="#">
          Dark/Light
          <span class="badge bg-green-400 border-none text-white flex items-center justify-center">
            <label class="swap swap-rotate ml-2">
              <!-- this hidden checkbox controls the state -->
              <input type="checkbox" />
              <!-- sun icon -->
              <svg class="swap-on fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"/></svg>
              <!-- moon icon -->
              <svg class="swap-off fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z"/></svg>
            </label>
          </span>
        </a>
      </li>
      <li><a href="{{ route('logout') }}">Keluar <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
    </ul>
    @endauth
    @guest
    <!-- Code for guests (not authenticated) -->
    <a href="{{ route('login') }}" class="btn btn-ghost">Login</a>
    @endguest
  </div>
</div>

   <!-- Konten Utama -->
   <div class="container mx-auto mt-20 flex flex-col items-center">
    <h1 class="mb-5 text-slate-950">Profile</h1>
    <!-- Gambar Pengguna -->
    <div class="w-60 h-60 bg-gray-300 rounded-full flex justify-center items-center mb-4">
      @if ($user->profile_image)
        <!-- Ganti sumber gambar (src) sesuai dengan gambar pengguna -->
        <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Gambar Pengguna" class="w-60 h-60 rounded-full object-cover">
        @else
              <img src="{{ asset('img/user.jpeg') }}" class="w-60 h-60 rounded-full object-cover" />
          @endif
    </div>
    <!-- Tombol Edit User -->
    <h3 class="mb-5 text-slate-950">Username: {{ $user->username }} </h3>
    <a href="/edit" class="bg-[6EA066] text-white px-4 py-2 cursor-pointer rounded-lg hover:bg-[91D086] mb-28">Edit Username</a>
</div>

@include('partials.footer')
