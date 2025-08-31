@extends('front.layouts.app')
@section('content')

<div id="header" class="bg-[#F6F7FA] relative">
    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
        {{-- <nav class="flex flex-wrap items-center justify-between bg-white p-[20px_30px] rounded-[20px] gap-y-3">
            <div class="flex items-center gap-3">
                <div class="flex shrink-0 h-[43px] overflow-hidden">
                    <img src="assets/logo/logo.svg" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex flex-col">
                  <p id="CompanyName" class="font-extrabold text-xl leading-[30px]">ShaynaComp</p>
                  <p id="CompanyTagline" class="text-sm text-cp-light-grey">Build Futuristic Dreams</p>
                </div>
            </div>
            <ul class="flex flex-wrap items-center gap-[30px]">
              <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300">
                <a href="index.html">Home</a>
              </li>
              <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300">
                <a href="">Products</a>
              </li>
              <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300">
                <a href="">Company</a>
              </li>
              <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300">
                <a href="">Blog</a>
              </li>
              <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300 text-cp-dark-blue">
                <a href="about.html">About</a>
              </li>
            </ul>
            <a href="" class="bg-cp-dark-blue p-[14px_20px] w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Get a Quote</a>
        </nav> --}}
        <x-navbar/>
        <div class="flex flex-col gap-[50px] items-center py-20">
          <div class="breadcrumb flex items-center justify-center gap-[30px]">
            <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
            <span class="text-cp-light-grey">/</span>
            <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">About Us</p>
          </div>
          <h2 class="font-bold text-4xl leading-[45px] text-center">Our Commitment to Welfare, <br> Independence, and Sustainable Growth</h2>
        </div>
    </div>
  </div>
  <div id="Products" class="container max-w-[1130px] mx-auto flex flex-col gap-20 mt-20">
    @forelse($abouts as $about)

    <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
        <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
          <img src="{{Storage::url($about->thumbnail)}}" class="w-full h-full object-contain" alt="thumbnail">
        </div>
        <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
          <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">OUR {{$about->type}}</p>
          <div class="flex flex-col gap-[10px]">
            <h2 class="font-bold text-4xl leading-[45px]">{{$about->name}}</h2>
            <div class="flex flex-col gap-5">
                @forelse($about->keypoints as $keypoint)
              <div class="flex items-center gap-[10px]">
                <div class="w-6 h-6 flex shrink-0">
                  <img src="assets/icons/tick-circle.svg" alt="icon">
                </div>
                <p class="leading-[26px] font-semibold">{{$keypoint->keypoint}}</p>
              </div>
              @empty
              @endforelse
            </div>
          </div>
        </div>
      </div>

    @empty
    <p>Belum ada data terbaru</p>
    @endforelse
    {{-- <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
      <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
        <img src="assets/thumbnails/product cover three.png" class="w-full h-full object-contain" alt="thumbnail">
      </div>
      <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
        <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">OUR VISIONS</p>
        <div class="flex flex-col gap-[10px]">
          <h2 class="font-bold text-4xl leading-[45px]">Build Gorgeous Buildings Yet Also Family Friendly</h2>
          <div class="flex flex-col gap-5">
            <div class="flex items-center gap-[10px]">
              <div class="w-6 h-6 flex shrink-0">
                <img src="assets/icons/tick-circle.svg" alt="icon">
              </div>
              <p class="leading-[26px] font-semibold">Commit to delivering the highest quality in every project. Set the standard for excellence world</p>
            </div>
            <div class="flex items-center gap-[10px]">
              <div class="w-6 h-6 flex shrink-0">
                <img src="assets/icons/tick-circle.svg" alt="icon">
              </div>
              <p class="leading-[26px] font-semibold">Focus on building strong, lasting relationships with clients by understanding their needs</p>
            </div>
            <div class="flex items-center gap-[10px]">
              <div class="w-6 h-6 flex shrink-0">
                <img src="assets/icons/tick-circle.svg" alt="icon">
              </div>
              <p class="leading-[26px] font-semibold">Embrace innovative construction methods and sustainable practices to minimize environmt</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
      <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
        <img src="assets/thumbnails/product cover one.png" class="w-full h-full object-contain" alt="thumbnail">
      </div>
      <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
        <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">OUR MISSIONS</p>
        <div class="flex flex-col gap-[10px]">
          <h2 class="font-bold text-4xl leading-[45px]">Build Gorgeous Buildings Yet Also Family Friendly</h2>
          <div class="flex flex-col gap-5">
            <div class="flex items-center gap-[10px]">
              <div class="w-6 h-6 flex shrink-0">
                <img src="assets/icons/tick-circle.svg" alt="icon">
              </div>
              <p class="leading-[26px] font-semibold">Commit to delivering the highest quality in every project. Set the standard for excellence world</p>
            </div>
            <div class="flex items-center gap-[10px]">
              <div class="w-6 h-6 flex shrink-0">
                <img src="assets/icons/tick-circle.svg" alt="icon">
              </div>
              <p class="leading-[26px] font-semibold">Focus on building strong, lasting relationships with clients by understanding their needs</p>
            </div>
            <div class="flex items-center gap-[10px]">
              <div class="w-6 h-6 flex shrink-0">
                <img src="assets/icons/tick-circle.svg" alt="icon">
              </div>
              <p class="leading-[26px] font-semibold">Embrace innovative construction methods and sustainable practices to minimize environmt</p>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
  {{-- <div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20">
    <h2 class="font-bold text-lg">Trusted by 500+ Top Leaders Worldwide</h2>
    <div class="logo-container flex flex-wrap gap-5 justify-center">
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-54.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-52.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-55.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-44.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-51.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-55.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-52.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-54.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="assets/logo/logo-51.svg" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
    </div>
  </div> --}}
  {{-- <div id="Stats" class="bg-cp-black w-full mt-20 relative z-1-">
    <div class="container max-w-[1000px] mx-auto py-10">
      <div class="flex flex-wrap items-center justify-between p-[10px]">
        <div class="card w-[200px] flex flex-col items-center gap-[10px] text-center">
          <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
            <img src="assets/icons/cup.svg" class="object-contain w-full h-full" alt="icon">
          </div>
          <p class="text-cp-pale-orange font-bold text-4xl leading-[54px]">189.409</p>
          <p class="text-cp-light-grey">Award-winning Buildings</p>
        </div>
        <div class="card w-[200px] flex flex-col items-center gap-[10px] text-center">
          <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
            <img src="assets/icons/buildings.svg" class="object-contain w-full h-full" alt="icon">
          </div>
          <p class="text-cp-pale-orange font-bold text-4xl leading-[54px]">198</p>
          <p class="text-cp-light-grey">HQ Worldwide</p>
        </div>
        <div class="card w-[200px] flex flex-col items-center gap-[10px] text-center">
          <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
            <img src="assets/icons/status-up.svg" class="object-contain w-full h-full" alt="icon">
          </div>
          <p class="text-cp-pale-orange font-bold text-4xl leading-[54px]">$512bn</p>
          <p class="text-cp-light-grey">Success Investments</p>
        </div>
        <div class="card w-[200px] flex flex-col items-center gap-[10px] text-center">
          <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
            <img src="assets/icons/star.svg" class="object-contain w-full h-full" alt="icon">
          </div>
          <p class="text-cp-pale-orange font-bold text-4xl leading-[54px]">4.9/5</p>
          <p class="text-cp-light-grey">Honest Reviews</p>
        </div>
      </div>
    </div>
  </div> --}}
  {{-- <div id="Awards" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
    <div class="flex items-center justify-between">
      <div class="flex flex-col gap-[14px]">
        <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">OUR AWARDS</p>
        <h2 class="font-bold text-4xl leading-[45px]">We’ve Dedicated Our<br>Best Team Efforts</h2>
      </div>
      <a href="" class="bg-cp-black p-[14px_20px] w-fit rounded-xl font-bold text-white">Explore More</a>
    </div>
    <div class="awards-card-container grid grid-cols-4 gap-[30px] justify-center">
      <div class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
        <div class="w-[55px] h-[55px] flex shrink-0">
          <img src="assets/icons/cup-blue.svg" alt="icon">
        </div>
        <hr class="border-[#E8EAF2]">
        <p class="font-bold text-xl leading-[30px]">Solid Fundamental Crafter Async</p>
        <hr class="border-[#E8EAF2]">
        <p class="text-cp-light-grey">Bali, 2020</p>
      </div>
      <div class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
        <div class="w-[55px] h-[55px] flex shrink-0">
          <img src="assets/icons/cup-blue.svg" alt="icon">
        </div>
        <hr class="border-[#E8EAF2]">
        <p class="font-bold text-xl leading-[30px]">Most Crowded Yet Harmony Place</p>
        <hr class="border-[#E8EAF2]">
        <p class="text-cp-light-grey">Shanghai, 2021</p>
      </div>
      <div class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
        <div class="w-[55px] h-[55px] flex shrink-0">
          <img src="assets/icons/cup-blue.svg" alt="icon">
        </div>
        <hr class="border-[#E8EAF2]">
        <p class="font-bold text-xl leading-[30px]">Small Things Made Much Big Impacts</p>
        <hr class="border-[#E8EAF2]">
        <p class="text-cp-light-grey">Zurich, 2022</p>
      </div>
      <div class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
        <div class="w-[55px] h-[55px] flex shrink-0">
          <img src="assets/icons/cup-blue.svg" alt="icon">
        </div>
        <hr class="border-[#E8EAF2]">
        <p class="font-bold text-xl leading-[30px]">Teamwork and Solidarity</p>
        <hr class="border-[#E8EAF2]">
        <p class="text-cp-light-grey">Bandung, 2023</p>
      </div>
    </div>
  </div> --}}
  <footer class="bg-cp-black w-full relative overflow-hidden mt-20">
    <div class="container max-w-[1130px] mx-auto flex flex-wrap gap-y-4 items-center justify-between pt-[100px] pb-[220px] relative z-10">
      <div class="flex flex-col gap-10">
        <div class="flex items-center gap-3">
          <div class="flex shrink-0 h-[43px] overflow-hidden">
              <img src="assets/logo/logo-krw.png" class="object-contain w-full h-full" alt="logo">
          </div>
          <div class="flex flex-col">
            <p id="CompanyName" class="font-extrabold text-xl leading-[30px] text-white">Desa Cintawargi</p>
            <p id="CompanyTagline" class="text-sm text-cp-light-grey">Cintawargi Juara</p>
          </div>
        </div>
        <div class="flex items-center gap-4">
          <a href="">
            <div class="w-6 h-6 flex shrink-0 overflow-hidden">
              <img src="assets/icons/youtube.svg" class="w-full h-full object-contain" alt="youtube">
            </div>
          </a>
          <a href="">
            <div class="w-6 h-6 flex shrink-0 overflow-hidden">
              <img src="assets/icons/whatsapp.svg" class="w-full h-full object-contain" alt="whatsapp">
            </div>
          </a>
          <a href="">
            <div class="w-6 h-6 flex shrink-0 overflow-hidden">
              <img src="assets/icons/facebook.svg" class="w-full h-full object-contain" alt="facebook">
            </div>
          </a>
          <a href="">
            <div class="w-6 h-6 flex shrink-0 overflow-hidden">
              <img src="assets/icons/instagram.svg" class="w-full h-full object-contain" alt="instagram">
            </div>
          </a>
        </div>
      </div>
      <div class="flex flex-wrap gap-[50px]">
        <div class="flex flex-col w-[200px] gap-3">
          <p class="font-bold text-lg text-white">Products</p>
          <a href="{{route('front.index')}}" class="text-cp-light-grey hover:text-white transition-all duration-300">Home</a>
          <a href="{{route('front.team')}}" class="text-cp-light-grey hover:text-white transition-all duration-300">Struktur Organisasi</a>
          <a href="{{route('front.about')}}" class="text-cp-light-grey hover:text-white transition-all duration-300">Tentang</a>
          <a href="{{route('front.appointment')}}" class="text-cp-light-grey hover:text-white transition-all duration-300">Kontak</a>
        </div>
        <div class="flex flex-col w-[200px] gap-3">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.0484516300808!2d107.22791837413537!3d-6.515551863696358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69a13ca8651265%3A0x572c4f08c754606c!2sKantor%20Desa%20Cintawargi!5e0!3m2!1sid!2sid!4v1754120214526!5m2!1sid!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          {{-- <p class="font-bold text-lg text-white">About</p>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">We’re Hiring</a>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Our Big Purposes</a>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Investor Relations</a>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Media Press</a> --}}
        </div>
        <div class="flex flex-col w-[200px] gap-3">
          {{-- <p class="font-bold text-lg text-white">Useful Links</p>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Privacy & Policy</a>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Terms & Conditions</a>
          <a href="contact.html" class="text-cp-light-grey hover:text-white transition-all duration-300">Contact Us</a>
          <a href="" class="text-cp-light-grey hover:text-white transition-all duration-300">Download Template</a> --}}
        </div>
      </div>
    </div>
    <div class="absolute -bottom-[135px] w-full">
      <p class="font-extrabold text-[250px] leading-[375px] text-center text-white opacity-5">DECIWA</p>
    </div>
  </footer>

@endsection